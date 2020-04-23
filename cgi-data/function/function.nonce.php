<?php
//----------------------------------------------------------------------------
// 関数名：createNonce
// 引  数：なし
// 戻り値：セキュリティ用 Nonce（一度だけ使われる数値）
// 内  容：セキュリティ用 Nonce（一度だけ使われる数値）を発行する。
//----------------------------------------------------------------------------
function createNonce(){
	if( !isset( $_SESSION["nonce_seed"] ) ){
		$_SESSION["nonce_seed"] = rand( 0, 0xffffffff );
	}
	$seed = $_SESSION["nonce_seed"];
	$_SESSION["nonce_seed"] += rand( 0x0001, 0xffff );
	$_SESSION["nonce_seed"] = $_SESSION["nonce_seed"] & 0xffffffff;
	srand( $seed );
	
	// DirectoryIndexの対応
	$path = preg_replace( "/\\/index\\.php\$/", "/", $_SERVER["SCRIPT_NAME"] );
	
	$salt = hash( "md5", rand() );
	$hash = hash( "sha256", $salt . session_id() . $_SERVER["HTTP_USER_AGENT"] . $path );
	return sprintf( "%08x%s", $seed, $hash );
}


//----------------------------------------------------------------------------
// 関数名：isMatchNonce
// 引  数：Nonce（一度だけ使われる数値）
// 戻り値：検証結果( true, false )
// 内  容：セキュリティ用 Nonce（一度だけ使われる数値）を検証する。
//----------------------------------------------------------------------------
function isMatchNonce( $nonce ){
	sscanf( $nonce, "%08x%s", $seed, $hash );
	$url = parse_url( $_SERVER["HTTP_REFERER"] );
	srand( $seed );
	
	// DirectoryIndexの対応
	$path = preg_replace( "/\\/index\\.php\$/", "/", $url["path"] );
	
	$salt = hash( "md5", rand() );
	$hash2 = hash( "sha256", $salt . session_id() . $_SERVER["HTTP_USER_AGENT"] . $path );
	return ( strcmp( $hash, $hash2 ) == 0 );
}
?>