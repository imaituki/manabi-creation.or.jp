<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：学校（契約） 一括削除
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
$objSchool = new AD_school( $objManage, $_ARR_IMAGE );

// トランザクション
$objSchool->_DBconn->StartTrans();

// 削除
$res = $objSchool->delete( $arr_post["id"] );

// ロールバック
if( $res == false ) {
	$objSchool->_DBconn->RollbackTrans();
}

// コミット
$objSchool->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage );
unset( $objSchool );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "削除するデータを選択してください。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "削除完了しました。<br />" ) );
}
?>
