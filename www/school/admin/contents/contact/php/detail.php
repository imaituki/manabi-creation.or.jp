<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：お問い合わせ 編集
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
$objContact = new SC_contact( $objManage );

// データ取得
$_POST = $objContact->GetIdRow( $_COOKIE["sc_id_school"], $arr_get["id"] );

// クラス削除
unset( $objManage  );
unset( $objContact );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty( $_POST["id_school_contact"] ) ) {
	
	// smarty設定
	$smarty = new MySmarty("admin_school");
	$smarty->compile_dir .= "contact/";
	
	// オプション配列
	$smarty->assign( "OptionContactType"      , $OptionContactType       );
	$smarty->assign( "OptionContactSchoolYear", $OptionContactSchoolYear );
	$smarty->assign( "OptionContactZoom"      , $OptionContactZoom       );
	
	// 表示
	$smarty->display( "detail.tpl" );
	
} else {
	
	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ng"] = "データの取得に失敗しました。<br />";
	
	// 表示
	header( "Location: ./index.php" );
	
}
?>
