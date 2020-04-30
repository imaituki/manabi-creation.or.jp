<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 14:42:59
         compiled from "/home/manabi-creation/www/school/admin/contents/staff/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19889049215eaa656326c934-10247168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eac9e83806669181e3ed5e54deb7e4c0936c034' => 
    array (
      0 => '/home/manabi-creation/www/school/admin/contents/staff/template/form.tpl',
      1 => 1588223057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19889049215eaa656326c934-10247168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'arr_post' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa65632e1786_11962879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa65632e1786_11962879')) {function content_5eaa65632e1786_11962879($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_radios.php';
?>			<form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">お名前</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['name'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name'];?>
</p><?php }?>
							<input type="text" class="form-control" name="name" id="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">電話番号</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['tel'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</p><?php }?>
							<input type="text" class="form-control" name="tel" id="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">メールアドレス</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['mail'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
							<input type="text" class="form-control" name="mail" id="mail" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">アカウント</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['account'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['account'];?>
</p><?php }?>
							<input type="text" class="form-control" name="account" id="account" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['account'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">パスワード</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['password'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['password'];?>
</p><?php }?>
							<input type="password" class="form-control" name="password" id="password" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['password'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="4～32文字" maxlength="32" />
							<label><input type="checkbox" id="displaypass"> パスワードを表示する</label>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">有効／無効</label>
						<div class="col-sm-6">
							<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['master_flg']==1) {?>
								変更不可
								<input type="hidden" name="master_flg" value="1" />
								<input type="hidden" name="valid_flg" value="1" />
							<?php } else { ?>
								<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['valid_flg'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['valid_flg'];?>
</p><?php }?>
								<div class="radio m-r-xs inline">
									<?php echo smarty_function_html_radios(array('name'=>"valid_flg",'values'=>0,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['valid_flg'])===null||$tmp==='' ? "0" : $tmp),'output'=>"無効"),$_smarty_tpl);?>
&nbsp;&nbsp;
									<?php echo smarty_function_html_radios(array('name'=>"valid_flg",'values'=>1,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['valid_flg'])===null||$tmp==='' ? "0" : $tmp),'output'=>"有効"),$_smarty_tpl);?>

								</div>
							<?php }?>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?><input type="hidden" name="id_school_staff" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_school_staff'];?>
" /><?php }?>
					<input type="hidden" name="_contents_dir" id="_contents_dir" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
" />
					<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_CONF_PATH']->value;?>
" />
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2 pos_ar">
							<button class="btn btn-primary"  type="submit">この内容で登録</button>
						</div>
					</div>
				</div>
			</form>
<?php }} ?>
