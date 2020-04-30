<?php
//----------------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：お問い合わせ操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class FT_contact {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "t_contact";
	var $_CtrTablePk = "id_contact";

	// コントロール機能（ログ用）
	var $_CtrLogName = "お問い合わせ";

	
	//-------------------------------------------------------
	// 関数名：__construct
	// 引  数：$dbconn  ： DB接続オブジェクト
	// 戻り値：なし
	// 内  容：コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn = NULL ) {

		// クラス宣言
		if( !empty( $dbconn ) ) {
			$this->_DBconn  = $dbconn;
		} else {
			$this->_DBconn  = new DB_manage( _DNS );
		}

	}


	//-------------------------------------------------------
	// 関数名：__destruct
	// 引  数：なし
	// 戻り値：なし
	// 内  容：デストラクタ
	//-------------------------------------------------------
	function __destruct() {

	}


	//-------------------------------------------------------
	// 関数名：check
	// 引  数：$arrVal
	//       ：$mode - チェックモード（ "insert", "update" ）
	// 戻り値：エラーメッセージ
	// 内  容：データチェック
	//-------------------------------------------------------
	function check( $arrVal ) {
	
		// nonceチェック
		if( isset( $arrVal["_nonce"] ) && !isMatchNonce( $arrVal["_nonce"] ) ){
			http_response_code( 400 );
			exit;
		}
		
		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );
		
		// チェックエントリー
		$objInputCheck->entryData( "ご用件"                  , "type"        , $arrVal["type"]        , array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
		$objInputCheck->entryData( "保護者氏名"              , "name"        , $arrVal["name"]        , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "保護者氏名(フリガナ)"    , "ruby"        , $arrVal["ruby"]        , array( "CHECK_EMPTY", "CHECK_KANA", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "受講するお子様の学年"    , "school_year" , $arrVal["school_year"] , array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
		$objInputCheck->entryData( "受講者氏名"              , "student_name", $arrVal["student_name"], array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "受講者氏名(フリガナ)"    , "student_ruby", $arrVal["student_ruby"], array( "CHECK_KANA", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "郵便番号"                , "zip"         , $arrVal["zip"]         , array( "CHECK_ZIP", "CHECK_MIN_MAX_LEN" ), 0, 8 );
		$objInputCheck->entryData( "都道府県"                , "prefecture"  , $arrVal["prefecture"]  , array( "CHECK_NUM", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "市区町村・番地"          , "address1"    , $arrVal["address1"]    , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "建物・マンション名"      , "address2"    , $arrVal["address2"]    , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "メールアドレス"          , "mail"        , $arrVal["mail"]        , array( "CHECK_EMPTY", "CHECK_MAIL", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "電話番号"                , "tel"         , $arrVal["tel"]         , array( "CHECK_EMPTY", "CHECK_TEL", "CHECK_MIN_MAX_LEN" ), 0, 16 );
		if( $arr_post["type"] == 1 ) {
			$objInputCheck->entryData( "ZOOMオンラインの利用経験", "zoom"    , $arrVal["zoom"]        , array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
//			$objInputCheck->entryData( "お問い合わせ内容"        , "comment" , $arrVal["comment"]     , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		} else {
			$objInputCheck->entryData( "ZOOMオンラインの利用経験", "zoom"    , $arrVal["zoom"]        , array( "CHECK_NUM" ), null, null );
			$objInputCheck->entryData( "お問い合わせ内容"        , "comment" , $arrVal["comment"]     , array( "CHECK_EMPTY" ), null, null );
		}
		
		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();
		
		// 戻り値
		return $res;
		
	}
	
	
	//-------------------------------------------------------
	// 関数名：insert
	// 引  数：$arrVal - 登録データ（ 'カラム名' => '値' ）
	//       ：$arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値：なし
	// 内  容：データ登録
	//-------------------------------------------------------
	function insert( $arrVal, $arrSql = null ) {
		
		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["entry_date"]  = date( "Y-m-d H:i:s" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );
		
		// 登録
		$res = $this->_DBconn->insert( $this->_CtrTable, $arrVal, $arrSql );
		
		// 戻り値
		return $res;
		
	}
}
?>
