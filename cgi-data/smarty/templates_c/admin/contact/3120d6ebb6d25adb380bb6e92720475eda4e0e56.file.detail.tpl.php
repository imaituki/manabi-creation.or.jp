<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 14:32:09
         compiled from "../template/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:657580575eaa62d93d3d17-40436635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3120d6ebb6d25adb380bb6e92720475eda4e0e56' => 
    array (
      0 => '../template/detail.tpl',
      1 => 1588222235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '657580575eaa62d93d3d17-40436635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_javascript' => 0,
    'template_secondary' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
    'arr_post' => 0,
    'OptionContactType' => 0,
    'OptionContactSchoolYear' => 0,
    'OptionContactZoom' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa62d944d6f9_94194452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa62d944d6f9_94194452')) {function content_5eaa62d944d6f9_94194452($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
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
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('action'=>"public",'manage'=>"contact"), 0);?>

	<div id="page-wrapper" class="gray-bg">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-lg-10">
				<h2><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</h2>
				<ol class="breadcrumb">
					<li><a href="/admin/">Home</a></li>
					<li><a href="./"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</a></li>
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
							<h5><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
管理　詳細</h5>
						</div>
						<div class="ibox-content">
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">お問い合わせ日</label>
								<div class="col-sm-10"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['entry_date'],"%Y/%m/%d<br>%H:%M:%S");?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">ご用件</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['OptionContactType']->value[(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['type'])===null||$tmp==='' ? '' : $tmp)])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">保護者氏名</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">保護者氏名（フリガナ）</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">受講するお子様の学年</label>
								<div class="col-sm-10"><?php echo $_smarty_tpl->tpl_vars['OptionContactSchoolYear']->value[(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['school_year'])===null||$tmp==='' ? '' : $tmp)];?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">受講者氏名</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['student_name'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">受講者氏名（フリガナ）</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['student_ruby'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">住所</label>
								<div class="col-sm-10">
									〒 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zip'])===null||$tmp==='' ? '' : $tmp);?>
<br />
									<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']>0) {?><?php echo smarty_function_html_select_ken(array('pre'=>"1",'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture']),$_smarty_tpl);?>
<?php }?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address1'])===null||$tmp==='' ? '' : $tmp);?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address2'])===null||$tmp==='' ? '' : $tmp);?>
<br />
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">メールアドレス</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">電話番号</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['type']!=0) {?>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">ZOOMオンラインの利用経験</label>
								<div class="col-sm-10"><?php echo $_smarty_tpl->tpl_vars['OptionContactZoom']->value[(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zoom'])===null||$tmp==='' ? '' : $tmp)];?>
</div>
							</div>
							<?php }?>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label"><?php if ($_smarty_tpl->tpl_vars['arr_post']->value['type']!=0) {?>その他お問い合わせ<?php } else { ?>お問い合わせ内容<?php }?></label>
								<div class="col-sm-10"><?php echo nl2br((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp));?>
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
