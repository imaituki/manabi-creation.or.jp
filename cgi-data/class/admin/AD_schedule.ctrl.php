<?php
//----------------------------------------------------------------------------
// 作成日：2020/04/21
// 作成者：時岡
// 内  容：スケジュール操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class AD_schedule{
	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "t_schedule";
	var $_CtrTablePk = "id_schedule";

	// コントロール機能（ログ用）
	var $_CtrLogName = "スケジュール";
	
	
	//-------------------------------------------------------
	// 関数名：__construct
	// 引  数：$dbconn  ： DB接続オブジェクト
	// 戻り値：なし
	// 内  容：コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn = NULL ){

		// クラス宣言
		if( !empty( $dbconn ) ){
			$this->_DBconn  = $dbconn;
		}else{
			$this->_DBconn  = new DB_manage( _DNS );
		}
	}
	
	
	//-------------------------------------------------------
	// 関数名：__destruct
	// 引  数：なし
	// 戻り値：なし
	// 内  容：デストラクタ
	//-------------------------------------------------------
	function __destruct(){
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
		switch( $arrVal["_type"] ){
			case "id_event":
				$objInputCheck->entryData( "イベント情報", "id_event"  , $arrVal["id_event"]    , array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
				break;
			case "event_url":
				$objInputCheck->entryData( "URL"         , "event_url" , $arrVal["event_url"]   , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
				break;
		}
		$objInputCheck->entryData( "タイトル"   , "title"    , $arrVal["title"]   , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );

		// チェックエントリー（UPDATE時）
		if( ( strcmp( $mode, "update" ) == 0 ) ) {
		}

		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：GetIdRow
	// 引  数：$id - ID
	// 戻り値：1件分のデータ
	// 内  容：1件取得する
	//-------------------------------------------------------
	function GetIdRow( $id ) {

		// データチェック
		if( !is_numeric( $id ) ) {
			return null;
		}
		
		$res = array(
			"schedule" => array(),
		);
		
		// SQL配列
		$creation_kit = array(
			"select" => "*",
			"from"   => "{$this->_CtrTable} as t_search",
			"where"  => "EXISTS(SELECT 1 FROM {$this->_CtrTable} where {$this->_CtrTablePk}=? AND title=t_search.title AND (id_event=t_search.id_event OR event_url=t_search.event_url))",
			"order"  => "start",
			"bind"   => array( $id )
		);

		// データ取得
		$data = $this->_DBconn->selectCtrl( $creation_kit, _DB_FETCH_ALL );
		
		// データ整形
		if( is_array( $data ) ){
			$firstRow = reset( $data );
			$columns = array( "id_event", "event_url", "title" );
			$nullAssoc = array_fill_keys( $columns, NULL );
			foreach( $columns as $column ){
				$res[$column] = $firstRow[$column];
			}
			if( !empty( $firstRow["id_event"] ) ){
				$res["_type"] = "id_event";
			}else if( !empty( $firstRow["event_url"] ) ){
				$res["_type"] = "event_url";
			}
			foreach( $data as $row ){
				$res["schedule"][] = array_diff( $row, $nullAssoc );
			}
			
		}else{
			return false;
		}

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
		$creation_kit = array(
			"select" => "min(id_schedule) as id_schedule,id_event,event_url,title",
			"from"   => $this->_CtrTable,
			"where"  => "1 ",
			"order"  => "title",
			"group"  => "title, event_url, id_event",
			"bind"   => array()
		);

		// 検索条件
		if( !empty( $search["search_keyword"] ) ) {
			$creation_kit["where"] .= "AND ( " . $this->_DBconn->createWhereSql( $search["search_keyword"], "title", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ) . " ) ";
		}
		
		// 取得条件
		if( empty( $option ) ) {

			// ページ切り替え配列
			$_PAGE_INFO = array(
				"PageNumber"      => ( !empty( $search["page"] ) ) ? $search["page"] : 1,
				"PageShowLimit"   => _PAGESHOWLIMIT,
				"PageNaviLimit"   => _PAGENAVILIMIT,
				"LinkSeparator"   => " | ",
				"PageUrlFreeMode" => 1,
				"PageFileName"    => "javascript:changePage(%d);"
			);

			// オプション
			$option = array( "fetch" => _DB_FETCH_ALL, "page"  => $_PAGE_INFO );

		}

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, $option );

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
		
		$dataType = $arrVal["_type"];
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrData = array_filter( $arrVal, "is_scalar" );
		$arrData["entry_date"]  = date( "Y-m-d H:i:s" );
		$arrData["update_date"] = date( "Y-m-d H:i:s" );
		
		$res = true;
		
		// 登録データの作成
		foreach( $arrVal["schedule"] as $schedule ){
			if( strcmp( $dataType, "id_event" ) != 0 ){
				$schedule["id_event"] = NULL;
			}
			if( strcmp( $dataType, "event_url" ) != 0 ){
				$schedule["event_url"] = NULL;
			}
			$arrInsert = array_merge( $schedule, $arrData );
			
			// 登録
			$res = $this->_DBconn->insert( $this->_CtrTable, $arrInsert, $arrSql );
			
			if( $res == false ){
				return false;
			}
		}

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
		
		$deleteList = $arrVal["_delete"];
		$dataType = $arrVal["_type"];
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrData = array_filter( $arrVal, "is_scalar" );
		$arrData["entry_date"]  = date( "Y-m-d H:i:s" );
		$arrData["update_date"] = date( "Y-m-d H:i:s" );
		if( strcmp( $dataType, "id_event" ) != 0 ){
			$arrData["id_event"] = NULL;
		}
		if( strcmp( $dataType, "event_url" ) != 0 ){
			$arrData["event_url"] = NULL;
		}
		$res = true;
		
		// スケジュールの削除
		foreach( $deleteList as $id ){
			// 削除
			$res = $this->_DBconn->delete( $this->_CtrTable, "{$this->_CtrTablePk}=?", array( $id ) );
				
			if( $res == false ){
				return false;
			}
		}
		
		// 登録データの作成
		foreach( $arrVal["schedule"] as $schedule ){
			// insert,update
			if( empty( $schedule[$this->_CtrTablePk] ) ){
				$arrInsert = array_merge( $schedule, $arrData );
				
				// 登録
				$res = $this->_DBconn->insert( $this->_CtrTable, $arrInsert, $arrSql );
				
			}else{
				$arrUpdate = array_merge( $schedule, $arrData );
				
				// 更新
				$res = $this->_DBconn->update( $this->_CtrTable, $arrUpdate, $arrSql, "{$this->_CtrTablePk}=?", array( $arrUpdate[$this->_CtrTablePk] ) );
				
			}
			
			if( $res == false ){
				return false;
			}
		}

		// 戻り値
		return $res;

	}
	
	
}
?>