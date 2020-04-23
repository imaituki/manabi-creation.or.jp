<?php /* Smarty version Smarty-3.1.18, created on 2020-04-22 06:08:53
         compiled from "D:\xampp\htdocs\VirtualHost\manabi-creation.or.jp\www\admin\common\inc\pagenavi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1078199865e9fc3558fa185-34392023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce5e7cf3885662e8a47d1baf283be6e8e15b43e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\manabi-creation.or.jp\\www\\admin\\common\\inc\\pagenavi.tpl',
      1 => 1582009994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1078199865e9fc3558fa185-34392023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e9fc3559046f6_01099404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9fc3559046f6_01099404')) {function content_5e9fc3559046f6_01099404($_smarty_tpl) {?>			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['PageTotal'])===null||$tmp==='' ? 0 : $tmp)>1) {?>
			<div class="page_navi mb20">
				<?php echo number_format($_smarty_tpl->tpl_vars['page_navi']->value['PageItemTotal']);?>
件中<?php echo number_format($_smarty_tpl->tpl_vars['page_navi']->value['PageShowStart']);?>
_<?php echo number_format($_smarty_tpl->tpl_vars['page_navi']->value['PageShowEnd']);?>
件目 ：
				<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['LinkBack'])===null||$tmp==='' ? '' : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['LinkPage'])===null||$tmp==='' ? '' : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['LinkNext'])===null||$tmp==='' ? '' : $tmp);?>

			</div>
			<?php }?>
<?php }} ?>
