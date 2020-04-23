<?php
class FN_send_mail2 {
	
	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// メール設定
	var $_from    = null;
	var $_to      = null;
	var $_bcc     = null;
	var $_subject = null;
	var $_body    = null;
	var $_attach  = array();
	
	// デフォルト文字コード
	var $_defEnc = "UTF-8";
	
	
	//-------------------------------------------------------
	// 関数名：__construct
	// 引  数：$from    - 送信者
	//       ：$to      - 宛先
	//       ：$bcc     - BCC
	//       ：$subject - 件名
	//       ：$body    - 本文
	// 戻り値：なし
	// 内  容：コンストラクタ
	//-------------------------------------------------------
	function __construct( $from = null, $to = null, $bcc = null, $subject = null, $body = null ) {
		
		// 設定
		if( is_array( $from ) ){
			foreach( $from as $key => $value ){
				if( method_exists( $this, "set{$key}" ) ){
					$this->{"set{$key}"}( $value );
				}
			}
		}elseif( !is_null( $from ) ){
			$this->setFrom( $from );
		}
		if( !is_null( $to ) ){
			$this->setTo( $to );
		}
		if( !is_null( $bcc ) ){
			$this->setBcc( $bcc );
		}
		if( !is_null( $subject ) ){
			$this->setSubject( $subject );
		}
		if( !is_null( $body ) ){
			$this->setBody( $body );
		}
		
	}
	
	
	
