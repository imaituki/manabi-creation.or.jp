<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師 一括削除
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  削除処理
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objTeacher = new SC_teacher( $objManage, $_ARR_IMAGE );

// トランザクション
$objTeacher->_DBconn->StartTrans();

// 削除
$res = $objTeacher->delete( $_COOKIE["sc_id_school"], $arr_post["id"] );

// ロールバック
if( $res == false ) {
	$objTeacher->_DBconn->RollbackTrans();
}

// コミット
$objTeacher->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage  );
unset( $objTeacher );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "削除するデータを選択してください。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "削除完了しました。<br />" ) );
}
?>
