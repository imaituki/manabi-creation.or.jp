<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 14:32:01
         compiled from "./mail2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17161258325ea0f1f6287380-21122354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62c2b02a2350936d71e66ab28d819b03f901ce3b' => 
    array (
      0 => './mail2.tpl',
      1 => 1588224558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17161258325ea0f1f6287380-21122354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea0f1f62c7234_22321350',
  'variables' => 
  array (
    'mail_conf' => 0,
    'arr_post' => 0,
    'OptionContactType' => 0,
    'OptionContactSchoolYear' => 0,
    'OptionContactZoom' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea0f1f62c7234_22321350')) {function content_5ea0f1f62c7234_22321350($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><?php echo $_smarty_tpl->tpl_vars['mail_conf']->value['master']['header'];?>


--------------------------------------------------------
■ お問合わせ
--------------------------------------------------------
ご用件                  ：<?php echo $_smarty_tpl->tpl_vars['OptionContactType']->value[$_smarty_tpl->tpl_vars['arr_post']->value['type']];?>

保護者氏名              ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>

保護者氏名(フリガナ)    ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>

受講するお子様の学年    ：<?php echo $_smarty_tpl->tpl_vars['OptionContactSchoolYear']->value[$_smarty_tpl->tpl_vars['arr_post']->value['school_year']];?>

受講者氏名              ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['student_name'];?>

受講者氏名(フリガナ)    ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['student_ruby'];?>

住所                    ：〒<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
 <?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']>0) {?><?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'],'pre'=>"1"),$_smarty_tpl);?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address1'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address2'];?>

メールアドレス          ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>

電話番号                ：<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['type'])) {?>
ZOOMオンラインの利用経験：<?php echo $_smarty_tpl->tpl_vars['OptionContactZoom']->value[$_smarty_tpl->tpl_vars['arr_post']->value['zoom']];?>

<?php }?>
--------------------------------------------------------
[ <?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['type'])) {?>その他お問い合わせ<?php } else { ?>お問い合わせ内容<?php }?> ]
<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment'];?>




--------------------------------------------------------
■ お客様の環境情報
--------------------------------------------------------
■ IPアドレス
<?php echo $_SERVER['REMOTE_ADDR'];?>

■ ユーザーエージェント
<?php echo $_SERVER['HTTP_USER_AGENT'];?>


--------------------------------------------------------

<?php echo $_smarty_tpl->tpl_vars['mail_conf']->value['master']['footer'];?>

<?php }} ?>
