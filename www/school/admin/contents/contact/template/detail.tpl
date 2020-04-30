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
<link href="/admin/common/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="/admin/common/css/style.css" rel="stylesheet">
{include file=$template_javascript}
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	{include file=$template_secondary action="public" manage="contact"}
	<div id="page-wrapper" class="gray-bg">
		{include file=$template_header}
		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-lg-10">
				<h2>{$_CONTENTS_NAME}</h2>
				<ol class="breadcrumb">
					<li><a href="/admin/">Home</a></li>
					<li><a href="./">{$_CONTENTS_NAME}</a></li>
					<li class="active"><strong>詳細</strong></li>
				</ol>
			</div>
			<div class="col-lg-2"></div>
		</div>
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>{$_CONTENTS_NAME}管理　詳細</h5>
						</div>
						<div class="ibox-content">
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">お問い合わせ日</label>
								<div class="col-sm-10">{$arr_post.entry_date|date_format:"%Y/%m/%d<br>%H:%M:%S"}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">ご用件</label>
								<div class="col-sm-10">{$OptionContactType[$arr_post.type|default:""]|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">保護者氏名</label>
								<div class="col-sm-10">{$arr_post.name|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">保護者氏名（フリガナ）</label>
								<div class="col-sm-10">{$arr_post.ruby|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">受講するお子様の学年</label>
								<div class="col-sm-10">{$OptionContactSchoolYear[$arr_post.school_year|default:""]}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">受講者氏名</label>
								<div class="col-sm-10">{$arr_post.student_name|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">受講者氏名（フリガナ）</label>
								<div class="col-sm-10">{$arr_post.student_ruby|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">住所</label>
								<div class="col-sm-10">
									〒 {$arr_post.zip|default:""}<br />
									{if $arr_post.prefecture > 0}{html_select_ken pre="1" selected=$arr_post.prefecture}{/if}{$arr_post.address1|default:""}{$arr_post.address2|default:""}<br />
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">メールアドレス</label>
								<div class="col-sm-10">{$arr_post.mail|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">電話番号</label>
								<div class="col-sm-10">{$arr_post.tel|default:""}</div>
							</div>
							{if $arr_post.type != 0}
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">ZOOMオンラインの利用経験</label>
								<div class="col-sm-10">{$OptionContactZoom[$arr_post.zoom|default:""]}</div>
							</div>
							{/if}
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">{if $arr_post.type != 0}その他お問い合わせ{else}お問い合わせ内容{/if}</label>
								<div class="col-sm-10">{$arr_post.comment|default:""|nl2br}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
