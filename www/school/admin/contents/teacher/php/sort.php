<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師 ソート
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ソート処理
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objTeacher = new SC_teacher( $objManage );

// トランザクション
$objTeacher->_DBconn->StartTrans();

// ソート
$res = $objTeacher->sort( $_COOKIE["sc_id_school"], $arr_post["sort"], "id_teacher" );

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
	echo json_encode( array( "result" => "false", "message" => "並び順の変更に失敗しました。（F5ボタンを押して一度ページを更新してください）<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "並び順の変更が完了しました。<br />" ) );
}
?>