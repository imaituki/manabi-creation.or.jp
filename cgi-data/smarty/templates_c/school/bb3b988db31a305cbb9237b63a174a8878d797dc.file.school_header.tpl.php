<?php /* Smarty version Smarty-3.1.18, created on 2020-05-07 09:24:01
         compiled from "/home/manabi-creation/www//common/include/school_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19958223585eaa68d8869d54-33893185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb3b988db31a305cbb9237b63a174a8878d797dc' => 
    array (
      0 => '/home/manabi-creation/www//common/include/school_header.tpl',
      1 => 1588841151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19958223585eaa68d8869d54-33893185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa68d88afd01_44840536',
  'variables' => 
  array (
    'displaySchool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa68d88afd01_44840536')) {function content_5eaa68d88afd01_44840536($_smarty_tpl) {?><header>
	<div id="head">
		<div class="head_wrap">
			<h1 class="site_logo">
				<a class="ov" href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
">
					<img src="/common/image/head/logo.png" alt="学びクリエーション" class="top_logo">
					<img src="/common/image/head/logo_sp.png" alt="学びクリエーション" class="top_none_logo">
				</a>
			</h1>
			<div class="head_contact _head hidden-xs">
				<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['tel']!=null||$_smarty_tpl->tpl_vars['displaySchool']->value['reception_time']!=null) {?>
				<div class="tel_unit pos_re">
					<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['tel']!=null) {?><span class="tel sans" data-tel="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
"><img src="/common/image/head/phone.png" class="pos_vm tel_i" alt="電話番号" /><a href="tel:<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
</a></span><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['reception_time']!=null) {?><span class="time">受付時間 <?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['reception_time'];?>
</span><?php }?>
				</div>
				<?php }?>
				<div class="mail_unit">
					<a href="/school/contact/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
" class="btn_contact ov">
						<div class="disp_td">
							<p class="mail_i m0auto"><img src="/common/image/head/mail.png" class="pos_vm" alt="お問合せ"></p>
							<p class="pos_ac">お問合せ</p>
						</div>
					</a>
				</div>
			</div>
			<div id="btn_open"><a href="javascript:void(0);"><i class="fa fa-bars"></i></a></div>
		</div>
		<div id="head_navi">
			<div class="center">
				<ul>
					<li class="first"><a href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
#top_about"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
について</a></li>
					<li><a href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
#top_schedule">スケジュール</a></li>
					<li><a href="/school/news/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
">お知らせ・イベント</a></li>
					<li><a href="/school/curriculum/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
">カリキュラム</a></li>
					<li><a href="/school/teacher/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
">講師</a></li>
					<li class="last"><a href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
#top_info">アクセス</a></li>
					<li class="head_contact">
						<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['tel']!=null||$_smarty_tpl->tpl_vars['displaySchool']->value['reception_time']!=null) {?>
							<div class="tel_unit">
								<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['tel']!=null) {?><span class="tel sans" data-tel="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
"><img src="/common/image/head/phone.png" class="pos_vm" alt="電話番号" /><a href="tel:<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
</a></span><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['reception_time']!=null) {?><span class="time">受付時間 <?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['reception_time'];?>
</span><?php }?>
							</div>
						<?php }?>
						<div class="mail_unit">
							<a href="/school/contact/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
" class="btn_contact ov">
								<div class="disp_td">
									<p class="mail_i m0auto"><img src="/common/image/head/mail.png" class="pos_vm" alt="お問い合わせ" /></p>
									<p class="pos_ac sp_none">お問合せ</p>
									<p class="pos_ac pc_none">お問い合わせ</p>
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['facebook']!=null||$_smarty_tpl->tpl_vars['displaySchool']->value['twitter']!=null) {?>
			<div class="sns_icon">
				<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['facebook']!=null) {?><a class="fb ov ga_link" href="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['facebook'];?>
" target="_blank"><i class="fab fa-facebook-f"></i></a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['displaySchool']->value['twitter']!=null) {?><a href="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['twitter'];?>
" target="_blank" class="twitter ov"><i class="fab fa-twitter"></i></a><?php }?>
			</div>
			<?php }?>
		</div>
	</div>
</header>
<?php }} ?>
