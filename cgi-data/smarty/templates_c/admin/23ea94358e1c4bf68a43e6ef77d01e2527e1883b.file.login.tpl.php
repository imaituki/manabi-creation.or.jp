<?php /* Smarty version Smarty-3.1.18, created on 2020-05-01 10:14:16
         compiled from "./login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8065969165eaa5b266467b8-58135200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23ea94358e1c4bf68a43e6ef77d01e2527e1883b' => 
    array (
      0 => './login.tpl',
      1 => 1588295654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8065969165eaa5b266467b8-58135200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa5b266979b0_42185512',
  'variables' => 
  array (
    '_CONTENTS_NAME' => 0,
    '_HTML_HEADER_DEFAULT' => 0,
    'template_javascript' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa5b266979b0_42185512')) {function content_5eaa5b266979b0_42185512($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
｜<?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['title'];?>
</title>
	<link href="/admin/common/css/bootstrap.min.css" rel="stylesheet">
	<link href="/admin/common/css/font-awesome.css" rel="stylesheet">
	<link href="/admin/common/css/animate.css" rel="stylesheet">
	<link href="/admin/common/css/style.css" rel="stylesheet">
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body class="gray-bg">
	<div class="middle-box text-center loginscreen animated fadeInDown">
		<div>
			<div class="logo">
				<img src="/admin/common/img/logo02.png" alt="学校用管理画面">
			</div>
			<h3>ログイン</h3>
			<p>アカウントとパスワードでログインしてください</p>
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['error'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['error'];?>
</p><?php }?>
			<div id="msg"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp)==null) {?> style="display:none"<?php }?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'])===null||$tmp==='' ? '' : $tmp)!=null) {?> class="error mb20"<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ok'])===null||$tmp==='' ? '' : $tmp)!=null) {?> class="ok mb20"<?php }?>><?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['code'])===null||$tmp==='' ? '' : $tmp);?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['password'])===null||$tmp==='' ? '' : $tmp);?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['error'])===null||$tmp==='' ? '' : $tmp);?>
<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ok'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo $_smarty_tpl->tpl_vars['message']->value['ok'];?>
<?php }?></div>
			<form class="m-t" role="form" action="login.php" method="post">
					<div class="form-group">
						<input type="account" name="account" class="form-control" placeholder="アカウント" required="">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="パスワード" required="">
					</div>
					<button type="submit" class="btn btn-primary block full-width m-b">ログイン</button>
			</form>
		</div>
	</div>
</body>
</html>
<?php }} ?>
