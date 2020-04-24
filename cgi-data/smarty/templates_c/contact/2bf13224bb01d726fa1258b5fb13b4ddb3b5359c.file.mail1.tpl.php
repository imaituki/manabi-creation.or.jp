<?php /* Smarty version Smarty-3.1.18, created on 2020-04-24 17:11:29
         compiled from "./mail1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14260151465ea0f1f622ad01-61729682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf13224bb01d726fa1258b5fb13b4ddb3b5359c' => 
    array (
      0 => './mail1.tpl',
      1 => 1587715876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14260151465ea0f1f622ad01-61729682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea0f1f627e8a8_34249462',
  'variables' => 
  array (
    'mail_conf' => 0,
    'arr_post' => 0,
    'c1' => 0,
    'g' => 0,
    'c2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea0f1f627e8a8_34249462')) {function content_5ea0f1f627e8a8_34249462($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><?php echo $_smarty_tpl->tpl_vars['mail_conf']->value['user']['header'];?>

<?php echo $_smarty_tpl->getSubTemplate ("array.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


--------------------------------------------------------
■ お問合わせ
--------------------------------------------------------
ご用件                  ：<?php echo $_smarty_tpl->tpl_vars['c1']->value[$_smarty_tpl->tpl_vars['arr_post']->value['content']];?>

保護者氏名              ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>

保護者氏名(フリガナ)    ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>

受講するお子様の学年    ：<?php echo $_smarty_tpl->tpl_vars['g']->value[$_smarty_tpl->tpl_vars['arr_post']->value['g']];?>

受講者氏名(フリガナ)    ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>

受講者氏名              ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>

住所                    ：〒<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
 <?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']>0) {?><?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'],'pre'=>"1"),$_smarty_tpl);?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address1'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address2'];?>

メールアドレス          ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>

電話番号                ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['content'])) {?>
ZOOMオンラインの利用経験：<?php echo $_smarty_tpl->tpl_vars['c2']->value[$_smarty_tpl->tpl_vars['arr_post']->value['content2']];?>

<?php }?>
--------------------------------------------------------
[ <?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['content'])) {?>その他お問い合わせ<?php } else { ?>お問い合わせ内容<?php }?> ]
<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment'];?>


--------------------------------------------------------

<?php echo $_smarty_tpl->tpl_vars['mail_conf']->value['user']['footer'];?>

<?php }} ?>
