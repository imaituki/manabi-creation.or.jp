<?php /* Smarty version Smarty-3.1.18, created on 2020-04-24 15:39:37
         compiled from "/home/manabi-creation/www//admin/common/inc/pagenavi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17411298745ea289a9e2ab52-24375099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ae6fc0fce8f3baa3bf1757f2875c7ffb770d13' => 
    array (
      0 => '/home/manabi-creation/www//admin/common/inc/pagenavi.tpl',
      1 => 1587536657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17411298745ea289a9e2ab52-24375099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea289a9e45da8_94507385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea289a9e45da8_94507385')) {function content_5ea289a9e45da8_94507385($_smarty_tpl) {?>			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['PageTotal'])===null||$tmp==='' ? 0 : $tmp)>1) {?>
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
