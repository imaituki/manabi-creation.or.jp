<?php
//-------------------------------------------------------------------
// 作成日：2020/03/31
// 作成者：鈴木
// 内  容：新着情報カテゴリ 検索
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
$objManage              = new DB_manage( _DNS );
$objInformationCategory = new AD_information_category( $objManage );

// データ取得
$mst_information_category = $objInformationCategory->GetSearchList( $arr_post );

// クラス削除
unset( $objManage              );
unset( $objInformationCategory );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= "information_category/";

// テンプレートに設定
$smarty->assign( "page_navi"               , $mst_information_category["page"] );
$smarty->assign( "mst_information_category", $mst_information_category["data"] );

// 表示
$smarty->display("list.tpl");
?>
