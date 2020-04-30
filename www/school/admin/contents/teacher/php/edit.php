<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  編集データ取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objTeacher = new SC_teacher( $objManage, $_ARR_IMAGE );

// データ取得
$_POST = $objTeacher->GetIdRow( $_COOKIE["sc_id_school"], $arr_get["id"] );

// クラス削除
unset( $objManage  );
unset( $objTeacher );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty( $_POST["id_teacher"] ) ) {
	
	// smarty設定
	$smarty = new MySmarty("admin_school");
	$smarty->compile_dir .= "teacher/";
	
	// テンプレートに設定
	$smarty->assign( "_ARR_IMAGE", $_ARR_IMAGE );
	
	// オプション配列
	$smarty->assign( "OptionSex", $OptionSex );
	
	// 表示
	$smarty->display( "edit.tpl" );
	
} else {
	
	// メッセージ保管
	$_SESSION["school"]["admin"][_CONTENTS_DIR]["message"]["ng"] = "データの取得に失敗しました。<br />";
	
	// 表示
	header( "Location: ./index.php" );
	
}
?>
