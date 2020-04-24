<?php /* Smarty version Smarty-3.1.18, created on 2020-04-24 15:39:42
         compiled from "/home/manabi-creation/www/admin/contents/curriculum/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4620821985ea289aeac6357-75686832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '288c353432351da4c0566aee08890fcb2eb2a816' => 
    array (
      0 => '/home/manabi-creation/www/admin/contents/curriculum/template/form.tpl',
      1 => 1587710085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4620821985ea289aeac6357-75686832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'arr_post' => 0,
    '_ARR_IMAGE' => 0,
    'template_image' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea289aeb30744_76873415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea289aeb30744_76873415')) {function content_5ea289aeb30744_76873415($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_radios.php';
?>			<form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">メニュー名称</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['menu'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['menu'];?>
</p><?php }?>
							<input type="text" class="form-control" name="menu" id="menu" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['menu'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">カリキュラム名称</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['name'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name'];?>
</p><?php }?>
							<textarea class="form-control" name="name" id="name" rows="3"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<?php if ($_smarty_tpl->tpl_vars['_ARR_IMAGE']->value!=null) {?>
						<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_image']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('path'=>$_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value,'dir'=>$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value,'prefix'=>"s_"), 0);?>

					<?php }?>
					<div class="form-group required">
						<label class="col-sm-2 control-label">内容</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['comment'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment'];?>
</p><?php }?>
							<textarea name="comment" id="comment" rows="7" class="form-control ckeditor"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">公開／非公開</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['display_flg'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['display_flg'];?>
</p><?php }?>
							<div class="radio m-r-xs inline">
								<?php echo smarty_function_html_radios(array('name'=>"display_flg",'values'=>1,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['display_flg'])===null||$tmp==='' ? "1" : $tmp),'output'=>"する"),$_smarty_tpl);?>
&nbsp;&nbsp;
								<?php echo smarty_function_html_radios(array('name'=>"display_flg",'values'=>0,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['display_flg'])===null||$tmp==='' ? "1" : $tmp),'output'=>"しない"),$_smarty_tpl);?>

							</div>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?><input type="hidden" name="id_curriculum" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_curriculum'];?>
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
