<?php /* Smarty version Smarty-3.1.18, created on 2020-04-22 06:39:38
         compiled from "D:\xampp\htdocs\VirtualHost\manabi-creation.or.jp\www\common\include\meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:979529665e9fca8ace4786-63349289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90fb588a42f73cad026ca80786d053725b395194' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\manabi-creation.or.jp\\www\\common\\include\\meta.tpl',
      1 => 1587525954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '979529665e9fca8ace4786-63349289',
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
  'unifunc' => 'content_5e9fca8aeb59c6_42601754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9fca8aeb59c6_42601754')) {function content_5e9fca8aeb59c6_42601754($_smarty_tpl) {?><meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap">
<?php }} ?>
