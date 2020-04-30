<?php
//----------------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：スケジュール操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class FS_schedule {

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
	// 関数名：GetCalendar
	// 引  数：$calendar_start    - 開始
	//       ：$calendar_end      - 終了
	//       ：$id_school         - 学校ID
	//       ：$ary_relcurriculum - 取り扱いカリキュラムID
	// 戻り値：カレンダー情報
	// 内  容：カレンダー情報を取得
	//-------------------------------------------------------
	function GetCalendar( $calendar_start, $calendar_end, $id_school, $ary_relcurriculum = array() ) {
		
		//----------------------------------------
		//  カレンダーの作成
		//----------------------------------------
		if( is_array( $ary_relcurriculum ) ) {
			
			// 開催日取得
			$creation_kit = array(  "select" => "{$this->_CtrTable}.id_curriculum, {$this->_CtrTable}.date ",
									"from"   => $this->_CtrTable, 
									"join"   => "INNER JOIN {$this->_CtrSubTable} ON {$this->_CtrSubTable}.id_school = {$this->_CtrTable}.id_school ",
									"where"  => "{$this->_CtrTable}.id_school = ? AND 
												 {$this->_CtrTable}.date >= ? AND 
												 {$this->_CtrTable}.date <= ? AND 
												 {$this->_CtrSubTable}.display_hp_flg = 1 AND 
												 {$this->_CtrSubTable}.delete_flg = 0 ", 
									"order"  => "{$this->_CtrTable}.date DESC",
									"bind"   => array( $id_school, $calendar_start, $calendar_end )
								);
			
			// 条件追加
			foreach( $ary_relcurriculum as $val ) {
				$where[] = "?";
				$creation_kit["bind"][]  = $val;
			}
			$creation_kit["where"] .= "AND {$this->_CtrTable}.id_curriculum IN ( " . implode( ",", $where ) . ") ";
			
			// データ取得
			$tmp_school_curriculum_schedule = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH_ALL ) );
			if( is_array( $tmp_school_curriculum_schedule ) ) {
				foreach( $tmp_school_curriculum_schedule as $key => $val ) {
					$listOpenCurriculum[strtotime($val["date"])][$val["id_curriculum"]] = $val;
				}
			}
			
		}
		
		// カレンダー情報設定
		$start  = strtotime( $calendar_start );
		$end    = strtotime( $calendar_end );
		$oneday = 24 * 60 * 60;
		
		// カレンダー配列の作成
		if( $start <= $end ) {
			
			while( $start <= $end ) {
				
				// 日付の情報取得
				$ymdt  = strtotime( date( "Ymd", $start ) );
				$ymd   = date( "Ymd", $start );
				$ym    = date( "Ym" , $start );
				$d     = date( "d"  , $start );
				
				// 曜日設定
				$calendar[$ymdt]["week"]    = (integer)date( "w", $start );
				$calendar[$ymdt]["weekMon"] = ( (integer)date( "w", $start ) == 0 ) ? 7 : (integer)date( "w", $start );
				
				// 休業日設定
				if( !empty( $listOpenCurriculum[$ymdt] ) ){
					$calendar[$ymdt]["open"] = $listOpenCurriculum[$ymdt];
				}else{
					$calendar[$ymdt]["open"] = NULL;
				}
				
				// 一日すすめる
				$start += $oneday;
				
			}
			
			// カレンダー情報
			$res["calendar"]     = $calendar;
			$res["display_date"] = $calendar_start;
			$res["next_date"]    = date( "Y/m/d", strtotime( "+1 year", strtotime( $calendar_start ) ) );
			$res["back_date"]    = date( "Y/m/d", strtotime( "-1 year", strtotime( $calendar_start ) ) );
			
		}
		
		// 戻り値
		return $res;
		
	}
	
}
?>
