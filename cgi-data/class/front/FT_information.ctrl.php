<?php
//----------------------------------------------------------------------------
// 作成日：2020/03/31
// 作成者：鈴木
// 内  容：お知らせクラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class FT_information {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "t_information";
	var $_CtrTablePk = "id_information";

	var $_CtrSubTable   = "mst_information_category";
	var $_CtrSubTablePk = "id_information_category";

	// コントロール機能（ログ用）
	var $_CtrLogName = "お知らせ";


	//-------------------------------------------------------
	// 関数名：__construct
	// 引  数：$dbconn  ： DB接続オブジェクト
	// 戻り値：なし
	// 内  容：コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn ) {

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
	// 関数名：GetSearchList
	// 引  数：$search - 検索条件
	//       ：$option - 取得条件
	// 戻り値：リスト
	// 内  容：検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $search, $option = null, $limit = null ) {

		// SQL配列
		$creation_kit = array(  "select" => $this->_CtrTable . ".*, " . 
											$this->_CtrSubTable . ".id_information_category as category_id, " . 
											$this->_CtrSubTable . ".name as category_name ",
								"from"   => $this->_CtrTable, 
								"join"   => "INNER JOIN " . $this->_CtrSubTable . " ON " . $this->_CtrTable . ".id_information_category = " . $this->_CtrSubTable . ".id_information_category ", 
								"where"  => $this->_CtrTable . ".date <= NOW() AND " . 
											$this->_CtrTable . ".display_flg = 1 AND " . 
											" ( " . $this->_CtrTable . ".display_indefinite = 1 OR 
											  ( " . $this->_CtrTable . ".display_indefinite = 0 AND " . $this->_CtrTable . ".display_start <= NOW() AND  NOW() <= " . $this->_CtrTable . ".display_end  ) ) AND " . 
											$this->_CtrSubTable . ".delete_flg = 0 AND " . 
											$this->_CtrSubTable . ".display_flg = 1 ", 
								"order"  => "date DESC",
								"bind" => array(),
							);
			
			
		// 検索
		if( !empty( $search["cat"] ) ){
			$creation_kit["where"] .= " AND {$this->_CtrTable}.id_information_category=? ";
			$creation_kit["bind"][] = $search["cat"] ;
		}
			
		// 取得条件
		if( empty( $option ) ) {

			// ページ切り替え配列
			$_PAGE_INFO = array( "PageNumber"      => $search["page"],
								 "PageShowLimit"   => _PAGESHOWLIMIT,
								 "PageNaviLimit"   => _PAGENAVILIMIT,
								 "LinkSeparator"   => " ",
								 "LinkBackText"    => "&lt; 前へ",
								 "LinkNextText"    => "次へ &gt;",
								 "LinkBackClass"   => "next",
								 "LinkNextClass"   => "back",
								 "LinkSpanPref"    => "<li>",
								 "LinkSpanPost"    => "</li>",
								 "LinkSpanNowPref" => "<strong>",
								 "LinkSpanNowPost" => "</strong>" );

			// オプション
			$option = array( "fetch" => _DB_FETCH_ALL,
							 "page"  => $_PAGE_INFO );

		} else {

			// 取得件数制限
			if( !empty( $limit ) ) {
				$creation_kit["limit"] = $limit;
			}

		}

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, $option );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：GetIdRow
	// 引  数：$id - ID
	// 戻り値：1件分
	// 内  容：1件取得する
	//-------------------------------------------------------
	function GetIdRow( $id ) {

		// データチェック
		if( !is_numeric( $id ) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array(  "select" => $this->_CtrTable . ".*, " . 
											$this->_CtrSubTable . ".id_information_category as category_id, " . 
											$this->_CtrSubTable . ".name as category_name ",
								"from"   => $this->_CtrTable, 
								"join"   => "INNER JOIN " . $this->_CtrSubTable . " ON " . $this->_CtrTable . ".id_information_category = " . $this->_CtrSubTable . ".id_information_category ", 
								"where"  => $this->_CtrTable . ".date <= NOW() AND " . 
											$this->_CtrTable . ".display_flg = 1 AND " . 
											" ( " . $this->_CtrTable . ".display_indefinite = 1 OR 
											  ( " . $this->_CtrTable . ".display_indefinite = 0 AND " . $this->_CtrTable . ".display_start <= NOW() AND  NOW() <= " . $this->_CtrTable . ".display_end  ) ) AND " . 
											$this->_CtrSubTable . ".delete_flg = 0 AND " . 
											$this->_CtrSubTable . ".display_flg = 1 AND " .  
											$this->_CtrTable . "." . $this->_CtrTablePk . " = ? ", 
								"bind"   => array( "where" => array( $id ) ) 
							);

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );

		// タグ許可
		if( !empty($res["comment"]) ){
			$res["comment"] = html_entity_decode( $res["comment"] );
		}

		// 戻り値
		return $res;

	}

	//-------------------------------------------------------
	// 関数名：GetDetailPageNavi
	// 引  数：$id - ID
	// 戻り値：ページナビ
	// 内  容：詳細ページ用のページナビを作成する
	//-------------------------------------------------------
	function GetDetailPageNavi( $id ) {

		// データチェック
		if( !is_numeric( $id ) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array(  "select" => $this->_CtrTable . "." . $this->_CtrTablePk,
								"from"   => $this->_CtrTable,
								"join"   => "INNER JOIN " . $this->_CtrSubTable . " ON " . $this->_CtrTable . ".id_information = " . $this->_CtrSubTable . ".id_information ", 
								"where"  => $this->_CtrTable . ".date <= NOW() AND " . 
											$this->_CtrTable . ".display_flg = 1 AND " . 
											" ( " . $this->_CtrTable . ".display_indefinite = 1 OR 
											  ( " . $this->_CtrTable . ".display_indefinite = 0 AND " . $this->_CtrTable . ".display_start <= NOW() AND  NOW() <= " . $this->_CtrTable . ".display_end  ) ) AND " . 
											$this->_CtrSubTable . ".delete_flg = 0 AND " . 
											$this->_CtrSubTable . ".display_flg = 1 ", 
								"order"  => "date DESC"
							);

		// データ取得
		$aryId = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH_COL ) );

		// データチェック
		if( is_array( $aryId ) ) {

			// 現在のKey
			$pageKey = array_search( $id, $aryId );

			// ページング
			$res["back"] = $aryId[$pageKey+1];
			$res["now"]  = $aryId[$pageKey];
			$res["next"] = $aryId[$pageKey-1];

		}

		// 戻り値
		return $res;

	}
	
}
?>
