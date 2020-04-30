<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 13:59:25
         compiled from "/home/manabi-creation/www//admin/common/inc/secondary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3497521325ea0e0b339fa63-05787521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5599e4832cc73b34d944d7e18f9beac763a5b08e' => 
    array (
      0 => '/home/manabi-creation/www//admin/common/inc/secondary.tpl',
      1 => 1588222411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3497521325ea0e0b339fa63-05787521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea0e0b33b88d8_38282615',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea0e0b33b88d8_38282615')) {function content_5ea0e0b33b88d8_38282615($_smarty_tpl) {?>	<nav class="navbar-default navbar-static-side" role="navigation">
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

				<li><a href="/admin/contents/contact/"><i class="fa fa-newspaper-o"></i><span class="nav-label">お問い合わせ管理</span></a></li>
				<li><a href="/admin/contents/curriculum/"><i class="fa fa-newspaper-o"></i><span class="nav-label">カリキュラム管理</span></a></li>
				<li><a href="/admin/contents/school/"><i class="fa fa-newspaper-o"></i><span class="nav-label">契約学校管理</span></a></li>
				<li><a href="/admin/contents/staff/"><i class="fa fa-newspaper-o"></i><span class="nav-label">総合アカウント管理</span></a></li>
			</ul>
		</div>
	</nav>
<?php }} ?>
