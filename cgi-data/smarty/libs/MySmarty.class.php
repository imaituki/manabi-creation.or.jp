<?php
class MySmarty extends Smarty {

	function MySmarty( $type ) {

		// グローバル変数
		global $_HTML_HEADER_DEFAULT;
		global $_HTML_HEADER;
		global $_ROOT_PATH;
		global $_API_KEY;
		
		// 設定
		parent::__construct();
		$this->force_compile = 0;
		$this->compile_check = true;
		$this->template_dir = "../template/";
		$this->compile_dir  = _DOCUMENT_ROOT . "/../cgi-data/smarty/templates_c/";

		// 共通配列
		$this->assign( "arr_post",$_POST    );
		$this->assign( "arr_get" ,$_GET     );
		$this->assign( "_SERVER" ,$_SERVER  );
		$this->assign( "_SESSION",$_SESSION );
		$this->assign( "_COOKIE" ,$_COOKIE  );

		// メタ設定
		$this->assign( "_HTML_HEADER_DEFAULT", $_HTML_HEADER_DEFAULT );  // デフォルト
		$this->assign( "_HTML_HEADER"        , $_HTML_HEADER         );  // ページ別の設定

		// 共通変数
		$this->assign( "_CLIENT_NAME"  , _CLIENT_NAME   );
		$this->assign( "_DOCUMENT_ROOT", _DOCUMENT_ROOT );
		$this->assign( "_IMAGEPATH"    , _IMAGEPATH     );
		$this->assign( "_IMAGEFULLPATH", _IMAGEFULLPATH );
		$this->assign( "_FILEFULLPATH" , _FILEFULLPATH  );
		
		$this->assign( "_NONCE" , createNonce() );

		// オプション配列割り当て
		global $SmartyAssignList;
		if( is_array( $SmartyAssignList ) ) {
			foreach( $SmartyAssignList as $key => $val ) {
				global ${$val};
				$this->assign( "{$val}", ${$val} );
			}
		}
		
		// 各種設定
		switch( $type ) {
			case "admin":
				$this->admin();
			break;
			case "front":
				$this->front();
			break;
		}

	}


	function admin(){

		// ディレクトリ
		$this->compile_dir  = _DOCUMENT_ROOT . "/../cgi-data/smarty/templates_c/admin/";
		$this->template_dir = "../template/";

		// 変数
		$this->assign( "_CONTENTS_CONF_PATH", _CONTENTS_CONF_PATH );
		$this->assign( "_CONTENTS_DIR"      , _CONTENTS_DIR       );
		$this->assign( "_CONTENTS_NAME"     , _CONTENTS_NAME      );

		// テンプレート変数
		$this->assign( "template_header"    , _DOCUMENT_ROOT . "/admin/common/inc/header.tpl"     );
		$this->assign( "template_secondary" , _DOCUMENT_ROOT . "/admin/common/inc/secondary.tpl"  );
		$this->assign( "template_javascript", _DOCUMENT_ROOT . "/admin/common/inc/javascript.tpl" );
		$this->assign( "template_image"     , _DOCUMENT_ROOT . "/admin/common/inc/image.tpl"      );
		$this->assign( "template_image2"    , _DOCUMENT_ROOT . "/admin/common/inc/image2.tpl"     );
		$this->assign( "template_file"      , _DOCUMENT_ROOT . "/admin/common/inc/file.tpl"       );
		$this->assign( "template_pagenavi"  , _DOCUMENT_ROOT . "/admin/common/inc/pagenavi.tpl"   );

	}


	function front() {
		
		// グローバル変数
		global $footerData;
		
		// ディレクトリ
		$this->compile_dir  = _DOCUMENT_ROOT . "/../cgi-data/smarty/templates_c/";
		$this->template_dir = "./";
		
		// 変数 - インクルードパス
		$this->assign( "template_meta"       , _DOCUMENT_ROOT . "/common/include/meta.tpl"       );
		$this->assign( "template_header"     , _DOCUMENT_ROOT . "/common/include/header.tpl"     );
		$this->assign( "template_footer"     , _DOCUMENT_ROOT . "/common/include/footer.tpl"     );
		$this->assign( "template_secondary"  , _DOCUMENT_ROOT . "/common/include/secondary.tpl"  );
		$this->assign( "template_javascript" , _DOCUMENT_ROOT . "/common/include/javascript.tpl" );
		
		// 共通変数
		$this->assign( "footerData" , $footerData );
		
	}

}
?>
