<?php /* Smarty version Smarty-3.1.18, created on 2020-05-07 09:46:53
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1366845485ea100c1b1eb66-46018156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1588844804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366845485ea100c1b1eb66-46018156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea100c1b359c3_46834225',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'displaySchool' => 0,
    'OptionSchoolTeacherRole' => 0,
    'key' => 0,
    'teacher_role' => 0,
    'mst_teacher' => 0,
    'role' => 0,
    'teacher' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea100c1b359c3_46834225')) {function content_5ea100c1b359c3_46834225($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- meta -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- meta -->
<link rel="stylesheet" href="/common/css/import.css">
<!-- js -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- js -->
</head>
<body id="school">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
						<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>

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
				<li><a href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
</a></li>
				<li>講師紹介</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper-t center">
			<div class="col-sm-3">
				<div id="search">
					<div class="search_title">
						<p class="title">ROLE</p>
						<p class="search_img"><img src="/common/image/contents/search.png" alt="ROLE"></p>
						<div class="scroll pc_none close-menu">
							<a href="javascript:void(0);" class="toggle-menu">
								<i class="fas fa-chevron-down blink"></i>
								<i class="fas fa-chevron-down blink2"></i>
								<i class="fas fa-chevron-down blink3"></i>
								<span>click</span>
							</a>
						</div>
						<div class="scroll pc_none open-menu" style="display: none;">
							<a href="javascript:void(0);" class="toggle-menu">
								<i class="fas fa-chevron-up blink4"></i>
								<i class="fas fa-chevron-up blink5"></i>
								<i class="fas fa-chevron-up blink6"></i>
								<span>close</span>
							</a>
						</div>
					</div>
					<ul class="list-menu sp_none">
						<?php  $_smarty_tpl->tpl_vars["teacher_role"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["teacher_role"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['OptionSchoolTeacherRole']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["teacher_role"]->key => $_smarty_tpl->tpl_vars["teacher_role"]->value) {
$_smarty_tpl->tpl_vars["teacher_role"]->_loop = true;
?>
						<li class="first"><a href="#role<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="fas fa-angle-right"></i><?php echo $_smarty_tpl->tpl_vars['teacher_role']->value;?>
</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-sm-9" id="teacher">
			<?php  $_smarty_tpl->tpl_vars["role"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["role"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionSchoolTeacherRole']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["role"]->key => $_smarty_tpl->tpl_vars["role"]->value) {
$_smarty_tpl->tpl_vars["role"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["role"]->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['mst_teacher']->value[$_smarty_tpl->tpl_vars['key']->value]!=null) {?>
					<h2 class="hl_2 mb30" id="role<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><span class="border"><span class="title"><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</span></span></h2>
					<?php  $_smarty_tpl->tpl_vars["teacher"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["teacher"]->_loop = false;
 $_smarty_tpl->tpl_vars["key2"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_teacher']->value[$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["teacher"]->key => $_smarty_tpl->tpl_vars["teacher"]->value) {
$_smarty_tpl->tpl_vars["teacher"]->_loop = true;
 $_smarty_tpl->tpl_vars["key2"]->value = $_smarty_tpl->tpl_vars["teacher"]->key;
?>
						<div class="teacher_unit<?php if ($_smarty_tpl->tpl_vars['teacher']->value['comment']==null) {?> mb50<?php }?>">
							<div class="row no-gutters">
								<div class="col-xs-3 height-1 photo">
									<img src="<?php if ($_smarty_tpl->tpl_vars['teacher']->value['image']!=null) {?>/common/photo/teacher/image/l_<?php echo $_smarty_tpl->tpl_vars['teacher']->value['image'];?>
<?php } else { ?>/common/image/contents/school/teacher/null_sex<?php echo (($tmp = @$_smarty_tpl->tpl_vars['teacher']->value['sex'])===null||$tmp==='' ? "1" : $tmp);?>
.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
">
								</div>
								<div class="col-xs-9">
									<div class="pos_re name_info height-1 disp_tbl2">
										<div class="disp_td">
											<div class="left">
												<h3 class="hl_name"><span class="name"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
</span><span class="en"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name_en'];?>
</span></h3>
												<p class="tag"><?php echo $_smarty_tpl->tpl_vars['OptionSchoolTeacherRole']->value[$_smarty_tpl->tpl_vars['teacher']->value['id_teacher_role']];?>
<?php if ($_smarty_tpl->tpl_vars['teacher']->value['position']!=null) {?> / <?php echo $_smarty_tpl->tpl_vars['teacher']->value['position'];?>
<?php }?></p>
											</div>
										</div>
										<p class="logo"><img src="/common/image/contents/school/teacher/logo.png" alt="講師紹介"></p>
									</div>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['teacher']->value['comment']!=null) {?>
							<div class="text_unit">
								<?php echo nl2br($_smarty_tpl->tpl_vars['teacher']->value['comment']);?>

							</div>
							<?php }?>
						</div>
					<?php } ?>
				<?php }?>
			<?php } ?>

			</div>
		</div>
	</section>
</div>
</main>
<!-- footer -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- footer -->
<script>
</script>
</div>
</body>
</html>
<?php }} ?>
