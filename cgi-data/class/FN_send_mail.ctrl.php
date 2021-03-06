<?php
class FN_send_mail {
	
	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// メール設定
	var $_from    = null;
	var $_to      = null;
	var $_bcc     = null;
	var $_subject = null;
	var $_body    = null;
	
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
	function __construct( $from, $to, $bcc, $subject, $body ) {
		
		// 設定
		$this->setFrom( $from );
		$this->setTo( $to );
		$this->setBcc( $bcc );
		$this->setSubject( $subject );
		$this->setBody( $body );
		
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
	// 関数名：send
	// 引  数：なし
	// 戻り値：true - 正常、false - 異常
	// 内  容：メール送信を行う
	//----------------------------------------------------------------------------
	function send() {
		
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
		$header  = "From: " . $this->_from . "\n";
		$header .= "Bcc: "  . $this->_bcc  . "\n";
		$header .= "Content-Type: text/plain; charset=iso-2022-jp\n";
		$header .= "Content-Transfer-Encoding: 7bit\n";
		
		// メール送信
		$res = mb_send_mail( $this->_to, $this->_subject, $this->_body, $header );
		
		// 戻り値
		return $res;
		
	}
	
}