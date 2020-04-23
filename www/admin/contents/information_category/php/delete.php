<?php
//-------------------------------------------------------------------
// 作成日：2020/03/31
// 作成者：鈴木
// 内  容：新着情報カテゴリ 一括削除
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  削除処理
//----------------------------------------
// 操作クラス
$objManage              = new DB_manage( _DNS );
$objInformationCategory = new AD_information_category( $objManage );

// トランザクション
$objInformationCategory->_DBconn->StartTrans();

// 削除
$res = $objInformationCategory->delete( $arr_post["id"] );

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
	echo json_encode( array( "result" => "false", "message" => "削除するデータを選択してください。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "削除完了しました。<br />" ) );
}
?>
