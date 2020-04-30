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
		<div class="wrapper-t center">
			<div class="row">
				<div class="col-sm-3">
					<!--スマホ時　ID絞込　閉じている時-->
					<div id="search" class="pc_none" onclick="$(this).hide().next().show();">
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

					<div id="search" onclick="$(this).hide().prev().show();" syule="display:none;">
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
							<li class="first"><a href="./"><i class="fas fa-angle-right"></i>すべて</a></li>
							{foreach from=$OptionInformationCategory key="key" item="category" name="loopInformationCategory"}
							<li><a href="./?cat={$key}"><i class="fas fa-angle-right"></i>{$category}</a></li>
							{/foreach}
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<h2 class="hl_2 mb50"><span class="border"><span class="title">{$OptionInformationCategory[$arr_get.cat]|default:"すべて"}</span></span></h2>
					<div class="row mb50">
						{function name="news" row=[]}
						<div class="col-sm-4 col-xs-6 height-1 mb30 news_box news_unit">
							<a href="./detail.php?id={$row.id_information}" class="ov">
								<div class="photo img_rect{if $row.date eq date("Y-m-d")} new_triangle{/if}">
									<img src="{if empty($row.image1)}/common/image/contents/null2.jpg{else}/common/photo/information/image1/s_{$row.image1}{/if}" alt="{$row.title}">
								</div>
								<div class="text_unit height-2">
									<p class="sub">
										<span class="cat  {if $row.category_id == 2}_event{else}_news{/if}">{$OptionInformationCategory[$row.id_information_category]}</span>
										<span class="date">{$row.date|date_format:"%Y.%m.%d"}</span>
									</p>
									<h3>{$row.title}</h3>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						{/function}
						{foreach from=$t_information.data|default:[] item="row"}{news row=$row}{foreachelse}{/foreach}
					</div>
					<div class="list_pager">
						<ul>
							{if not empty($t_information.page.LinkBack)}<li class="before">{$t_information.page.LinkBack}</li>{/if}
							{$t_information.page.LinkPage}
							{if not empty($t_information.page.LinkBack)}<li class="after">{$t_information.page.LinkNext}</li>{/if}
						</ul>
					</div>
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
