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
	$objInformation  = new FS_information( $objManage );
	
	// お知らせ
	$t_school_information = $objInformation->GetIdRow( $displaySchool["id_school"], $arr_get["id"] );
	
	// DB切断
	unset( $objManage       );
	unset( $objInformation  );
	
}


//----------------------------------------
//  smarty設定
//----------------------------------------
if( !empty( $t_school_information["id_school_information"] ) ) {
	
	// Smarty設定
	$smarty = new MySmarty("front_school");
	$smarty->template_dir = "./";
	$smarty->compile_dir .= "school/news/";
	
	// テンプレートに設定
	$smarty->assign( "t_school_information", $t_school_information );
	
	// 表示
	$smarty->display("detail.tpl");
	
} else {
	
	// 表示
	header( "Location: ./?sc=" . $displaySchool["id_school"] );
	
}
?>
