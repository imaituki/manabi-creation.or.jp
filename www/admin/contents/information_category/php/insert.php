<?php
//-------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：新着情報カテゴリ 新規登録
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  初期化
//----------------------------------------
$message = NULL;


//----------------------------------------
//  新規登録処理
//----------------------------------------
// 操作クラス
$objManage              = new DB_manage( _DNS );
$objInformationCategory = new AD_information_category( $objManage );

// データ変換
$arr_post = $objInformationCategory->convert( $arr_post );

// データチェック
$message = $objInformationCategory->check( $arr_post, 'insert' );

// エラーチェック
if( empty( $message["ng"] ) ) {
	
	// トランザクション
	$objInformationCategory->_DBconn->StartTrans();
	
	// 登録処理
	$res = $objInformationCategory->insert( $arr_post );
	
	// ロールバック
	if( $res == false ) {
		$objInformationCategory->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}
	
	// コミット
	$objInformationCategory->_DBconn->CompleteTrans();
	
}

// クラス削除
unset( $objManage              );
unset( $objInformationCategory );


//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {
	
	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "登録が完了しました。<br />";
	
	// 表示
	header( "Location: ./index.php" );
	
} else {
	
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "information_category/";
	
	// テンプレートに設定
	$smarty->assign( "message" , $message  );
	$smarty->assign( "arr_post", $arr_post );
	
	// 表示
	$smarty->display( "new.tpl" );
	
}
?>
