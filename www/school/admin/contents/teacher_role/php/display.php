<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師の役割 一括表示切替
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  表示切替
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objTeacherRole = new SC_teacher_role( $objManage );

// トランザクション
$objTeacherRole->_DBconn->StartTrans();

// 表示切り替え
$res = $objTeacherRole->changeDisplay( $_COOKIE["sc_id_school"], $arr_post["id"], $arr_post["display_flg"] );

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
	echo json_encode( array( "result" => "false", "message" => "表示切り替えに失敗しました。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "表示切り替え完了しました。<br />" ) );
}
?>
