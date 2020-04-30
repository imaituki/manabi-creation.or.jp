<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：鈴木
// 内  容：お知らせ
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objInformation = new FS_information( $objManage );

// お知らせ
$t_school_information = $objInformation->GetSearchList( $displaySchool["id_school"], $arr_get );

// DB切断
unset( $objManage      );
unset( $objInformation );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front_school");
$smarty->template_dir = "./";
$smarty->compile_dir .= "school/news/";

// テンプレートに設定
$smarty->assign( "page_navi"           , $t_school_information["page"] );
$smarty->assign( "t_school_information", $t_school_information["data"] );

// 表示
$smarty->display("index.tpl");
?>
