<?php /* Smarty version Smarty-3.1.18, created on 2020-04-20 13:15:49
         compiled from "D:\xampp\htdocs\VirtualHost\earth-8.com\html\common\include\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155309885e8455e2410487-29330174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad4f27722c423cef6e1f2fdbb21db927012410d0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\html\\common\\include\\footer.tpl',
      1 => 1587381341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155309885e8455e2410487-29330174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e8455e24513c3_17557562',
  'variables' => 
  array (
    'footerData' => 0,
    'insta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e8455e24513c3_17557562')) {function content_5e8455e24513c3_17557562($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\cgi-data\\smarty\\libs\\plugins\\modifier.truncate.php';
?>		<!-- foot -->
		<footer>
			<div id="Instagram">
				<div class="wrapper-t">
					<p class="pos_ac insta mb30 f_17"><i class="fab fa-instagram"></i>Instagram</p>
					<div class="insta_slide">
						<?php  $_smarty_tpl->tpl_vars["insta"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["insta"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footerData']->value['insta']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["insta"]->key => $_smarty_tpl->tpl_vars["insta"]->value) {
$_smarty_tpl->tpl_vars["insta"]->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['insta']->value['media_type']=="VIDEO") {?>
								<div><a href="<?php echo $_smarty_tpl->tpl_vars['insta']->value['permalink'];?>
" class="ov"><img src="<?php echo $_smarty_tpl->tpl_vars['insta']->value['thumbnail_url'];?>
" alt="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['insta']->value['caption'],"100","...");?>
"></a></div>
							<?php } else { ?>
								<div><a href="<?php echo $_smarty_tpl->tpl_vars['insta']->value['permalink'];?>
" class="ov"><img src="<?php echo $_smarty_tpl->tpl_vars['insta']->value['media_url'];?>
" alt="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['insta']->value['caption'],"100","...");?>
"></a></div>
							<?php }?>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="bg_y">
				<div id="foot">
					<h5 class="site_logo mb30"><a class="ov" href=""><img src="/common/image/foot/logo.png" alt="Earth8ight Toys"></a></h5>
					<div id="foot_navi" class="mb20">
						<div class="food_navi">
							<ul>
								<li class="navi_1"><a href="###" class="ov">コンセプト</a></li>
								<li class="navi_2"><a href="###" class="ov">プレイルーム</a></li>
								<li class="navi_3"><a href="###" class="ov">おもちゃレンタル</a></li>
								<li class="navi_4"><a href="###" class="ov">おもちゃをかう</a></li>
								<li class="navi_5"><a href="###" class="ov">お知らせ・イベント情報</a></li>
								<li class="navi_6"><a href="###" class="ov">おもちゃをさがす</a></li>
								<li class="navi_7"><a href="###" class="ov">アクセス</a></li>
								<li class="navi_8"><a href="###" class="ov">お問い合わせ</a></li>
							</ul>
						</div>
					</div>
					<div class="sns mb20">
						<p><a href="###" class="ov"><i class="fab fa-facebook-f"></i></a></p>
						<p><a href="###" class="ov"><i class="fab fa-instagram"></i></a></p>
					</div>
					<div id="foot_subnavi" class="mb10">
						<div class="food_subnavi">
							<ul>
								<li class="navi_1"><a href="###" class="ov">運営会社</a></li>
								<li class="navi_2"><a href="###" class="ov">利用規約</a></li>
								<li class="navi_3"><a href="###" class="ov">プライバシーポリシー</a></li>
								<li class="navi_4"><a href="###" class="ov">特商法</a></li>
							</ul>
						</div>
					</div>
					<div id="copyright" class="pos_ac" >&copy; esrth 8 toys all right reserved.</div>
					<div id="pagetop"><a href="javascript:void(0);" class="fa fa-angle-up"><span>pagetop</span></a></div>
				</div>
			</div>
		</footer>
		<!-- foot -->
<?php }} ?>
