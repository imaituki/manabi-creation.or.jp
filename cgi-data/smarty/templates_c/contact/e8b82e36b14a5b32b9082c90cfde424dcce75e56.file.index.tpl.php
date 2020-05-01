<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 18:54:43
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19010153775eaaa063ee60d3-72634255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1588224559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19010153775eaaa063ee60d3-72634255',
  'function' => 
  array (
    'ng' => 
    array (
      'parameter' => 
      array (
        'msg' => 'all',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'msg' => 0,
    'message' => 0,
    'OptionContactType' => 0,
    'arr_post' => 0,
    'OptionContactSchoolYear' => 0,
    'OptionContactZoom' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaaa06405f839_49708630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaaa06405f839_49708630')) {function content_5eaaa06405f839_49708630($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- meta -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- meta -->
<link rel="stylesheet" href="/common/css/import.css">
<!-- js -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="/common/js/contact.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<!-- js -->
</head>
<body id="contact">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header -->
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back sp_none">
			<img src="/common/image/contents/top.jpg" alt="お問い合わせ">
		</div>
		<div class="img_back pc_none">
			<img src="/common/image/contents/top_sp.jpg" alt="お問い合わせ">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span>
					</span>
					<span class="sub">お問い合わせ</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>お問い合わせ</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper">
			<div class="center entry">
				<div class="box">
					<p class="pos_ac mb30">
						<img src="/common/image/contents/contact/contact.png" alt="お問い合わせ"  class="hidden-only">
						<img src="/common/image/contents/contact/sp_contact.png" alt="お問い合わせ"  class="visible-only">
					</p>
					<p class="mb50 top_text">下記項目にご入力ください。「必須」印は入力必須項目です。<br>入力後、一番下の「 入力内容を確認する」ボタンをクリックしてください。</p>
					<form action="./check.php#form" method="post">
						<?php if (!function_exists('smarty_template_function_ng')) {
    function smarty_template_function_ng($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['ng']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['msg']->value])) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['msg']->value];?>
</p><?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

						<table class="tbl_form">
							<tbody>
								<tr>
									<th scope="row">ご用件</th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"type"));?>

										<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['OptionContactType']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['type'])===null||$tmp==='' ? "0" : $tmp),'name'=>"type"),$_smarty_tpl);?>

									</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"name"));?>

										<input type="text" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255">
									</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名(フリガナ)<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"ruby"));?>

										<input type="text" name="ruby" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255">
									</td>
								</tr>
								<tr>
									<th scope="row">受講するお子様の学年<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"school_year"));?>

										<select name="school_year" id="" class="mb10">
											<option value="">選択してください</option>
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionContactSchoolYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['school_year']),$_smarty_tpl);?>

										</select>
									</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名</th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"student_name"));?>

										<input type="text" name="student_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['student_name'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255">
									</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名(フリガナ)</th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"student_ruby"));?>

										<input type="text" name="student_ruby" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['student_ruby'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255">
									</td>
								</tr>
								<tr>
								<th class="pos-vt">住所</th>
								<td>
									<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"zip"));?>

									<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"prefecture"));?>

									<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"address1"));?>

									<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"address2"));?>

									<dl>
										<dt>郵便番号</dt>
										<dd class="mb20">
											<input name="zip" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zip'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" class="zip w150" placeholder="000-0000" maxlength="8">
											<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');" class="bTn wp100 w_sm_A dis_b dis_sm_ib zip_block ov">郵便番号から検索する</a>
										</dd>
									</dl>
									<dl>
										<dt>都道府県</dt>
										<dd class="mb20">
											<select name="prefecture" class="form-control inline input-s" str_value="">
												<?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'],'class'=>"form-control inline input-s option"),$_smarty_tpl);?>

											</select>
										</dd>
									</dl>
									<dl>
										<dt>市区町村・番地</dt>
										<dd class="mb20">
											<input name="address1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address1'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" placeholder="市区町村・番地を入力してください" maxlength="255">
										</dd>
									</dl>
									<dl>
										<dt>建物・マンション名</dt>
										<dd class="mb20">
											<input name="address2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address2'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" placeholder="建物・マンション名を入力してください" maxlength="255">
										</dd>
									</dl>
								</td>
							</tr>
								<tr>
									<th scope="row">メールアドレス<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"mail"));?>

										<input type="text" name="mail" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" >
									</td>
								</tr>
								<tr>
									<th scope="row">電話番号<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"tel"));?>

										<input type="text" name="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="13" class="w150" placeholder="090-000-000" maxlength="14">
									</td>
								</tr>
								<!--オンライン授業申し込み選択時のみ表示-->
								<tr id="th_content2"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['type'])===null||$tmp==='' ? 0 : $tmp)==0) {?> style="display:none;"<?php }?>>
									<th scope="row" class="zoom">ZOOMオンラインの<br class="md_br">利用経験<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"zoom"));?>

										<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['OptionContactZoom']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zoom'])===null||$tmp==='' ? "0" : $tmp),'name'=>"zoom"),$_smarty_tpl);?>

									</td>
								</tr>
								<!--オンライン授業申し込み選択時のみ表示-->
								<tr class="last">
									<th scope="row" id="th_comment">
										<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['type'])===null||$tmp==='' ? 0 : $tmp)==0) {?>
											お問い合わせ内容<span class="need">必須</span>
										<?php } else { ?>
											その他お問い合わせ
										<?php }?>
									</th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"comment"));?>

										<textarea rows="5" name="comment"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="pos_ac form_button mb50">
							<button class="button" type="submit">確認画面へ<i class="fas fa-caret-right"></i></button>
						</div>
					</form>
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
