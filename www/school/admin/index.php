<?php
//-------------------------------------------------------------------
// 作成日：2020/04/01
// 作成者：鈴木
// 内  容：管理TOP表示
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  メッセージ取得
//----------------------------------------
$message = $_SESSION["school"]["admin"]["message"];
unset( $_SESSION["school"]["admin"]["message"] );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("admin_school");
$smarty->template_dir = "./";
$smarty->compile_dir .= "";

// テンプレートに設定
$smarty->assign( "message", $messge );

// 表示
if( !empty( $_COOKIE["sc_id_school_staff"] ) && $_COOKIE["sc_ssid"] == session_id() ) {
	$smarty->display("index.tpl");
} else {
	$smarty->display("login.tpl");
}
?>
