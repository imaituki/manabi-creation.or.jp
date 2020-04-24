<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：カリキュラム ソート
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ソート処理
//----------------------------------------
// 操作クラス
$objManage     = new DB_manage( _DNS );
$objCurriculum = new AD_curriculum( $objManage, $_ARR_IMAGE );

// トランザクション
$objCurriculum->_DBconn->StartTrans();

// ソート
$res = $objCurriculum->sort( $arr_post["sort"], "id_curriculum" );

// ロールバック
if( $res == false ) {
	$objCurriculum->_DBconn->RollbackTrans();
}

// コミット
$objCurriculum->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage     );
unset( $objCurriculum );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "並び順の変更に失敗しました。（F5ボタンを押して一度ページを更新してください）<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "並び順の変更が完了しました。<br />" ) );
}
?>