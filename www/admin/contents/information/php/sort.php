<?php
//-------------------------------------------------------------------
// 作成日：2020/03/31
// 作成者：鈴木
// 内  容：お知らせ・イベント ソート
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ソート処理
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objInformation = new AD_information( $objManage, $_ARR_IMAGE );

// トランザクション
$objInformation->_DBconn->StartTrans();

// ソート
$res = $objInformation->sort( $arr_post["sort"], "id_information" );

// ロールバック
if( $res == false ) {
	$objInformation->_DBconn->RollbackTrans();
}

// コミット
$objInformation->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage );
unset( $objInformation );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "並び順の変更に失敗しました。（F5ボタンを押して一度ページを更新してください）<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "並び順の変更が完了しました。<br />" ) );
}
?>