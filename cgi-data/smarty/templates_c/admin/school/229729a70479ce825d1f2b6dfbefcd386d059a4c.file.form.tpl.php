<?php /* Smarty version Smarty-3.1.18, created on 2020-04-24 16:43:46
         compiled from "/home/manabi-creation/www/admin/contents/school/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14265189975ea28b1a281745-85950839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '229729a70479ce825d1f2b6dfbefcd386d059a4c' => 
    array (
      0 => '/home/manabi-creation/www/admin/contents/school/template/form.tpl',
      1 => 1587714220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14265189975ea28b1a281745-85950839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea28b1a341a44_27656021',
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'arr_post' => 0,
    '_ARR_IMAGE' => 0,
    'template_image' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
    'OptionArea' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea28b1a341a44_27656021')) {function content_5ea28b1a341a44_27656021($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
if (!is_callable('smarty_function_html_radios')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_radios.php';
?>			<form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
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
					<?php if ($_smarty_tpl->tpl_vars['_ARR_IMAGE']->value!=null) {?>
						<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_image']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('path'=>$_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value,'dir'=>$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value,'prefix'=>"s_"), 0);?>

					<?php }?>
					<div class="form-group required">
						<label class="col-sm-2 control-label">エリア</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['id_area'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['id_area'];?>
</p><?php }?>
							<select name="id_area" class="form-control">
								<option value="">選択してください</option>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionArea']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['id_area'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

							</select>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">住所</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['zip'])===null||$tmp==='' ? '' : $tmp)!=null||(($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'])===null||$tmp==='' ? '' : $tmp)!=null||(($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['address1'])===null||$tmp==='' ? '' : $tmp)!=null||(($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['address2'])===null||$tmp==='' ? '' : $tmp)!=null) {?>
								<p class="error">
									<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['zip'];?>

									<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'];?>

									<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address1'];?>

									<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address2'];?>

								</p>
							<?php }?>
							<input type="text" class="form-control" name="zip" id="zip" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zip'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="000-0000" maxlength="8" />
							<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');">郵便番号から検索する</a>
							<select name="prefecture" class="form-control">
								<?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture']),$_smarty_tpl);?>

							</select>
							<input type="text" class="form-control" name="address1" id="address1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address1'])===null||$tmp==='' ? '' : $tmp);?>
" />
							<input type="text" class="form-control" name="address2" id="address1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address2'])===null||$tmp==='' ? '' : $tmp);?>
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
" maxlength="14" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">FAX番号</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['fax'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['fax'];?>
</p><?php }?>
							<input type="text" class="form-control" name="fax" id="fax" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['fax'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="14" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">GoogleMap</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['map'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['map'];?>
</p><?php }?>
							<p>
								<strong>【設定方法】</strong><br />
								１．<a href="https://www.google.co.jp/maps/?hl=ja" target="_blank">GoogleMap</a>で検索を行ってください。<br />
								２．共有マークをクリックし、タブ「地図を埋め込む」を選択。<br />
								３．「HTMLをコピー」をクリックして下記欄にコピーしてください。<br />
							</p>
							<textarea class="form-control" name="map" id="map" rows="3"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['map'])===null||$tmp==='' ? '' : $tmp);?>
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
					<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?><input type="hidden" name="id_school" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_school'];?>
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
