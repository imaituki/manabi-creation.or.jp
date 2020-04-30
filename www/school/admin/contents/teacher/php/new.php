<?php
//-------------------------------------------------------------------
// 作成日：2020/04/28
// 作成者：鈴木
// 内  容：講師 新規登録
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin_school");
$smarty->compile_dir .= "teacher/";

// テンプレートに設定
$smarty->assign( "_ARR_IMAGE", $_ARR_IMAGE );

// オプション配列
$smarty->assign( "OptionSex", $OptionSex );

// 表示
$smarty->display( "new.tpl" );
?>