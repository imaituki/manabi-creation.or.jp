<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師の役割 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  更新処理
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objTeacherRole = new SC_teacher_role( $objManage );

// 学校ID設定
$arr_post["id_school"] = $_COOKIE["sc_id_school"];

// データ変換
$arr_post = $objTeacherRole->convert( $arr_post );

// データチェック
$message = $objTeacherRole->check( $arr_post, 'update' );

// エラーチェック
if( empty( $message["ng"] ) ) {

	// トランザクション
	$objTeacherRole->_DBconn->StartTrans();

	// 登録処理
	$res = $objTeacherRole->update( $arr_post );

	// ロールバック
	if( $res == false ) {
		$objTeacherRole->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$objTeacherRole->_DBconn->CompleteTrans();
	
}

// クラス削除
unset( $objManage      );
unset( $objTeacherRole );


//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {

	// メッセージ保管
	$_SESSION["school"]["admin"][_CONTENTS_DIR]["message"]["ok"] = "更新が完了しました。<br />";

	// 表示
	header( "Location: ./index.php" );

} else {

	// smarty設定
	$smarty = new MySmarty("admin_school");
	$smarty->compile_dir .= "teacher_role/";

	// テンプレートに設定
	$smarty->assign( "message" , $message  );
	$smarty->assign( "arr_post", $arr_post );
	
	// 表示
	$smarty->display( "edit.tpl" );
	
}
?>
