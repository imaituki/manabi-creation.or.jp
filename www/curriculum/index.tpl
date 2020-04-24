<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
</head>
<body id="curriculum">
<div id="base">
<!-- header -->
{include file=$template_header}
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back sp_none">
			<img src="/common/image/contents/top.jpg" alt="アクセス">
		</div>
		<div class="img_back pc_none">
			<img src="/common/image/contents/top_sp.jpg" alt="アクセス">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<span>C</span><span>U</span><span>R</span><span>R</span><span>I</span><span>C</span><span>U</span><span>L</span><span>U</span><span>M</span>
					</span>
					<span class="sub">カリキュラム</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>カリキュラム</li>
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
							<p class="title">CURRICULUM</p>
							<p class="search_img"><img src="/common/image/contents/search.png" alt="CURRICULUM"></p>
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
							<p class="title">CURRICULUM</p>
							<p class="search_img"><img src="/common/image/contents/search.png" alt="CURRICULUM"></p>
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
							{foreach from=$mst_curriculum item="curriculum" key="key" name="loopCurriculum"}
							<li{if $smarty.foreach.loopCurriculum.first == 1} class="first"{/if}><a href="#curriculum{$curriculum.id_curriculum}"><i class="fas fa-angle-right"></i>{$curriculum.menu}</a></li>
							{/foreach}
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					{foreach from=$mst_curriculum item="curriculum" key="key" name="loopCurriculum"}
						<div class="unit mb50">
							<h2 class="hl_2 mb30" id="curriculum{$curriculum.id_curriculum}"><span class="border"><span class="title">{$curriculum.menu}</span></span></h2>
							<div class="curriculum_img mb20">
								<div class="row no-gutters">
									<div class="col-xs-5 height-1 disp_tbl2">
										<div class="disp_td">
											{if $curriculum.image1 != NULL}<p class="pos_ac mb10"><img src="/common/photo/curriculum/image1/m_{$curriculum.image1}" alt="{$curriculum.subname}"></p>{/if}
											<p class="pos_ac name">
												{$curriculum.name|nl2br}
											</p>
										</div>
									</div>
									<div class="col-xs-7 height-1">
										{if $curriculum.image2 != NULL}<img src="/common/photo/curriculum/image2/l_{$curriculum.image2}" alt="{$curriculum.subname}">{/if}
									</div>
								</div>
							</div>
							<p>{$curriculum.comment}</p>
						</div>
					{/foreach}
				</div>
			</div>
		</div>
	</section>
</div>
</main>
{include file=$template_footer}
<script>
</script>
</div>
</body>
</html>
