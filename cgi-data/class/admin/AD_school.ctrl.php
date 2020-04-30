<?php
//----------------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：学校操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class AD_school {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "mst_school";
	var $_CtrTablePk = "id_school";

	// サブテーブル
	var $_CtrSubTable   = "mst_school_staff";
	var $_CtrSubTablePk = "id_school_staff";

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
		$objInputCheck->entryData( "契約名称"                , "name"          , $arrVal["name"]          , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "公開名称"                , "short_name"    , $arrVal["short_name"]    , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 32 );
		$objInputCheck->entryData( "エリア"                  , "id_area"       , $arrVal["id_area"]       , array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "郵便番号"                , "zip"           , $arrVal["zip"]           , array( "CHECK_EMPTY", "CHECK_ZIP" ), null, null );
		$objInputCheck->entryData( "都道府県"                , "prefecture"    , $arrVal["prefecture"]    , array( "CHECK_EMPTY_ZERO", "CHECK_NUM" ), null, null );
		$objInputCheck->entryData( "市区町村・番地"          , "address1"      , $arrVal["address1"]      , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "建物・マンション名"      , "address2"      , $arrVal["address2"]      , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "電話番号"                , "tel"           , $arrVal["tel"]           , array( "CHECK_TEL" ), null, null );
		$objInputCheck->entryData( "FAX番号"                 , "fax"           , $arrVal["fax"]           , array( "CHECK_TEL" ), null, null );
		$objInputCheck->entryData( "メールアドレス"          , "mail"          , $arrVal["mail"]          , array( "CHECK_EMPTY", "CHECK_MAIL", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "受付時間"                , "reception_time", $arrVal["reception_time"], array( "CHECK_MIN_MAX_LEN" ), 0, 32 );
		$objInputCheck->entryData( "Facebook"                , "facebook"      , $arrVal["facebook"]      , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "Twitter"                 , "twitter"       , $arrVal["twitter"]       , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "公開／非公開（アクセス）", "display_flg"   , $arrVal["display_flg"]   , array( "CHECK_EMPTY", "CHECK_MIN_MAX_NUM" ), 0, 1 );
		$objInputCheck->entryData( "公開／非公開（HP）"      , "display_hp_flg", $arrVal["display_hp_flg"], array( "CHECK_EMPTY", "CHECK_MIN_MAX_NUM" ), 0, 1 );
		
		// アカウント（スタッフ情報）
		if( !empty( $arrVal["staff"]["account"] ) ) {
			$objInputCheck->entryData( "アカウント", "staff_account", $arrVal["staff"]["account"], array( "CHECK_MIN_MAX_LEN" ), 0, 32 );
		}
		if( !empty( $arrVal["staff"]["password"] ) ) {
			$objInputCheck->entryData( "パスワード", "staff_password", $arrVal["staff"]["password"], array( "CHECK_MIN_MAX_LEN" ), 4, 32 );
		}
		$objInputCheck->entryData( "有効／無効", "staff_valid_flg", $arrVal["staff"]["valid_flg"], array( "CHECK_EMPTY", "CHECK_MIN_MAX_NUM" ), 0, 1 );
		
		// チェックエントリー（UPDATE時）
		if( ( strcmp( $mode, "update" ) == 0 ) ) {
			$objInputCheck->entryData( "学校ID", "all", $arrVal[$this->_CtrTablePk], array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
		}
		
		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();
		
		//----------------------------------------
		//  重複チェック
		//----------------------------------------
		if( empty( $res["ng"]["staff_account"] ) ) {
			
			// SQL配列
			$creation_kit = array( "select" => "account",
								   "from"  => $this->_CtrSubTable,
								   "where" => "delete_flg = 0 AND account = '" . $arrVal["staff"]["account"] . "' " );
			
			// 追加条件
			if ( strcmp( $mode, "update" ) == 0 ) {
				$creation_kit["where"] .= "AND NOT( ( " . $this->_CtrTablePk . " = " . $arrVal[$this->_CtrTablePk] . " AND master_flg = 1 ) ) ";
			}
			
			// 重複チェック
			$account = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH_ONE ) );
			if( !empty( $account ) ) {
				$res["ng"]["staff_account"] = $objInputCheck->_errHead . "ご指定のアカウントは、すでに登録されています。<br />";
			}
			
		}
		
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

		// アップ処理
		$ImageInfo = $this->_FN_file->copyImage( $_FILES, $this->_ARR_IMAGE, $arrVal );

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrSql["display_num"] = "( SELECT IFNULL( max_num + 1, 1 ) FROM ( SELECT MAX( display_num ) AS max_num FROM " . $this->_CtrTable . " ) AS maxnm ) ";
		$arrVal["entry_date"]  = date( "Y-m-d H:i:s" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );
		
		// 登録
		$res = $this->_DBconn->insert( $this->_CtrTable, $arrVal, $arrSql );
		
		// 登録ID
		$this->_InsertId = $this->_DBconn->Insert_ID();
		
		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
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
	// 関数名：delete
	// 引  数：$id - 削除するID
	// 戻り値：true - 正常, false - 異常
	// 内  容：データ削除
	//-------------------------------------------------------
	function delete( $id ) {

		// 初期化
		$res = false;

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, array( "delete_flg" => 1, "update_date" => date("Y/m/d H:i:s") ), null, $this->_CtrTablePk . " = ?", array( $id ) );
		
		// 学校別 総合管理者アカウント
		if( $res != false ) {
			$this->_DBconn->school_staff_delete( $id );
		}
		
		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：sort
	// 引  数：$sortIds - ソート順 ID
	//       ：$sortKey - 並び替えのフィールド名
	// 戻り値：true - 正常, false - 異常
	// 内  容：並び替え
	//-------------------------------------------------------
	function sort( $sortIds, $sortKey ) {

		// 初期化
		$res = false;

		// データチェック
		if( !empty( $sortIds ) ) {

			// 変数セット
			$this->_DBconn->_ADODB->query("set @a = 0;");

			// ソート
			$res = $this->_DBconn->update( $this->_CtrTable, null, array( "display_num" => "( @a := @a + 1 )" ), $this->_CtrTablePk . " IN( " . $sortIds . " ) ORDER BY FIELD( " . $sortKey . ", " . $sortIds . " ) " );

		}

		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：changeDisplay
	// 引  数：$id  - ID
	//       ：$flg - フラグ
	// 戻り値：true - 正常, false - 異常
	// 内  容：アクセス表示切り替え
	//-------------------------------------------------------
	function changeDisplay( $id, $flg ) {

		// 初期化
		$res = false;

		// 切り替え処理
		$res = $this->_DBconn->update( $this->_CtrTable, array( "display_flg" => $flg ), null, $this->_CtrTablePk . " = ?", array( $id ) );

		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：changeDisplayHp
	// 引  数：$id  - ID
	//       ：$flg - フラグ
	// 戻り値：true - 正常, false - 異常
	// 内  容：サイト表示切り替え
	//-------------------------------------------------------
	function changeDisplayHp( $id, $flg ) {

		// 初期化
		$res = false;

		// 切り替え処理
		$res = $this->_DBconn->update( $this->_CtrTable, array( "display_hp_flg" => $flg ), null, $this->_CtrTablePk . " = ?", array( $id ) );

		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：GetSearchList
	// 引  数：$search - 検索条件
	//       ：$option - 取得条件
	// 戻り値：リスト
	// 内  容：検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $search, $option = null ) {

		// SQL配列
		$creation_kit = array(  "select" => "*",
								"from"   => $this->_CtrTable,
								"where"  => "delete_flg = 0 ",
								"order"  => "display_num ASC",
								"bind"   => array()
							);

		// 検索条件
		if( !empty( $search["search_keyword"] ) ) {
			$creation_kit["where"] .= "AND ( " . $this->_DBconn->createWhereSql( $search["search_keyword"], "name", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ) . " ) ";
		}
		
		// 取得条件
		if( empty( $option ) ) {

			// ページ切り替え配列
			$_PAGE_INFO = array( "PageNumber"      => ( !empty( $search["page"] ) ) ? $search["page"] : 1,
								 "PageShowLimit"   => _PAGESHOWLIMIT,
								 "PageNaviLimit"   => _PAGENAVILIMIT,
								 "LinkSeparator"   => " | ",
								 "PageUrlFreeMode" => 1,
								 "PageFileName"    => "javascript:changePage(%d);" );

			// オプション
			$option = array( "fetch" => _DB_FETCH_ALL,
							 "page"  => $_PAGE_INFO );
			
		}

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, $option );

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
	
	
//━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
//  ↓ 学校別 総合管理者アカウント操作（ mst_school_staff ）
//━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
	//-------------------------------------------------------
	// 関数名：school_staff_insert
	// 引  数：$arrVal - 登録データ（ 'カラム名' => '値' ）
	//       ：$arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値：なし
	// 内  容：データ登録
	//-------------------------------------------------------
	function school_staff_insert( $arrVal, $arrSql = null ) {
		
		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["password"]    = ( !empty( $arrVal["password"] ) ) ? fn_encrypt( $arrVal["password"], _SCHOOLCRYPTKEY ) : NULL;
		$arrVal["master_flg"]  = 1;
		$arrVal["entry_date"]  = date( "Y-m-d H:i:s" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );
		
		// 登録
		$res = $this->_DBconn->insert( $this->_CtrSubTable, $arrVal, $arrSql );
		
		// 戻り値
		return $res;
		
	}


	//-------------------------------------------------------
	// 関数名：school_staff_update
	// 引  数：$arrVal - 登録データ（ 'カラム名' => '値' ）
	//       ：$arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値：なし
	// 内  容：データ更新
	//-------------------------------------------------------
	function school_staff_update( $arrVal, $arrSql = null ) {

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["password"]    = ( !empty( $arrVal["password"] ) ) ? fn_encrypt( $arrVal["password"], _SCHOOLCRYPTKEY ) : NULL;
		$arrVal["master_flg"]  = 1;
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );

		// 更新条件
		$where = $this->_CtrTablePk . " = ? AND master_flg = 1 ";
		$bind = array( $arrVal[$this->_CtrTablePk] );

		// 更新
		$res = $this->_DBconn->update( $this->_CtrSubTable, $arrVal, $arrSql, $where, $bind );

		// 戻り値
		return $res;

	}

	//-------------------------------------------------------
	// 関数名：school_staff_delete
	// 引  数：$id - 学校ID
	// 戻り値：true - 正常, false - 異常
	// 内  容：データ削除
	//-------------------------------------------------------
	function school_staff_delete( $id ) {
		
		// 初期化
		$res = false;
		
		// 更新
		$res = $this->_DBconn->update( $this->_CtrSubTable, array( "delete_flg" => 1, "update_date" => date("Y/m/d H:i:s") ), null, $this->_CtrTablePk . " = ? AND master_flg = 1 ", array( $id ) );
		
		// 戻り値
		return $res;
		
	}
	
	
	//-------------------------------------------------------
	// 関数名：GetMasterSchoolStaff
	// 引  数：$id  - 学校ID
	// 戻り値：マスタアカウント
	// 内  容：指定学校IDのマスタアカウント取得
	//-------------------------------------------------------
	function GetMasterSchoolStaff( $id ) {
		
		// データチェック
		if( !is_numeric( $id ) ) {
			return null;
		}
		
		// SQL配列
		$creation_kit = array( "select" => "account, password, valid_flg ",
							   "from"   => $this->_CtrSubTable,
							   "where"  => $this->_CtrTablePk . " = ? AND delete_flg = 0 AND master_flg = 1 ",
							   "bind"   => array( $id ) );
		
		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );
		
		// パスワード復号化
		$res["password"] = ( !empty( $res["password"] ) ) ? fn_decrypt( $res["password"], _SCHOOLCRYPTKEY ) : NULL;
		
		// 戻り値
		return $res;
		
	}
	
	
//━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
//  ↓ 学校別 取り扱いカリキュラム操作（ t_school_curriculum ）
//━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
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
