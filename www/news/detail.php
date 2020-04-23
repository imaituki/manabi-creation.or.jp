<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：鈴木
// 内  容：お知らせ 詳細
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
if( !empty( $arr_get["id"] ) && is_numeric( $arr_get["id"] ) ) {
	
	// 操作クラス
	$objManage       = new DB_manage( _DNS );
	$objInformation  = new FT_information( $objManage );
	
	// お知らせ
	$t_information = $objInformation->GetIdRow( $arr_get["id"] );
	
	// DB切断
	unset( $objManage       );
	unset( $objInformation  );
	
}


//----------------------------------------
//  smarty設定
//----------------------------------------
if( !empty( $t_information["id_information"] ) ) {
	
	// Smarty設定
	$smarty = new MySmarty("front");
	$smarty->template_dir = "./";
	$smarty->compile_dir .= "information/";
	
	// テンプレートに設定
	$smarty->assign( "t_information", $t_information );
	
	// 表示
	$smarty->display("detail.tpl");
	
} else {
	
	// 表示
	header( "Location: ./" );
	
}
?>