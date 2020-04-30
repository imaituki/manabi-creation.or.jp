<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：お問い合わせ 一覧表示
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  メッセージ取得
//----------------------------------------
// 取得
$message = ( isset( $_SESSION["admin"][_CONTENTS_DIR]["message"] ) ) ? $_SESSION["admin"][_CONTENTS_DIR]["message"] : null;

// クリア
unset( $_SESSION["admin"][_CONTENTS_DIR]["message"] );


//----------------------------------------
//  SESSION取得
//----------------------------------------
$arr_post = ( isset( $_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"] ) ) ? $_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"] : null;


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objContact = new SC_contact( $objManage );

// データ取得
$mst_contact = $objContact->GetSearchList( $_COOKIE["sc_id_school"], $arr_post );

// クラス削除
unset( $objManage  );
unset( $objContact );


//----------------------------------------
// 表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin_school");
$smarty->compile_dir .= "contact/";

// テンプレートに設定
$smarty->assign( "message"    , $message             );
$smarty->assign( "page_navi"  , $mst_contact["page"] );
$smarty->assign( "mst_contact", $mst_contact["data"] );

// オプション配列
$smarty->assign( "OptionContactType"      , $OptionContactType       );
$smarty->assign( "OptionContactSchoolYear", $OptionContactSchoolYear );
$smarty->assign( "OptionContactZoom"      , $OptionContactZoom       );

// 表示
$smarty->display("index.tpl");
?>
