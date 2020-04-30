<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師の役割 検索
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  SESSION設定
//----------------------------------------
$_SESSION["school"]["admin"][_CONTENTS_DIR]["search"]["POST"] = $arr_post;


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objTeacherRole = new SC_teacher_role( $objManage );

// データ取得
$mst_teacher_role = $objTeacherRole->GetSearchList( $_COOKIE["sc_id_school"], $arr_post );

// クラス削除
unset( $objManage      );
unset( $objTeacherRole );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin_school");
$smarty->compile_dir .= "teacher_role/";

// テンプレートに設定
$smarty->assign( "page_navi"       , $mst_teacher_role["page"] );
$smarty->assign( "mst_teacher_role", $mst_teacher_role["data"] );

// 表示
$smarty->display("list.tpl");
?>
