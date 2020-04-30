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
			<img src="/common/image/contents/school/title.jpg" alt="講師紹介">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						{$displaySchool.short_name}
					</span>
					<span class="sub">講師紹介</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li><a href="/school/?sc={$displaySchool.id_school}">{$displaySchool.short_name}</a></li>
				<li>講師紹介</li>
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
						<li class="first"><a href="###"><i class="fas fa-angle-right"></i>開発総責任者</a></li>
						<li><a href="###"><i class="fas fa-angle-right"></i>担当講師</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9" id="teacher">
			{foreach from=$OptionSchoolTeacherRole item="role" key="key" name="loopSchoolTeacherRole"}
				{if $mst_teacher[$key] != NULL}
					<h2 class="hl_2 mb30"><span class="border"><span class="title">{$role}</span></span></h2>
					{foreach from=$mst_teacher[$key] item="teacher" key="key2" name="loopTeacher"}
						<div class="teacher_unit{if $teacher.comment == NULL} mb50{/if}">
							<div class="row no-gutters">
								<div class="col-xs-3 height-1 photo">
									<img src="{if $teacher.image != NULL}/common/photo/teacher/image/m_{$teacher.image}{else}/common/image/contents/school/teacher/null_sex{$teacher.sex|default:"1"}.jpg{/if}" alt="{$teacher.name}">
								</div>
								<div class="col-xs-9">
									<div class="pos_re name_info height-1 disp_tbl2">
										<div class="disp_td">
											<div class="left">
												<h3 class="hl_name"><span class="name">{$teacher.name}</span><span class="en">{$teacher.name_en}</span></h3>
												<p class="tag">{$OptionSchoolTeacherRole[$teacher.id_teacher_role]}{if $teacher.position != NULL} / {$teacher.position}{/if}</p>
											</div>
										</div>
										<p class="logo"><img src="/common/image/contents/school/teacher/logo.png" alt="講師紹介"></p>
									</div>
								</div>
							</div>
							{if $teacher.comment != NULL}
							<div class="text_unit">
								{$teacher.comment|nl2br}
							</div>
							{/if}
						</div>
					{/foreach}
				{/if}
			{/foreach}

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
