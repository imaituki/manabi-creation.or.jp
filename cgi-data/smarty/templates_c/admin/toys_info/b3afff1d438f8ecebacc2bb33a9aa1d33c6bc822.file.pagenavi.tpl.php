<?php /* Smarty version Smarty-3.1.18, created on 2020-04-01 05:50:09
         compiled from "D:\xampp\htdocs\VirtualHost\earth-8.com\html\admin\common\inc\pagenavi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12919646405e840f714a71b4-57446861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3afff1d438f8ecebacc2bb33a9aa1d33c6bc822' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\html\\admin\\common\\inc\\pagenavi.tpl',
      1 => 1582009994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12919646405e840f714a71b4-57446861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e840f714b57f9_43700718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e840f714b57f9_43700718')) {function content_5e840f714b57f9_43700718($_smarty_tpl) {?>			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['PageTotal'])===null||$tmp==='' ? 0 : $tmp)>1) {?>
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
