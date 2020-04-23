<?php /* Smarty version Smarty-3.1.18, created on 2020-04-01 05:53:01
         compiled from "D:\xampp\htdocs\VirtualHost\earth-8.com\html\admin\contents\toys_info\template\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11938385745e840f7466a599-04676480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '424e26e3db34a6fa51afb9153003d1df8725a47a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\html\\admin\\contents\\toys_info\\template\\form.tpl',
      1 => 1585713177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11938385745e840f7466a599-04676480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e840f746cd7a8_21725900',
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'OptionToysInfoCategory' => 0,
    'arr_post' => 0,
    '_ARR_IMAGE' => 0,
    'template_image' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e840f746cd7a8_21725900')) {function content_5e840f746cd7a8_21725900($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\cgi-data\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\cgi-data\\smarty\\libs\\plugins\\function.html_radios.php';
?>			<form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">カテゴリ</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['id_toys_info_category'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['id_toys_info_category'];?>
</p><?php }?>
							<select name="id_toys_info_category" class="form-control">
								<option value="">選択してください</option>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionToysInfoCategory']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['id_toys_info_category']),$_smarty_tpl);?>

							</select>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">名称</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['name'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name'];?>
</p><?php }?>
							<input type="text" class="form-control" name="name" id="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">本文</label>
						<div class="col-sm-9">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['comment'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment'];?>
</p><?php }?>
							<textarea name="comment" id="comment" rows="7" class="form-control ckeditor"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<?php if ($_smarty_tpl->tpl_vars['_ARR_IMAGE']->value!=null) {?>
						<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_image']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('path'=>$_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value,'dir'=>$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value,'prefix'=>"s_"), 0);?>

					<?php }?>
					<div class="form-group">
						<label class="col-sm-2 control-label">表示／非表示</label>
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
					<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?><input type="hidden" name="id_toys_info" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_toys_info'];?>
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
