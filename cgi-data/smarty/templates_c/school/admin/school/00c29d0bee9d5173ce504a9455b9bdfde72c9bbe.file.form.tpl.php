<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 15:10:40
         compiled from "/home/manabi-creation/www/school/admin/contents/school/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11518161485eaa6be0278e76-03000826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00c29d0bee9d5173ce504a9455b9bdfde72c9bbe' => 
    array (
      0 => '/home/manabi-creation/www/school/admin/contents/school/template/form.tpl',
      1 => 1588223056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11518161485eaa6be0278e76-03000826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'arr_post' => 0,
    'OptionArea' => 0,
    'OptionCurriculum' => 0,
    'curriculum' => 0,
    'key' => 0,
    '_ARR_IMAGE' => 0,
    'template_image' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa6be0356431_81476465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa6be0356431_81476465')) {function content_5eaa6be0356431_81476465($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_checkboxes.php';
?>			<form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">公開名称</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['short_name'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['short_name'];?>
</p><?php }?>
							<input type="text" class="form-control" name="short_name" id="short_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['short_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
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
							<div class="row mb10">
								<div class="col-sm-7">
									<div class="input-group">
										<input type="text" class="form-control" name="zip" id="zip" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zip'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="000-0000" maxlength="8" />
										<span class="input-group-addon">
											<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');">郵便番号から検索する</a>
										</span>
									</div>
								</div>
							</div>
							<div class="row mb10">
								<div class="col-sm-5">
									<select name="prefecture" class="form-control">
										<?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture']),$_smarty_tpl);?>

									</select>
								</div>
							</div>
							<input type="text" class="form-control mb10" name="address1" id="address1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address1'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="市区町村・番地" />
							<input type="text" class="form-control" name="address2" id="address2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address2'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="建物・マンション名" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">電話番号</label>
						<div class="col-sm-4">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['tel'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</p><?php }?>
							<input type="text" class="form-control" name="tel" id="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="14" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">FAX番号</label>
						<div class="col-sm-4">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['fax'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['fax'];?>
</p><?php }?>
							<input type="text" class="form-control" name="fax" id="fax" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['fax'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="14" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">メールアドレス</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['mail'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
							<p>※ お問い合わせ先のメールアドレスになります。</p>
							<input type="text" class="form-control" name="mail" id="mail" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">受付時間</label>
						<div class="col-sm-4">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['reception_time'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['reception_time'];?>
</p><?php }?>
							<input type="text" class="form-control" name="reception_time" id="reception_time" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['reception_time'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="32" placeholder="例）9:00～18：00（日曜定休）" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">学校紹介</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['comment'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment'];?>
</p><?php }?>
							<textarea class="form-control" name="comment" id="comment" rows="5"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
						</div>
					</div>
					
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">取り扱いカリキュラム</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['curriculum_id'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['curriculum_id'];?>
</p><?php }?>
							<?php  $_smarty_tpl->tpl_vars["curriculum"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["curriculum"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionCurriculum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["curriculum"]->key => $_smarty_tpl->tpl_vars["curriculum"]->value) {
$_smarty_tpl->tpl_vars["curriculum"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["curriculum"]->key;
?>
								<div class="i-checks"><?php echo smarty_function_html_checkboxes(array('name'=>"curriculum[id]",'output'=>$_smarty_tpl->tpl_vars['curriculum']->value,'values'=>$_smarty_tpl->tpl_vars['key']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['curriculum']['id'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>
</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Facebook</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['facebook'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['facebook'];?>
</p><?php }?>
							<input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['facebook'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" placeholder="URLをご記入ください" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Twitter</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['twitter'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['twitter'];?>
</p><?php }?>
							<input type="text" class="form-control" name="twitter" id="twitter" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['twitter'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" placeholder="URLをご記入ください" />
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
					<?php if ($_smarty_tpl->tpl_vars['_ARR_IMAGE']->value!=null) {?>
						<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_image']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('path'=>$_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value,'dir'=>$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value,'prefix'=>"s_"), 0);?>

					<?php }?>
					<div class="form-group">
						<label class="col-sm-2 control-label">SEO</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['keyword'])===null||$tmp==='' ? '' : $tmp)!=null||(($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['description'])===null||$tmp==='' ? '' : $tmp)!=null) {?>
								<p class="error">
									<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['keyword'];?>

									<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['description'];?>

								</p>
							<?php }?>
							<p>キーワード</p>
							<input type="text" class="form-control mb10" name="keyword" id="keyword" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['keyword'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="キーワード" />
							<p>ディスクリプション</p>
							<input type="text" class="form-control" name="description" id="description" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="ディスクリプション" />
						</div>
					</div>
					
					
					<div class="hr-line-dashed"></div>
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
