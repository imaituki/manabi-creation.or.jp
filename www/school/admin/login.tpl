<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{$_CONTENTS_NAME}｜{$_HTML_HEADER_DEFAULT.title}</title>
	<link href="/school/admin/common/css/bootstrap.min.css" rel="stylesheet">
	<link href="/school/admin/common/css/font-awesome.css" rel="stylesheet">
	<link href="/school/admin/common/css/animate.css" rel="stylesheet">
	<link href="/school/admin/common/css/style.css" rel="stylesheet">
	{include file=$template_javascript}
</head>

<body class="gray-bg">
	<div class="middle-box text-center loginscreen animated fadeInDown">
		<div>
			<div>
				<h1 class="logo-name">IN</h1>
			</div>
			<h3>ログイン</h3>
			<p>アカウントとパスワードでログインしてください</p>
			{if $message.ng.error|default:"" != NULL}<p class="error">{$message.ng.error}</p>{/if}
			<div id="msg"{if $message|default:"" == NULL} style="display:none"{/if}{if $message.ng|default:"" != NULL} class="error mb20"{elseif $message.ok|default:"" != NULL} class="ok mb20"{/if}>{if $message.ng|default:"" != NULL}{$message.ng.code|default:""}{$message.ng.password|default:""}{$message.ng.error|default:""}{elseif $message.ok|default:"" != NULL}{$message.ok}{/if}</div>
			<form class="m-t" role="form" action="login.php" method="post">
					<div class="form-group">
						<input type="account" name="account" class="form-control" placeholder="アカウント" required="">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="パスワード" required="">
					</div>
					<button type="submit" class="btn btn-primary block full-width m-b">ログイン</button>
			</form>
		</div>
	</div>
</body>
</html>
