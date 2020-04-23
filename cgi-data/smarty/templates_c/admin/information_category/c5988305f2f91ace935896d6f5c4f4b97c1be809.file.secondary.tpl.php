<?php /* Smarty version Smarty-3.1.18, created on 2020-04-02 08:56:12
         compiled from "D:\xampp\htdocs\VirtualHost\earth-8.com\html\admin\common\inc\secondary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5735236195e833b8e80cd43-00940069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5988305f2f91ace935896d6f5c4f4b97c1be809' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\html\\admin\\common\\inc\\secondary.tpl',
      1 => 1585725176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5735236195e833b8e80cd43-00940069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e833b8e817597_98434898',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e833b8e817597_98434898')) {function content_5e833b8e817597_98434898($_smarty_tpl) {?>	<nav class="navbar-default navbar-static-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav metismenu" id="side-menu" style="padding-bottom:30px;">
				<li class="nav-header">
					<div class="dropdown profile-element">
						<span>
							<?php if (!empty($_COOKIE['ad_image'])) {?>
								<img alt="image" class="img-circle" src="/common/photo/staff/image/s_<?php echo $_COOKIE['ad_image'];?>
" /></span>
							<?php } else { ?>
							<?php }?>
						<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)">
							<span class="clear">
								<span class="block m-t-xs"><strong class="font-bold"><?php echo $_COOKIE['ad_name'];?>
</strong></span>
							</span>
						</a>

						
					</div>
				</li>
				<li><a href="/admin/"><i class="fa fa-home"></i><span class="nav-label">HOME</span></a></li>
				<li><a href="/admin/contents/information/"><i class="fa fa-newspaper-o"></i><span class="nav-label">お知らせ・イベント管理</span></a></li>
				<li><a href="/admin/contents/information_category/"><i class="fa fa-newspaper-o"></i><span class="nav-label">カテゴリ管理</span></a></li>
				<li><a href="/admin/contents/event/"><i class="fa fa-newspaper-o"></i><span class="nav-label">イベント管理</span></a></li>
				<li><a href="/admin/contents/toys_info/"><i class="fa fa-newspaper-o"></i><span class="nav-label">おもちゃ管理</span></a></li>
				<li><a href="/admin/contents/toys_info_category/"><i class="fa fa-newspaper-o"></i><span class="nav-label">カテゴリ管理</span></a></li>
				<li><a href="/admin/contents/toys_director/"><i class="fa fa-newspaper-o"></i><span class="nav-label">おもちゃディレクター管理</span></a></li>
			</ul>
		</div>
	</nav>
<?php }} ?>
