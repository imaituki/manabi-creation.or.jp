<?php
function form_input_check( $checkAssoc ){
	// postメソッドで送信された場合のみチェック
	$isPost = ( !isset( $checkAssoc["method"] ) || strcasecmp( $checkAssoc["method"], "GET" ) != 0 );
	
	if(
		( $isPost && strcasecmp( $_SERVER["REQUEST_METHOD"], "POST" ) != 0 ) ||
		( !$isPost && strcasecmp( $_SERVER["REQUEST_METHOD"], "POST" ) == 0 )
	){
		// メソッドの指定が一致しなかった場合何もしない
		return null;
	}
	
	// リファラのチェック
	$allow = false;
	if( isset( $checkAssoc["accept"] ) ){
		if( !is_array( $checkAssoc["accept"] ) ){
			$checkAssoc["accept"] = array( $checkAssoc["accept"] );
		}
		foreach( $checkAssoc["accept"] as $pattern ){
			if( $allow ){
				break;
			}
			$pattern = preg_replace( "/\\/\$/", "/index.php", $pattern );
			$url = parse_url( $_SERVER["HTTP_REFERER"] );
			$url["path"] = preg_replace( "/\\/\$/", "/index.php", $url["path"] );
			if( strncmp( $pattern, "/", 1 ) == 0 ){
				// 同一ドメイン　パス比較
				if( strcmp( $url["host"], $_SERVER["SERVER_NAME"] ) == 0 && strcmp( $url["path"], $pattern ) == 0 ){
					$allow = true;
				}
			}elseif( preg_match( "/^https?:\\/\\//", $pattern ) ){
				// URL比較
				$referer = "{$url['scheme']}://{$url['host']}{$url['path']}";
				if( strcmp( $pattern, $referer ) == 0 ){
					$allow = true;
				}
			}else{
				// 同一ドメイン　相対パス比較
				$referer = $url["path"];
				$pattern = form_input_check_path( dirname( $_SERVER["SCRIPT_NAME"] ) . "/" . $pattern );
				if( strcmp( $url["host"], $_SERVER["SERVER_NAME"] ) == 0 && strcmp( $pattern, $referer ) == 0 ){
					$allow = true;
				}
			}
		}
	}
	if( isset( $checkAssoc["accept_preg"] ) ){
		if( !is_array( $checkAssoc["accept_preg"] ) ){
			$checkAssoc["accept_preg"] = array( $checkAssoc["accept_preg"] );
		}
		foreach( $checkAssoc["accept_preg"] as $pattern ){
			if( $allow ){
				break;
			}
			if( preg_match( $pattern, $_SERVER["HTTP_REFERER"] ) ){
				$allow = true;
			}
		}
	}
	if( !$allow ){
		// 400 Bad Request
		http_response_code( 400 );
		exit;
	}
	
	// GETメソッドの場合全ての改行を取り除く
	if( !$isPost ){
		$res = array_map( "form_input_check_removebr", $_GET );
		return $res;
	}
	
	// POSTメソッドの場合　オプションに合わせて変換
	// 検索条件の整理
	$textarea_preg = "";
	if( isset( $checkAssoc["textarea"] ) ){
		$searchKeys = array();
		if( !is_array( $checkAssoc["textarea"] ) ){
			$checkAssoc["textarea"] = array( $checkAssoc["textarea"] );
		}
		foreach( $checkAssoc["textarea"] as $item ){
			$temp = preg_quote( $item, "/" );
			$temp = str_replace( "\\[\\]", "\\[.*?\\]", $temp );
			$searchKeys[] = $temp;
		}
		if( !empty( $searchKeys ) ){
			$textarea_preg = "^(?:(?:" . implode( ")|(?:", $searchKeys ) . "))(?:\$|\\[)";
		}
	}
	if( isset( $checkAssoc["textarea_preg"] ) ){
		$searchKeys = array();
		if( !is_array( $checkAssoc["textarea_preg"] ) ){
			$checkAssoc["textarea_preg"] = array( $checkAssoc["textarea_preg"] );
		}
		foreach( $checkAssoc["textarea_preg"] as $item ){
			$temp = preg_replace( "/^[^\\/]*\\/|\\/[^\\/]*$/", "", $item );
			$searchKeys[] = $temp;
		}
		if( !empty( $searchKeys ) ){
			if( !empty( $textarea_preg ) ){
				$searchKeys[] = $textarea_preg;
			}
			$textarea_preg = "(?:" . implode( ")|(?:", $searchKeys ) . ")";
		}
	}
	if( !empty( $textarea_preg ) ){
		$textarea_preg = "/{$textarea_preg}/";
	}
	
	$html_preg = "";
	if( isset( $checkAssoc["html"] ) ){
		$searchKeys = array();
		if( !is_array( $checkAssoc["html"] ) ){
			$checkAssoc["html"] = array( $checkAssoc["html"] );
		}
		foreach( $checkAssoc["html"] as $item ){
			$temp = preg_quote( $item, "/" );
			$temp = str_replace( "\\[\\]", "\\[.*?\\]", $temp );
			$searchKeys[] = $temp;
		}
		if( !empty( $searchKeys ) ){
			$html_preg = "^(?:(?:" . implode( ")|(?:", $searchKeys ) . "))(?:\$|\\[)";
		}
	}
	if( isset( $checkAssoc["html_preg"] ) ){
		$searchKeys = array();
		if( !is_array( $checkAssoc["html_preg"] ) ){
			$checkAssoc["html_preg"] = array( $checkAssoc["html_preg"] );
		}
		foreach( $checkAssoc["html_preg"] as $item ){
			$temp = preg_replace( "/^[^\\/]*\\/|\\/[^\\/]*$/", "", $item );
			$searchKeys[] = $temp;
		}
		if( !empty( $searchKeys ) ){
			if( !empty( $html_preg ) ){
				$searchKeys[] = $html_preg;
			}
			$html_preg = "(?:" . implode( ")|(?:", $searchKeys ) . ")";
		}
	}
	if( !empty( $html_preg ) ){
		$html_preg = "/{$html_preg}/";
	}
	
	// 一次元配列にして検索
	$query = explode( "&", http_build_query( $_POST, null, "&" ) );
	$n = count( $query );
	for( $i = 0; $i < $n; $i ++ ){
		$temp = explode( "=", $query[$i] );
		list( $key, $value ) = array_map( "urldecode", $temp );
		if( !empty( $textarea_preg ) && preg_match( $textarea_preg, $key ) ){
			// 複数行指定の場合何もしない
		}elseif( !empty( $html_preg ) && preg_match( $html_preg, $key ) ){
			// HTMLの場合
			/** タグ・属性の整理 */
			if( !class_exists( "simple_html_dom" ) ){
				require_once( _DOCUMENT_ROOT . "/../cgi-data/lib/simplehtmldom/simple_html_dom.php" );
			}
			$value = stripcslashes( html_entity_decode( $value, ENT_COMPAT ) );
			$node = str_get_html( "<body>{$value}</body>" );
			$node->set_callback( "form_input_check_html" );
			$html = $node->save();
			$node->clear();
			$value = substr( $html, 6, strlen( $html ) - 13 );
			$value = htmlspecialchars( addslashes( $value ), ENT_COMPAT );
		}else{
			// 改行を取り除く
			$value = preg_replace( "/(?:\\n|\\r|\\r\\n)/", "", $value );
		}
		$temp[1] = urlencode( $value );
		$query[$i] = implode( "=", $temp );
	}
	parse_str( implode( "&", $query ), $res );
	return $res;
}

