<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 13:55:34
         compiled from "/home/manabi-creation/www/admin/contents/staff/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6660916065eaa5a460de089-19297313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc287a9d07f249711986653cb4395eef1bf7a378' => 
    array (
      0 => '/home/manabi-creation/www/admin/contents/staff/template/list.tpl',
      1 => 1588222240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6660916065eaa5a460de089-19297313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    'mst_staff' => 0,
    'staff' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa5a46112354_13984488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa5a46112354_13984488')) {function content_5eaa5a46112354_13984488($_smarty_tpl) {?>			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
				<thead>
					<tr>
						<th>ID</th>
						<th>社員名</th>
						<th>TEL</th>
						<th>メール</th>
						<th class="showhide">有効</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["staff"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["staff"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mst_staff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["staff"]->key => $_smarty_tpl->tpl_vars["staff"]->value) {
$_smarty_tpl->tpl_vars["staff"]->_loop = true;
?>
					<tr id="<?php echo $_smarty_tpl->tpl_vars['staff']->value['id_master_staff'];?>
">
						<td class="pos_ac"><?php echo $_smarty_tpl->tpl_vars['staff']->value['id_master_staff'];?>
</td>
						<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['staff']->value['id_master_staff'];?>
"><?php echo $_smarty_tpl->tpl_vars['staff']->value['name'];?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['staff']->value['tel'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['staff']->value['mail'];?>
</td>
						<td>
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_valid" id="valid<?php echo $_smarty_tpl->tpl_vars['staff']->value['id_master_staff'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['staff']->value['id_master_staff'];?>
"<?php if ($_smarty_tpl->tpl_vars['staff']->value['valid_flg']==1) {?> checked<?php }?>>
									<label class="onoffswitch-label" for="valid<?php echo $_smarty_tpl->tpl_vars['staff']->value['id_master_staff'];?>
">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['staff']->value['master_flg']==1) {?>
								削除不可
							<?php } else { ?>
								<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['staff']->value['id_master_staff'];?>
">削除</a>
							<?php }?>
						</td>
					</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars["staff"]->_loop) {
?>
					<tr>
						<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
は見つかりません。</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
