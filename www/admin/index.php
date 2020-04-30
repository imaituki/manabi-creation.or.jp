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
$message = $_SESSION["admin"]["message"];
unset( $_SESSION["admin"]["message"] );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("admin");
$smarty->template_dir = "./";
$smarty->compile_dir .= "";

// テンプレートに設定
$smarty->assign( "message", $messge );

// 表示
if( !empty( $_COOKIE["ad_id_master_staff"] ) && $_COOKIE["ad_ssid"] == session_id() ) {
	$smarty->display("index.tpl");
} else {
	$smarty->display("login.tpl");
}
?>
