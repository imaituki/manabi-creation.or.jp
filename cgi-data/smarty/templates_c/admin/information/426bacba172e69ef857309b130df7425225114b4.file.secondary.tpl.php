<?php /* Smarty version Smarty-3.1.18, created on 2020-04-22 06:25:12
         compiled from "D:\xampp\htdocs\VirtualHost\manabi-creation.or.jp\www\admin\common\inc\secondary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3862473375e9fc21a74b4b1-61689576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '426bacba172e69ef857309b130df7425225114b4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\manabi-creation.or.jp\\www\\admin\\common\\inc\\secondary.tpl',
      1 => 1587528586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3862473375e9fc21a74b4b1-61689576',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e9fc21a75a413_68303155',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9fc21a75a413_68303155')) {function content_5e9fc21a75a413_68303155($_smarty_tpl) {?>	<nav class="navbar-default navbar-static-side" role="navigation">
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
				<li><a href="/admin/contents/information/"><i class="fa fa-newspaper-o"></i><span class="nav-label">お知らせ管理</span></a></li>

			</ul>
		</div>
	</nav>
<?php }} ?>
