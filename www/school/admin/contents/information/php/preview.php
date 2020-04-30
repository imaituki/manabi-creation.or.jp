<?php
//-------------------------------------------------------------------
// 作成日：2020/03/31
// 作成者：鈴木
// 内  容：お知らせ・イベント プレビュー
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";
require $_SERVER["DOCUMENT_ROOT"] . "/../cgi-data/config/front.ini";


//----------------------------------------
//  データ整理
//----------------------------------------
// 日付
$arr_post["date"] = date( "Y-m-d H:i:s", mktime(  0,  0,  0, $arr_post["date"]["Month"], $arr_post["date"]["Day"], $arr_post["date"]["Year"] ) );

// タグ許可
$arr_post["comment"] = html_entity_decode( $arr_post["comment"] );

// 設定
$t_school_information = $arr_post;


//----------------------------------------
//  表示
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "information/";

// テンプレート設定
$smarty->assign( "t_school_information", $t_school_information );

// 表示
$html = $smarty->fetch( _PREVIEW_TPL, "", _CONTENTS_DIR . "_preview" );

echo $html;
?>