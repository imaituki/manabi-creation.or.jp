<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：学校別スタッフ 編集
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
$objStaff  = new SC_staff( $objManage );

// データ取得
$_POST = $objStaff->GetIdRow( $_COOKIE["sc_id_school"], $arr_get["id"] );

// クラス削除
unset( $objManage );
unset( $objStaff  );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty( $_POST["id_school_staff"] ) ) {
	
	// 複合化
	$_POST["password"] = fn_decrypt( $_POST["password"], _SCHOOLCRYPTKEY );
	
	// smarty設定
	$smarty = new MySmarty("admin_school");
	$smarty->compile_dir .= "school/staff/";
	
	// 表示
	$smarty->display( "edit.tpl" );
	
} else {
	
	// メッセージ保管
	$_SESSION["school"]["admin"][_CONTENTS_DIR]["message"]["ng"] = "データの取得に失敗しました。<br />";
	
	// 表示
	header( "Location: ./index.php" );
	
}
?>
