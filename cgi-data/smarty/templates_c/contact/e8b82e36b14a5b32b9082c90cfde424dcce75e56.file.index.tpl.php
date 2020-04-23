<?php /* Smarty version Smarty-3.1.18, created on 2020-04-22 18:00:49
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17917484395ea007c11645f0-22289950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1587541637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17917484395ea007c11645f0-22289950',
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
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea007c12928b9_82643821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea007c12928b9_82643821')) {function content_5ea007c12928b9_82643821($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- meta -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- meta -->
<link rel="stylesheet" href="/common/css/import.css">
<!-- js -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['msg']->value])) {?><p><?php echo $_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['msg']->value];?>
</p><?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

						<table class="tbl_form">
							<tbody>
								<tr>
									<th scope="row">ご用件</th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"content"));?>

										<input type="radio" name="content" value="0" id="content_0" onchange="$(':input[name=&quot;comment&quot;],:input[name=&quot;content2&quot;]').closest('tr')[$(this).is(':checked') ? 'hide' : 'show']();"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['content'])===null||$tmp==='' ? 0 : $tmp)==0) {?> checked="checked"<?php }?>><label for="content_0" class="sp_mb10">お問い合わせ</label>
										<input type="radio" name="content" value="1" id="content_1" onchange="$(':input[name=&quot;comment&quot;],:input[name=&quot;content2&quot;]').closest('tr')[$(this).is(':checked') ? 'show' : 'hide']();"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['content']==1) {?> checked="checked"<?php }?>><label for="content_1">オンライン授業申し込み</label>
									</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"name"));?>

										<input type="text" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
">
									</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名(フリガナ)<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"ruby"));?>

										<input type="text" name="ruby" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby'])===null||$tmp==='' ? '' : $tmp);?>
">
									</td>
								</tr>
								<tr>
									<th scope="row">受講するお子様の学年<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"g"));?>

										<select name="g" id="" class="mb10">
											<option value="">選択してください</option>
											<option value="1"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==1) {?> selected="selected"<?php }?>>小学校1年生</option>
											<option value="2"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==2) {?> selected="selected"<?php }?>>小学校2年生</option>
											<option value="3"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==3) {?> selected="selected"<?php }?>>小学校3年生</option>
											<option value="4"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==4) {?> selected="selected"<?php }?>>小学校4年生</option>
											<option value="5"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==5) {?> selected="selected"<?php }?>>小学校5年生</option>
											<option value="6"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==6) {?> selected="selected"<?php }?>>小学校6年生</option>
											<option value="7"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==7) {?> selected="selected"<?php }?>>中学校1年生</option>
											<option value="8"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==8) {?> selected="selected"<?php }?>>中学校2年生</option>
											<option value="9"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==9) {?> selected="selected"<?php }?>>中学校3年生</option>
											<option value="10"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==10) {?> selected="selected"<?php }?>>高等学校1年生</option>
											<option value="11"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==11) {?> selected="selected"<?php }?>>高等学校2年生</option>
											<option value="12"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['g']==12) {?> selected="selected"<?php }?>>高等学校3年生</option>
										</select>
									</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名</th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"name2"));?>

										<input type="text" name="name2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '' : $tmp);?>
">
									</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名(フリガナ)</th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"ruby2"));?>

										<input type="text" name="ruby2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>
">
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
" type="text" class="zip w150" placeholder="000-000">
											<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');" class="bTn wp100 w_sm_A dis_b dis_sm_ib zip_block ov">郵便番号から検索する</a>
										</dd>
									</dl>
									<dl>
										<dt>都道府県</dt>
										<dd class="mb20">
											<select name="prefecture" class="form-control inline input-s" str_value="">
											<option value="0" selected="selected" class="form-control inline input-s option">お選びください</option>
											<option value="1"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==1) {?> selected="selected"<?php }?> class="form-control inline input-s option">北海道</option>
											<option value="2"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==2) {?> selected="selected"<?php }?> class="form-control inline input-s option">青森県</option>
											<option value="3"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==3) {?> selected="selected"<?php }?> class="form-control inline input-s option">岩手県</option>
											<option value="4"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==4) {?> selected="selected"<?php }?> class="form-control inline input-s option">宮城県</option>
											<option value="5"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==5) {?> selected="selected"<?php }?> class="form-control inline input-s option">秋田県</option>
											<option value="6"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==6) {?> selected="selected"<?php }?> class="form-control inline input-s option">山形県</option>
											<option value="7"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==7) {?> selected="selected"<?php }?> class="form-control inline input-s option">福島県</option>
											<option value="8"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==8) {?> selected="selected"<?php }?> class="form-control inline input-s option">茨城県</option>
											<option value="9"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==9) {?> selected="selected"<?php }?> class="form-control inline input-s option">栃木県</option>
											<option value="10"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==10) {?> selected="selected"<?php }?> class="form-control inline input-s option">群馬県</option>
											<option value="11"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==11) {?> selected="selected"<?php }?> class="form-control inline input-s option">埼玉県</option>
											<option value="12"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==12) {?> selected="selected"<?php }?> class="form-control inline input-s option">千葉県</option>
											<option value="13"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==13) {?> selected="selected"<?php }?> class="form-control inline input-s option">東京都</option>
											<option value="14"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==14) {?> selected="selected"<?php }?> class="form-control inline input-s option">神奈川県</option>
											<option value="15"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==15) {?> selected="selected"<?php }?> class="form-control inline input-s option">新潟県</option>
											<option value="16"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==16) {?> selected="selected"<?php }?> class="form-control inline input-s option">富山県</option>
											<option value="17"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==17) {?> selected="selected"<?php }?> class="form-control inline input-s option">石川県</option>
											<option value="18"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==18) {?> selected="selected"<?php }?> class="form-control inline input-s option">福井県</option>
											<option value="19"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==19) {?> selected="selected"<?php }?> class="form-control inline input-s option">山梨県</option>
											<option value="20"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==20) {?> selected="selected"<?php }?> class="form-control inline input-s option">長野県</option>
											<option value="21"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==21) {?> selected="selected"<?php }?> class="form-control inline input-s option">岐阜県</option>
											<option value="22"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==22) {?> selected="selected"<?php }?> class="form-control inline input-s option">静岡県</option>
											<option value="23"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==23) {?> selected="selected"<?php }?> class="form-control inline input-s option">愛知県</option>
											<option value="24"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==24) {?> selected="selected"<?php }?> class="form-control inline input-s option">三重県</option>
											<option value="25"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==25) {?> selected="selected"<?php }?> class="form-control inline input-s option">滋賀県</option>
											<option value="26"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==26) {?> selected="selected"<?php }?> class="form-control inline input-s option">京都府</option>
											<option value="27"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==27) {?> selected="selected"<?php }?> class="form-control inline input-s option">大阪府</option>
											<option value="28"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==28) {?> selected="selected"<?php }?> class="form-control inline input-s option">兵庫県</option>
											<option value="29"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==29) {?> selected="selected"<?php }?> class="form-control inline input-s option">奈良県</option>
											<option value="30"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==30) {?> selected="selected"<?php }?> class="form-control inline input-s option">和歌山県</option>
											<option value="31"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==31) {?> selected="selected"<?php }?> class="form-control inline input-s option">鳥取県</option>
											<option value="32"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==32) {?> selected="selected"<?php }?> class="form-control inline input-s option">島根県</option>
											<option value="33"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==33) {?> selected="selected"<?php }?> class="form-control inline input-s option">岡山県</option>
											<option value="34"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==34) {?> selected="selected"<?php }?> class="form-control inline input-s option">広島県</option>
											<option value="35"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==35) {?> selected="selected"<?php }?> class="form-control inline input-s option">山口県</option>
											<option value="36"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==36) {?> selected="selected"<?php }?> class="form-control inline input-s option">徳島県</option>
											<option value="37"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==37) {?> selected="selected"<?php }?> class="form-control inline input-s option">香川県</option>
											<option value="38"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==38) {?> selected="selected"<?php }?> class="form-control inline input-s option">愛媛県</option>
											<option value="39"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==39) {?> selected="selected"<?php }?> class="form-control inline input-s option">高知県</option>
											<option value="40"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==40) {?> selected="selected"<?php }?> class="form-control inline input-s option">福岡県</option>
											<option value="41"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==41) {?> selected="selected"<?php }?> class="form-control inline input-s option">佐賀県</option>
											<option value="42"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==42) {?> selected="selected"<?php }?> class="form-control inline input-s option">長崎県</option>
											<option value="43"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==43) {?> selected="selected"<?php }?> class="form-control inline input-s option">熊本県</option>
											<option value="44"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==44) {?> selected="selected"<?php }?> class="form-control inline input-s option">大分県</option>
											<option value="45"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==45) {?> selected="selected"<?php }?> class="form-control inline input-s option">宮崎県</option>
											<option value="46"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==46) {?> selected="selected"<?php }?> class="form-control inline input-s option">鹿児島県</option>
											<option value="47"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']==47) {?> selected="selected"<?php }?> class="form-control inline input-s option">沖縄県</option>
											</select>
										</dd>
									</dl>
									<dl>
										<dt>市区町村・番地</dt>
										<dd class="mb20">
											<input name="address1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address1'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" placeholder="市区町村・番地を入力してください">
										</dd>
									</dl>
									<dl>
										<dt>建物・マンション名</dt>
										<dd class="mb20">
											<input name="address2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address2'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" placeholder="建物・マンション名を入力してください">
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
" maxlength="13" class="w150" placeholder="090-000-000">
									</td>
								</tr>
								<!--オンライン授業申し込み選択時のみ表示-->
								<tr<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['content'])===null||$tmp==='' ? 0 : $tmp)==0) {?> style="display:none;"<?php }?>>
									<th scope="row" class="zoom">ZOOMオンラインの<br class="md_br">利用経験<span class="need">必須</span></th>
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"content2"));?>

										<input type="radio" name="content2" value="0" id="content20"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['content2'])===null||$tmp==='' ? 0 : $tmp)==0) {?> checked="checked"<?php }?>><label for="content20" class="sp_mb10">ある</label>
										<input type="radio" name="content2" value="1" id="content21"<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['content2']==1) {?> checked="checked"<?php }?>><label for="content21">ない</label>
									</td>
								</tr>
								<!--オンライン授業申し込み選択時のみ表示-->
								<tr class="last"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['content'])===null||$tmp==='' ? 0 : $tmp)==0) {?> style="display:none;"<?php }?>>
									<th scope="row">
										<!--お問い合わせ選択時-->
										お問い合わせ内容
										<!--オンライン授業申し込み選択時
										「その他お問合せ」 -->

										<!--お問い合わせ選択時-->
										<span class="need">必須</span></th>
										<!--お問い合わせ選択時-->
									<td>
										<?php smarty_template_function_ng($_smarty_tpl,array('msg'=>"comment"));?>

										<textarea rows="5" name="comment"><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment'];?>
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
