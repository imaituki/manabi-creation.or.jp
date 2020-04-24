<?php /* Smarty version Smarty-3.1.18, created on 2020-04-24 15:43:45
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21419287895ea02680924f49-96691767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1587710096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21419287895ea02680924f49-96691767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea0268093d090_73956663',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'mst_curriculum' => 0,
    'curriculum' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea0268093d090_73956663')) {function content_5ea0268093d090_73956663($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="curriculum">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
						<span>C</span><span>U</span><span>R</span><span>R</span><span>I</span><span>C</span><span>U</span><span>L</span><span>U</span><span>M</span>
					</span>
					<span class="sub">カリキュラム</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>カリキュラム</li>
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
							<p class="title">CURRICULUM</p>
							<p class="search_img"><img src="/common/image/contents/search.png" alt="CURRICULUM"></p>
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
							<p class="title">CURRICULUM</p>
							<p class="search_img"><img src="/common/image/contents/search.png" alt="CURRICULUM"></p>
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
							<?php  $_smarty_tpl->tpl_vars["curriculum"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["curriculum"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_curriculum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["curriculum"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["curriculum"]->key => $_smarty_tpl->tpl_vars["curriculum"]->value) {
$_smarty_tpl->tpl_vars["curriculum"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["curriculum"]->key;
 $_smarty_tpl->tpl_vars["curriculum"]->index++;
 $_smarty_tpl->tpl_vars["curriculum"]->first = $_smarty_tpl->tpl_vars["curriculum"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopCurriculum"]['first'] = $_smarty_tpl->tpl_vars["curriculum"]->first;
?>
							<li<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopCurriculum']['first']==1) {?> class="first"<?php }?>><a href="#curriculum<?php echo $_smarty_tpl->tpl_vars['curriculum']->value['id_curriculum'];?>
"><i class="fas fa-angle-right"></i><?php echo $_smarty_tpl->tpl_vars['curriculum']->value['menu'];?>
</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<?php  $_smarty_tpl->tpl_vars["curriculum"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["curriculum"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_curriculum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["curriculum"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["curriculum"]->key => $_smarty_tpl->tpl_vars["curriculum"]->value) {
$_smarty_tpl->tpl_vars["curriculum"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["curriculum"]->key;
 $_smarty_tpl->tpl_vars["curriculum"]->index++;
 $_smarty_tpl->tpl_vars["curriculum"]->first = $_smarty_tpl->tpl_vars["curriculum"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopCurriculum"]['first'] = $_smarty_tpl->tpl_vars["curriculum"]->first;
?>
						<div class="unit mb50">
							<h2 class="hl_2 mb30" id="curriculum<?php echo $_smarty_tpl->tpl_vars['curriculum']->value['id_curriculum'];?>
"><span class="border"><span class="title"><?php echo $_smarty_tpl->tpl_vars['curriculum']->value['menu'];?>
</span></span></h2>
							<div class="curriculum_img mb20">
								<div class="row no-gutters">
									<div class="col-xs-5 height-1 disp_tbl2">
										<div class="disp_td">
											<?php if ($_smarty_tpl->tpl_vars['curriculum']->value['image1']!=null) {?><p class="pos_ac mb10"><img src="/common/photo/curriculum/image1/m_<?php echo $_smarty_tpl->tpl_vars['curriculum']->value['image1'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['curriculum']->value['subname'];?>
"></p><?php }?>
											<p class="pos_ac name">
												<?php echo nl2br($_smarty_tpl->tpl_vars['curriculum']->value['name']);?>

											</p>
										</div>
									</div>
									<div class="col-xs-7 height-1">
										<?php if ($_smarty_tpl->tpl_vars['curriculum']->value['image2']!=null) {?><img src="/common/photo/curriculum/image2/l_<?php echo $_smarty_tpl->tpl_vars['curriculum']->value['image2'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['curriculum']->value['subname'];?>
"><?php }?>
									</div>
								</div>
							</div>
							<p><?php echo $_smarty_tpl->tpl_vars['curriculum']->value['comment'];?>
</p>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
</script>
</div>
</body>
</html>
<?php }} ?>