	//----------------------------------------------------------------------------
	// 関数名：setFrom
	// 引  数：$from - 送信者
	// 戻り値：なし
	// 内  容：送信者設定
	//----------------------------------------------------------------------------
	function setFrom( $from ) {
		$this->_from = $from;
	}
	
	
	//----------------------------------------------------------------------------
	// 関数名：setTo
	// 引  数：$to - 宛先
	// 戻り値：なし
	// 内  容：宛先設定
	//----------------------------------------------------------------------------
	function setTo( $to ) {
		$this->_to = $to;
	}
	
	
	//----------------------------------------------------------------------------
	// 関数名：setBcc
	// 引  数：$bcc - BCC
	// 戻り値：なし
	// 内  容：BCC設定
	//----------------------------------------------------------------------------
	function setBcc( $bcc ) {
		$this->_bcc = $bcc;
	}
	
	
	//----------------------------------------------------------------------------
	// 関数名：setSubject
	// 引  数：$subject - 送信者
	// 戻り値：なし
	// 内  容：件名設定
	//----------------------------------------------------------------------------
	function setSubject( $subject ) {
		$this->_subject = mb_convert_kana( $subject, "KV", $this->_defEnc );
	}
	
	
	//----------------------------------------------------------------------------
	// 関数名：setBody
	// 引  数：$body - 本文
	// 戻り値：なし
	// 内  容：本文設定
	//----------------------------------------------------------------------------
	function setBody( $body ) {
		$this->_body = html_entity_decode( $body );
	}
	
	
	//----------------------------------------------------------------------------
	// 関数名：addAttach
	// 引  数：$content  - 添付ファイル内容
	// 引  数：$filename - 添付ファイル名
	// 引  数：$mime     - MimeType
	// 戻り値：なし
	// 内  容：ファイル添付
	//----------------------------------------------------------------------------
	function addAttach( $content, $filename = null, $mime = "text/plain" ) {
		$key = $filename;
		if( empty( $filename ) ){
			for( $i = 1; isset( $this->_attach["attach{$i}"] ); $i ++ ){}
			$key = "attach{$i}";
		}else{
			if( isset( $this->_attach[$filename] ) ){
				for( $i = 1; isset( $this->_attach["{$filename}{$i}"] ); $i ++ ){}
				$key = "{$filename}{$i}";
			}
		}
		$this->_attach[$key] = array(
			"content" => $content,
			"mime"    => $mime,
		);
	}
	
	
	//----------------------------------------------------------------------------
	// 関数名：addAttachFile
	// 引  数：$contentPath - 添付ファイルパス
	// 引  数：$filename    - 添付ファイル名
	// 引  数：$mime        - MimeType
	// 戻り値：なし
	// 内  容：ファイル添付
	//----------------------------------------------------------------------------
	function addAttachFile( $contentPath, $filename = null, $mime = "text/plain" ) {
		if( file_exists( $contentPath ) ){
			$key = $filename;
			if( empty( $filename ) ){
				for( $i = 1; isset( $this->_attach["attach{$i}"] ); $i ++ ){}
				$key = "attach{$i}";
			}else{
				if( isset( $this->_attach[$filename] ) ){
					for( $i = 1; isset( $this->_attach["{$filename}{$i}"] ); $i ++ ){}
					$key = "{$filename}{$i}";
				}
			}
			$this->_attach[$key] = array(
				"path" => $contentPath,
				"mime" => $mime,
			);
		}
	}
	
	
	//----------------------------------------------------------------------------
	// 関数名：clearAttach
	// 引  数：なし
	// 戻り値：なし
	// 内  容：添付ファイルの全削除
	//----------------------------------------------------------------------------
	function clearAttach() {
		$this->_attach[] = array();
	}
	
	
	//----------------------------------------------------------------------------
	// 関数名：nameAddr
	// 引  数：$mail - メールアドレス
	// 引  数：$name - 表示名
	// 戻り値：name-addr
	// 内  容：name-addrの作成
	//----------------------------------------------------------------------------
	function nameAddr( $mail, $name = "") {
		$res = mb_encode_mimeheader( $name );
		$res .= "<{$mail}>";
		return $res;
	}
	
	
	//----------------------------------------------------------------------------
	// 関数名：send
	// 引  数：なし
	// 戻り値：true - 正常、false - 異常
	// 内  容：メール送信を行う
	//----------------------------------------------------------------------------
	function send() {
	
		// 送信先・送信元のチェック
		if( empty( $this->_from ) || empty( $this->_to ) ){
			return false;
		}
		
		//----------------------------------------
		//  文字コード設定
		//----------------------------------------
		// 言語設定
		mb_language("Japanese");
		
		// 内部エンコーディング
		mb_internal_encoding("UTF-8");
		
		
		//----------------------------------------
		//  メール送信
		//----------------------------------------
		// ヘッダー
		// 送信元
		$headers = array( "From: {$this->_from}" );
		
		// BCC
		if( !empty( $this->_bcc ) ){
			$headers[] = "Bcc: {$this->_bcc}";
		}
		
		// 添付ファイル
		$body = "";
		if( is_array( $this->_attach ) && count( $this->_attach ) > 0 ){
			$boundary = sprintf('----=_Boundary_%s_', uniqid( rand(1000, 9999) . '_') );
			$headers[] = "Content-Type: multipart/mixed; boundary=\"{$boundary}\"";
			
			// Base64でBodyを作成
			$itemHeaders = array(
				"Content-Type: text/plain; charset=iso-2022-jp",
				"Content-Transfer-Encoding: base64",
			);
			$item = array( array(
				"header" => implode( "\n", $itemHeaders ),
				"body"   => chunk_split( base64_encode( mb_convert_encoding( $this->_body, "ISO-2022-JP" ) ) ),
			) );
			foreach( $this->_attach as $name => $attach ){
				$name = mb_encode_mimeheader( $name );
				$itemHeaders = array(
					"Content-Type: {$attach['mime']}; name=\"{$name}\"",
					"Content-Transfer-Encoding: base64",
					"Content-Disposition: attachment; filename=\"{$name}\"",
				);
				$itemBody = "";
				if( isset( $attach["path"] ) ){
					// ファイル名を指定している場合
					$content = file_get_contents( $attach["path"] );
					$itemBody = chunk_split( base64_encode( $content ) );
				}
				if( isset( $attach["content"] ) ){
					// 添付ファイルを文字列で入力している場合
					$itemBody = chunk_split( base64_encode( $attach["content"] ) );
				}
				$item[] = array(
					"header" => implode( "\n", $itemHeaders ),
					"body"   => $itemBody,
				);
			}
			
			// ヘッダと本文の結合
			$itemBody = array( "" );
			while( $attach = array_shift( $item ) ){
				$itemBody[] = "{$attach['header']}\n\n{$attach['body']}";
			}
			$body = implode( "--{$boundary}\n", $itemBody );
			unset( $itemBody );
			
		}else{
			$headers[] = "Content-Type: text/plain; charset=iso-2022-jp";
			$body = $this->_body;
		}
		$headers[] = "Content-Transfer-Encoding: 7bit";
		$header = implode( "\n", $headers );
		// メール送信
		$res = mb_send_mail( $this->_to, $this->_subject, $body, $header );
		
		// 戻り値
		return $res;
		
	}
	
}