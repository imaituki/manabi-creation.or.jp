<?php
//----------------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：スタッフ操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class SC_staff {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "mst_school_staff";
	var $_CtrTablePk = "id_school_staff";

	// サブテーブル
	var $_CtrSubTable   = "mst_school";
	var $_CtrSubTablePk = "id_school";

	// コントロール機能（ログ用）
	var $_CtrLogName = "学校スタッフ";

	// キャッシュ保存先
	var $_CacheDir = _CACHE_DIR;
	
	
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
		$objInputCheck->entryData( "学校ID"        , "id_school", $arrVal["id_school"], array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "お名前"        , "name"     , $arrVal["name"]     , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "電話番号"      , "tel"      , $arrVal["tel"]      , array( "CHECK_TEL" ), null, null );
		$objInputCheck->entryData( "メールアドレス", "mail"     , $arrVal["mail"]     , array( "CHECK_MAIL" ), null, null );
		$objInputCheck->entryData( "アカウント"    , "account"  , $arrVal["account"]  , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 32 );
		$objInputCheck->entryData( "パスワード"    , "password" , $arrVal["password"] , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 4, 32 );
		$objInputCheck->entryData( "有効／無効"    , "valid_flg", $arrVal["valid_flg"], array( "CHECK_EMPTY", "CHECK_MIN_MAX_NUM" ), 0, 1 );
		
		// チェックエントリー（UPDATE時）
		if( ( strcmp( $mode, "update" ) == 0 ) ) {
			$objInputCheck->entryData( "スタッフID", "all", $arrVal[$this->_CtrTablePk], array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
		}
		
		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();
		
		//----------------------------------------
		//  重複チェック
		//----------------------------------------
		if( empty( $res["ng"]["account"] ) ) {
			
			// SQL配列
			$creation_kit = array( "select" => "account",
								   "from"  => $this->_CtrTable,
								   "where" => "delete_flg = 0 AND account = '" . $arrVal["account"] . "' " );
			
			// 追加条件
			if ( strcmp( $mode, "update" ) == 0 ) {
				$creation_kit["where"] .= "AND NOT( " . $this->_CtrTablePk . " = " . $arrVal[$this->_CtrTablePk] . " ) ";
			}
			
			// 重複チェック
			$account = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH_ONE ) );
			if( !empty( $account ) ) {
				$res["ng"]["account"] = $objInputCheck->_errHead . "ご指定のアカウントは、すでに登録されています。<br />";
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

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["password"]    = fn_encrypt( $arrVal["password"], _SCHOOLCRYPTKEY );
		$arrVal["entry_date"]  = date( "Y-m-d H:i:s" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );
		
		// 登録
		$res = $this->_DBconn->insert( $this->_CtrTable, $arrVal, $arrSql );
		
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

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["password"]    = fn_encrypt( $arrVal["password"], _SCHOOLCRYPTKEY );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );
		
		// マスタフラグONの場合、必ず有効とする。
		$arrVal["valid_flg"]   = ( $arrVal["master_flg"] == 1 ) ? 1 : $arrVal["valid_flg"];
		unset( $arrVal["master_flg"] );
		
		// 更新条件
		$where = $this->_CtrTablePk . " = ? AND id_school = ? ";
		
		$bind = array( $arrVal[$this->_CtrTablePk], $arrVal["id_school"] );

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, $arrVal, $arrSql, $where, $bind );

		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：delete
	// 引  数：$id_school - 学校ID
	//       ：$id - 削除するID
	// 戻り値：true - 正常, false - 異常
	// 内  容：データ削除
	//-------------------------------------------------------
	function delete( $id_school, $id ) {

		// 初期化
		$res = false;

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, array( "delete_flg" => 1, "update_date" => date("Y/m/d H:i:s") ), null, $this->_CtrTablePk . " = ? AND id_school = ? ", array( $id, $id_school ) );

		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：changeValid
	// 引  数：$id_school - 学校ID
	//       ：$id        - ID
	//       ：$flg       - フラグ
	// 戻り値：true - 正常, false - 異常
	// 内  容：有効／無効切り替え
	//-------------------------------------------------------
	function changeValid( $id_school, $id, $flg ) {

		// 初期化
		$res = false;

		// 切り替え処理
		$res = $this->_DBconn->update( $this->_CtrTable, array( "valid_flg" => $flg ), null, $this->_CtrTablePk . " = ? AND id_school = ? ", array( $id, $id_school ) );

		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：GetSearchList
	// 引  数：$id_school - 学校ID
	//       ：$search    - 検索条件
	//       ：$option    - 取得条件
	// 戻り値：リスト
	// 内  容：検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $id_school, $search, $option = null ) {

		// SQL配列
		$creation_kit = array(  "select" => "{$this->_CtrTable}.*",
								"from"   => $this->_CtrTable,
								"join"   => "INNER JOIN {$this->_CtrSubTable} ON {$this->_CtrSubTable}.id_school = {$this->_CtrTable}.id_school ",
								"where"  => "{$this->_CtrTable}.id_school = ? AND {$this->_CtrTable}.delete_flg = 0 AND {$this->_CtrSubTable}.delete_flg = 0 ",
								"order"  => "{$this->_CtrTable}.id_school_staff ASC",
								"bind"   => array( $id_school )
							);

		// 検索条件
		if( !empty( $search["search_keyword"] ) ) {
			$creation_kit["where"] .= "AND ( " . $this->_DBconn->createWhereSql( $search["search_keyword"], $this->_CtrTable . ".name", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ) . " ) ";
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
	// 引  数：$id_school - 学校ID
	//       ：$id        - ID
	// 戻り値：データ1件分
	// 内  容：データ1件取得する
	//-------------------------------------------------------
	function GetIdRow( $id_school, $id ) {

		// データチェック
		if( !is_numeric( $id_school ) || !is_numeric( $id ) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array( "select" => "{$this->_CtrTable}.*",
							   "from"   => $this->_CtrTable,
							   "join"   => "INNER JOIN {$this->_CtrSubTable} ON {$this->_CtrSubTable}.id_school = {$this->_CtrTable}.id_school ",
							   "where"  => "{$this->_CtrTable}.id_school = ? AND {$this->_CtrTable}.{$this->_CtrTablePk} = ? AND {$this->_CtrTable}.delete_flg = 0 AND {$this->_CtrSubTable}.delete_flg = 0 ", 
							   "bind"   => array( $id_school, $id ) );
		
		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );

		// 戻り値
		return $res;

	}
	
	
	//-------------------------------------------------------
	// 関数名：loginReCheck
	// 引  数：$account  - アカウント
	//       ：$pass     - パスワード
	// 戻り値：結果
	// 内  容：ログイン
	//-------------------------------------------------------
	function loginReCheck( $id_school_staff, $id_school, $account ) {
		
			// アカウント・パスワードチェック
			$creation_kit = array(
					"select" => "{$this->_CtrTable}.id_school_staff ",
					"from"   => $this->_CtrTable, 
					"join"   => "INNER JOIN {$this->_CtrSubTable} ON {$this->_CtrSubTable}.id_school = {$this->_CtrTable}.id_school ", 
					"where"  => "{$this->_CtrTable}.valid_flg = 1 AND 
								 {$this->_CtrTable}.delete_flg = 0 AND 
								 {$this->_CtrTable}.id_school_staff = ? AND 
								 {$this->_CtrTable}.id_school = ? AND 
								 {$this->_CtrTable}.account = ? AND 
								 {$this->_CtrSubTable}.delete_flg = 0 ",
					"bind"   => array( $id_school_staff, $id_school, $account )
				);
			
			// アカウントデータ取得
			$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );
			
			// 戻り値
			return $res;
			
	}
	
	
	//-------------------------------------------------------
	// 関数名：login
	// 引  数：$account  - アカウント
	//       ：$pass     - パスワード
	// 戻り値：結果
	// 内  容：ログイン
	//-------------------------------------------------------
	function login( $account, $password ) {
		
		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );
		
		// チェックエントリー
		$objInputCheck->entryData( "アカウント", "account" , $account , array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "パスワード", "password", $password, array( "CHECK_EMPTY" ), null, null );
		
		// チェック実行
		$res["message"]["ng"] = $objInputCheck->execCheckAll();
		
		// データチェック
		if( empty( $res["message"]["ng"] ) ) {
			
			// アカウント・パスワードチェック
			$creation_kit = array(
					"select" => "{$this->_CtrTable}.id_school_staff, {$this->_CtrTable}.id_school, {$this->_CtrTable}.account, {$this->_CtrTable}.password, {$this->_CtrTable}.name, {$this->_CtrSubTable}.image1 ",
					"from"   => $this->_CtrTable, 
					"join"   => "INNER JOIN {$this->_CtrSubTable} ON {$this->_CtrSubTable}.id_school = {$this->_CtrTable}.id_school ", 
					"where"  => "{$this->_CtrTable}.valid_flg = 1 AND {$this->_CtrTable}.delete_flg = 0 AND {$this->_CtrTable}.account = ? AND {$this->_CtrSubTable}.delete_flg = 0 ",
					"bind"   => array( $account )
				);
			
			// アカウントデータ取得
			$mst_school_staff = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );
			
			// パスワードチェック
			$mst_school_staff["password"] = ( !empty( $mst_school_staff["password"] ) ) ? fn_decrypt( $mst_school_staff["password"], _SCHOOLCRYPTKEY ) : null;
			
			// ログインチェック
			if( $mst_school_staff["id_school_staff"] != "" && $mst_school_staff["password"] === $password ) {
				
				// SESSION ID
				$mst_school_staff["ssid"] = session_id();
				
				// パスワード削除（Cookie保存しない）
				unset( $mst_school_staff["password"] );
				
				// クッキー保管期間（180日間）
				$cookie_limit = time() + 60 * 60 * 24 * 180;
				
				// クッキー設定
				foreach( $mst_school_staff as $key => $val ) {
					
					// 一度クリア
					@setcookie( "sc_" . $key , ""  , time() - 3600, "/" );
					
					// 設定
					if( is_array( $val ) ) {
						@setcookie( "sc_" . $key , fn_encrypt( serialize( $val ), _SCHOOLCRYPTKEY ), $cookie_limit, "/" );
					} else {
						@setcookie( "sc_" . $key , fn_encrypt( $val, _SCHOOLCRYPTKEY ), $cookie_limit, "/" );
					}
					
				}
				
			} else {
				$res["message"]["ng"]["error"] = $objInputCheck->_errHead . "アカウントまたはパスワードが違います。<br />";
			}
		}
		
		// ログイン結果
		$res["message"]["result"] = ( empty( $res["message"]["ng"] ) ) ? true : false;
		
		// 戻り値
		return $res;
		
	}
	
	
	//-------------------------------------------------------
	// 関数名：logout
	// 引  数：なし
	// 戻り値：なし
	// 内  容：ログアウト
	//-------------------------------------------------------
	function logout() {
		
		// クッキークリア
		if( is_array( $_COOKIE ) ) {
			foreach( $_COOKIE as $key => $val ) {
				if( preg_match( "/^sc_/", $key ) ) {
					@setcookie( $key , ""  , time() - 3600, "/" );
				}
			}
		}
		
		// ログイン情報クリア
		unset( $_COOKIE );
		
	}
	
}
?>
