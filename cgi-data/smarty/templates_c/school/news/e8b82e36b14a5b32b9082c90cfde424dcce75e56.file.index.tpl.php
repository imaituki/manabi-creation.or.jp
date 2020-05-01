<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 16:47:08
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2922676275ea030e23b1d04-17032048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1588232826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2922676275ea030e23b1d04-17032048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea030e23d2424_82143586',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'displaySchool' => 0,
    'OptionInformationCategory' => 0,
    'key' => 0,
    'category' => 0,
    't_school_information' => 0,
    'information' => 0,
    'page_navi' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea030e23d2424_82143586')) {function content_5ea030e23d2424_82143586($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/modifier.date_format.php';
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
		<div class="img_back">
			<img src="/common/image/contents/school/title.jpg" alt="お知らせ・イベント">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>

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
				<li><a href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
</a></li>
				<li>お知らせ・イベント</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper-t center">
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
						<li class="first"><a href="./?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
"><i class="fas fa-angle-right"></i>すべて</a></li>
						<?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionInformationCategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["category"]->key;
?>
						<li><a href="./?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
&cat=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="fas fa-angle-right"></i><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-sm-9" id="news">
				<h2 class="hl_2 mb50"><span class="border"><span class="title">お知らせ</span></span></h2>
				<div class="row mb50">
					<?php  $_smarty_tpl->tpl_vars["information"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["information"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_school_information']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["information"]->key => $_smarty_tpl->tpl_vars["information"]->value) {
$_smarty_tpl->tpl_vars["information"]->_loop = true;
?>
					<div class="news-tab-<?php echo $_smarty_tpl->tpl_vars['information']->value['category_id'];?>
 col-sm-4 col-xs-6 height-1 mb30 news_box news_unit">
						<a href="./detail.php?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['information']->value['id_school_information'];?>
" class="ov">
							<div class="photo img_rect new_triangle">
								<img src="<?php if ($_smarty_tpl->tpl_vars['information']->value['image1']!=null) {?>/common/photo/school_information/image1/m_<?php echo $_smarty_tpl->tpl_vars['information']->value['image1'];?>
<?php } else { ?>/common/image/contents/null.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['information']->value['title'];?>
">
							</div>
							<div class="text_unit height-2">
								<p class="sub">
									<span class="cat <?php if ($_smarty_tpl->tpl_vars['information']->value['category_id']==2) {?>_event<?php } else { ?>_news<?php }?>"><?php echo $_smarty_tpl->tpl_vars['information']->value['category_name'];?>
</span>
									<span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['information']->value['date'],"%Y.%m.%d");?>
</span>
								</p>
								<h3><?php echo $_smarty_tpl->tpl_vars['information']->value['title'];?>
</h3>
							</div>
							<div class="triangle"></div>
							<i class="fas fa-arrow-right"></i>
						</a>
					</div>
					<?php }
if (!$_smarty_tpl->tpl_vars["information"]->_loop) {
?>
					<p class="pos_ac">現在、お知らせ・イベント情報を準備中です。</p>
					<?php } ?>
				</div>
				<div class="list_pager">
					<ul>
						<?php if ($_smarty_tpl->tpl_vars['page_navi']->value['LinkBack']!=null) {?><li class="before"><?php echo $_smarty_tpl->tpl_vars['page_navi']->value['LinkBack'];?>
</li><?php }?>
						<?php echo $_smarty_tpl->tpl_vars['page_navi']->value['LinkPage'];?>

						<?php if ($_smarty_tpl->tpl_vars['page_navi']->value['LinkBack']!=null) {?><li class="after"><?php echo $_smarty_tpl->tpl_vars['page_navi']->value['LinkNext'];?>
</li><?php }?>
					</ul>
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
