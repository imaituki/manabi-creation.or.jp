<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
</head>
<body id="school_list">
<div id="base">
{include file=$template_header}
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
					<div id="search">
						<div class="search_title">
							<p class="title">AREA</p>
							<p class="search_img"><img src="/common/image/contents/search.png" alt="AREA"></p>
							<div class="scroll pc_none close-menu">
								<a href="javascript:void(0);" class="toggle-menu">
									<i class="fas fa-chevron-down blink"></i>
									<i class="fas fa-chevron-down blink2"></i>
									<i class="fas fa-chevron-down blink3"></i>
									<span>click</span>
								</a>
							</div>
							<div class="scroll pc_none open-menu" style="display: none;">
								<a href="javascript:void(0);" class="toggle-menu">
									<i class="fas fa-chevron-up blink4"></i>
									<i class="fas fa-chevron-up blink5"></i>
									<i class="fas fa-chevron-up blink6"></i>
									<span>close</span>
								</a>
							</div>
						</div>
						<ul class="list-menu sp_none">
							{foreach from=$OptionSchoolDispArea item="area" key="key" name="loopArea"}
							<li{if $smarty.foreach.loopArea.first == 1} class="first"{/if}><a href="#area{$key}"><i class="fas fa-angle-right"></i>{$area}</a></li>
							{/foreach}
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					{foreach from=$OptionArea item="area" key="key" name="loopArea"}
						{if $mst_school[$key] != NULL}
							<h2 class="hl_2 mb50" id="area{$key}"><span class="border"><span class="title">{$area}</span></span></h2>
							<div class="row mb50">
							{foreach from=$mst_school[$key] item="school" key="key2" name="loopSchool"}
								<div class="col-xs-6 height-1 mb30 school_box school_unit">
									<a href="./?sc={$school.id_school}" class="ov">
										<div class="photo">
											<img src="{if $school.image1 != NULL}/common/photo/school/image1/m_{$school.image1}{else}/common/image/contents/null.jpg{/if}" alt="{$school.short_name}">
										</div>
										<div class="text_unit height-2">
											<h3 class="mb10">{$school.short_name}</h3>
											<p class="pos_ac">{html_select_ken pre="1" selected=$school.prefecture}{$school.address1}{$school.address2}</p>
										</div>
										<div class="triangle _event"></div>
										<i class="fas fa-arrow-right"></i>
									</a>
								</div>
								{/foreach}
							</div>
						{/if}
					{/foreach}
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
