<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 16:45:44
         compiled from "/home/manabi-creation/www//common/include/meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:629951265ea030e23da277-89000676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bcf38e9b23f11d26fa54e1ca874c82f62e6e93f' => 
    array (
      0 => '/home/manabi-creation/www//common/include/meta.tpl',
      1 => 1587791574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629951265ea030e23da277-89000676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea030e241f205_88794118',
  'variables' => 
  array (
    '_HTML_HEADER' => 0,
    '_HTML_HEADER_DEFAULT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea030e241f205_88794118')) {function content_5ea030e241f205_88794118($_smarty_tpl) {?><meta http-equiv="X-UA-Compatible" content="IE=edge">
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
