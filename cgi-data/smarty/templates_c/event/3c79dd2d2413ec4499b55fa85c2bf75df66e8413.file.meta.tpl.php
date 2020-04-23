<?php /* Smarty version Smarty-3.1.18, created on 2020-04-01 10:50:42
         compiled from "D:\xampp\htdocs\VirtualHost\earth-8.com\html\common\include\meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20482197565e8455e21e0ff3-56460451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c79dd2d2413ec4499b55fa85c2bf75df66e8413' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\html\\common\\include\\meta.tpl',
      1 => 1585724380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20482197565e8455e21e0ff3-56460451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_HTML_HEADER' => 0,
    '_HTML_HEADER_DEFAULT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e8455e2335007_68495807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e8455e2335007_68495807')) {function content_5e8455e2335007_68495807($_smarty_tpl) {?>	<!-- meta -->
	<title><?php if ($_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title_original']!=null) {?><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title_original'];?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title']!=null) {?><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
 | <?php }?><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['title'];?>
<?php }?></title>
	<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['_HTML_HEADER']->value['description_original']!=null) {?><?php echo preg_replace('!\s+!u', '',htmlspecialchars($_smarty_tpl->tpl_vars['_HTML_HEADER']->value['description_original'], ENT_QUOTES, 'UTF-8', true));?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['_HTML_HEADER']->value['description']!=null) {?><?php echo preg_replace('!\s+!u', '',htmlspecialchars($_smarty_tpl->tpl_vars['_HTML_HEADER']->value['description'], ENT_QUOTES, 'UTF-8', true));?>
<?php }?><?php echo preg_replace('!\s+!u', '',htmlspecialchars($_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['description'], ENT_QUOTES, 'UTF-8', true));?>
<?php }?>">
	<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['_HTML_HEADER']->value['keyword_original']!=null) {?><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['keyword_original'];?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['_HTML_HEADER']->value['keyword']!=null) {?><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['keyword'];?>
,<?php }?><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['keyword'];?>
<?php }?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/common/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/common/favicon/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="apple-touch-icon" href="/common/favicon/apple-touch-icon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton&display=swap">
	<!-- meta -->
<?php }} ?>
