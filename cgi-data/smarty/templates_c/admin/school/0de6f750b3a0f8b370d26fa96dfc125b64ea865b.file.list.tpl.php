<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 15:24:49
         compiled from "/home/manabi-creation/www/admin/contents/school/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12805993235ea289a7d73b82-82779032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de6f750b3a0f8b370d26fa96dfc125b64ea865b' => 
    array (
      0 => '/home/manabi-creation/www/admin/contents/school/template/list.tpl',
      1 => 1588227868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12805993235ea289a7d73b82-82779032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea289a7de9498_66206083',
  'variables' => 
  array (
    'template_pagenavi' => 0,
    'mst_school' => 0,
    'school' => 0,
    'arr_post' => 0,
    'OptionArea' => 0,
    '_ARR_IMAGE' => 0,
    'file' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea289a7de9498_66206083')) {function content_5ea289a7de9498_66206083($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?>			
			<script type="text/javascript">
				sortableInit();
			</script>
			
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
				<thead>
					<tr>
						<th></th>
						<th>エリア</th>
						<th>契約名称</th>
						<th>住所</th>
						<th>TEL／FAX</th>
						<th>写真</th>
						<th class="showhide">表示(ｱｸｾｽ)</th>
						<th class="showhide">表示(HP)</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["school"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["school"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mst_school']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["school"]->key => $_smarty_tpl->tpl_vars["school"]->value) {
$_smarty_tpl->tpl_vars["school"]->_loop = true;
?>
					<tr id="<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
">
						<td class="pos_ac pos_vm move_i"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mode'])===null||$tmp==='' ? '' : $tmp)=="search") {?>☓<?php } else { ?><i class="fa fa-r fa-sort"><span></span></i><?php }?></td>
						<td><?php echo $_smarty_tpl->tpl_vars['OptionArea']->value[$_smarty_tpl->tpl_vars['school']->value['id_area']];?>
</td>
						<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
"><?php echo $_smarty_tpl->tpl_vars['school']->value['name'];?>
</a></td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['school']->value['zip']!=null) {?>〒<?php echo $_smarty_tpl->tpl_vars['school']->value['zip'];?>
<br /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['school']->value['prefecture']>0) {?><?php echo smarty_function_html_select_ken(array('pre'=>1,'selected'=>$_smarty_tpl->tpl_vars['school']->value['prefecture']),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['school']->value['address1'];?>
<?php echo $_smarty_tpl->tpl_vars['school']->value['address2'];?>

						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['school']->value['tel'];?>
<br />
							<?php echo $_smarty_tpl->tpl_vars['school']->value['fax'];?>
<br />
						</td>
						<td class="pos_al">
							<div class="lightBoxGallery">
								<?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_ARR_IMAGE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["file"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["file"]['iteration']++;
?>
									<?php if ($_smarty_tpl->tpl_vars['school']->value[$_smarty_tpl->tpl_vars['file']->value['name']]) {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/l_<?php echo $_smarty_tpl->tpl_vars['school']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['file']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
" data-gallery=""><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/s_<?php echo $_smarty_tpl->tpl_vars['school']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" width="50" /></a>
									<?php }?>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['file']['iteration']%3==0) {?><br /><?php }?>
								<?php } ?>
							</div>
						</td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
"<?php if ($_smarty_tpl->tpl_vars['school']->value['display_flg']==1) {?> checked<?php }?>>
									<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display_hp" id="display_hp<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
"<?php if ($_smarty_tpl->tpl_vars['school']->value['display_hp_flg']==1) {?> checked<?php }?>>
									<label class="onoffswitch-label" for="display_hp<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac">
							<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
">削除</a>
						</td>
					</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars["school"]->_loop) {
?>
					<tr>
						<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
は見つかりません。</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<div id="blueimp-gallery" class="blueimp-gallery">
				<div class="slides"></div>
				<h3 class="title"></h3>
				<a class="prev">‹</a>
				<a class="next">›</a>
				<a class="close">×</a>
				<a class="play-pause"></a>
				<ol class="indicator"></ol>
			</div>
<?php }} ?>
