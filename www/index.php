<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：鈴木
// 内  容：トップページ
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage       = new DB_manage( _DNS );
$objInformation  = new FT_information( $objManage );

// お知らせ
$t_information = $objInformation->GetSearchList( null, array( "fetch" => _DB_FETCH_ALL ), 10 );

// DB切断
unset( $objManage       );
unset( $objInformation  );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->template_dir = "./";
$smarty->compile_dir .= "";

// テンプレートに設定
$smarty->assign( "t_information", $t_information );

// 表示
$smarty->display("index.tpl");
?>