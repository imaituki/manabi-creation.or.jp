<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 14:04:20
         compiled from "/home/manabi-creation/www/admin/contents/contact/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18093553725eaa5c54a0fdc9-83926492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d987b5f24e524f61c1dedfa2d4c178c79812234' => 
    array (
      0 => '/home/manabi-creation/www/admin/contents/contact/template/list.tpl',
      1 => 1588222235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18093553725eaa5c54a0fdc9-83926492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    'mst_contact' => 0,
    'contact' => 0,
    'OptionContactType' => 0,
    'OptionContactSchoolYear' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa5c54a39ec4_34163877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa5c54a39ec4_34163877')) {function content_5eaa5c54a39ec4_34163877($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?>			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
				<thead>
					<tr>
						<th>お問い合わせ日</th>
						<th>要件</th>
						<th>保護者氏名</th>
						<th>受講するお子様の学年</th>
						<th>電話番号</th>
						<th>メールアドレス</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["contact"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["contact"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mst_contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["contact"]->key => $_smarty_tpl->tpl_vars["contact"]->value) {
$_smarty_tpl->tpl_vars["contact"]->_loop = true;
?>
					<tr>
						<td><a href="./detail.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['contact']->value['entry_date'],"%Y/%m/%d<br>%H:%M:%S");?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['OptionContactType']->value[$_smarty_tpl->tpl_vars['contact']->value['type']];?>
</td>
						<td>(<?php echo $_smarty_tpl->tpl_vars['contact']->value['ruby'];?>
)<br><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['OptionContactSchoolYear']->value[$_smarty_tpl->tpl_vars['contact']->value['school_year']];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['tel'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['mail'];?>
</td>
					</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars["contact"]->_loop) {
?>
					<tr>
						<td colspan="5"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
は見つかりません。</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
