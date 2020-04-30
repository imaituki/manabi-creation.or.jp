<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：新着情報カテゴリ 一括表示切替
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  表示切替
//----------------------------------------
// 操作クラス
$objManage              = new DB_manage( _DNS );
$objInformationCategory = new AD_information_category( $objManage );

// トランザクション
$objInformationCategory->_DBconn->StartTrans();

// 表示切り替え
$res = $objInformationCategory->changeDisplay( $arr_post["id"], $arr_post["display_flg"] );

// ロールバック
if( $res == false ) {
	$objInformationCategory->_DBconn->RollbackTrans();
}

// コミット
$objInformationCategory->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage              );
unset( $objInformationCategory );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "表示切り替えに失敗しました。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "表示切り替え完了しました。<br />" ) );
}
?>
