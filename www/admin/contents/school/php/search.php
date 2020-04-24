<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：学校（契約） 検索
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  SESSION設定
//----------------------------------------
$_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"] = $arr_post;


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objSchool = new AD_school( $objManage, $_ARR_IMAGE );

// データ取得
$mst_school = $objSchool->GetSearchList( $arr_post );

// クラス削除
unset( $objManage );
unset( $objSchool );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= "school/";

// テンプレートに設定
$smarty->assign( "page_navi" , $mst_school["page"] );
$smarty->assign( "mst_school", $mst_school["data"] );
$smarty->assign( "_ARR_IMAGE", $_ARR_IMAGE         );

// 表示
$smarty->display("list.tpl");
?>
