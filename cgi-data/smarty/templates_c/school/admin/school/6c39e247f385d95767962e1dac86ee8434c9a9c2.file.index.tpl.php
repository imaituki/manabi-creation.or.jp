<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 14:50:33
         compiled from "../template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10355541695eaa67294d6859-30427980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c39e247f385d95767962e1dac86ee8434c9a9c2' => 
    array (
      0 => '../template/index.tpl',
      1 => 1588223056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10355541695eaa67294d6859-30427980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_javascript' => 0,
    'template_secondary' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
    'mst_school' => 0,
    'OptionArea' => 0,
    'id_curriculum' => 0,
    'OptionCurriculum' => 0,
    '_ARR_IMAGE' => 0,
    'file' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa672957b4e9_04675525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa672957b4e9_04675525')) {function content_5eaa672957b4e9_04675525($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
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
<link href="/school/admin/common/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="/school/admin/common/css/style.css" rel="stylesheet">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="/school/admin/common/js/input.js"></script>
<script type="text/javascript" src="../js/input.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<!-- blueimp gallery -->
<link href="/school/admin/common/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
<script src="/school/admin/common/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('action'=>"public",'manage'=>"school"), 0);?>

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
			<div class="col-lg-2 m-b-xs pos_ar mt30">
				<a href="./edit.php" class="btn btn-primary btn-s">編集</a>
			</div>
		</div>
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</h5>
						</div>
						
						
						<div class="ibox-content">
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">公開名称</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['short_name'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">エリア</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['OptionArea']->value[(($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['id_area'])===null||$tmp==='' ? '' : $tmp)])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">住所</label>
								<div class="col-sm-10">
									〒 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['zip'])===null||$tmp==='' ? '' : $tmp);?>
<br />
									<?php echo smarty_function_html_select_ken(array('pre'=>"1",'selected'=>$_smarty_tpl->tpl_vars['mst_school']->value['prefecture']),$_smarty_tpl);?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['address1'])===null||$tmp==='' ? '' : $tmp);?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['address2'])===null||$tmp==='' ? '' : $tmp);?>
<br />
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">電話番号</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">FAX番号</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['fax'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">メールアドレス</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">受付時間</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['reception_time'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">学校紹介</label>
								<div class="col-sm-10"><?php echo nl2br((($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['comment'])===null||$tmp==='' ? '' : $tmp));?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">取り扱いカリキュラム</label>
								<div class="col-sm-10">
									<?php  $_smarty_tpl->tpl_vars["id_curriculum"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["id_curriculum"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mst_school']->value['curriculum']['id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["id_curriculum"]->key => $_smarty_tpl->tpl_vars["id_curriculum"]->value) {
$_smarty_tpl->tpl_vars["id_curriculum"]->_loop = true;
?>
										・<?php echo $_smarty_tpl->tpl_vars['OptionCurriculum']->value[$_smarty_tpl->tpl_vars['id_curriculum']->value];?>
<br />
									<?php } ?>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">Facebook</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['facebook'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">Twitter</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['twitter'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">GoogleMap</label>
								<div class="col-sm-10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['map'])===null||$tmp==='' ? '' : $tmp);?>
</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">写真</label>
								<div class="col-sm-10">
									<div class="lightBoxGallery">
									<?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_ARR_IMAGE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["file"]->key;
?>
										<?php if ($_smarty_tpl->tpl_vars['mst_school']->value[$_smarty_tpl->tpl_vars['file']->value['name']]!=null) {?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/l_<?php echo $_smarty_tpl->tpl_vars['mst_school']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" title="<?php echo $_smarty_tpl->tpl_vars['file']->value['comment'];?>
" data-gallery=""><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/m_<?php echo $_smarty_tpl->tpl_vars['mst_school']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" /></a>
										<?php }?>
									<?php } ?>
									</div>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 control-label">SEO</label>
								<div class="col-sm-10">
									【キーワード】<br />
									<?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['keyword'])===null||$tmp==='' ? "未設定" : $tmp);?>
<br />
									<br />
									【ディスクリプション】<br />
									<?php echo (($tmp = @$_smarty_tpl->tpl_vars['mst_school']->value['description'])===null||$tmp==='' ? "未設定" : $tmp);?>

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
<?php }} ?>
