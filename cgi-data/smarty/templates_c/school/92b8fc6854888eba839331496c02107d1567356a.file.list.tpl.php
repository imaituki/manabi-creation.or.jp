<?php /* Smarty version Smarty-3.1.18, created on 2020-04-23 18:46:55
         compiled from "./list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7660651125ea163dab89737-74989435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92b8fc6854888eba839331496c02107d1567356a' => 
    array (
      0 => './list.tpl',
      1 => 1587635213,
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
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea163daba68a1_56307460')) {function content_5ea163daba68a1_56307460($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="school_list">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
							<li class="first"><a href="###"><i class="fas fa-angle-right"></i>岡山エリア</a></li>
							<li><a href="###"><i class="fas fa-angle-right"></i>兵庫エリア</a></li>
							<li><a href="###"><i class="fas fa-angle-right"></i>名古屋エリア</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<h2 class="hl_2 mb50"><span class="border"><span class="title">岡山エリア</span></span></h2>
					<div class="row mb50">
						<div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
		                        <div class="photo">
		                            <img src="/common/image/contents/school/shimonakano.jpg" alt="ここにブログのタイトルが入ります。">
		                        </div>
		                        <div class="text_unit height-2">
		                            <h3 class="mb10">下中野校</h3>
									<p class="pos_ac">岡山県岡山市北区下中野1200-4 4F</p>
		                        </div>
								<div class="triangle _event"></div>
								<i class="fas fa-arrow-right"></i>
		                    </a>
		                </div>
		                <div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
		                        <div class="photo">
		                            <img src="/common/image/contents/school/asahijyuku.jpg" alt="学校法人朝日学園 朝日塾小学校（提携校）">
		                        </div>
		                        <div class="text_unit height-2">
		                            <h3 class="mb10">学校法人朝日学園 朝日塾小学校（提携校）</h3>
									<p class="pos_ac">岡山市北区吉宗856</p>
		                        </div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
		                    </a>
		                </div>
						<div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
								<div class="photo">
								   <img src="/common/image/contents/school/syujitsu.jpg" alt="学校法人就実学園 就実小学校（提携校）">
								</div>
								<div class="text_unit height-2">
									<h3 class="mb10">学校法人就実学園 就実小学校（提携校）</h3>
									<p class="pos_ac">岡山市中区西川原1-6-1</p>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						<div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
								<div class="photo">
									<img src="/common/image/contents/school/school.jpg" alt="倉敷校">
								</div>
								<div class="text_unit height-2">
									<h3 class="mb10">倉敷校</h3>
									<p class="pos_ac">岡山県倉敷市有城1265</p>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						<div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
								<div class="photo">
									<img src="/common/image/contents/school/school.jpg" alt="奉還町校">
								</div>
								<div class="text_unit height-2">
									<h3 class="mb10">奉還町校</h3>
									<p class="pos_ac">岡山市北区奉還町3-1-30</p>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						<div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
								<div class="photo">
									<img src="/common/image/contents/school/school.jpg" alt="倉津山校（津山アルネ内）">
								</div>
								<div class="text_unit height-2">
									<h3 class="mb10">津山校（津山アルネ内）</h3>
									<p class="pos_ac">岡山県津山市新魚町17</p>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>

					<h2 class="hl_2 mb50"><span class="border"><span class="title">兵庫エリア</span></span></h2>
					<div class="row mb50">
						<div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
								<div class="photo">
									<img src="/common/image/contents/school/school.jpg" alt="西宮校">
								</div>
								<div class="text_unit height-2">
									<h3 class="mb10">西宮校</h3>
									<p class="pos_ac">西宮市甲風園1丁目8-11</p>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>

					<h2 class="hl_2 mb50"><span class="border"><span class="title">名古屋エリア</span></span></h2>
					<div class="row mb50">
						<div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
								<div class="photo">
									<img src="/common/image/contents/school/school.jpg" alt="星が丘校">
								</div>
								<div class="text_unit height-2">
									<h3 class="mb10">星が丘校</h3>
									<p class="pos_ac">愛知県名古屋市千種区星ヶ丘1-5-11</p>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						<div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
								<div class="photo">
									<img src="/common/image/contents/school/coming_soon.jpg" alt="星が丘校">
								</div>
								<div class="text_unit height-2">
									<h3 class="mb10">覚王山校(2020年6月開校予定)</h3>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						<div class="col-xs-6 height-1 mb30 school_box school_unit">
							<a href="###" class="ov">
								<div class="photo">
									<img src="/common/image/contents/school/coming_soon.jpg" alt="星が丘校">
								</div>
								<div class="text_unit height-2">
									<h3 class="mb10">川名校(2020年6月開校予定)</h3>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
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
