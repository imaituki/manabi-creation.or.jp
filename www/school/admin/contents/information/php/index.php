<?php
//-------------------------------------------------------------------
// 作成日：2020/03/31
// 作成者：鈴木
// 内  容：お知らせ・イベント 一覧表示
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  メッセージ取得
//----------------------------------------
// 取得
$message = ( isset( $_SESSION["school"]["admin"][_CONTENTS_DIR]["message"] ) ) ? $_SESSION["school"]["admin"][_CONTENTS_DIR]["message"] : null;

// クリア
unset( $_SESSION["school"]["admin"][_CONTENTS_DIR]["message"] );


//----------------------------------------
//  SESSION取得
//----------------------------------------
$arr_post = ( isset( $_SESSION["school"]["admin"][_CONTENTS_DIR]["search"]["POST"] ) ) ? $_SESSION["school"]["admin"][_CONTENTS_DIR]["search"]["POST"] : null;


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objInformation = new SC_information( $objManage, $_ARR_IMAGE );

// データ取得
$t_school_information = $objInformation->GetSearchList( $_COOKIE["sc_id_school"], $arr_post );

// クラス削除
unset( $objManage );
unset( $objInformation );


//----------------------------------------
// 表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin_school");
$smarty->compile_dir .= "information/";

// テンプレートに設定
$smarty->assign( "message"             , $message                      );
$smarty->assign( "page_navi"           , $t_school_information["page"] );
$smarty->assign( "t_school_information", $t_school_information["data"] );
$smarty->assign( "_ARR_IMAGE"          , $_ARR_IMAGE                   );

// 表示
$smarty->display("index.tpl");
?>
