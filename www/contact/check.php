<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：鈴木
// 内  容：アクセス
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objContact  = new FT_contact( $objManage );

// チェック
$message = $objContact->check( $arr_post );

// DB切断
unset( $objManage  );
unset( $objContact );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->template_dir = "./";
$smarty->compile_dir .= "contact/";

// テンプレートに設定
$smarty->assign( "message", $message );

// オプション配列
$smarty->assign( "OptionContactType"      , $OptionContactType       );
$smarty->assign( "OptionContactSchoolYear", $OptionContactSchoolYear );
$smarty->assign( "OptionContactZoom"      , $OptionContactZoom       );

// 表示
if( empty( $message["ng"] ) ) {
	$smarty->display("check.tpl");
} else {
	$smarty->display("index.tpl");
}
?>