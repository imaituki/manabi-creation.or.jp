<?php /* Smarty version Smarty-3.1.18, created on 2020-04-23 10:37:34
         compiled from "./detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5033309705ea0f15e76dde2-96025302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2188843651849d229ec72d945b4ebcb639e332' => 
    array (
      0 => './detail.tpl',
      1 => 1587538845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5033309705ea0f15e76dde2-96025302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    't_information' => 0,
    'OptionCategory' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea0f15e7ecfb9_93860565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea0f15e7ecfb9_93860565')) {function content_5ea0f15e7ecfb9_93860565($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="/common/js/lightbox/import.js"></script>
</head>
<body id="news">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header -->
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back sp_none">
			<img src="/common/image/contents/top.jpg" alt="お知らせ・イベント">
		</div>
		<div class="img_back pc_none">
			<img src="/common/image/contents/top_sp.jpg" alt="お知らせ・イベント">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<span>N</span><span>E</span><span>W</span><span>S</span>
					</span>
					<span class="sub">お知らせ・イベント</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>お知らせ・イベント</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper-t center" id="detail">
			<h2 class="hl_2 mb0">
				<span class="border news_unit">
					<span class="title"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
</span>
					<p class="sub">
						<?php $_smarty_tpl->tpl_vars["OptionCategory"] = new Smarty_variable(array("1"=>"_news","2"=>"_event"), null, 0);?>
						<span class="cat <?php echo $_smarty_tpl->tpl_vars['OptionCategory']->value[$_smarty_tpl->tpl_vars['t_information']->value['id_information_category']];?>
"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['category_name'];?>
</span>
						<span class="date<?php if ($_smarty_tpl->tpl_vars['t_information']->value['id_information_category']==2) {?> <?php echo $_smarty_tpl->tpl_vars['OptionCategory']->value[$_smarty_tpl->tpl_vars['t_information']->value['id_information_category']];?>
<?php }?>">2019.12.12</span>
					</p>
				</span>
			</h2>
			<div class="pos_ac mb30 image1"><img src="<?php if (empty($_smarty_tpl->tpl_vars['t_information']->value['image1'])) {?>/common/image/contents/null2.jpg<?php } else { ?>/common/photo/information/image1/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image1'];?>
<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption1'];?>
"></div>
			<p class="mb30"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['comment'];?>
</p>
			<div class="row mb50">
				<div class="col-xs-4 height-1 mb20">
					<a class="ov" href="<?php if (empty($_smarty_tpl->tpl_vars['t_information']->value['image2'])) {?>/common/image/contents/null2.jpg<?php } else { ?>/common/photo/information/image1/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image2'];?>
<?php }?>" rel="lightbox">
						<div class="img_rect"><img src="<?php if (empty($_smarty_tpl->tpl_vars['t_information']->value['image1'])) {?>/common/image/contents/null2.jpg<?php } else { ?>/common/photo/information/image2/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image2'];?>
<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption2'];?>
"></div>
					</a>
				</div>
				<div class="col-xs-4 height-1 mb20">
					<a class="ov" href="<?php if (empty($_smarty_tpl->tpl_vars['t_information']->value['image3'])) {?>/common/image/contents/null2.jpg<?php } else { ?>/common/photo/information/image1/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image3'];?>
<?php }?>" rel="lightbox">
						<div class="img_rect"><img src="<?php if (empty($_smarty_tpl->tpl_vars['t_information']->value['image1'])) {?>/common/image/contents/null2.jpg<?php } else { ?>/common/photo/information/image3/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image3'];?>
<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption3'];?>
"></div>
					</a>
				</div>
				<div class="col-xs-4 height-1 mb20">
					<a class="ov" href="<?php if (empty($_smarty_tpl->tpl_vars['t_information']->value['image4'])) {?>/common/image/contents/null2.jpg<?php } else { ?>/common/photo/information/image1/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image4'];?>
<?php }?>" rel="lightbox">
						<div class="img_rect"><img src="<?php if (empty($_smarty_tpl->tpl_vars['t_information']->value['image1'])) {?>/common/image/contents/null2.jpg<?php } else { ?>/common/photo/information/image4/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image4'];?>
<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption4'];?>
"></div>
					</a>
				</div>
			</div>
			<div class="button m0auto mb10"><a href="./" class="_type1 ov"><i class="fas fa-caret-left"></i>一覧へ戻る</a></div>
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
