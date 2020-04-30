<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：時岡
// 内  容：送信
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  初期化
//----------------------------------------
$message = NULL;


//----------------------------------------
//  学校チェック
//----------------------------------------
if( $arr_post["id_school"] != $displaySchool["id_school"] ) {
	header("Location: ./?sc=" . $displaySchool["id_school"]);
	exit;
}


//----------------------------------------
//  データチェック
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objContact  = new FS_contact( $objManage );

// データチェック
if( empty( $arr_post ) ) {
	$message["ng"] = "送信に失敗しました。<br />恐れ入りますが、再度最初から行ってください。";
} else {
	$message = $objContact->check( $arr_post );
}


//----------------------------------------
//  メール送信
//----------------------------------------
// エラーチェック
if( empty( $message["ng"] ) ) {
	
	//----------------------------------------
	//  メールデータ取得
	//----------------------------------------
	$objXml    = new FN_xml( $_ARR_MAIL["contact"]["savePath"] );
	$mail_conf = $objXml->GetDataXml( $objXml->GetArrayXml( null, true, null ) );
	
	
	//----------------------------------------
	//  データ加工
	//----------------------------------------
	// メールアドレス
	$arr_post["mail"] = mb_convert_kana( $arr_post["mail"], "a" );
	
	// 半角カナ
	$arr_post = mb_convert_kana_array( $arr_post, "KV" );
	
	// HTMLデコード
	$arr_post = html_entity_decode_array( $arr_post );
	
	
	//----------------------------------------
	//  文字コード設定
	//----------------------------------------
	// 言語設定
	mb_language("Japanese");
	
	// 内部エンコーディング
	mb_internal_encoding("UTF-8");
	
	
	//----------------------------------------
	//  メール生成
	//----------------------------------------
	// smarty設定
	$smarty = new MySmarty("front_school");
	$smarty->template_dir = "./";
	$smarty->compile_dir .= "contact/";

	// 内容
	$smarty->assign( array(
		"arr_post"      => $arr_post,
		"displaySchool" => $displaySchool,
		"mail_conf"     => $mail_conf,
	) );
	
	// オプション配列
	$smarty->assign( "OptionContactType"      , $OptionContactType       );
	$smarty->assign( "OptionContactSchoolYear", $OptionContactSchoolYear );
	$smarty->assign( "OptionContactZoom"      , $OptionContactZoom       );
	
	// テンプレートの取得
	$mail1 = $smarty->fetch( "mail1.tpl" );
	$mail2 = $smarty->fetch( "mail2.tpl" );

	// 改行
	$mail1 = str_replace( "\r", "\n", str_replace( "\r\n", "\n", $mail1 ) );
	$mail2 = str_replace( "\r", "\n", str_replace( "\r\n", "\n", $mail2 ) );
	
	
	//----------------------------------------
	//  お客様用
	//----------------------------------------
	// 初期化
	$header1 = NULL;
	$header2 = NULL;

	// ヘッダー
	$header1 .= "From: " . mb_encode_mimeheader( _CLIENT_NAME . " " . $displaySchool["short_name"] ) . " <" . $displaySchool["mail"] . ">\n";
	$header1 .= "Bcc: "  . $mail_conf["info"]["bcc_mail"] . "\n";
	$header1 .= "Content-Type: text/plain; charset=iso-2022-jp\n";
	$header1 .= "Content-Transfer-Encoding: 7bit\n";

	// サブジェクト
	$subject1 = $mail_conf["user"]["title"];

	// お客様へ
	$error_flg1 = mb_send_mail( $arr_post["mail"], $subject1, $mail1, $header1 );


	//----------------------------------------
	//  管理宛
	//----------------------------------------
	// ヘッダー
	$header2 .= "From: " . mb_encode_mimeheader( $arr_post["name"] ) . " <" . $arr_post["mail"] . ">\n";
	$header2 .= "Bcc: "  . $mail_conf["info"]["bcc_mail"] . "\n";
	$header2 .= "Content-Type: text/plain; charset=iso-2022-jp\n";
	$header2 .= "Content-Transfer-Encoding: 7bit\n";

	// サブジェクト
	$subject2 = $mail_conf["master"]["title"];

	// 管理へ
	$error_flg2 = mb_send_mail( $displaySchool["mail"], $subject2, $mail2, $header2 );

	// 送信チェック
	if( empty( $error_flg1 ) ) {
		$message["ng"] = "メール送信に失敗しました。";
	} else {
		
		// データ登録
		$objContact->_DBconn->StartTrans();
		$objContact->insert( $arr_post );
		$objContact->_DBconn->CompleteTrans();
		
	}

}

// DB切断
unset( $objManage  );
unset( $objContact );


//----------------------------------------
//  表示
//----------------------------------------
// エラーチェック
if( empty( $message["ng"] ) ) {

	// 終了画面へ
	header( "Location: ./finish.php?sc=" . $displaySchool["id_school"] );

} else {

	// フォームへ
	header( "Location: ./index.php?sc=" . $displaySchool["id_school"] );

}
?>