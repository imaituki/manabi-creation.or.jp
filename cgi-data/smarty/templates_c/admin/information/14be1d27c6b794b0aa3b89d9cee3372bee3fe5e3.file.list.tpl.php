<?php /* Smarty version Smarty-3.1.18, created on 2020-04-01 05:42:44
         compiled from "D:\xampp\htdocs\VirtualHost\earth-8.com\html\admin\contents\toys\template\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10652645515e840c60020c15-39460573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14be1d27c6b794b0aa3b89d9cee3372bee3fe5e3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\html\\admin\\contents\\toys\\template\\list.tpl',
      1 => 1585712467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10652645515e840c60020c15-39460573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e840c600a7f24_77717432',
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_toys' => 0,
    'toys' => 0,
    '_ARR_IMAGE' => 0,
    'file' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e840c600a7f24_77717432')) {function content_5e840c600a7f24_77717432($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\cgi-data\\smarty\\libs\\plugins\\modifier.date_format.php';
?>			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
				<thead>
					<tr>
						<th>日付</th>
						<th>掲載期間</th>
						<th>タイトル</th>
						<th class="photo">写真</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["toys"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["toys"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_toys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["toys"]->key => $_smarty_tpl->tpl_vars["toys"]->value) {
$_smarty_tpl->tpl_vars["toys"]->_loop = true;
?>
					<tr>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['toys']->value['date'],"%Y/%m/%d");?>
</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['toys']->value['display_indefinite']==0) {?>
								<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['toys']->value['display_start'],"%Y/%m/%d");?>
<br />
								<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['toys']->value['display_end'],"%Y/%m/%d");?>

							<?php } else { ?>
								無期限
							<?php }?>
						</td>
						<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['toys']->value['id_toys'];?>
"><?php echo $_smarty_tpl->tpl_vars['toys']->value['title'];?>
</a></td>
						<td class="pos_al">
							<div class="lightBoxGallery">
								<?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_ARR_IMAGE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["file"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["file"]['iteration']++;
?>
									<?php if ($_smarty_tpl->tpl_vars['toys']->value[$_smarty_tpl->tpl_vars['file']->value['name']]) {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/l_<?php echo $_smarty_tpl->tpl_vars['toys']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['file']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
" data-gallery=""><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/s_<?php echo $_smarty_tpl->tpl_vars['toys']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" width="50" /></a>
									<?php }?>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['file']['iteration']%3==0) {?><br /><?php }?>
								<?php } ?>
							</div>
						</td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['toys']->value['id_toys'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['toys']->value['id_toys'];?>
"<?php if ($_smarty_tpl->tpl_vars['toys']->value['display_flg']==1) {?> checked<?php }?>>
									<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['toys']->value['id_toys'];?>
">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac">
							<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['toys']->value['id_toys'];?>
">削除</a>
						</td>
					</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars["toys"]->_loop) {
?>
					<tr>
						<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
は見つかりません。</td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="10"><ul class="pagination pull-right">
							</ul></td>
					</tr>
				</tfoot>
			</table>
			<div id="blueimp-gallery" class="blueimp-gallery">
				<div class="slides"></div>
				<h3 class="title"></h3>
				<a class="prev">‹</a>
				<a class="next">›</a>
				<a class="close">×</a>
				<a class="play-pause"></a>
				<ol class="indicator"></ol>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
