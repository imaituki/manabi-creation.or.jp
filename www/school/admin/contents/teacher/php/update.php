<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  更新処理
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objTeacher = new SC_teacher( $objManage, $_ARR_IMAGE );

// 学校ID設定
$arr_post["id_school"] = $_COOKIE["sc_id_school"];

// データ変換
$arr_post = $objTeacher->convert( $arr_post );

// データチェック
$message = $objTeacher->check( $arr_post, 'update' );

// エラーチェック
if( empty( $message["ng"] ) ) {

	// トランザクション
	$objTeacher->_DBconn->StartTrans();

	// 登録処理
	$res = $objTeacher->update( $arr_post );

	// ロールバック
	if( $res == false ) {
		$objTeacher->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$objTeacher->_DBconn->CompleteTrans();
	
}

// クラス削除
unset( $objManage  );
unset( $objTeacher );


//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {

	// メッセージ保管
	$_SESSION["school"]["admin"][_CONTENTS_DIR]["message"]["ok"] = "更新が完了しました。<br />";

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
	$smarty = new MySmarty("admin_school");
	$smarty->compile_dir .= "teacher/";

	// テンプレートに設定
	$smarty->assign( "message"   , $message    );
	$smarty->assign( "arr_post"  , $arr_post   );
	$smarty->assign( "_ARR_IMAGE", $_ARR_IMAGE );
	
	// オプション配列
	$smarty->assign( "OptionSex", $OptionSex );
	
	// 表示
	$smarty->display( "edit.tpl" );
	
}
?>
