<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 14:45:15
         compiled from "./list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7660651125ea163dab89737-74989435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92b8fc6854888eba839331496c02107d1567356a' => 
    array (
      0 => './list.tpl',
      1 => 1588223031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7660651125ea163dab89737-74989435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea163daba68a1_56307460',
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
<?php if ($_valid && !is_callable('content_5ea163daba68a1_56307460')) {function content_5ea163daba68a1_56307460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
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
<body id="school">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header -->
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back sp_none">
			<img src="/common/image/contents/top.jpg" alt="学校紹介">
		</div>
		<div class="img_back pc_none">
			<img src="/common/image/contents/top_sp.jpg" alt="学校紹介">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<span>S</span><span>C</span><span>H</span><span>O</span><span>O</span><span>L</span>
					</span>
					<span class="sub">学校紹介</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>学校紹介</li>
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
							<h2 class="hl_2 mb50" id="area<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><span class="border"><span class="title"><?php echo $_smarty_tpl->tpl_vars['area']->value;?>
</span></span></h2>
							<div class="row mb50">
							<?php  $_smarty_tpl->tpl_vars["school"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["school"]->_loop = false;
 $_smarty_tpl->tpl_vars["key2"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_school']->value[$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["school"]->key => $_smarty_tpl->tpl_vars["school"]->value) {
$_smarty_tpl->tpl_vars["school"]->_loop = true;
 $_smarty_tpl->tpl_vars["key2"]->value = $_smarty_tpl->tpl_vars["school"]->key;
?>
								<div class="col-xs-6 height-1 mb30 school_box school_unit">
									<a href="./?sc=<?php echo $_smarty_tpl->tpl_vars['school']->value['id_school'];?>
" class="ov">
										<div class="photo">
											<img src="<?php if ($_smarty_tpl->tpl_vars['school']->value['image1']!=null) {?>/common/photo/school/image1/m_<?php echo $_smarty_tpl->tpl_vars['school']->value['image1'];?>
<?php } else { ?>/common/image/contents/null.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['school']->value['short_name'];?>
">
										</div>
										<div class="text_unit height-2">
											<h3 class="mb10"><?php echo $_smarty_tpl->tpl_vars['school']->value['short_name'];?>
</h3>
											<p class="pos_ac"><?php echo smarty_function_html_select_ken(array('pre'=>"1",'selected'=>$_smarty_tpl->tpl_vars['school']->value['prefecture']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['school']->value['address1'];?>
<?php echo $_smarty_tpl->tpl_vars['school']->value['address2'];?>
</p>
										</div>
										<div class="triangle _event"></div>
										<i class="fas fa-arrow-right"></i>
									</a>
								</div>
								<?php } ?>
							</div>
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
