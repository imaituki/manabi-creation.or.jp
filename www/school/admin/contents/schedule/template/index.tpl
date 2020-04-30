<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理画面</title>
<link href="/school/admin/common/css/bootstrap.min.css" rel="stylesheet">
<link href="/school/admin/common/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/school/admin/common/css/animate.css" rel="stylesheet">
<link href="/school/admin/common/css/plugins/codemirror/codemirror.css" rel="stylesheet">
<link href="/school/admin/common/css/plugins/codemirror/ambiance.css" rel="stylesheet">
<link href="/school/admin/common/css/style.css" rel="stylesheet">
{include file=$template_javascript}
<script src="/school/admin/common/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/school/admin/common/js/list.js"></script>
<script type="text/javascript" src="../js/list.js"></script>
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	{include file=$template_secondary action="public" manage="schedule"}
	<div id="page-wrapper" class="gray-bg">
		{include file=$template_header}
		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-lg-10">
				<h2>{$_CONTENTS_NAME}</h2>
				<ol class="breadcrumb">
					<li><a href="/school/admin/">Home</a></li>
					<li class="active"><strong>{$_CONTENTS_NAME}</strong></li>
				</ol>
			</div>
{*
			<div class="col-lg-2 m-b-xs pos_ar mt30">
				<a href="./new.php" class="btn btn-primary btn-s">新規登録</a>
			</div>
*}
		</div>
		<div class="wrapper wrapper-content">
			<div class="ibox-content m-b-sm border-bottom">
				<div class="row">
					<form method="post" action="" id="formSearch" enctype="multipart/form-data">
						<div class="col-sm-6">
							<label class="control-label" for="search_keyword">カリキュラム</label>
							<div class="input-group">
								<select name="search_id_curriculum" class="form-control">
									<option value="">カリキュラム選択してください</option>
									{html_options options=$OptionRelCurriculum selected=$_SESSION.school.admin.schedule.search.POST.search_id_curriculum}
								</select>
								<span class="input-group-btn">
									<label class="control-label" for="search_keyword">&nbsp;</label>
									<button type="button" class="btn btn-m btn-primary btn_search"> 表示</button>
									<a href="javascript:void(0)" class="reset_btn btn_reset"> リセット</a>
									<input type="hidden" name="search_y" value="{$_SESSION.school.admin.schedule.search.POST.search_y}">
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox">
						<div class="ibox-content">
							{*<div id="msg"{if $message == NULL} style="display:none"{/if}{if $message.ng|default:"" != NULL} class="error mb20"{elseif $message.ok|default:"" != NULL} class="ok mb20"{/if}>{if $message.ng|default:"" != NULL}<i class="icon-attention"></i> {$message.ng}{elseif $message.ok|default:"" != NULL}<i class="icon-check"></i> {$message.ok}{/if}</div>*}
							<div id="searchList">
								{include file="./list.tpl"}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
