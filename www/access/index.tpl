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
<body id="access">
<div id="base">
<!-- header -->
{include file=$template_header}
<!-- header -->
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
						<span>A</span><span>C</span><span>C</span><span>E</span><span>S</span><span>S</span>
					</span>
					<span class="sub">アクセス</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>アクセス</li>
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
							{foreach from=$OptionArea item="area" key="key" name="loopArea"}
							<li{if $smarty.foreach.loopArea.first == 1} class="first"{/if}><a href="#area{$key}"><i class="fas fa-angle-right"></i>{$area}</a></li>
							{/foreach}
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="access_logo mb50">
						<p class="pos_ac"><img src="/common/image/contents/top/aschool.png" alt="aschool"></p>
					</div>
					{foreach from=$OptionArea item="area" key="key" name="loopArea"}
						{if $mst_school[$key] != NULL}
							<h2 class="hl_2 mb30" id="area{$key}"><span class="border"><span class="title">{$area}</span></span></h2>
							{foreach from=$mst_school[$key] item="school" key="key2" name="loopSchool"}
							<div class="access_unit mb50">
								<h3 class="hl_4 mb20">▼{$school.name}</h3>
								<p class="map mb20">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.726299886649!2d133.89921741614413!3d34.63635628045131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554077e656f7c35%3A0x36dcad26f89ec9e8!2z44CSNzAwLTA5NzMg5bKh5bGx55yM5bKh5bGx5biC5YyX5Yy65LiL5Lit6YeO77yR77yS77yQ77yQ4oiS77yU!5e0!3m2!1sja!2sjp!4v1587523812379!5m2!1sja!2sjp" width="100%" height="275" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								</p>
								<ul class="access_info">
									<li><span>住所：{if $school.prefecture > 0}{html_select_ken selected=$school.prefecture pre="1"}{/if}{$school.address1}{$school.address2}</span></li>
									<li><span>電話番号：{$school.tel}</span></li>
									<li><span>ファックス番号：{$school.fax}</span></li>
								</ul>
							</div>
							{/foreach}
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
