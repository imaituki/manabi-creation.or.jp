<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：総合スタッフ 一括表示切替
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  表示切替
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objStaff  = new AD_staff( $objManage );

// トランザクション
$objStaff->_DBconn->StartTrans();

// 表示切り替え
$res = $objStaff->changeValid( $arr_post["id"], $arr_post["valid_flg"] );

// ロールバック
if( $res == false ) {
	$objStaff->_DBconn->RollbackTrans();
}

// コミット
$objStaff->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage );
unset( $objStaff  );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "有効／無効の切り替えに失敗しました。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "有効／無効の切り替え完了しました。<br />" ) );
}
?>