function form_input_check_removebr( $val ){
	if( is_array( $val ) ){
		$res = array_map( "form_input_check_removebr", $val );
		return $res;
	}
	$res = preg_replace( "/(?:\\n|\\r|\\r\\n)/", "", $val );
	return $res;
}

function form_input_check_path( $path ){
	$dirList1 = explode( "/", $path );
	$dirList2 = array();
	$popCount = 0;
	while( ( $item = array_pop( $dirList1 ) ) != null ){
		if( $item == ".." ){
			$popCount ++;
			continue;
		}
		if( $item == "" ){
			continue;
		}
		if( $item == "."){
			continue;
		}
		if( $popCount > 0 ){
			$popCount --;
			continue;
		}
		$dirList2[] = $item;
	}
	return "/" . implode( "/", array_reverse( $dirList2 ) );
}

function form_input_check_html( $ele ){
	$accept = array(
		// セクション
		"article" => array(),
		"section" => array(),
		"nav" => array(),
		"aside" => array(),
		"h1" => array(),
		"h2" => array(),
		"h3" => array(),
		"h4" => array(),
		"h5" => array(),
		"h6" => array(),
		"hgroup" => array(),
		"header" => array(),
		"footer" => array(),
		"address" => array(),
		
		//グルーピングコンテンツ
		"p" => array(),
		"hr" => array( "align", "color", "noshade", "size", "width" ),
		"pre" => array( "cols", "width", "wrap" ),
		"blockquote" => array( "cite" ),
		"ol" => array( "reversed", "start", "type" ),
		"ul" => array( "compact", "type" ),
		"li" => array( "value", "type" ),
		"dl" => array(),
		"dt" => array(),
		"dd" => array( "nowrap" ),
		"figure" => array(),
		"figcaption" => array(),
		"div" => array(),
		"main" => array(),
		
		// テキストレベルセマンティクス
		"a" => array( "href", "hreflang", "referrerpolicy", "rel", "target", "type", "charset", "coords", "name", "rev", "shape" ),
		"em" => array(),
		"strong" => array(),
		"small" => array(),
		"s" => array(),
		"cite" => array(),
		"q" => array( "cite" ),
		"dfn" => array(),
		"abbr" => array(),
		"data" => array( "value" ),
		"time" => array( "datetime" ),
		"code" => array(),
		"var" => array(),
		"samp" => array(),
		"kbd" => array(),
		"sub" => array(),
		"sup" => array(),
		"i" => array(),
		"b" => array(),
		"u" => array(),
		"mark" => array(),
		"ruby" => array(),
		"rb" => array(),
		"rt" => array(),
		"rtc" => array(),
		"rp" => array(),
		"bdi" => array(),
		"bdo" => array( "dir" ),
		"span" => array(),
		"br" => array( "clear" ),
		"wbr" => array(),
		"tt" => array(),
		
		// 編集
		"ins" => array( "cite", "datetime" ),
		"del" => array( "cite", "datetime" ),
		
		// 埋込型コンテンツ
		"img" => array( "alt", "crossorigin", "decoding", "height", "importance", "intrinsicsize", "ismap", "referrerpolicy", "sizes", "src", "srcset", "width", "align", "border", "hspace", "name", "vspace" ),
		//"iframe" => array(),
		//"embed" => array(),
		//"object" => array(),
		//"param" => array( "name", "type", "value", "valuetype" ),
		"video" => array( "autoplay", "buffered", "controls", "crossorigin", "height", "intrinsicsize", "loop", "muted", "preload", "playsinline", "poster", "src", "width" ),
		"audio" => array( "autoplay", "controls", "crossorigin", "loop", "muted", "preload", "src" ),
		"source" => array( "sizes", "src", "srcset", "type", "media" ),
		"track" => array( "default", "kind", "label", "src", "srclang" ),
		//"map" => array( "name" ),
		//"area" => array( "alt", "coords", "href", "hreflang", "name", "nohref", "referrerpolicy", "rel", "shape", "tabindex", "target", "type" ),
		//"math" => array(),
		//"svg" => array(),
		
		// 表データ
		"table" => array( "align", "bgcolor", "border", "cellpadding", "cellspacing", "frame", "rules", "summary", "width" ),
		"caption" => array( "align" ),
		"colgroup" => array( "align", "bgcolor", "char", "charoff", "span", "valign", "width" ),
		"col" => array( "align", "bgcolor", "char", "charoff", "span", "valign", "width" ),
		"tbody" => array( "align", "bgcolor", "char", "charoff", "valign" ),
		"thead" => array( "align", "bgcolor", "char", "charoff", "valign" ),
		"tfoot" => array( "align", "bgcolor", "char", "charoff", "valign" ),
		"tr" => array( "align", "bgcolor", "char", "charoff", "valign" ),
		"th" => array( "abbr", "align", "axis", "bgcolor", "char", "charoff", "colspan", "headers", "height", "rowspan", "scope", "valign", "width" ),
		"td" => array( "abbr", "align", "axis", "bgcolor", "char", "charoff", "colspan", "headers", "height", "rowspan", "scope", "valign", "width" ),
	
	);
	$grobalAttr = array( "class", "dir", "is", "lang", "style", "tabindex", "title" );
	$url = array( "blockquote@cite", "q@cite", "a@href", "ins@cite", "del@cite", "area@href", "audio@src", "img@src", "track@src", "video@poster", "video@src", "source@src" );
	
	if( $ele->tag == "text" || $ele->parent()->tag == "root" ){
		return;
	}
	if( !isset( $accept[$ele->tag] ) ){
		$ele->outertext = "";
	}else{
		foreach( $ele->attr as $attr => $val ){
			if( !in_array( $attr, $grobalAttr ) && !in_array( $attr, $accept[$ele->tag] ) ){
				$ele->removeAttribute( $attr );
			}elseif( in_array( "{$ele->tag}@{$attr}", $url ) ){
				if( strncmp( $val, "http://", 7 ) != 0 && strncmp( $val, "https://", 8 ) != 0 ){
					$ele->removeAttribute( $attr );
				}
			}
		}
	}
}
?>