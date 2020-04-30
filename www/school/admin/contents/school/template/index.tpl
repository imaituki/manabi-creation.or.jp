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
<link href="/school/admin/common/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="/school/admin/common/css/style.css" rel="stylesheet">
{include file=$template_javascript}
<script type="text/javascript" src="/school/admin/common/js/input.js"></script>
<script type="text/javascript" src="../js/input.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<!-- blueimp gallery -->
<link href="/school/admin/common/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
<script src="/school/admin/common/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
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
					<li><a href="/school/admin/">Home</a></li>
					<li class="active"><strong>{$_CONTENTS_NAME}</strong></li>
				</ol>
			</div>
			<div class="col-lg-2 m-b-xs pos_ar mt30">
				<a href="./edit.php" class="btn btn-primary btn-s">編集</a>
			</div>
		</div>
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>{$_CONTENTS_NAME}</h5>
						</div>
						
						
						<div class="ibox-content">
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">公開名称</label>
								<div class="col-sm-10">{$mst_school.short_name|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">エリア</label>
								<div class="col-sm-10">{$OptionArea[$mst_school.id_area|default:""]|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">住所</label>
								<div class="col-sm-10">
									〒 {$mst_school.zip|default:""}<br />
									{html_select_ken pre="1" selected=$mst_school.prefecture}{$mst_school.address1|default:""}{$mst_school.address2|default:""}<br />
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">電話番号</label>
								<div class="col-sm-10">{$mst_school.tel|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">FAX番号</label>
								<div class="col-sm-10">{$mst_school.fax|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">メールアドレス</label>
								<div class="col-sm-10">{$mst_school.mail|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">受付時間</label>
								<div class="col-sm-10">{$mst_school.reception_time|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">学校紹介</label>
								<div class="col-sm-10">{$mst_school.comment|default:""|nl2br}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">取り扱いカリキュラム</label>
								<div class="col-sm-10">
									{foreach from=$mst_school.curriculum.id item="id_curriculum" name="loopCurriculum"}
										・{$OptionCurriculum[$id_curriculum]}<br />
									{/foreach}
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">Facebook</label>
								<div class="col-sm-10">{$mst_school.facebook|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">Twitter</label>
								<div class="col-sm-10">{$mst_school.twitter|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">GoogleMap</label>
								<div class="col-sm-10">{$mst_school.map|default:""}</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">写真</label>
								<div class="col-sm-10">
									<div class="lightBoxGallery">
									{foreach from=$_ARR_IMAGE item="file" key="key" name="loopImage"}
										{if $mst_school[$file.name] != NULL}
											<a href="{$_IMAGEFULLPATH}/{$_CONTENTS_DIR}/{$file.name}/l_{$mst_school[$file.name]}" title="{$file.comment}" data-gallery=""><img src="{$_IMAGEFULLPATH}/{$_CONTENTS_DIR}/{$file.name}/m_{$mst_school[$file.name]}" /></a>
										{/if}
									{/foreach}
									</div>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">SEO</label>
								<div class="col-sm-10">
									【キーワード】<br />
									{$mst_school.keyword|default:"未設定"}<br />
									<br />
									【ディスクリプション】<br />
									{$mst_school.description|default:"未設定"}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="blueimp-gallery" class="blueimp-gallery">
		<div class="slides"></div>
		<h3 class="title"></h3>
		<a class="prev">‹</a>
		<a class="next">›</a>
		<a class="close">×</a>
		<a class="play-pause"></a>
		<ol class="indicator"></ol>
	</div>
</body>
</html>
