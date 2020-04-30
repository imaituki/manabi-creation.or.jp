<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：総合スタッフ 編集
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
$objStaff  = new AD_staff( $objManage );

// データ取得
$_POST = $objStaff->GetIdRow( $arr_get["id"] );

// クラス削除
unset( $objManage );
unset( $objStaff  );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty( $_POST["id_master_staff"] ) ) {
	
	// 複合化
	$_POST["password"] = fn_decrypt( $_POST["password"], _ADMINCRYPTKEY );
	
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "staff/";
	
	// 表示
	$smarty->display( "edit.tpl" );
	
} else {
	
	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ng"] = "データの取得に失敗しました。<br />";
	
	// 表示
	header( "Location: ./index.php" );
	
}
?>
