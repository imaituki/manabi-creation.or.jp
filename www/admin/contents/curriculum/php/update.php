<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：カリキュラム 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  更新処理
//----------------------------------------
// 操作クラス
$objManage     = new DB_manage( _DNS );
$objCurriculum = new AD_curriculum( $objManage, $_ARR_IMAGE );

// データ変換
$arr_post = $objCurriculum->convert( $arr_post );

// データチェック
$message = $objCurriculum->check( $arr_post, 'update' );

// エラーチェック
if( empty( $message["ng"] ) ) {

	// トランザクション
	$objCurriculum->_DBconn->StartTrans();

	// 登録処理
	$res = $objCurriculum->update( $arr_post );

	// ロールバック
	if( $res == false ) {
		$objCurriculum->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$objCurriculum->_DBconn->CompleteTrans();
	
}

// クラス削除
unset( $objManage     );
unset( $objCurriculum );


//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "更新が完了しました。<br />";

	// 表示
	header( "Location: ./index.php" );

} else {

	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "curriculum/";

	// テンプレートに設定
	$smarty->assign( "message"   , $message    );
	$smarty->assign( "arr_post"  , $arr_post   );
	$smarty->assign( "_ARR_IMAGE", $_ARR_IMAGE );

	// 表示
	$smarty->display( "edit.tpl" );
	
}
?>
