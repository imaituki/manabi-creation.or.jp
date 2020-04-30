<?php
//----------------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：学校操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class SC_school {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "mst_school";
	var $_CtrTablePk = "id_school";
	
	// リレーションテーブル
	var $_CtrRelCurriculumTable = "t_school_curriculum";
	
	// コントロール機能（ログ用）
	var $_CtrLogName = "学校";
	
	private $_InsertId = null;
	
	// キャッシュ保存先
	var $_CacheDir = _CACHE_DIR;
	
	// 画像設定
	var $_ARR_IMAGE = null;
	
	
	//-------------------------------------------------------
	// 関数名：__construct
	// 引  数：$dbconn  ： DB接続オブジェクト
	// 戻り値：なし
	// 内  容：コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn = NULL, $arrImg = NULL  ) {

		// クラス宣言
		if( !empty( $dbconn ) ) {
			$this->_DBconn  = $dbconn;
		} else {
			$this->_DBconn  = new DB_manage( _DNS );
		}
		$this->_FN_file = new FN_file();

		// 設定情報
		$this->_ARR_IMAGE = $arrImg;

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
	// 関数名：GetInsertId
	// 引  数：学校ID
	// 戻り値：なし
	// 内  容：登録処理時の学校ID
	//-------------------------------------------------------
	function GetInsertId() {
		return $this->_InsertId;
	}


	//-------------------------------------------------------
	// 関数名：convert
	// 引  数：$arrVal
	// 戻り値：データ変換
	// 内  容：データ変換を行う
	//-------------------------------------------------------
	function convert( $arrVal ) {

		// データ変換クラス宣言
		$objInputConvert = new FN_input_convert( $arrVal, "UTF-8" );

		// 変換エントリー
		//$objInputConvert->entryConvert( "url", array( "ENC_KANA" ), "a" );

		// 変換実行
		$objInputConvert->execConvertAll();

		// 戻り値
		return $objInputConvert->GetData();

	}


	//-------------------------------------------------------
	// 関数名：check
	// 引  数：$arrVal
	//       ：$mode - チェックモード（ "insert", "update" ）
	// 戻り値：エラーメッセージ
	// 内  容：データチェック
	//-------------------------------------------------------
	function check( $arrVal, $mode ) {
	
		// nonceチェック
		if( isset( $arrVal["_nonce"] ) && !isMatchNonce( $arrVal["_nonce"] ) ){
			http_response_code( 400 );
			exit;
		}
		
		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );
		
		// チェックエントリー
		$objInputCheck->entryData( "公開名称"          , "short_name"    , $arrVal["short_name"]    , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 32 );
		$objInputCheck->entryData( "エリア"            , "id_area"       , $arrVal["id_area"]       , array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "郵便番号"          , "zip"           , $arrVal["zip"]           , array( "CHECK_EMPTY", "CHECK_ZIP" ), null, null );
		$objInputCheck->entryData( "都道府県"          , "prefecture"    , $arrVal["prefecture"]    , array( "CHECK_EMPTY_ZERO", "CHECK_NUM" ), null, null );
		$objInputCheck->entryData( "市区町村・番地"    , "address1"      , $arrVal["address1"]      , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "建物・マンション名", "address2"      , $arrVal["address2"]      , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "電話番号"          , "tel"           , $arrVal["tel"]           , array( "CHECK_TEL" ), null, null );
		$objInputCheck->entryData( "FAX番号"           , "fax"           , $arrVal["fax"]           , array( "CHECK_TEL" ), null, null );
		$objInputCheck->entryData( "メールアドレス"    , "mail"          , $arrVal["mail"]          , array( "CHECK_EMPTY", "CHECK_MAIL", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "受付時間"          , "reception_time", $arrVal["reception_time"], array( "CHECK_MIN_MAX_LEN" ), 0, 32 );
		$objInputCheck->entryData( "Facebook"          , "facebook"      , $arrVal["facebook"]      , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "Twitter"           , "twitter"       , $arrVal["twitter"]       , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		
		// チェックエントリー（UPDATE時）
		if( ( strcmp( $mode, "update" ) == 0 ) ) {
			$objInputCheck->entryData( "学校ID", "all", $arrVal[$this->_CtrTablePk], array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
		}
		
		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();
		
		// 戻り値
		return $res;
		
	}


	//-------------------------------------------------------
	// 関数名：update
	// 引  数：$arrVal - 登録データ（ 'カラム名' => '値' ）
	//       ：$arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値：なし
	// 内  容：データ更新
	//-------------------------------------------------------
	function update( $arrVal, $arrSql = null ) {

		// 写真削除
		$this->_FN_file->delImage( $this->_ARR_IMAGE, $arrVal["_delete_image"], $arrVal );
		
		// アップ処理
		$ImageInfo = $this->_FN_file->copyImage( $_FILES, $this->_ARR_IMAGE, $arrVal );

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );

		// 更新条件
		$where = $this->_CtrTablePk . " = ?";
		$bind = array( $arrVal[$this->_CtrTablePk] );

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, $arrVal, $arrSql, $where, $bind );

		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：relCurriculum
	// 引  数：$id_school - 学校ID
	//       ：$ids       - カリキュラムID
	// 戻り値：なし
	// 内  容：データ更新
	//-------------------------------------------------------
	function relCurriculum( $id_school, $ids ) {
		
		// チェック
		if( empty( $id_school ) ) {
			return null;
		}
		
		// 削除フラグを立てる
		$res = $this->_DBconn->update( $this->_CtrRelCurriculumTable, array( "delete_flg" => 1 ), null, "id_school = ?", array( $id_school ) );
		
		// カリキュラム連携
		if( is_array( $ids ) ) {
			foreach( $ids as $key => $val ) {
				$res = $this->_DBconn->insert_dup_update( $this->_CtrRelCurriculumTable, array( "id_school" => $id_school, "id_curriculum" => $val, "delete_flg" => 0, "entry_date" => date("Y/m/d H:i:s") ) );
			}
		}
		
		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;
		
	}
	
	
	//-------------------------------------------------------
	// 関数名：GetIdRow
	// 引  数：$id - ID
	// 戻り値：データ1件分
	// 内  容：データ1件取得する
	//-------------------------------------------------------
	function GetIdRow( $id ) {

		// データチェック
		if( !is_numeric( $id ) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array( "select" => "*",
							   "from"   => $this->_CtrTable,
							   "where"  => $this->_CtrTablePk . " = ? AND delete_flg = 0 ",
							   "bind"   => array( $id ) );
		
		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );
		
		// 戻り値
		return $res;

	}
	
	
	//-------------------------------------------------------
	// 関数名：GetRelCurriculum
	// 引  数：$id_school - ID
	// 戻り値：データ1件分
	// 内  容：データ1件取得する
	//-------------------------------------------------------
	function GetRelCurriculumIds( $id_school ) {
		
		// データチェック
		if( !is_numeric( $id_school ) ) {
			return null;
		}
		
		// SQL配列
		$creation_kit = array( "select" => "id_curriculum",
							   "from"   => $this->_CtrRelCurriculumTable,
							   "where"  => "id_school = ? AND delete_flg = 0 ",
							   "bind"   => array( $id_school ) );
		
		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH_COL ) );
		
		// 戻り値
		return $res;

	}
	
}
?>
