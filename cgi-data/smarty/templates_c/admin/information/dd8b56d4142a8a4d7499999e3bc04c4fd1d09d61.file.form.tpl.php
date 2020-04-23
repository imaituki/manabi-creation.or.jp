<?php /* Smarty version Smarty-3.1.18, created on 2020-04-22 06:03:40
         compiled from "D:\xampp\htdocs\VirtualHost\manabi-creation.or.jp\www\admin\contents\information\template\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7030719085e9fc21c3b0983-69976577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd8b56d4142a8a4d7499999e3bc04c4fd1d09d61' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\manabi-creation.or.jp\\www\\admin\\contents\\information\\template\\form.tpl',
      1 => 1585661603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7030719085e9fc21c3b0983-69976577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'arr_post' => 0,
    'OptionInformationCategory' => 0,
    '_ARR_IMAGE' => 0,
    'template_image' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e9fc21c45a816_40605184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9fc21c45a816_40605184')) {function content_5e9fc21c45a816_40605184($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\VirtualHost\\manabi-creation.or.jp\\cgi-data\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include 'D:\\xampp\\htdocs\\VirtualHost\\manabi-creation.or.jp\\cgi-data\\smarty\\libs\\plugins\\function.html_radios.php';
?>			<form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">日付 </label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['date'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['date'];?>
</p><?php }?>
							<div class="input-daterange input-group" id="datepicker">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input type="text" class="input-sm form-control datepicker" name="date" id="date" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['date'])===null||$tmp==='' ? '' : $tmp);?>
" readonly>
							</div>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">カテゴリ</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['id_information_category'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['id_information_category'];?>
</p><?php }?>
							<select name="id_information_category" class="form-control">
								<option value="">選択してください</option>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionInformationCategory']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['id_information_category']),$_smarty_tpl);?>

							</select>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">タイトル</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['title'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['title'];?>
</p><?php }?>
							<input type="text" class="form-control" name="title" id="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">小見出し</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['subtitle'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['subtitle'];?>
</p><?php }?>
							<textarea class="form-control" name="subtitle" id="subtitle"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['subtitle'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
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
					<div class="form-group">
						<label class="col-sm-2 control-label">対象</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['target'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['target'];?>
</p><?php }?>
							<input type="text" class="form-control" name="target" id="target" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['target'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">定員</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['capacity'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['capacity'];?>
</p><?php }?>
							<input type="text" class="form-control" name="capacity" id="capacity" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['capacity'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">参加費</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['entry_fee'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['entry_fee'];?>
</p><?php }?>
							<input type="text" class="form-control" name="entry_fee" id="entry_fee" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['entry_fee'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">会場</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['venue'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['venue'];?>
</p><?php }?>
							<textarea class="form-control" name="venue" id="venue"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['venue'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<?php if ($_smarty_tpl->tpl_vars['_ARR_IMAGE']->value!=null) {?>
						<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_image']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('path'=>$_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value,'dir'=>$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value,'prefix'=>"s_"), 0);?>

					<?php }?>
					<div class="form-group">
						<label class="col-sm-2 control-label">掲載期間 </label>
						<div class="col-sm-4">
							<div class="radio m-r-xs inline mb15">
								<?php echo smarty_function_html_radios(array('name'=>"display_indefinite",'values'=>1,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['display_indefinite'])===null||$tmp==='' ? "1" : $tmp),'output'=>"設定しない"),$_smarty_tpl);?>
&nbsp;&nbsp;
								<?php echo smarty_function_html_radios(array('name'=>"display_indefinite",'values'=>0,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['display_indefinite'])===null||$tmp==='' ? "1" : $tmp),'output'=>"設定する"),$_smarty_tpl);?>

							</div>
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['display_start'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['display_start'];?>
</p><?php }?>
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['display_end'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['display_end'];?>
</p><?php }?>
							<div class="input-daterange input-group" id="datepicker">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input type="text" class="input-sm form-control datepicker" name="display_start" id="display_start" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['display_start'])===null||$tmp==='' ? '' : $tmp);?>
" readonly>
								<span class="input-group-addon">～</span>
								<input type="text" class="input-sm form-control datepicker" name="display_end" id="display_end"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['display_end'])===null||$tmp==='' ? '' : $tmp);?>
" readonly>
							</div>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
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
					<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?><input type="hidden" name="id_information" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_information'];?>
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
