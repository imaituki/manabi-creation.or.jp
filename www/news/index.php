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
$objManage       = new DB_manage( _DNS );
$objInformation  = new FT_information( $objManage );

// お知らせ
// ページ切り替え配列
$_PAGE_INFO = array(
	"PageNumber"      => empty( $arr_get["page"] ) ? 1 : $arr_get["page"],
	"PageShowLimit"   => _PAGESHOWLIMIT,
	"PageNaviLimit"   => _PAGENAVILIMIT,
	"LinkSeparator"   => " ",
	"LinkBackText"    => "<i class=\"fas fa-chevron-left\"></i>",
	"LinkNextText"    => "<i class=\"fas fa-chevron-right\"></i>",
	"LinkBackClass"   => "next",
	"LinkNextClass"   => "back",
	"LinkSpanPref"    => "<li>",
	"LinkSpanPost"    => "</li>",
	"LinkSpanNowPref" => "<strong>",
	"LinkSpanNowPost" => "</strong>",
);
// オプション
$option = array( "fetch" => _DB_FETCH_ALL, "page"  => $_PAGE_INFO );
$t_information = $objInformation->GetSearchList( $arr_get, $option );

// DB切断
unset( $objManage       );
unset( $objInformation  );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->template_dir = "./";
$smarty->compile_dir .= "information/";

// テンプレートに設定
$smarty->assign( "t_information", $t_information );

$smarty->assign( "OptionInformationCategory" , array(
	"1" => "お知らせ",
	"2" => "イベント",
) );
// 表示
$smarty->display("index.tpl");
?>