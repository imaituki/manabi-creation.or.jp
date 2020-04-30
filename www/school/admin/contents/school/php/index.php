<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：学校（情報） 一覧表示
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
$objSchool = new SC_school( $objManage, $_ARR_IMAGE );

// データ取得
$mst_school = $objSchool->GetIdRow( $_COOKIE["sc_id_school"] );
$mst_school["curriculum"]["id"] = $objSchool->GetRelCurriculumIds( $mst_school["id_school"] );

// タグ許可
$mst_school["map"] = html_entity_decode( $mst_school["map"] );

// クラス削除
unset( $objManage );
unset( $objSchool );


//----------------------------------------
// 表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin_school");
$smarty->compile_dir .= "school/";

// テンプレートに設定
$smarty->assign( "message"   , $message    );
$smarty->assign( "mst_school", $mst_school );
$smarty->assign( "_ARR_IMAGE", $_ARR_IMAGE );

// 表示
$smarty->display("index.tpl");
?>
