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
<script type="text/javascript" src="/common/js/school_top.js"></script>
<!-- js -->
</head>
<body id="school">
<div id="base">
<!-- header -->
{include file=$template_header}
<!-- header -->
<main>
	<div id="top_main">
		<div class="image">
			<div><img src="/common/image/contents/school/main.jpg" alt="一般社団法人 学びクリエーション"></div>
		</div>
		<div id="main_text" class="text">
			<div class="center">
				<div class="text_in">
					<img src="/common/image/contents/school/logo.png" alt="一般社団法人 学びクリエーション">
					<h2>{$displaySchool.short_name}</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="body">
		<section>
			<div id="top_about">
				<div class="wrapper center">
					<h2 class="hl_1 pos_ac mb50"><span class="img"><img src="/common/image/contents/school/about_i.png" alt="{$displaySchool.short_name}について"></span>
						<span class="main">
							<span>A</span><span>B</span><span>O</span><span>U</span><span>T</span>
						</span>
						<span class="sub">{$displaySchool.short_name}について</span>
					</h2>
					<div class="row mb80">
						<div class="col-xs-5 col-xs-push-7">
							<p class="pos_ac mb10"><img src="{if $displaySchool.image3 != NULL}/common/photo/school/image3/l_{$displaySchool.image3}{else}/common/image/contents/null.jpg{/if}" alt="{$displaySchool.short_name}について"></p>
						</div>
						<div class="col-xs-7 col-xs-pull-5">
							{$displaySchool.comment|nl2br}
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="top_schedule">
				<div class="center wrapper">
					<h2 class="hl_1 pos_ac mb50"><span class="img"><img src="/common/image/contents/school/schedule_i.png" alt="スケジュール"></span>
						<span class="main">
							<span>S</span><span>C</span><span>H</span><span>E</span><span>D</span><span>U</span><span>L</span><span>E</span>
						</span>
						<span class="sub">{$displaySchool.short_name}のスケジュール</span>
					</h2>
					<div class="center4 mb30">
						<div class="row tag">
							{foreach from=$OptionSchoolCurriculum item="curriculum" key="cid" name="loopCurriculum"}
							<div class="col-xs-4">
								<p style="background: #{$OptionCurriculumColor[$cid]};"><span>{$curriculum}</span></p>
							</div>
							{/foreach}
						</div>
					</div>
					<div class="scroll-table mb100">
						<table class="schedule">
							<tbody>
								<tr>
									<th>月</th>
									<th>火</th>
									<th>水</th>
									<th>木</th>
									<th>金</th>
									<th>土</th>
									<th>日</th>
								</tr>
							{foreach from=$mst_calendar.calendar item="calendar" key="date" name="loopCalendar"}
								{if $smarty.foreach.loopCalendar.first == 1 || $calendar.weekMon == 1}
									<tr>
									{if $smarty.foreach.loopCalendar.first}
										{section start=1 loop=$calendar.weekMon name="loopStart"}
											<td>&nbsp;</td>
										{/section}
									{/if}
								{/if}
								<td>
									<span class="date">{$date|date_format:"%m"|intval}月{$date|date_format:"%d"|intval}日</span>
									{foreach from=$calendar.open item="curriculum" key="cid" name="loopCurriculum"}
										{if $OptionSchoolCurriculum[$curriculum.id_curriculum|default:""]|default:"" != NULL}
										<span class="curriculum" style="background: #{$OptionCurriculumColor[$curriculum.id_curriculum]};">
											<a href="./curriculum/?sc={$displaySchool.id_school}#curriculum{$curriculum.id_curriculum}" class="ov"><span>{$OptionSchoolCurriculum[$curriculum.id_curriculum]}</span></a>
										</span>
										{/if}
									{/foreach}
								</td>
								{if $smarty.foreach.loopCalendar.last}
									{section start=$calendar.weekMon loop=7 name="loopEnd"}
										<td>&nbsp;</td>
									{/section}
								{/if}
								{if $smarty.foreach.loopCalendar.last == 1 || $calendar.weekMon == 7}
									</tr>
								{/if}
							{/foreach}
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="top_news">
				<div class="center wrapper">
					<h2 class="hl_1 pos_ac mb50"><span class="img"><img src="/common/image/contents/top/news_i.png" alt="カリキュラム"></span>
						<span class="main">
							<span>N</span><span>E</span><span>W</span><span>S</span>
						</span>
						<span class="sub">お知らせ</span>
					</h2>
					<div class="row tab_unit no-gutters mb50">
						<div class="col-xs-4 col-4 active">
							<a href="#news-tab0">
								<div class="tab first">
									<p class="pos_ac">すべて</p>
								</div>
							</a>
						</div>
						{foreach from=$OptionInformationCategory key="key" item="category" name="loopInformationCategory"}
						<div class="col-xs-4 col-4">
							<a href="#news-tab{$key}">
								<div class="tab{if $smarty.foreach.loopInformationCategory.last == 1} last{/if}">
									<p class="pos_ac">{$category}</p>
								</div>
							</a>
						</div>
						{/foreach}
					</div>
					<div class="row mb30">
						{foreach from=$t_school_information item="information" name="loopInformation"}
						<div class="news-tab-{$information.category_id} col-xs-6">
							<div class="news_unit height-1">
								<a href="./news/detail.php?sc={$displaySchool.id_school}&id={$information.id_school_information}" class="ov">
									<div class="row">
										<div class="col-md-3 height-2 disp_tbl2">
											<div class="disp_td">
												<div class="img_sq">
													<img src="{if $information.image1 != NULL}/common/photo/school_information/image1/m_{$information.image1}{else}/common/image/contents/null.jpg{/if}" alt="{$information.title}">
												</div>
											</div>
										</div>
										<div class="col-md-9 disp_tbl2 height-2">
											<div class="disp_td">
												<div class="sub">
													<span class="cat {if $information.category_id == 2}_event{else}_news{/if}">{$information.category_name}</span>
													<span class="date">{$information.date|date_format:"%Y.%m.%d"}</span>
												</div>
												<div class="title">
													{$information.title}
												</div>
											</div>
										</div>
									</div>
									<div class="triangle"></div>
									<i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
						{/foreach}
					</div>
					<div class="button m0auto"><a href="./news/?sc={$displaySchool.id_school}" class="_type1 ov">一覧を見る<i class="fas fa-caret-right"></i></a></div>
				</div>
			</div>
		</section>
		<section>
			<div id="top_info">
				<div class="center wrapper-t">
					<div class="row mb30">
						<div class="col-xs-4">
							<p class="photo mb10"><img src="{if $displaySchool.image2 != NULL}/common/photo/school/image2/l_{$displaySchool.image2}{else}/common/image/contents/null.jpg{/if}" alt="{$displaySchool.short_name}"></p>
						</div>
						<div class="col-xs-8">
							<h3 class="c_lgreen mb20">{$displaySchool.short_name}</h3>
							<table class="tbl">
								<tbody>
									<tr class="first">
										<th><span class="name">所在地</span></th>
										<td>{html_select_ken pre="1" selected=$displaySchool.prefecture}{$displaySchool.address1}{$displaySchool.address2}</td>
									</tr>
									<tr>
										<th><span class="name">電話番号</span></th>
										<td>{$displaySchool.tel}</td>
									</tr>
									<tr>
										<th><span class="name">FAX</span></th>
										<td>{$displaySchool.fax}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					{$displaySchool.map}
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
