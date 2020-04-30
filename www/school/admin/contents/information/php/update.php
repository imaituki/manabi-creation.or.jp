<?php
//-------------------------------------------------------------------
// 作成日：2020/03/31
// 作成者：鈴木
// 内  容：お知らせ・イベント 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  更新処理
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objInformation = new SC_information( $objManage, $_ARR_IMAGE );

// 学校ID設定
$arr_post["id_school"] = $_COOKIE["sc_id_school"];

// データ変換
$arr_post = $objInformation->convert( $arr_post );

// データチェック
$message = $objInformation->check( $arr_post, 'update' );

// エラーチェック
if( empty( $message["ng"] ) ) {
	
	// トランザクション
	$objInformation->_DBconn->StartTrans();
	
	// 登録処理
	$res = $objInformation->update( $arr_post );
	
	// ロールバック
	if( $res == false ) {
		$objInformation->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}
	
	// コミット
	$objInformation->_DBconn->CompleteTrans();
	
}

// クラス削除
unset( $objManage );
unset( $objInformation   );

//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {
	
	// メッセージ保管
	$_SESSION["school"]["admin"][_CONTENTS_DIR]["message"]["ok"] = "更新が完了しました。<br />";
	
	// 表示
	header( "Location: ./index.php" );
	
} else {
	
	// データ加工
	$arr_post["display_start"] = date( "Y/m/d", strtotime( $arr_post["display_start"] ) );
	$arr_post["display_end"]   = date( "Y/m/d", strtotime( $arr_post["display_end"]   ) );
	
	// 写真
	if( !empty($_ARR_IMAGE) && is_array($_ARR_IMAGE) ){
		foreach( $_ARR_IMAGE as $key => $val ) {
			$arr_post[$val["name"]] = $arr_post["_" . $val["name"]."_now"];
		}
	}
	
	// smarty設定
	$smarty = new MySmarty("admin_school");
	$smarty->compile_dir .= "information/";
	
	// テンプレートに設定
	$smarty->assign( "message"   , $message    );
	$smarty->assign( "arr_post"  , $arr_post   );
	$smarty->assign( "_ARR_IMAGE", $_ARR_IMAGE );
	
	// 表示
	$smarty->display( "edit.tpl" );
	
}
?>
