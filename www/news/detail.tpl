<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- meta -->
{include file=$template_meta}
<!-- meta -->
<link rel="stylesheet" href="/common/css/import.css">
<!-- js -->
{include file=$template_javascript}
<!-- js -->
<script type="text/javascript" src="/common/js/lightbox/import.js"></script>
</head>
<body id="news">
<div id="base">
<!-- header -->
{include file=$template_header}
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
					<span class="title">{$t_information.title}</span>
					<p class="sub">
						{assign var="OptionCategory" value=["1" => "_news", "2" => "_event"]}
						<span class="cat {$OptionCategory[$t_information.id_information_category]}">{$t_information.category_name}</span>
						<span class="date{if $t_information.id_information_category eq 2} {$OptionCategory[$t_information.id_information_category]}{/if}">2019.12.12</span>
					</p>
				</span>
			</h2>
			<div class="pos_ac mb30 image1"><img src="{if empty($t_information.image1)}/common/image/contents/null2.jpg{else}/common/photo/information/image1/l_{$t_information.image1}{/if}" alt="{$t_information.caption1}"></div>
			<p class="mb30">{$t_information.comment}</p>
			<div class="row mb50">
				<div class="col-xs-4 height-1 mb20">
					<a class="ov" href="{if empty($t_information.image2)}/common/image/contents/null2.jpg{else}/common/photo/information/image1/l_{$t_information.image2}{/if}" rel="lightbox">
						<div class="img_rect"><img src="{if empty($t_information.image1)}/common/image/contents/null2.jpg{else}/common/photo/information/image2/l_{$t_information.image2}{/if}" alt="{$t_information.caption2}"></div>
					</a>
				</div>
				<div class="col-xs-4 height-1 mb20">
					<a class="ov" href="{if empty($t_information.image3)}/common/image/contents/null2.jpg{else}/common/photo/information/image1/l_{$t_information.image3}{/if}" rel="lightbox">
						<div class="img_rect"><img src="{if empty($t_information.image1)}/common/image/contents/null2.jpg{else}/common/photo/information/image3/l_{$t_information.image3}{/if}" alt="{$t_information.caption3}"></div>
					</a>
				</div>
				<div class="col-xs-4 height-1 mb20">
					<a class="ov" href="{if empty($t_information.image4)}/common/image/contents/null2.jpg{else}/common/photo/information/image1/l_{$t_information.image4}{/if}" rel="lightbox">
						<div class="img_rect"><img src="{if empty($t_information.image1)}/common/image/contents/null2.jpg{else}/common/photo/information/image4/l_{$t_information.image4}{/if}" alt="{$t_information.caption4}"></div>
					</a>
				</div>
			</div>
			<div class="button m0auto mb10"><a href="./" class="_type1 ov"><i class="fas fa-caret-left"></i>一覧へ戻る</a></div>
		</div>
	</section>
</div>
</main>
<!-- footer -->
{include file=$template_footer}
<!-- footer -->
<script>
</script>
</div>
</body>
</html>
