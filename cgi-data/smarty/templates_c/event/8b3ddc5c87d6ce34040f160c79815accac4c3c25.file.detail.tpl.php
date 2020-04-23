<?php /* Smarty version Smarty-3.1.18, created on 2020-04-02 09:13:43
         compiled from ".\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1402637615e8455e2177ec5-98141945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3ddc5c87d6ce34040f160c79815accac4c3c25' => 
    array (
      0 => '.\\detail.tpl',
      1 => 1585811621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402637615e8455e2177ec5-98141945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e8455e21a7e22_96504649',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_header' => 0,
    't_information' => 0,
    'template_footer' => 0,
    'template_javascript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e8455e21a7e22_96504649')) {function content_5e8455e21a7e22_96504649($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<link rel="stylesheet" href="../common/css/import.css">
</head>

<body id="event">
	<div id="base">
		<div id="fb-root"></div>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<main>
			<div id="body">
				<section>
					<div id="unit_1">
						<div class="wrapper-t center">
							<p class="side left"><img src="../common/image/contents/Earth8eightToys.png" alt=""></p>
							<p class="side right"><img src="../common/image/contents/PlayroomRentoy.png" alt=""></p>
							<div class="row">
								<div class="col-sm-5">
									<div id="play_main_image">
										<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image1']!=null) {?>
										<div class="unit">
											<div class="img_back"><img src="/common/photo/information/image1/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image1'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption1'];?>
"></div>
										</div>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image2']!=null) {?>
										<div class="unit">
											<div class="img_back"><img src="/common/photo/information/image2/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image2'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption2'];?>
"></div>
										</div>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image3']!=null) {?>
										<div class="unit">
											<div class="img_back"><img src="/common/photo/information/image3/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image3'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption3'];?>
"></div>
										</div>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image4']!=null) {?>
										<div class="unit">
											<div class="img_back"><img src="/common/photo/information/image4/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image4'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption4'];?>
"></div>
										</div>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image5']!=null) {?>
										<div class="unit">
											<div class="img_back"><img src="/common/photo/information/image5/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image5'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption5'];?>
"></div>
										</div>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image6']!=null) {?>
										<div class="unit">
											<div class="img_back"><img src="/common/photo/information/image6/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image6'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption6'];?>
"></div>
										</div>
										<?php }?>
									</div>
									<div id="play_thumbnail" class="mb50">
										<ul class="play_thumb-item-nav">
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image1']!=null) {?><li><div class="img_rect"><img src="/common/photo/information/image1/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image1'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption1'];?>
"></div></li><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image2']!=null) {?><li><div class="img_rect"><img src="/common/photo/information/image2/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image2'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption2'];?>
"></div></li><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image3']!=null) {?><li><div class="img_rect"><img src="/common/photo/information/image3/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image3'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption3'];?>
"></div></li><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image4']!=null) {?><li><div class="img_rect"><img src="/common/photo/information/image4/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image4'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption4'];?>
"></div></li><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image5']!=null) {?><li><div class="img_rect"><img src="/common/photo/information/image5/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image5'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption5'];?>
"></div></li><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image6']!=null) {?><li><div class="img_rect"><img src="/common/photo/information/image6/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image6'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['caption6'];?>
"></div></li><?php }?>
										</ul>
									</div>
									<div class="button _type_2 ov mb50"><a href="###"><span>このイベントの参加予約はこちら</span></a></div>
								</div>
								<div class="col-sm-7">
									<h2 class="mb40"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
</h2>
									<h3 class="mb50"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['subtitle'];?>
</h3>
									<p class="mb50"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['comment'];?>
</p>
									<?php if ($_smarty_tpl->tpl_vars['t_information']->value['target']!=null||$_smarty_tpl->tpl_vars['t_information']->value['capacity']!=null||$_smarty_tpl->tpl_vars['t_information']->value['entry_fee']!=null||$_smarty_tpl->tpl_vars['t_information']->value['venue']!=null) {?>
									<table class="tbl_2">
										<tbody>
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['target']!=null) {?>
											<tr>
												<th><span>対象</span></th>
												<td><?php echo $_smarty_tpl->tpl_vars['t_information']->value['target'];?>
</td>
											</tr>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['capacity']!=null) {?>
											<tr>
												<th><span>定員</span></th>
												<td><?php echo $_smarty_tpl->tpl_vars['t_information']->value['capacity'];?>
</td>
											</tr>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['entry_fee']!=null) {?>
											<tr>
												<th><span>参加費</span></th>
												<td><?php echo $_smarty_tpl->tpl_vars['t_information']->value['entry_fee'];?>
</td>
											</tr>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['t_information']->value['venue']!=null) {?>
											<tr>
												<th><span>会場</span></th>
												<td><?php echo nl2br($_smarty_tpl->tpl_vars['t_information']->value['venue']);?>
</td>
											</tr>
											<?php }?>
										</tbody>
									</table>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<div id="unit_2">
						<div class="wrapper-t center">
							<h2>このイベントに関連する記事</h2>
							<div class="row">
								<div class="height-1 col-md-3 col-xs-6 mb30">
									<a href="###" class="ov">
										<div class="img_rect mb20"><img src="../common/image/contents/null.jpg" alt=""></div>
										<p class="title">ワークショップ#03開催のお知らせ「積み木で街をつくろう！」ワークショップ#03開催のお知らせ「積み木で街をつくろう！」</p>
										<p class="text">4月26日(日)に、アースエイトトイズにてワークショップ「積み木で街をつくろう！」を開催致します。テキストテキストテcキス...</p>
										<p class="date"><span>イベント</span>2020.03.01</p>
									</a>
								</div>
								<div class="height-1 col-md-3 col-xs-6 mb30">
									<a href="###" class="ov">
										<div class="img_rect mb20"><img src="../common/image/contents/null.jpg" alt=""></div>
										<p class="title">ワークショップ#03開催のお知らせ「積み木で街をつくろう！」</p>
										<p class="text">4月26日(日)に、アースエイトトイズにてワークショップ「積み木で街をつくろう！」を開催致します。テキストテキストテキス...</p>
										<p class="date"><span>イベント</span>2020.03.01</p>
									</a>
								</div>
								<div class="height-1 col-md-3 col-xs-6 mb30">
									<a href="###" class="ov">
										<div class="img_rect mb20"><img src="../common/image/contents/null.jpg" alt=""></div>
										<p class="title">ワークショップ#03開催のお知らせ「積み木で街をつくろう！」</p>
										<p class="text">4月26日(日)に、アースエイトトイズにてワークショップ「積み木で街をつくろう！」を開催致します。テキストテキストテキス...</p>
										<p class="date"><span>イベント</span>2020.03.01</p>
									</a>
								</div>
								<div class="height-1 col-md-3 col-xs-6 mb30">
									<a href="###" class="ov">
										<div class="img_rect mb20"><img src="../common/image/contents/null.jpg" alt=""></div>
										<p class="title">ワークショップ#03開催のお知らせ「積み木で街をつくろう！」</p>
										<p class="text">4月26日(日)に、アースエイトトイズにてワークショップ「積み木で街をつくろう！」を開催致します。テキストテキストテキス...</p>
										<p class="date"><span>イベント</span>2020.03.01</p>
									</a>
								</div>
							</div>
							<div class="button _type_1 ov"><a href="###"><span>お知らせ・イベント情報 一覧へ</span></a></div>
						</div>
					</div>
				</section>
			</div>
		</main>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<!-- javascript -->
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<script type="text/javascript" src="../common/js/calender.js"></script>
	<!-- javascript -->
	<script type="text/javascript" src="../common/js/colorbox/jquery.colorbox-min.js"></script>
	<link rel="stylesheet" href="../common/js/colorbox/colorbox.css">
	<script>
		$(function(){
			//$('.colorbox').colorbox({inline:true, width:'80%'});
		});
	</script>
</body>
</html>
<?php }} ?>
