<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：学校（契約） 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  編集データ取得
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objSchool = new AD_school( $objManage, $_ARR_IMAGE );

// データ取得
$_POST = $objSchool->GetIdRow( $arr_get["id"] );

// クラス削除
unset( $objManage );
unset( $objSchool );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty( $_POST["id_school"] ) ) {
	
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "school/";
	
	// テンプレートに設定
	$smarty->assign( "_ARR_IMAGE", $_ARR_IMAGE );
	
	// 表示
	$smarty->display( "edit.tpl" );
	
} else {
	
	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ng"] = "データの取得に失敗しました。<br />";
	
	// 表示
	header( "Location: ./index.php" );
	
}
?>
