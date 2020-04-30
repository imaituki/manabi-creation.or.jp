<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：学校（契約） 新規登録
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  初期化
//----------------------------------------
$message = NULL;


//----------------------------------------
//  新規登録処理
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objSchool = new AD_school( $objManage, $_ARR_IMAGE );

// データ変換
$arr_post = $objSchool->convert( $arr_post );

// データチェック
$message = $objSchool->check( $arr_post, 'insert' );

// エラーチェック
if( empty( $message["ng"] ) ) {
	
	// トランザクション
	$objSchool->_DBconn->StartTrans();
	
	// 登録用データ
	$insSchool      = $arr_post;
	$insSchoolStaff = $insSchool["staff"];
	$insCurriculum  = $insSchool["curriculum"];
	unset( $insSchool["staff"], $insSchool["curriculum"] );
	
	// 登録処理
	$res = $objSchool->insert( $insSchool );
	
	// ロールバック
	if( $res == false ) {
		$objSchool->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	} else {
		
		// 取り扱いカリキュラム登録
		$res = $objSchool->relCurriculum( $arr_post["id_school"], $insCurriculum["id"] );
		
		// 学校ID取得
		$insSchoolStaff["id_school"] = $objSchool->GetInsertId();
		$insSchoolStaff["name"]      = $insSchool["name"];
		
		// 学校別 総合アカウント登録処理
		$res = $objSchool->school_staff_insert( $insSchoolStaff );
		
		// ロールバック
		if( $res == false ) {
			$objSchool->_DBconn->RollbackTrans();
			$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
		}
	}
	
	// コミット
	$objSchool->_DBconn->CompleteTrans();
	
}

// クラス削除
unset( $objManage );
unset( $objSchool );


//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {
	
	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "登録が完了しました。<br />";
	
	// 表示
	header( "Location: ./index.php" );
	
} else {
	
	// 写真
	if( !empty($_ARR_IMAGE) && is_array($_ARR_IMAGE) ){
		foreach( $_ARR_IMAGE as $key => $val ) {
			$arr_post[$val["name"]] = $arr_post["_" . $val["name"]."_now"];
		}
	}
	
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "school/";
	
	// テンプレートに設定
	$smarty->assign( "message"   , $message    );
	$smarty->assign( "arr_post"  , $arr_post   );
	$smarty->assign( "_ARR_IMAGE", $_ARR_IMAGE );
	
	// 表示
	$smarty->display( "new.tpl" );
	
}
?>
