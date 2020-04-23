<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：鈴木
// 内  容：アクセス
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";

// 入力チェック
$form = array(
	"ご用件" => "content",
	"保護者氏名" => "name",
	"保護者氏名(フリガナ)" => "ruby",
	"受講するお子様の学年" => "g",
	"受講者氏名" => "name2",
	"受講者氏名(フリガナ)" => "ruby2",
	
	// 住所
	"郵便番号" => "zip",
	"都道府県" => "prefecture",
	"市区町村・番地" => "address1",
	"建物・マンション名" => "address2",
	
	"メールアドレス" => "mail",
	"電話番号" => "tel",
	"ZOOMオンラインの利用経験" => "content2",
	"お問い合わせ内容" => "comment",
);
// 必須項目
$need = array( "name", "ruby", "g", "mail", "tel" );

$check = array(
	"content" => array( "CHECK_NUM" ),
	"g" => array( "CHECK_NUM" ),
	"prefecture" => array( "CHECK_NUM" ),
	"ruby" => array( "CHECK_KANA" ),
	"ruby2" => array( "CHECK_KANA" ),
	"zip" => array( "CHECK_ZIP" ),
	"mail" => array( "CHECK_MAIL" ),
	"tel" => array( "CHECK_TEL" ),
);
if( !empty( $arr_post["content"] ) ){
	array_push( $need, "content2", "comment" );
}
$objCheck = new FN_input_check( "UTF-8" );
foreach( $form as $key => $val ){
	$arrCheck = is_array( $check[$val] ) ? $check[$val] : array();
	if( in_array( $val, $need ) ){
		array_unshift( $arrCheck, "CHECK_EMPTY" );
	}
	list( $min, $max, $emp ) = array( NULL, NULL, NULL );
	$objCheck->entryData( $key, $val, $arr_post[$val], $arrCheck, $min, $max, $emp );
}
$message["ng"] = $objCheck->execCheckAll();


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->template_dir = "./";
$smarty->compile_dir .= "contact/";

$smarty->assign( "message", $message );

// 表示
$smarty->display("check.tpl");
?>