<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師の役割 ソート
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
$objTeacherRole = new SC_teacher_role( $objManage );

// トランザクション
$objTeacherRole->_DBconn->StartTrans();

// ソート
$res = $objTeacherRole->sort( $_COOKIE["sc_id_school"], $arr_post["sort"], "id_teacher_role" );

// ロールバック
if( $res == false ) {
	$objTeacherRole->_DBconn->RollbackTrans();
}

// コミット
$objTeacherRole->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage      );
unset( $objTeacherRole );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "並び順の変更に失敗しました。（F5ボタンを押して一度ページを更新してください）<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "並び順の変更が完了しました。<br />" ) );
}
?>