<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 14:57:44
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2657093645eaa68d872c4a8-30376204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1588223030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2657093645eaa68d872c4a8-30376204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'displaySchool' => 0,
    'OptionSchoolCurriculum' => 0,
    'cid' => 0,
    'OptionCurriculumColor' => 0,
    'curriculum' => 0,
    'mst_calendar' => 0,
    'calendar' => 0,
    'date' => 0,
    'OptionInformationCategory' => 0,
    'key' => 0,
    'category' => 0,
    't_school_information' => 0,
    'information' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa68d8856136_14894039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa68d8856136_14894039')) {function content_5eaa68d8856136_14894039($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- meta -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- meta -->
<link rel="stylesheet" href="/common/css/import.css">
<!-- js -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="/common/js/school_top.js"></script>
<!-- js -->
</head>
<body id="school">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header -->
<main>
	<div id="top_main">
		<div class="image">
			<div><img src="/common/image/contents/school/main.jpg" alt="一般社団法人 学びクリエーション"></div>
		</div>
		<div id="main_text" class="text">
			<div class="center">
				<div class="text_in">
					<img src="/common/image/contents/school/logo.png" alt="一般社団法人 学びクリエーション">
					<h2><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="body">
		<section>
			<div id="top_about">
				<div class="wrapper center">
					<h2 class="hl_1 pos_ac mb50"><span class="img"><img src="/common/image/contents/school/about_i.png" alt="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
について"></span>
						<span class="main">
							<span>A</span><span>B</span><span>O</span><span>U</span><span>T</span>
						</span>
						<span class="sub"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
について</span>
					</h2>
					<div class="row mb80">
						<div class="col-xs-5 col-xs-push-7">
							<p class="pos_ac mb10"><img src="<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['image3']!=null) {?>/common/photo/school/image3/l_<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['image3'];?>
