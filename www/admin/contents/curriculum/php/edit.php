<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：カリキュラム 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  編集データ取得
//----------------------------------------
// 操作クラス
$objManage     = new DB_manage( _DNS );
$objCurriculum = new AD_curriculum( $objManage, $_ARR_IMAGE );

// データ取得
$_POST = $objCurriculum->GetIdRow( $arr_get["id"] );

// クラス削除
unset( $objManage     );
unset( $objCurriculum );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty( $_POST["id_curriculum"] ) ) {
	
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "curriculum/";
	
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
