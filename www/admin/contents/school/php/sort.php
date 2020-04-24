<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：学校（契約） ソート
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ソート処理
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objSchool = new AD_school( $objManage, $_ARR_IMAGE );

// トランザクション
$objSchool->_DBconn->StartTrans();

// ソート
$res = $objSchool->sort( $arr_post["sort"], "id_school" );

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
	echo json_encode( array( "result" => "false", "message" => "並び順の変更に失敗しました。（F5ボタンを押して一度ページを更新してください）<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "並び順の変更が完了しました。<br />" ) );
}
?>