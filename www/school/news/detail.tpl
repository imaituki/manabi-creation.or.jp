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
<body id="school">
<div id="base">
<!-- header -->
{include file=$template_header}
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
						{$displaySchool.short_name}
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
				<li><a href="/school/?sc={$displaySchool.id_school}">{$displaySchool.short_name}</a></li>
				<li>お知らせ・イベント</li>
			</ul>
		</div>
	</div>
	<section id="news">
		<div class="wrapper-t center" id="detail">
			<h2 class="hl_2 mb0">
				<span class="border news_unit">
					<span class="title">{$t_school_information.title}</span>
					<p class="sub">
						{assign var="OptionCategory" value=["1" => "_news", "2" => "_event"]}
						<span class="cat {$OptionCategory[$t_school_information.id_information_category]}">{$t_school_information.category_name}</span>
						<span class="date{if $t_school_information.id_information_category eq 2} {$OptionCategory[$t_school_information.id_information_category]}{/if}">{$t_school_information.date|date_format:"%Y.%m.%d"}</span>
					</p>
				</span>
			</h2>
			<div class="pos_ac mb30 image1"><img src="{if empty($t_school_information.image1)}/common/image/contents/null2.jpg{else}/common/photo/school_information/image1/l_{$t_school_information.image1}{/if}" alt="{$t_school_information.caption1}"></div>
			<p class="mb30">{$t_school_information.comment}</p>
			<div class="row mb50">
				{if !empty($t_school_information.image2)}
				<div class="col-xs-4 height-1 mb20">
					<a class="ov" href="/common/photo/school_information/image2/l_{$t_school_information.image2}" rel="lightbox">
						<div class="img_rect"><img src="/common/photo/school_information/image2/l_{$t_school_information.image2}" alt="{$t_school_information.caption2}"></div>
					</a>
				</div>
				{/if}
				{if !empty($t_school_information.image3)}
				<div class="col-xs-4 height-1 mb20">
					<a class="ov" href="/common/photo/school_information/image3/l_{$t_school_information.image3}" rel="lightbox">
						<div class="img_rect"><img src="/common/photo/school_information/image3/l_{$t_school_information.image3}" alt="{$t_school_information.caption3}"></div>
					</a>
				</div>
				{/if}
				{if !empty($t_school_information.image4)}
				<div class="col-xs-4 height-1 mb20">
					<a class="ov" href="/common/photo/school_information/image4/l_{$t_school_information.image4}" rel="lightbox">
						<div class="img_rect"><img src="/common/photo/school_information/image4/l_{$t_school_information.image4}" alt="{$t_school_information.caption4}"></div>
					</a>
				</div>
				{/if}
			</div>
			<div class="button m0auto mb10"><a href="./?sc={$displaySchool.id_school}" class="_type1 ov"><i class="fas fa-caret-left"></i>一覧へ戻る</a></div>
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
