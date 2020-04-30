<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：学校別スタッフ 一覧表示
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
$objManage = new DB_manage( _DNS );
$objStaff  = new SC_staff( $objManage );

// データ取得
$mst_staff = $objStaff->GetSearchList( $_COOKIE["sc_id_school"], $arr_post );

// クラス削除
unset( $objManage );
unset( $objStaff  );


//----------------------------------------
// 表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin_school");
$smarty->compile_dir .= "school/staff/";

// テンプレートに設定
$smarty->assign( "message"  , $message           );
$smarty->assign( "page_navi", $mst_staff["page"] );
$smarty->assign( "mst_staff", $mst_staff["data"] );

// 表示
$smarty->display("index.tpl");
?>
