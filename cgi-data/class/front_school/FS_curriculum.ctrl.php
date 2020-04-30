<?php
//----------------------------------------------------------------------------
// 作成日：2020/04/23
// 作成者：鈴木
// 内  容：カリキュラム操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class FS_curriculum {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "mst_curriculum";
	var $_CtrTablePk = "id_curriculum";

	// サブテーブル
	var $_CtrSubTable   = "mst_school";
	var $_CtrSubTablePk = "id_school";

	// リレーションテーブル
	var $_CtrRelCurriculumTable = "t_school_curriculum";
	
	// コントロール機能（ログ用）
	var $_CtrLogName = "カリキュラム";

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
								"join"   => "INNER JOIN {$this->_CtrRelCurriculumTable} ON {$this->_CtrRelCurriculumTable}.id_curriculum = {$this->_CtrTable}.id_curriculum 
											 INNER JOIN {$this->_CtrSubTable} ON {$this->_CtrRelCurriculumTable}.id_school = {$this->_CtrSubTable}.id_school ",
								"where"  => "{$this->_CtrTable}.display_flg = 1 AND {$this->_CtrTable}.delete_flg = 0 AND 
											 {$this->_CtrSubTable}.display_hp_flg = 1 AND {$this->_CtrSubTable}.delete_flg = 0 AND 
											 {$this->_CtrRelCurriculumTable}.id_school = ? AND {$this->_CtrRelCurriculumTable}.delete_flg = 0 ",
								"order"  => "{$this->_CtrTable}.display_num ASC",
								"bind"   => array( $id_school )
							);

		// 取得条件
		if( empty( $option ) ) {

			// ページ切り替え配列
			$_PAGE_INFO = array( "PageNumber"      => $search["page"],
								 "PageShowLimit"   => _PAGESHOWLIMIT,
								 "PageNaviLimit"   => _PAGENAVILIMIT,
								 "LinkSeparator"   => " ",
								 "LinkBackText"    => "<i class=\"fas fa-chevron-left\"></i>",
								 "LinkNextText"    => "<i class=\"fas fa-chevron-right\"></i>",
								 "LinkBackClass"   => "next",
								 "LinkNextClass"   => "back",
								 "LinkSpanPref"    => "<li>",
								 "LinkSpanPost"    => "</li>",
								 "LinkSpanNowPref" => "<strong>",
								 "LinkSpanNowPost" => "</strong>" );

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
							   "join"   => "INNER JOIN {$this->_CtrRelCurriculumTable} ON {$this->_CtrRelCurriculumTable}.id_curriculum = {$this->_CtrTable}.id_curriculum 
											INNER JOIN {$this->_CtrSubTable} ON {$this->_CtrRelCurriculumTable}.id_school = {$this->_CtrSubTable}.id_school ",
							   "where"  => "{$this->_CtrTable}.{$this->_CtrTablePk} = ? AND 
											{$this->_CtrTable}.display_flg = 1 AND 
											{$this->_CtrTable}.delete_flg = 0 AND 
											{$this->_CtrSubTable}.display_hp_flg = 1 AND 
											{$this->_CtrSubTable}.delete_flg = 0 AND 
											{$this->_CtrRelCurriculumTable}.id_school = ? AND 
											{$this->_CtrRelCurriculumTable}.delete_flg = 0 ",
							   "bind"   => array( $id, $id_school ) );
		
		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );

		// 戻り値
		return $res;

	}

}
?>
