<?php /* Smarty version Smarty-3.1.18, created on 2020-03-31 14:38:54
         compiled from "D:\xampp\htdocs\VirtualHost\earth-8.com\html\admin\contents\information_category\template\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8264297905e8339de216493-41291053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c6e68fb337392982766878826ba352ff0664b33' => 
    array (
      0 => 'D:\\xampp\\htdocs\\VirtualHost\\earth-8.com\\html\\admin\\contents\\information_category\\template\\list.tpl',
      1 => 1582010005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8264297905e8339de216493-41291053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_recruit_category' => 0,
    'recruit_category' => 0,
    'arr_post' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e8339de2462f9_68721973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e8339de2462f9_68721973')) {function content_5e8339de2462f9_68721973($_smarty_tpl) {?>			
			<script type="text/javascript">
				sortableInit();
			</script>
			
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
				<thead>
					<tr>
						<th></th>
						<th>カテゴリ名</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["recruit_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["recruit_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_recruit_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["recruit_category"]->key => $_smarty_tpl->tpl_vars["recruit_category"]->value) {
$_smarty_tpl->tpl_vars["recruit_category"]->_loop = true;
?>
					<tr id="<?php echo $_smarty_tpl->tpl_vars['recruit_category']->value['id_recruit_category'];?>
">
						<td class="pos_ac pos_vm move_i"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mode'])===null||$tmp==='' ? '' : $tmp)=="search") {?>☓<?php } else { ?><i class="fa fa-r fa-sort"><span></span></i><?php }?></td>
						<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['recruit_category']->value['id_recruit_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['recruit_category']->value['name'];?>
</a></td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['recruit_category']->value['id_recruit_category'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['recruit_category']->value['id_recruit_category'];?>
"<?php if ($_smarty_tpl->tpl_vars['recruit_category']->value['display_flg']==1) {?> checked<?php }?>>
									<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['recruit_category']->value['id_recruit_category'];?>
">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac">
							<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['recruit_category']->value['id_recruit_category'];?>
">削除</a>
						</td>
					</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars["recruit_category"]->_loop) {
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
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
