<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 14:38:47
         compiled from "/home/manabi-creation/www/school/admin/contents/teacher_role/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1732748515eaa64679cdc45-14653517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3461702ef91b4beff96ec048e073112d819b45c8' => 
    array (
      0 => '/home/manabi-creation/www/school/admin/contents/teacher_role/template/list.tpl',
      1 => 1588223060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732748515eaa64679cdc45-14653517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    'mst_teacher_role' => 0,
    'teacher_role' => 0,
    'arr_post' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa6467a0a212_89004672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa6467a0a212_89004672')) {function content_5eaa6467a0a212_89004672($_smarty_tpl) {?>			
			<script type="text/javascript">
				sortableInit();
			</script>
			
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
				<thead>
					<tr>
						<th></th>
						<th>役割</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["teacher_role"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["teacher_role"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mst_teacher_role']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["teacher_role"]->key => $_smarty_tpl->tpl_vars["teacher_role"]->value) {
$_smarty_tpl->tpl_vars["teacher_role"]->_loop = true;
?>
					<tr id="<?php echo $_smarty_tpl->tpl_vars['teacher_role']->value['id_teacher_role'];?>
">
						<td class="pos_ac pos_vm move_i"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mode'])===null||$tmp==='' ? '' : $tmp)=="search") {?>☓<?php } else { ?><i class="fa fa-r fa-sort"><span></span></i><?php }?></td>
						<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['teacher_role']->value['id_teacher_role'];?>
"><?php echo $_smarty_tpl->tpl_vars['teacher_role']->value['name'];?>
</a></td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['teacher_role']->value['id_teacher_role'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['teacher_role']->value['id_teacher_role'];?>
"<?php if ($_smarty_tpl->tpl_vars['teacher_role']->value['display_flg']==1) {?> checked<?php }?>>
									<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['teacher_role']->value['id_teacher_role'];?>
">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac">
							<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['teacher_role']->value['id_teacher_role'];?>
">削除</a>
						</td>
					</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars["teacher_role"]->_loop) {
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
