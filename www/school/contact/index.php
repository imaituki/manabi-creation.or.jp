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
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front_school");
$smarty->template_dir = "./";
$smarty->compile_dir .= "school/contact/";

// オプション配列
$smarty->assign( "OptionContactType"      , $OptionContactType       );
$smarty->assign( "OptionContactSchoolYear", $OptionContactSchoolYear );
$smarty->assign( "OptionContactZoom"      , $OptionContactZoom       );

// 表示
$smarty->display("index.tpl");
?>