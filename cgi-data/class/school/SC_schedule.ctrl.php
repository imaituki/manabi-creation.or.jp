<?php
//----------------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：スケジュール操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class SC_schedule {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable = "t_school_curriculum_schedule";

	// サブテーブル
	var $_CtrSubTable   = "mst_school";
	var $_CtrSubTablePk = "id_school";

	// コントロール機能（ログ用）
	var $_CtrLogName = "スケジュール";

	
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
	// 関数名：insert
	// 引  数：$arrVal - 登録データ（ 'カラム名' => '値' ）
	//       ：$arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値：なし
	// 内  容：データ登録
	//-------------------------------------------------------
	function insert( $arrVal, $arrSql = null ) {
		
		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["entry_date"] = date( "Y-m-d H:i:s" );
		
		// 登録
		$res = $this->_DBconn->insert( $this->_CtrTable, $arrVal, $arrSql );
		
		// 戻り値
		return $res;
		
	}
	
	
	//-------------------------------------------------------
	// 関数名：delete
	// 引  数：$date          - 日付
	//       ：$id_school     - 学校ID
	//       ：$id_curriculum - カリキュラムID
	// 戻り値：true - 正常, false - 異常
	// 内  容：データ削除
	//-------------------------------------------------------
	function delete( $date, $id_school, $id_curriculum ) {
		
		// 初期化
		$res = false;
		
		// 削除処理
		if( !empty( $date ) && is_numeric( $id_school ) && is_numeric( $id_curriculum ) ) {
			
			// 更新
			$res = $this->_DBconn->delete( $this->_CtrTable, "DATE_FORMAT( date, '%Y%m%d' ) = ? AND id_school = ? AND id_curriculum = ? ", array( $date, $id, $id_curriculum ) );
			
		}
		
		// 戻り値
		return $res;
		
	}
	
	
	//-------------------------------------------------------
	// 関数名：GetCalendar
	// 引  数：$yyyy          - 取得年
	//       ：$id_school     - 学校ID
	//       ：$id_curriculum - カリキュラムID
	// 戻り値：カレンダー情報
	// 内  容：カレンダー情報を取得
	//-------------------------------------------------------
	function GetCalendar( $yyyy, $id_school, $id_curriculum ) {
		
		//----------------------------------------
		//  カレンダーの作成
		//----------------------------------------
		// 指定期間
		if( !empty( $yyyy ) && is_numeric( $yyyy ) ) {
			$arr_search["date1"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, 1, 1, $yyyy     ) );
			$arr_search["date2"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, 1, 0, $yyyy + 1 ) );
		}else{
			$arr_search["date1"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, 1, 1, date( "Y" )     ) );
			$arr_search["date2"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, 1, 0, date( "Y" ) + 1 ) );
		}
		
		// 開催日取得
		$creation_kit = array(  "select" => "{$this->_CtrTable}.date as `val`, DATE_FORMAT( {$this->_CtrTable}.date, '%Y%m%d' ) as `key` ",
								"from"   => $this->_CtrTable, 
								"join"   => "INNER JOIN {$this->_CtrSubTable} ON {$this->_CtrSubTable}.id_school = {$this->_CtrTable}.id_school ",
								"where"  => "{$this->_CtrTable}.id_school = ? AND 
											 {$this->_CtrTable}.id_curriculum = ? AND 
											 {$this->_CtrTable}.date >= ? AND 
											 {$this->_CtrTable}.date <= ? AND 
											 {$this->_CtrSubTable}.delete_flg = 0 ", 
								"order"  => "{$this->_CtrTable}.date DESC",
								"bind"   => array( $id_school, $id_curriculum, $arr_search["date1"], $arr_search["date2"] )
							);
		
		// データ取得
		$t_school_curriculum_schedule = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH_ALL ) );
		$listOpenCurriculum = ( is_array( $t_school_curriculum_schedule ) ) ? array_column( $t_school_curriculum_schedule, 'val', 'key' ) : null;
		
		// カレンダー情報設定
		$start  = strtotime( $arr_search["date1"] );
		$end    = strtotime( $arr_search["date2"] );
		$oneday = 24 * 60 * 60;
		
		// カレンダー配列の作成
		if( $start <= $end ) {
			
			while( $start <= $end ) {
				
				// 日付の情報取得
				$ymd   = date( "Ymd", $start );
				$ym    = date( "Ym" , $start );
				$d     = date( "d"  , $start );
				
				// 曜日設定
				$calendar[$ym][$d]["week"] = (integer)date( "w", $start );
				
				// 休業日設定
				if( !empty( $listOpenCurriculum[$ymd] ) ){
					$calendar[$ym][$d]["open"] = $listOpenCurriculum[$ymd];
				}else{
					$calendar[$ym][$d]["open"] = NULL;
				}
				
				// 一日すすめる
				$start += $oneday;
				
			}
			
			// カレンダー情報
			$res["calendar"]     = $calendar;
			$res["display_date"] = $arr_search["date1"];
			$res["next_date"]    = date( "Y/m/d", strtotime( "+1 year", strtotime( $arr_search["date1"] ) ) );
			$res["back_date"]    = date( "Y/m/d", strtotime( "-1 year", strtotime( $arr_search["date1"] ) ) );
			
		}
		

		// 戻り値
		return $res;

	}

}
?>
