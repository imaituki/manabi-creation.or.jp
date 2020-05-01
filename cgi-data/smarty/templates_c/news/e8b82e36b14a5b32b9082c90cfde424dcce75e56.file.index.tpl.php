<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 18:39:47
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11242388145eaa6b24511106-99622603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1588239586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11242388145eaa6b24511106-99622603',
  'function' => 
  array (
    'news' => 
    array (
      'parameter' => 
      array (
        'row' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa6b24563eb4_89716612',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'OptionInformationCategory' => 0,
    'key' => 0,
    'category' => 0,
    'arr_get' => 0,
    'row' => 0,
    't_information' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa6b24563eb4_89716612')) {function content_5eaa6b24563eb4_89716612($_smarty_tpl) {?><!DOCTYPE html>
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
<body id="news">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header -->
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back sp_none">
			<img src="/common/image/contents/top.jpg" alt="お知らせ・イベント">
		</div>
		<div class="img_back pc_none">
			<img src="/common/image/contents/top_sp.jpg" alt="お知らせ・イベント">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<span>N</span><span>E</span><span>W</span><span>S</span>
					</span>
					<span class="sub">お知らせ・イベント</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>お知らせ・イベント</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper-t center">
			<div class="row">
				<div class="col-sm-3">
					<!--スマホ時　ID絞込　閉じている時-->
					<div id="search" class="pc_none" onclick="$(this).hide().next().show();">
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

					<div id="search" onclick="$(this).hide().prev().show();" syule="display:none;">
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
							<li class="first"><a href="./"><i class="fas fa-angle-right"></i>すべて</a></li>
							<?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionInformationCategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["category"]->key;
?>
							<li><a href="./?cat=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="fas fa-angle-right"></i><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<h2 class="hl_2 mb50"><span class="border"><span class="title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['OptionInformationCategory']->value[$_smarty_tpl->tpl_vars['arr_get']->value['cat']])===null||$tmp==='' ? "すべて" : $tmp);?>
</span></span></h2>
					<div class="row mb50">
						<?php if (!is_callable('smarty_modifier_date_format')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?><?php if (!function_exists('smarty_template_function_news')) {
    function smarty_template_function_news($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['news']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
						<div class="col-sm-4 col-xs-6 height-1 mb30 news_box news_unit">
							<a href="./detail.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id_information'];?>
" class="ov">
								<div class="photo img_rect<?php if ($_smarty_tpl->tpl_vars['row']->value['date']==date("Y-m-d")) {?> new_triangle<?php }?>">
									<img src="<?php if (empty($_smarty_tpl->tpl_vars['row']->value['image1'])) {?>/common/image/contents/null2.jpg<?php } else { ?>/common/photo/information/image1/s_<?php echo $_smarty_tpl->tpl_vars['row']->value['image1'];?>
<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
								</div>
								<div class="text_unit height-2">
									<p class="sub">
										<span class="cat  <?php if ($_smarty_tpl->tpl_vars['row']->value['category_id']==2) {?>_event<?php } else { ?>_news<?php }?>"><?php echo $_smarty_tpl->tpl_vars['OptionInformationCategory']->value[$_smarty_tpl->tpl_vars['row']->value['id_information_category']];?>
</span>
										<span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['date'],"%Y.%m.%d");?>
</span>
									</p>
									<h3><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h3>
								</div>
								<div class="triangle"></div>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['t_information']->value['data'])===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value) {
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<?php smarty_template_function_news($_smarty_tpl,array('row'=>$_smarty_tpl->tpl_vars['row']->value));?>

						<?php }
if (!$_smarty_tpl->tpl_vars["row"]->_loop) {
?>
							<p class="pos_ac">現在、お知らせ・イベント情報を準備中です。</p>
						<?php } ?>
					</div>
					<div class="list_pager">
						<ul>
							<?php if (!empty($_smarty_tpl->tpl_vars['t_information']->value['page']['LinkBack'])) {?><li class="before"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['page']['LinkBack'];?>
</li><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['t_information']->value['page']['LinkPage'];?>

							<?php if (!empty($_smarty_tpl->tpl_vars['t_information']->value['page']['LinkBack'])) {?><li class="after"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['page']['LinkNext'];?>
</li><?php }?>
						</ul>
					</div>
				</div>
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
