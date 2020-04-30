<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：鈴木
// 内  容：講師
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objTeacher = new FS_teacher( $objManage );

// 取り扱いカリキュラム
$tmp_teacher = $objTeacher->GetSearchList( $displaySchool["id_school"], $arr_get, array( "fetch" => _DB_FETCH_ALL ) );

// 役割別に整理
if( is_array( $tmp_teacher ) ) {
	foreach( $tmp_teacher as $key => $val ) {
		$mst_teacher[$val["id_teacher_role"]][] = $val;
	}
}

// DB切断
unset( $objManage  );
unset( $objTeacher );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front_school");
$smarty->template_dir = "./";
$smarty->compile_dir .= "school/teacher/";

// テンプレートに設定
$smarty->assign( "mst_teacher", $mst_teacher );

// 表示
$smarty->display("index.tpl");
?>
