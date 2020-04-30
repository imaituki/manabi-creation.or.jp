<?php
//-------------------------------------------------------------------
// 作成日：2020/03/31
// 作成者：鈴木
// 内  容：お知らせ・イベント 一括削除
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  削除処理
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objInformation = new SC_information( $objManage, $_ARR_IMAGE );

// トランザクション
$objInformation->_DBconn->StartTrans();

// 削除
$res = $objInformation->delete( $_COOKIE["sc_id_school"], $arr_post["id"] );

// ロールバック
if( $res == false ) {
	$objInformation->_DBconn->RollbackTrans();
}

// コミット
$objInformation->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage      );
unset( $objInformation );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "削除するデータを選択してください。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "削除完了しました。<br />" ) );
}

?>
