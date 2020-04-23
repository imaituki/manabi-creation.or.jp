<?php /* Smarty version Smarty-3.1.18, created on 2020-04-22 21:03:55
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2922676275ea030e23b1d04-17032048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1587557032,
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
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea030e23d2424_82143586')) {function content_5ea030e23d2424_82143586($_smarty_tpl) {?><!DOCTYPE html>
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
<body id="news">
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
						下中野校
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
						<li class="first"><a href="###"><i class="fas fa-angle-right"></i>すべて</a></li>
						<li><a href="###"><i class="fas fa-angle-right"></i>お知らせ</a></li>
						<li><a href="###"><i class="fas fa-angle-right"></i>イベント</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9">
				<h2 class="hl_2 mb50"><span class="border"><span class="title">お知らせ</span></span></h2>
				<div class="row mb50">
					<div class="col-sm-4 col-xs-6 height-1 mb30 news_box news_unit">
	                    <a href="###" class="ov">
	                        <div class="photo img_rect new_triangle">
	                            <img src="/common/image/contents/null2.jpg" alt="ここにブログのタイトルが入ります。">
	                        </div>
	                        <div class="text_unit height-2">
								<p class="sub">
									<span class="cat _news">お知らせ</span>
									<span class="date">2019.12.12</span>
								</p>
	                            <h3>お知らせのTITLEが入ります</h3>
	                        </div>
							<div class="triangle"></div>
							<i class="fas fa-arrow-right"></i>
	                    </a>
	                </div>
	                <div class="col-sm-4 col-xs-6 height-1 mb30 news_box news_unit">
	                    <a href="###" class="ov">
	                        <div class="photo img_rect">
	                            <img src="/common/image/contents/null2.jpg" alt="ここにブログのタイトルが入ります。">
	                        </div>
	                        <div class="text_unit height-2">
								<p class="sub">
									<span class="cat _event">イベント</span>
									<span class="date">2019.12.12</span>
								</p>
	                            <h3>お知らせのTITLEが入りますお知らせのTITLEが入ります</h3>
	                        </div>
							<div class="triangle _event"></div>
							<i class="fas fa-arrow-right"></i>
	                    </a>
	                </div>
	                <div class="col-sm-4 col-xs-6 height-1 mb30 news_box news_unit">
	                    <a href="###" class="ov">
	                        <div class="photo img_rect">
	                            <img src="/common/image/contents/null2.jpg" alt="ここにブログのタイトルが入ります。">
	                        </div>
	                        <div class="text_unit height-2">
								<p class="sub">
									<span class="cat _news">お知らせ</span>
									<span class="date">2019.12.12</span>
								</p>
	                            <h3>お知らせのTITLEが入りますお知らせのTITLEが入りますお知らせのTITLEが入ります</h3>
	                        </div>
							<div class="triangle"></div>
							<i class="fas fa-arrow-right"></i>
	                    </a>
	                </div>
					<div class="col-sm-4 col-xs-6 height-1 mb30 news_box news_unit">
					   <a href="###" class="ov">
						   <div class="photo img_rect">
							   <img src="/common/image/contents/null2.jpg" alt="ここにブログのタイトルが入ります。">
						   </div>
						   <div class="text_unit height-2">
							   <p class="sub">
								   <span class="cat _news">お知らせ</span>
								   <span class="date">2019.12.12</span>
							   </p>
							   <h3>お知らせのTITLEが入りますお知らせのTITLEが入りますお知らせのTITLEが入ります</h3>
						   </div>
						   <div class="triangle"></div>
						   <i class="fas fa-arrow-right"></i>
					   </a>
				   </div>
				</div>
				<div class="list_pager">
				   <ul>
					   <li class="before"><a href="###"><i class="fas fa-chevron-left"></i></a></li>
					   <li><strong>1</strong></li> <li><a href="/blog/index.php?page=2" class="page2">2</a></li> <li><a href="/blog/index.php?page=3" class="page3">3</a></li> <li><a href="/blog/index.php?page=4" class="page4">4</a></li>
					   <li class="after"><a href="###"><i class="fas fa-chevron-right"></i></a></li>
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