<?php } else { ?>/common/image/contents/null.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
について"></p>
						</div>
						<div class="col-xs-7 col-xs-pull-5">
							<?php echo nl2br($_smarty_tpl->tpl_vars['displaySchool']->value['comment']);?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="top_schedule">
				<div class="center wrapper">
					<h2 class="hl_1 pos_ac mb50"><span class="img"><img src="/common/image/contents/school/schedule_i.png" alt="スケジュール"></span>
						<span class="main">
							<span>S</span><span>C</span><span>H</span><span>E</span><span>D</span><span>U</span><span>L</span><span>E</span>
						</span>
						<span class="sub"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
のスケジュール</span>
					</h2>
					<div class="center4 mb30">
						<div class="row tag">
							<?php  $_smarty_tpl->tpl_vars["curriculum"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["curriculum"]->_loop = false;
 $_smarty_tpl->tpl_vars["cid"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionSchoolCurriculum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["curriculum"]->key => $_smarty_tpl->tpl_vars["curriculum"]->value) {
$_smarty_tpl->tpl_vars["curriculum"]->_loop = true;
 $_smarty_tpl->tpl_vars["cid"]->value = $_smarty_tpl->tpl_vars["curriculum"]->key;
?>
							<div class="col-xs-4">
								<p style="background: #<?php echo $_smarty_tpl->tpl_vars['OptionCurriculumColor']->value[$_smarty_tpl->tpl_vars['cid']->value];?>
;"><span><?php echo $_smarty_tpl->tpl_vars['curriculum']->value;?>
</span></p>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="scroll-table mb100">
						<table class="schedule">
							<tbody>
								<tr>
									<th>月</th>
									<th>火</th>
									<th>水</th>
									<th>木</th>
									<th>金</th>
									<th>土</th>
									<th>日</th>
								</tr>
							<?php  $_smarty_tpl->tpl_vars["calendar"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["calendar"]->_loop = false;
 $_smarty_tpl->tpl_vars["date"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_calendar']->value['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["calendar"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["calendar"]->iteration=0;
 $_smarty_tpl->tpl_vars["calendar"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["calendar"]->key => $_smarty_tpl->tpl_vars["calendar"]->value) {
$_smarty_tpl->tpl_vars["calendar"]->_loop = true;
 $_smarty_tpl->tpl_vars["date"]->value = $_smarty_tpl->tpl_vars["calendar"]->key;
 $_smarty_tpl->tpl_vars["calendar"]->iteration++;
 $_smarty_tpl->tpl_vars["calendar"]->index++;
 $_smarty_tpl->tpl_vars["calendar"]->first = $_smarty_tpl->tpl_vars["calendar"]->index === 0;
 $_smarty_tpl->tpl_vars["calendar"]->last = $_smarty_tpl->tpl_vars["calendar"]->iteration === $_smarty_tpl->tpl_vars["calendar"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopCalendar"]['first'] = $_smarty_tpl->tpl_vars["calendar"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopCalendar"]['last'] = $_smarty_tpl->tpl_vars["calendar"]->last;
?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopCalendar']['first']==1||$_smarty_tpl->tpl_vars['calendar']->value['weekMon']==1) {?>
									<tr>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopCalendar']['first']) {?>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['calendar']->value['weekMon']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['name'] = "loopStart";
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total']);
?>
											<td>&nbsp;</td>
										<?php endfor; endif; ?>
									<?php }?>
								<?php }?>
								<td>
									<span class="date"><?php echo intval(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%m"));?>
月<?php echo intval(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%d"));?>
日</span>
									<?php  $_smarty_tpl->tpl_vars["curriculum"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["curriculum"]->_loop = false;
 $_smarty_tpl->tpl_vars["cid"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['calendar']->value['open']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["curriculum"]->key => $_smarty_tpl->tpl_vars["curriculum"]->value) {
$_smarty_tpl->tpl_vars["curriculum"]->_loop = true;
 $_smarty_tpl->tpl_vars["cid"]->value = $_smarty_tpl->tpl_vars["curriculum"]->key;
?>
										<?php if ((($tmp = @$_smarty_tpl->tpl_vars['OptionSchoolCurriculum']->value[(($tmp = @$_smarty_tpl->tpl_vars['curriculum']->value['id_curriculum'])===null||$tmp==='' ? '' : $tmp)])===null||$tmp==='' ? '' : $tmp)!=null) {?>
										<span class="curriculum" style="background: #<?php echo $_smarty_tpl->tpl_vars['OptionCurriculumColor']->value[$_smarty_tpl->tpl_vars['curriculum']->value['id_curriculum']];?>
;">
											<a href="./curriculum/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
#curriculum<?php echo $_smarty_tpl->tpl_vars['curriculum']->value['id_curriculum'];?>
" class="ov"><span><?php echo $_smarty_tpl->tpl_vars['OptionSchoolCurriculum']->value[$_smarty_tpl->tpl_vars['curriculum']->value['id_curriculum']];?>
</span></a>
										</span>
										<?php }?>
									<?php } ?>
								</td>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopCalendar']['last']) {?>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] = (int) $_smarty_tpl->tpl_vars['calendar']->value['weekMon'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'] = is_array($_loop=7) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['name'] = "loopEnd";
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total']);
?>
										<td>&nbsp;</td>
									<?php endfor; endif; ?>
								<?php }?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopCalendar']['last']==1||$_smarty_tpl->tpl_vars['calendar']->value['weekMon']==7) {?>
									</tr>
								<?php }?>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="top_news">
				<div class="center wrapper">
					<h2 class="hl_1 pos_ac mb50"><span class="img"><img src="/common/image/contents/top/news_i.png" alt="カリキュラム"></span>
						<span class="main">
							<span>N</span><span>E</span><span>W</span><span>S</span>
						</span>
						<span class="sub">お知らせ</span>
					</h2>
					<div class="row tab_unit no-gutters mb50">
						<div class="col-xs-4 col-4 active">
							<a href="#news-tab0">
								<div class="tab first">
									<p class="pos_ac">すべて</p>
								</div>
							</a>
						</div>
						<?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionInformationCategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["category"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["category"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["category"]->key;
 $_smarty_tpl->tpl_vars["category"]->iteration++;
 $_smarty_tpl->tpl_vars["category"]->last = $_smarty_tpl->tpl_vars["category"]->iteration === $_smarty_tpl->tpl_vars["category"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopInformationCategory"]['last'] = $_smarty_tpl->tpl_vars["category"]->last;
?>
						<div class="col-xs-4 col-4">
							<a href="#news-tab<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
								<div class="tab<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopInformationCategory']['last']==1) {?> last<?php }?>">
									<p class="pos_ac"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</p>
								</div>
							</a>
						</div>
						<?php } ?>
					</div>
					<div class="row mb30">
						<?php  $_smarty_tpl->tpl_vars["information"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["information"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_school_information']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["information"]->key => $_smarty_tpl->tpl_vars["information"]->value) {
$_smarty_tpl->tpl_vars["information"]->_loop = true;
?>
						<div class="news-tab-<?php echo $_smarty_tpl->tpl_vars['information']->value['category_id'];?>
 col-xs-6">
							<div class="news_unit height-1">
								<a href="./news/detail.php?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['information']->value['id_school_information'];?>
" class="ov">
									<div class="row">
										<div class="col-md-3 height-2 disp_tbl2">
											<div class="disp_td">
												<div class="img_sq">
													<img src="<?php if ($_smarty_tpl->tpl_vars['information']->value['image1']!=null) {?>/common/photo/school_information/image1/m_<?php echo $_smarty_tpl->tpl_vars['information']->value['image1'];?>
<?php } else { ?>/common/image/contents/null.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['information']->value['title'];?>
">
												</div>
											</div>
										</div>
										<div class="col-md-9 disp_tbl2 height-2">
											<div class="disp_td">
												<div class="sub">
													<span class="cat <?php if ($_smarty_tpl->tpl_vars['information']->value['category_id']==2) {?>_event<?php } else { ?>_news<?php }?>"><?php echo $_smarty_tpl->tpl_vars['information']->value['category_name'];?>
</span>
													<span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['information']->value['date'],"%Y.%m.%d");?>
</span>
												</div>
												<div class="title">
													<?php echo $_smarty_tpl->tpl_vars['information']->value['title'];?>

												</div>
											</div>
										</div>
									</div>
									<div class="triangle"></div>
									<i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="button m0auto"><a href="./news/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
" class="_type1 ov">一覧を見る<i class="fas fa-caret-right"></i></a></div>
				</div>
			</div>
		</section>
		<section>
			<div id="top_info">
				<div class="center wrapper-t">
					<div class="row mb30">
						<div class="col-xs-4">
							<p class="photo mb10"><img src="<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['image2']!=null) {?>/common/photo/school/image2/l_<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['image2'];?>
<?php } else { ?>/common/image/contents/null.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
"></p>
						</div>
						<div class="col-xs-8">
							<h3 class="c_lgreen mb20"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
</h3>
							<table class="tbl">
								<tbody>
									<tr class="first">
										<th><span class="name">所在地</span></th>
										<td><?php echo smarty_function_html_select_ken(array('pre'=>"1",'selected'=>$_smarty_tpl->tpl_vars['displaySchool']->value['prefecture']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['address1'];?>
<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['address2'];?>
</td>
									</tr>
									<tr>
										<th><span class="name">電話番号</span></th>
										<td><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
</td>
									</tr>
									<tr>
										<th><span class="name">FAX</span></th>
										<td><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['fax'];?>
</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['map'];?>

				</div>
			</div>
		</section>
	</div>
</main>
<!-- footer -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- footer -->
<script>
</script>
</div>
</body>
</html>
<?php }} ?>
