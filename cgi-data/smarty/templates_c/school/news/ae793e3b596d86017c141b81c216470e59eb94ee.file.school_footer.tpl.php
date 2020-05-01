<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 18:16:11
         compiled from "/home/manabi-creation/www//common/include/school_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11631022405eaa8228aaa9d7-37709575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae793e3b596d86017c141b81c216470e59eb94ee' => 
    array (
      0 => '/home/manabi-creation/www//common/include/school_footer.tpl',
      1 => 1588237745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11631022405eaa8228aaa9d7-37709575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa8228ae9f69_60289313',
  'variables' => 
  array (
    'displaySchool' => 0,
    'OptionSchoolCurriculum' => 0,
    'key' => 0,
    'curriculum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa8228ae9f69_60289313')) {function content_5eaa8228ae9f69_60289313($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><footer>
	<div id="foot_contact" class="wrapper center">
		<div class="contact_area">
			<div class="row">
				<div class="col-xs-6">
					<div class="tel_unit">
						<h4>お電話でのお問い合わせ</h4>
						<span class="tel" data-tel="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
"><img src="/common/image/head/phone.png" alt="電話番号" /><a href="tel:<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
</a></span>
					</div>
				</div>
				<div class="col-xs-6">
					<a href="/school/contact/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
" class="ov btn_foot_contact">
						<span class="img flex_c"><img src="/common/image/contents/top/mail.png" alt="お問合せ"></span>
						<span class="text flex_c">お問い合わせ</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div id="foot">
		<div class="center">
			<div class="row">
				<div class="col-md-5">
					<div class="address_unit">
						<div class="disp_td fw_bold">
							<h5><a class="ov" href="/"><img src="/common/image/foot/logo.png" alt="学びクリエーション" /></a></h5>
							<p>〒<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['zip'];?>
  <?php echo smarty_function_html_select_ken(array('pre'=>"1",'selected'=>$_smarty_tpl->tpl_vars['displaySchool']->value['prefecture']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['address1'];?>
<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['address2'];?>
</p>
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['displaySchool']->value['tel'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p><span class="tel" data-tel="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
">TEL：<a href="tel:<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
</a></span></p><?php }?>
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['displaySchool']->value['mail'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="mb20">メール：<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['mail'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['mail'];?>
</a></p><?php }?>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="foot_navi">
						<ul>
							<li class="main"><a href="/" class="ov">日本学びクリエーションTOP</a></li>
							<li class="main"><a href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
#top_about" class="ov"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
について</a></li>
							<li class="main"><a href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
#top_schedule" class="ov">スケジュール</a></li>
							<li class="main"><a href="/school/teacher/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
" class="ov">講師紹介</a></li>
						</ul>
						<ul class="second">
							<li class="main"><a href="/school/curriculum/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
" class="ov">取り扱いカリキュラム</a></li>
							<?php  $_smarty_tpl->tpl_vars["curriculum"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["curriculum"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionSchoolCurriculum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["curriculum"]->key => $_smarty_tpl->tpl_vars["curriculum"]->value) {
$_smarty_tpl->tpl_vars["curriculum"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["curriculum"]->key;
?>
							<li class="sub"><a href="/school/curriculum/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
#curriculum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['curriculum']->value;?>
</a></li>
							<?php } ?>
						</ul>
						<ul>
							<li class="main"><a href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
#top_info" class="ov">アクセス</a></li>
							<li class="main"><a href="/school/news/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
" class="ov">お知らせ・イベント</a></li>
							<li class="main"><a href="/school/contact/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
" class="ov">お問い合わせ</a></li>
							<li class="main"><a href="/school/privacy/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
" class="ov">プライバシーポリシー</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="copyright" class="bg_lgreen">
		<p class="pos_ac">&copy; 2020 Manabi Creation All Rights Reserved.</p>
	</div>
    <div id="pagetop"><a href="javascript:void(0);" class="fa fa-angle-up"><span>pagetop</span></a></div>
</footer>
<?php }} ?>
