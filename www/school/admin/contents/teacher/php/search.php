<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師 検索
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
$objManage  = new DB_manage( _DNS );
$objTeacher = new SC_teacher( $objManage, $_ARR_IMAGE );

// データ取得
$mst_teacher = $objTeacher->GetSearchList( $_COOKIE["sc_id_school"], $arr_post );

// クラス削除
unset( $objManage  );
unset( $objTeacher );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin_school");
$smarty->compile_dir .= "teacher/";

// テンプレートに設定
$smarty->assign( "page_navi"  , $mst_teacher["page"] );
$smarty->assign( "mst_teacher", $mst_teacher["data"] );
$smarty->assign( "_ARR_IMAGE" , $_ARR_IMAGE          );

// オプション配列
$smarty->assign( "OptionSex", $OptionSex );

// 表示
$smarty->display("list.tpl");
?>
