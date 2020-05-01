<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：鈴木
// 内  容：アクセス
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config_list.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objSchool = new FT_school( $objManage );

// 学校
$tmp_school = $objSchool->GetHpDisplayList( $arr_get, array( "fetch" => _DB_FETCH_ALL ) );

// エリア別に振り分け
if( is_array( $tmp_school ) ) {
	foreach( $tmp_school as $key => $val ) {
		$mst_school[$val["id_area"]][]  = $val;
	}
}

// 不要エリア削除
if( is_array( $OptionArea ) ) {
	foreach( $OptionArea as $key => $val ) {
		if( empty( $mst_school[$key] ) ) {
			unset( $OptionArea[$key] );
		}
	}
}

// DB切断
unset( $objManage );
unset( $objSchool );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->template_dir = "./";
$smarty->compile_dir .= "school/";

// テンプレートに設定
$smarty->assign( "mst_school", $mst_school );

// 表示
$smarty->display("list.tpl");
?>