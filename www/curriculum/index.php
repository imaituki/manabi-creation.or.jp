<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：鈴木
// 内  容：カリキュラム
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage     = new DB_manage( _DNS );
$objCurriculum = new FT_curriculum( $objManage );

// カリキュラム
$mst_curriculum = $objCurriculum->GetSearchList( $arr_get, array( "fetch" => _DB_FETCH_ALL ) );

// タグ許可
if( is_array( $mst_curriculum ) ) {
	foreach( $mst_curriculum as $key => $val ) {
		$mst_curriculum[$key]["comment"] = html_entity_decode( $val["comment"] );
	}
}

// DB切断
unset( $objManage     );
unset( $objCurriculum );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->template_dir = "./";
$smarty->compile_dir .= "curriculum/";

// テンプレートに設定
$smarty->assign( "mst_curriculum", $mst_curriculum );

// 表示
$smarty->display("index.tpl");
?>
