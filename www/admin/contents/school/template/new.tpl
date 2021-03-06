<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理画面</title>
<link href="/admin/common/css/bootstrap.min.css" rel="stylesheet">
<link href="/admin/common/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/admin/common/css/animate.css" rel="stylesheet">
<link href="/admin/common/css/plugins/codemirror/codemirror.css" rel="stylesheet">
<link href="/admin/common/css/plugins/codemirror/ambiance.css" rel="stylesheet">
<link href="/school/admin/common/css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="/admin/common/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="/admin/common/css/style.css" rel="stylesheet">
{include file=$template_javascript}
<script type="text/javascript" src="/admin/common/js/input.js"></script>
<script type="text/javascript" src="../js/input.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<!-- iCheck -->
<script type="text/javascript" src="/admin/common/js/plugins/iCheck/icheck.min.js"></script>
{literal}<script type="text/javascript">
	$(document).ready(function () {
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});
	});
</script>{/literal}
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	{include file=$template_secondary action="public" manage="school"}
	<div id="page-wrapper" class="gray-bg">
		{include file=$template_header}
		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-lg-10">
				<h2>{$_CONTENTS_NAME}</h2>
				<ol class="breadcrumb">
					<li><a href="/admin/">Home</a></li>
					<li><a href="./">{$_CONTENTS_NAME}</a></li>
					<li class="active"><strong>新規登録</strong></li>
				</ol>
			</div>
			<div class="col-lg-2"></div>
		</div>
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>{$_CONTENTS_NAME}管理　新規登録 </h5>
						</div>
						{include file="./form.tpl" mode="new"}
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
