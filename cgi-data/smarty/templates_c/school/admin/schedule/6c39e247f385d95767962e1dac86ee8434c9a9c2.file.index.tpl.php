<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 14:38:46
         compiled from "../template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16612310505eaa6466152879-19062538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c39e247f385d95767962e1dac86ee8434c9a9c2' => 
    array (
      0 => '../template/index.tpl',
      1 => 1588223055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16612310505eaa6466152879-19062538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_javascript' => 0,
    'template_secondary' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
    'OptionRelCurriculum' => 0,
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa646617c8f9_43195631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa646617c8f9_43195631')) {function content_5eaa646617c8f9_43195631($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
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
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="/school/admin/common/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/school/admin/common/js/list.js"></script>
<script type="text/javascript" src="../js/list.js"></script>
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('action'=>"public",'manage'=>"schedule"), 0);?>

	<div id="page-wrapper" class="gray-bg">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-lg-10">
				<h2><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</h2>
				<ol class="breadcrumb">
					<li><a href="/school/admin/">Home</a></li>
					<li class="active"><strong><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</strong></li>
				</ol>
			</div>

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
									<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionRelCurriculum']->value,'selected'=>$_smarty_tpl->tpl_vars['_SESSION']->value['school']['admin']['schedule']['search']['POST']['search_id_curriculum']),$_smarty_tpl);?>

								</select>
								<span class="input-group-btn">
									<label class="control-label" for="search_keyword">&nbsp;</label>
									<button type="button" class="btn btn-m btn-primary btn_search"> 表示</button>
									<a href="javascript:void(0)" class="reset_btn btn_reset"> リセット</a>
									<input type="hidden" name="search_y" value="<?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['school']['admin']['schedule']['search']['POST']['search_y'];?>
">
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
							
							<div id="searchList">
								<?php echo $_smarty_tpl->getSubTemplate ("./list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
<?php }} ?>
