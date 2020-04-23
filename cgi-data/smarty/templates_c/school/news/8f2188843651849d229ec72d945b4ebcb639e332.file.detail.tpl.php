<?php /* Smarty version Smarty-3.1.18, created on 2020-04-22 21:04:55
         compiled from "./detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20851222575ea032e73704a5-25255120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2188843651849d229ec72d945b4ebcb639e332' => 
    array (
      0 => './detail.tpl',
      1 => 1587556619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20851222575ea032e73704a5-25255120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea032e73902b3_87762417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea032e73902b3_87762417')) {function content_5ea032e73902b3_87762417($_smarty_tpl) {?><!DOCTYPE html>
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
					<span class="title">この文章はダミーです。お知らせのTITLEが入ります</span>
					<p class="sub">
						<!--イベントの時はクラスを _event に。-->
						<span class="cat _news">お知らせ</span>
						<!--イベントの時はクラスを _event に。-->
						<span class="date">2019.12.12</span>
					</p>
				</span>
			</h2>
		    <div class="pos_ac mb30 image1"><img src="/common/image/contents/null2.jpg" alt="お知らせのTITLEが入ります"></div>
			<p class="mb30">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認する</p>
			<div class="row mb50">
				<div class="col-xs-4 height-1 mb20">
                    <a class="ov" href="/common/image/contents/null2.jpg" rel="lightbox">
                        <div class="img_rect"><img src="/common/image/contents/null2.jpg" alt="お知らせのTITLEが入ります"></div>
                    </a>
                </div>
				<div class="col-xs-4 height-1 mb20">
                    <a class="ov" href="/common/image/contents/null2.jpg" rel="lightbox">
                        <div class="img_rect"><img src="/common/image/contents/null2.jpg" alt="お知らせのTITLEが入ります"></div>
                    </a>
                </div>
				<div class="col-xs-4 height-1 mb20">
                    <a class="ov" href="/common/image/contents/null2.jpg" rel="lightbox">
                        <div class="img_rect"><img src="/common/image/contents/null2.jpg" alt="お知らせのTITLEが入ります"></div>
                    </a>
                </div>
			</div>
			<div class="button m0auto mb10"><a href="/" class="_type1 ov"><i class="fas fa-caret-left"></i>一覧へ戻る</a></div>
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
