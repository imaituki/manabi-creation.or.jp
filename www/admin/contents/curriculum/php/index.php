<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：カリキュラム 一覧表示
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
$objManage     = new DB_manage( _DNS );
$objCurriculum = new AD_curriculum( $objManage, $_ARR_IMAGE );

// データ取得
$mst_curriculum = $objCurriculum->GetSearchList( $arr_post );

// クラス削除
unset( $objManage     );
unset( $objCurriculum );


//----------------------------------------
// 表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= "curriculum/";

// テンプレートに設定
$smarty->assign( "message"       , $message                );
$smarty->assign( "page_navi"     , $mst_curriculum["page"] );
$smarty->assign( "mst_curriculum", $mst_curriculum["data"] );
$smarty->assign( "_ARR_IMAGE"    , $_ARR_IMAGE             );


// 表示
$smarty->display("index.tpl");
?>
