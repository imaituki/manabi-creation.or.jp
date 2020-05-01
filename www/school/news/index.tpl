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
						<li class="first"><a href="./?sc={$displaySchool.id_school}"><i class="fas fa-angle-right"></i>すべて</a></li>
						{foreach from=$OptionInformationCategory key="key" item="category" name="loopInformationCategory"}
						<li><a href="./?sc={$displaySchool.id_school}&cat={$key}"><i class="fas fa-angle-right"></i>{$category}</a></li>
						{/foreach}
					</ul>
				</div>
			</div>
			<div class="col-sm-9" id="news">
				<h2 class="hl_2 mb50"><span class="border"><span class="title">お知らせ</span></span></h2>
				<div class="row mb50">
					{foreach from=$t_school_information item="information" name="loopInformation"}
					<div class="news-tab-{$information.category_id} col-sm-4 col-xs-6 height-1 mb30 news_box news_unit">
						<a href="./detail.php?sc={$displaySchool.id_school}&id={$information.id_school_information}" class="ov">
							<div class="photo img_rect new_triangle">
								<img src="{if $information.image1 != NULL}/common/photo/school_information/image1/m_{$information.image1}{else}/common/image/contents/null.jpg{/if}" alt="{$information.title}">
							</div>
							<div class="text_unit height-2">
								<p class="sub">
									<span class="cat {if $information.category_id == 2}_event{else}_news{/if}">{$information.category_name}</span>
									<span class="date">{$information.date|date_format:"%Y.%m.%d"}</span>
								</p>
								<h3>{$information.title}</h3>
							</div>
							<div class="triangle"></div>
							<i class="fas fa-arrow-right"></i>
						</a>
					</div>
					{foreachelse}
					<p class="pos_ac">現在、お知らせ・イベント情報を準備中です。</p>
					{/foreach}
				</div>
				<div class="list_pager">
					<ul>
						{if $page_navi.LinkBack != NULL}<li class="before">{$page_navi.LinkBack}</li>{/if}
						{$page_navi.LinkPage}
						{if $page_navi.LinkBack != NULL}<li class="after">{$page_navi.LinkNext}</li>{/if}
					</ul>
				</div>
			</div>
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
