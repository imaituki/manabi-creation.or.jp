<?php
//-------------------------------------------------------------------
// 作成日：2020/04/22
// 作成者：鈴木
// 内  容：アクセス
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objInformation = new FS_information( $objManage );
$objSchedule    = new FS_schedule( $objManage );

// お知らせ
$t_school_information = $objInformation->GetSearchList( $displaySchool["id_school"], null, array( "fetch" => _DB_FETCH_ALL ), 10 );

// 週初め取得
$w = date( "w", strtotime( date("Y/m/d H:i:s") ) ) - 1;
$start_date = date('Y/m/d H:i:s', strtotime("-{$w} day", strtotime( date("Y/m/d H:i:s") ) ) );
$end_date   = date('Y/m/d H:i:s', strtotime("+20 day", strtotime( $start_date ) ) );

// カリキュラムスケジュール取得
$mst_calendar = $objSchedule->GetCalendar( $start_date, 
										   $end_date, 
										   $displaySchool["id_school"], 
										   ( ( is_array( $OptionSchoolCurriculum ) ) ? array_keys( $OptionSchoolCurriculum ) : null ) 
										);

// DB切断
unset( $objManage      );
unset( $objInformation );


//----------------------------------------
//  smarty設定
//----------------------------------------
if( !empty( $displaySchool["id_school"] ) ) {
	
	$smarty = new MySmarty("front_school");
	$smarty->template_dir = "./";
	$smarty->compile_dir .= "school/";
	
	// テンプレートに設定
	$smarty->assign( "t_school_information", $t_school_information );
	$smarty->assign( "mst_calendar"        , $mst_calendar         );
	
	// 表示
	$smarty->display("index.tpl");
	
} else {
	
	// 一覧へ
	header("Location: /school/list.php");
	
}
?>