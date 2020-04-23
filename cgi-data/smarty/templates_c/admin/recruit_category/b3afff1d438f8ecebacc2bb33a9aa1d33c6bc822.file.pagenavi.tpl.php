<?php /* Smarty version Smarty-3.1.18, created on 2020-03-31 14:38:54
         compiled from "D:\xampp\htdocs\VirtualHost\earth-8.com\html\admin\common\inc\pagenavi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4456200875e8339de274e14-33988053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '4456200875e8339de274e14-33988053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e8339de281e35_52563632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e8339de281e35_52563632')) {function content_5e8339de281e35_52563632($_smarty_tpl) {?>			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['PageTotal'])===null||$tmp==='' ? 0 : $tmp)>1) {?>
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
