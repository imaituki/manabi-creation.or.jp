<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 15:07:14
         compiled from "/home/manabi-creation/www//common/include/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8274394865ea02680986378-56302185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd71c52f3f9610a1b8a051891840bb36e618f6041' => 
    array (
      0 => '/home/manabi-creation/www//common/include/footer.tpl',
      1 => 1588224481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8274394865ea02680986378-56302185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea02680987aa1_59726630',
  'variables' => 
  array (
    'OptionCurriculum' => 0,
    'key' => 0,
    'curriculum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea02680987aa1_59726630')) {function content_5ea02680987aa1_59726630($_smarty_tpl) {?><footer>
	<div id="foot_contact" class="wrapper center">
		<div class="contact_area">
			<div class="row">
				<div class="col-xs-6">
					<div class="tel_unit">
						<h4>お電話でのお問い合わせ</h4>
						<span class="tel" data-tel="086-242-3318"><img src="/common/image/head/phone.png" alt="電話番号" /><a href="tel:086-242-3318">086-242-3318</a></span>
					</div>
				</div>
				<div class="col-xs-6">
					<a href="/contact/" class="ov btn_foot_contact">
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
							<h5><a class="ov" href="/"><img src="/common/image/foot/logo.png" alt="岡山の学習塾 日本学びクリエーション" /></a></h5>
							<p>〒700-0973  岡山県岡山市北区下中野1200-4 4F</p>
							<p><span class="tel" data-tel="086-242-3318">TEL：<a href="tel:086-242-3318">086-242-3318</a></span>
							</p>
							<p class="mb20">メール：<a href="mailto:info@manabi-creation.or.jp">info@manabi-creation.or.jp</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="foot_navi">
						<ul>
							<li class="main"><a href="/about/" class="ov">日本学びクリエーションとは？</a></li>
							<li class="main"><a href="/curriculum/" class="ov">カリキュラム</a></li>
							<?php  $_smarty_tpl->tpl_vars["curriculum"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["curriculum"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionCurriculum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["curriculum"]->key => $_smarty_tpl->tpl_vars["curriculum"]->value) {
$_smarty_tpl->tpl_vars["curriculum"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["curriculum"]->key;
?>
							<li class="sub"><a href="/curriculum/#curriculum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['curriculum']->value;?>
</a></li>
							<?php } ?>
						</ul>

						<ul>
							<li class="main"><a href="/access/" class="ov">アクセス</a></li>
							<li class="main"><a href="/news/" class="ov">お知らせ・イベント</a></li>
							<li class="main"><a href="/contact/" class="ov">お問い合わせ</a></li>
							<li class="main"><a href="/privacy/" class="ov">プライバシーポリシー</a></li>
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
