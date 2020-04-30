<?php
//----------------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：講師操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class SC_teacher {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "mst_teacher";
	var $_CtrTablePk = "id_teacher";

	// サブテーブル
	var $_CtrSubTable   = "mst_school";
	var $_CtrSubTablePk = "id_school";

	// コントロール機能（ログ用）
	var $_CtrLogName = "講師";

	// ファイル操作クラス
	var $_FN_file = null;

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
	function check( &$arrVal, $mode ) {
	
		// nonceチェック
		if( isset( $arrVal["_nonce"] ) && !isMatchNonce( $arrVal["_nonce"] ) ){
			http_response_code( 400 );
			exit;
		}

		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );

		// チェックエントリー
		$objInputCheck->entryData( "学校ID"            , "id_school"      , $arrVal["id_school"]      , array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "役割"              , "id_teacher_role", $arrVal["id_teacher_role"], array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "講師名"            , "name"           , $arrVal["name"]           , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "講師名（ローマ字）", "name_en"        , $arrVal["name_en"]        , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "性別"              , "sex"            , $arrVal["sex"]            , array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "役職"              , "position"       , $arrVal["position"]       , array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
//		$objInputCheck->entryData( "本文"              , "comment"        , $arrVal["comment"]        , array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "公開／非公開"      , "display_flg"    , $arrVal["display_flg"]    , array( "CHECK_EMPTY", "CHECK_MIN_MAX_NUM" ), 0, 1 );

		// チェックエントリー（UPDATE時）
		if( ( strcmp( $mode, "update" ) == 0 ) ) {
			$objInputCheck->entryData( "講師ID", "all", $arrVal["id_teacher"], array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
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

		// アップ処理
		$ImageInfo = $this->_FN_file->copyImage( $_FILES, $this->_ARR_IMAGE, $arrVal );

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrSql["display_num"] = "( SELECT IFNULL( max_num + 1, 1 ) FROM ( SELECT MAX( display_num ) AS max_num FROM " . $this->_CtrTable . " ) AS maxnm ) ";
		$arrVal["entry_date"]  = date( "Y-m-d H:i:s" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );

		// 登録
		$res = $this->_DBconn->insert( $this->_CtrTable, $arrVal, $arrSql );

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
		$where = $this->_CtrTablePk . " = ? AND id_school = ? ";
		
		$bind = array( $arrVal["id_teacher"], $arrVal["id_school"] );

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, $arrVal, $arrSql, $where, $bind );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：delete
	// 引  数：$id_school - 学校ID
	//       ：$id        - 削除するID
	// 戻り値：true - 正常, false - 異常
	// 内  容：データ削除
	//-------------------------------------------------------
	function delete( $id_school, $id ) {

		// 初期化
		$res = false;

		// ファイル設定ループ
		if( !empty($this->_ARR_IMAGE) && is_array($this->_ARR_IMAGE) ){
			foreach( $this->_ARR_IMAGE as $key => $val ) {
				$select[] = $val["name"];
			}

			// SQL配列
			$creation_kit  = array( "select" => implode( ",", $select ),
									"from"   => $this->_CtrTable,
									"where"  => $this->_CtrTablePk . " = ? AND id_school = ? ",
									"bind"   => array( $id, $id_school ) );

			// データ取得
			$tmp = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );

			// 画像削除
			$this->_FN_file->delImage( $this->_ARR_IMAGE, $tmp );

		}

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, array( "delete_flg" => 1, "update_date" => date("Y/m/d H:i:s") ), null, $this->_CtrTablePk . " = ? AND id_school = ? ", array( $id, $id_school ) );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：sort
	// 引  数：$id_school - 学校ID
	//       ：$sortIds   - ソート順 ID
	//       ：$sortKey   - 並び替えのフィールド名
	// 戻り値：true - 正常, false - 異常
	// 内  容：並び替え
	//-------------------------------------------------------
	function sort( $id_school, $sortIds, $sortKey ) {

		// 初期化
		$res = false;

		// データチェック
		if( !empty( $sortIds ) ) {

			// 変数セット
			$this->_DBconn->_ADODB->query("set @a = 0;");

			// ソート
			$res = $this->_DBconn->update( $this->_CtrTable, null, array( "display_num" => "( @a := @a + 1 )" ), "id_school = ? AND " . $this->_CtrTablePk . " IN( " . $sortIds . " ) ORDER BY FIELD( " . $sortKey . ", " . $sortIds . " ) ", array( $id_school ) );

		}

		// キャッシュ削除
		$this->_DBconn->freshCacheAll( $this->_CacheDir );
		
		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：changeDisplay
	// 引  数：$id_school - 学校ID
	//       ：$id        - ID
	//       ：$flg       - フラグ
	// 戻り値：true - 正常, false - 異常
	// 内  容：表示切り替え
	//-------------------------------------------------------
	function changeDisplay( $id_school, $id, $flg ) {

		// 初期化
		$res = false;

		// 切り替え処理
		$res = $this->_DBconn->update( $this->_CtrTable, array( "display_flg" => $flg ), null, $this->_CtrTablePk . " = ? AND id_school = ? ", array( $id, $id_school ) );

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
								"order"  => "{$this->_CtrTable}.display_num ASC ",
								"bind"   => array( $id_school )
							);

		// 検索条件
		if( !empty( $search["search_keyword"] ) ) {
			$creation_kit["where"] .= "AND ( " . $this->_DBconn->createWhereSql( $search["search_keyword"], $this->_CtrTable . ".title", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ) . " ) ";
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
	// 戻り値：1件分のデータ
	// 内  容：1件取得する
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
	
}

?>
