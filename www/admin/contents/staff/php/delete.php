<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：総合スタッフ 一括削除
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  削除処理
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objStaff  = new AD_staff( $objManage );

// トランザクション
$objStaff->_DBconn->StartTrans();

// 削除
$res = $objStaff->delete( $arr_post["id"] );

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
	echo json_encode( array( "result" => "false", "message" => "削除するデータを選択してください。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "削除完了しました。<br />" ) );
}
?>
