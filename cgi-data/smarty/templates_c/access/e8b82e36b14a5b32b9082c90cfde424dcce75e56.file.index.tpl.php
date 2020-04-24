<?php /* Smarty version Smarty-3.1.18, created on 2020-04-24 17:28:27
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12290239125ea023b931fcb8-17411486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1587716903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12290239125ea023b931fcb8-17411486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea023b933e8e6_70783274',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'OptionArea' => 0,
    'key' => 0,
    'area' => 0,
    'mst_school' => 0,
    'school' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea023b933e8e6_70783274')) {function content_5ea023b933e8e6_70783274($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- meta -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- meta -->
<link rel="stylesheet" href="/common/css/import.css">
<!-- js -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- js -->
</head>
<body id="access">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header -->
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back sp_none">
			<img src="/common/image/contents/top.jpg" alt="アクセス">
		</div>
		<div class="img_back pc_none">
			<img src="/common/image/contents/top_sp.jpg" alt="アクセス">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<span>A</span><span>C</span><span>C</span><span>E</span><span>S</span><span>S</span>
					</span>
					<span class="sub">アクセス</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>アクセス</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper-t center">
			<div class="row">
				<div class="col-sm-3">
					<!--スマホ時　ID絞込　閉じている時-->
					<div id="search" class="pc_none">
						<div class="search_title">
							<p class="title">NEWS</p>
							<p class="search_img"><img src="/common/image/contents/search.png" alt="NEWS"></p>
							<div class="scroll">
								<a href="###">
									<i class="fas fa-chevron-down blink"></i>
									<i class="fas fa-chevron-down blink2"></i>
									<i class="fas fa-chevron-down blink3"></i>
									<span>click</span>
								</a>
							</div>
						</div>
					</div>
					<!--スマホ時　ID絞込　閉じている時-->

					<div id="search">
						<div class="search_title">
							<p class="title">NEWS</p>
							<p class="search_img"><img src="/common/image/contents/search.png" alt="NEWS"></p>
							<!--スマホ時　ID絞込　開いている時-->
							<div class="scroll pc_none">
								<a href="###">
									<i class="fas fa-chevron-up blink4"></i>
									<i class="fas fa-chevron-up blink5"></i>
									<i class="fas fa-chevron-up blink6"></i>
									<span>close</span>
								</a>
							</div>
							<!--スマホ時　ID絞込　開いている時-->
						</div>
						<ul>
							<?php  $_smarty_tpl->tpl_vars["area"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["area"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionArea']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["area"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["area"]->key => $_smarty_tpl->tpl_vars["area"]->value) {
$_smarty_tpl->tpl_vars["area"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["area"]->key;
 $_smarty_tpl->tpl_vars["area"]->index++;
 $_smarty_tpl->tpl_vars["area"]->first = $_smarty_tpl->tpl_vars["area"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopArea"]['first'] = $_smarty_tpl->tpl_vars["area"]->first;
?>
							<li<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopArea']['first']==1) {?> class="first"<?php }?>><a href="#area<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="fas fa-angle-right"></i><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="access_logo mb50">
						<p class="pos_ac"><img src="/common/image/contents/top/aschool.png" alt="aschool"></p>
					</div>
					<?php  $_smarty_tpl->tpl_vars["area"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["area"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionArea']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["area"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["area"]->key => $_smarty_tpl->tpl_vars["area"]->value) {
$_smarty_tpl->tpl_vars["area"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["area"]->key;
 $_smarty_tpl->tpl_vars["area"]->index++;
 $_smarty_tpl->tpl_vars["area"]->first = $_smarty_tpl->tpl_vars["area"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopArea"]['first'] = $_smarty_tpl->tpl_vars["area"]->first;
?>
						<?php if ($_smarty_tpl->tpl_vars['mst_school']->value[$_smarty_tpl->tpl_vars['key']->value]!=null) {?>
							<h2 class="hl_2 mb30" id="area<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><span class="border"><span class="title"><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
</span></span></h2>
							<?php  $_smarty_tpl->tpl_vars["school"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["school"]->_loop = false;
 $_smarty_tpl->tpl_vars["key2"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_school']->value[$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["school"]->key => $_smarty_tpl->tpl_vars["school"]->value) {
$_smarty_tpl->tpl_vars["school"]->_loop = true;
 $_smarty_tpl->tpl_vars["key2"]->value = $_smarty_tpl->tpl_vars["school"]->key;
?>
							<div class="access_unit mb50">
								<h3 class="hl_4 mb20">▼<?php echo $_smarty_tpl->tpl_vars['school']->value['name'];?>
</h3>
								<p class="map mb20">
									<?php echo $_smarty_tpl->tpl_vars['school']->value['map'];?>

								</p>
								<ul class="access_info">
									<li><span>住所：<?php if ($_smarty_tpl->tpl_vars['school']->value['prefecture']>0) {?><?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['school']->value['prefecture'],'pre'=>"1"),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['school']->value['address1'];?>
<?php echo $_smarty_tpl->tpl_vars['school']->value['address2'];?>
</span></li>
									<?php if ($_smarty_tpl->tpl_vars['school']->value['tel']!=null) {?><li><span>電話番号：<?php echo $_smarty_tpl->tpl_vars['school']->value['tel'];?>
</span></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['school']->value['fax']!=null) {?><li><span>ファックス番号：<?php echo $_smarty_tpl->tpl_vars['school']->value['fax'];?>
</span></li><?php }?>
								</ul>
							</div>
							<?php } ?>
						<?php }?>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
<!-- footer -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- footer -->
<script>
</script>
</div>
</body>
</html>
<?php }} ?>
