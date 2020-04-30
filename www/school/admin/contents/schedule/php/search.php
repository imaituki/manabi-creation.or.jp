<?php
//-------------------------------------------------------------------
// 作成日：2020/03/31
// 作成者：鈴木
// 内  容：スケジュール 検索
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  SESSION設定
//----------------------------------------
$_SESSION["school"]["admin"][_CONTENTS_DIR]["search"]["POST"] = $arr_post;


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objSchool   = new SC_school( $objManage );
$objSchedule = new SC_schedule( $objManage );

// データ取得
$relCurriculum = $objSchool->GetRelCurriculumIds( $_COOKIE["sc_id_school"] );

// 取り扱いカリキュラムのチェック
if( is_array( $relCurriculum ) ) {
	foreach( $relCurriculum as $key => $val ) {
		if( $OptionCurriculum[$val] != NULL ) {
			$OptionRelCurriculum[$val] = $OptionCurriculum[$val];
		}
	}
}

// 取り扱いカリキュラムの場合、カレンダー作成
if( !empty( $OptionRelCurriculum[$arr_post["search_id_curriculum"]] ) ) {
	$mst_calendar = $objSchedule->GetCalendar( $arr_post["search_y"], $_COOKIE["sc_id_school"], $arr_post["search_id_curriculum"] );
}

// クラス削除
unset( $objManage   );
unset( $objSchool   );
unset( $objSchedule );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin_school");
$smarty->compile_dir .= "schedule/";

// テンプレートに設定
$smarty->assign( "message"     , $message      );
$smarty->assign( "arr_post"    , $arr_post     );
$smarty->assign( "mst_calendar", $mst_calendar );

// オプション配列
$smarty->assign( "OptionRelCurriculum", $OptionRelCurriculum );

// 表示
$smarty->display("list.tpl");
?>
