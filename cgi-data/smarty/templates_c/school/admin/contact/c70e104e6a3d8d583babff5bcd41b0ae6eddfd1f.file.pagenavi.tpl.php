<?php /* Smarty version Smarty-3.1.18, created on 2020-05-01 15:29:11
         compiled from "/home/manabi-creation/www//school/admin/common/inc/pagenavi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17892788155eabc1b7c84601-16137653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c70e104e6a3d8d583babff5bcd41b0ae6eddfd1f' => 
    array (
      0 => '/home/manabi-creation/www//school/admin/common/inc/pagenavi.tpl',
      1 => 1588223039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17892788155eabc1b7c84601-16137653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eabc1b7ca1f35_20195196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eabc1b7ca1f35_20195196')) {function content_5eabc1b7ca1f35_20195196($_smarty_tpl) {?>			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['PageTotal'])===null||$tmp==='' ? 0 : $tmp)>1) {?>
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
