<?php

// 暗号化モジュールモード
define("_MCRYPT_TYPE", "aes-128-cbc");

//----------------------------------------------------------------------------
// 関数名：fn_encrypt
// 引  数：$str        - 暗号化する文字列
//       ：$mcrypt_key - 暗号キー
// 戻り値：暗号化した文字列
// 内  容：文字列を暗号化する。
//----------------------------------------------------------------------------
function fn_encrypt( $str, $mcrypt_key ) {
	
	// 暗号化モジュールオープン
	$data = pkcs5_padding( $str );
	$iv   = hex2bin( getInitialVector() );
	
	// データを暗号化
	$str = openssl_encrypt( $data, _MCRYPT_TYPE, $mcrypt_key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv );
	$str = bin2hex( $iv ) . "=" . bin2hex( $str );
	
	// 戻り値
	return $str;
	
}


//----------------------------------------------------------------------------
// 関数名：fn_decrypt
// 引  数：$str - 復号化する文字列
//       ：$mcrypt_key - 暗号キー
// 戻り値：復号化した文字列
// 内  容：文字列を復号化する。
//----------------------------------------------------------------------------
function fn_decrypt( $str, $mcrypt_key ) {
	
	// データチェック
	if( $str == "" || $mcrypt_key == "" ) {
		return null;
	}
	
	// 暗号化モジュールオープン
	list( $iv, $str ) = explode( "=", $str );
	$data = hex2bin( $str );
	$iv   = hex2bin( $iv );
	
	// 復号化
	if( !empty( $str ) ) {
		$str = openssl_decrypt( $data, _MCRYPT_TYPE, $mcrypt_key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv );
	}
	
	// 空白削除
	$str = pkcs5_suppress( $str );
	
	// 戻り値
	return $str;
	
}


//----------------------------------------------------------------------------
// 関数名：getInitialVector
// 引  数：なし
// 戻り値：初期化ベクトル
// 内  容：初期化ベクトルを取得
//----------------------------------------------------------------------------
function getInitialVector() {
	if( is_null( $initial_vector ) )  {
		$initial_vector = openssl_random_pseudo_bytes( openssl_cipher_iv_length( _MCRYPT_TYPE ) );
	}
	return bin2hex( $initial_vector );
}


//----------------------------------------------------------------------------
// 関数名：pkcs5_padding
// 引  数：$text - 対象文字列
// 戻り値：パディング済みの文字列
// 内  容：パディング処理 暗号化方式のブロックサイズに合わせて文字列を埋め
//----------------------------------------------------------------------------
function pkcs5_padding( $text ) {
	$block_size = openssl_cipher_block_length( _MCRYPT_TYPE );
	disp_arr($block_size);
	$pad = $block_size - (strlen($text) % $block_size);
	return $text . str_repeat(chr($pad), $pad);
}


//----------------------------------------------------------------------------
// 関数名：pkcs5_padding
// 引  数：$text - 対象文字列
// 戻り値：ブロックサイズ調整文字を取り除いた文字列
// 内  容：ブロックサイズ調整で埋められた文字を取り除く
//----------------------------------------------------------------------------
function pkcs5_suppress( $text ) {
	$pad = ord( $text{strlen($text)-1} );
	if( $pad > strlen( $text ) ) {
		return false;
	}
	if( strspn( $text, chr( $pad ), strlen( $text ) - $pad ) != $pad ) {
		return false;
	}
	return substr( $text, 0, strpos( $text, chr( $pad ) ) );
}


//----------------------------------------------------------------------------
// 関数名：openssl_cipher_block_length
// 引  数：$cipher - 暗号化方式
// 戻り値：暗号化方式が指定しているブロック長
// 内  容：暗号化方式が指定するブロック長を算出
//----------------------------------------------------------------------------
function openssl_cipher_block_length( $cipher ) {
	
	// 暗号化サイズ取得
	$ivSize = @openssl_cipher_iv_length($cipher);
	
	// サポートしていない暗号化方式だった
	if( $ivSize === false ) {
		return false;
	}
	
	$iv = str_repeat("a", $ivSize);

	// 1バイトから1024バイトまで順に暗号化可能なブロック長を試していく
	for ($size = 1; $size < 1024; $size++) {
		$output = openssl_encrypt( str_repeat("a", $size),
								   $cipher,
								   "a",
								   OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING,
								   $iv
								);
		
		if ($output !== false) {
			return $size;
		}
	}

	return false;
}
?>