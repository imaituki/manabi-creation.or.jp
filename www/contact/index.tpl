<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- meta -->
{include file=$template_meta}
<!-- meta -->
<link rel="stylesheet" href="/common/css/import.css">
<!-- js -->
{include file=$template_javascript}
<script type="text/javascript" src="/common/js/contact.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<!-- js -->
</head>
<body id="contact">
<div id="base">
<!-- header -->
{include file=$template_header}
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
{function name="ng" msg="all"}{if not empty($message.ng[$msg])}<p class="error">{$message.ng[$msg]}</p>{/if}{/function}
						<table class="tbl_form">
							<tbody>
								<tr>
									<th scope="row">ご用件</th>
									<td>
										{ng msg="content"}
										<input type="radio" name="content" value="0" id="content_0"{if $arr_post.content|default:0 eq 0} checked="checked"{/if}><label for="content_0" class="sp_mb10">お問い合わせ</label>
										<input type="radio" name="content" value="1" id="content_1"{if $arr_post.content eq 1} checked="checked"{/if}><label for="content_1">オンライン授業申し込み</label>
									</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名<span class="need">必須</span></th>
									<td>
										{ng msg="name"}
										<input type="text" name="name" value="{$arr_post.name|default:""}">
									</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名(フリガナ)<span class="need">必須</span></th>
									<td>
										{ng msg="ruby"}
										<input type="text" name="ruby" value="{$arr_post.ruby|default:""}">
									</td>
								</tr>
								<tr>
									<th scope="row">受講するお子様の学年<span class="need">必須</span></th>
									<td>
										{ng msg="g"}
										<select name="g" id="" class="mb10">
											<option value="">選択してください</option>
											<option value="1"{if $arr_post.g eq 1} selected="selected"{/if}>小学校1年生</option>
											<option value="2"{if $arr_post.g eq 2} selected="selected"{/if}>小学校2年生</option>
											<option value="3"{if $arr_post.g eq 3} selected="selected"{/if}>小学校3年生</option>
											<option value="4"{if $arr_post.g eq 4} selected="selected"{/if}>小学校4年生</option>
											<option value="5"{if $arr_post.g eq 5} selected="selected"{/if}>小学校5年生</option>
											<option value="6"{if $arr_post.g eq 6} selected="selected"{/if}>小学校6年生</option>
											<option value="7"{if $arr_post.g eq 7} selected="selected"{/if}>中学校1年生</option>
											<option value="8"{if $arr_post.g eq 8} selected="selected"{/if}>中学校2年生</option>
											<option value="9"{if $arr_post.g eq 9} selected="selected"{/if}>中学校3年生</option>
											<option value="10"{if $arr_post.g eq 10} selected="selected"{/if}>高等学校1年生</option>
											<option value="11"{if $arr_post.g eq 11} selected="selected"{/if}>高等学校2年生</option>
											<option value="12"{if $arr_post.g eq 12} selected="selected"{/if}>高等学校3年生</option>
										</select>
									</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名</th>
									<td>
										{ng msg="name2"}
										<input type="text" name="name2" value="{$arr_post.name2|default:""}">
									</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名(フリガナ)</th>
									<td>
										{ng msg="ruby2"}
										<input type="text" name="ruby2" value="{$arr_post.ruby2|default:""}">
									</td>
								</tr>
								<tr>
								<th class="pos-vt">住所</th>
								<td>
									{ng msg="zip"}
									{ng msg="prefecture"}
									{ng msg="address1"}
									{ng msg="address2"}
									<dl>
										<dt>郵便番号</dt>
										<dd class="mb20">
											<input name="zip" value="{$arr_post.zip|default:""}" type="text" class="zip w150" placeholder="000-000">
											<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');" class="bTn wp100 w_sm_A dis_b dis_sm_ib zip_block ov">郵便番号から検索する</a>
										</dd>
									</dl>
									<dl>
										<dt>都道府県</dt>
										<dd class="mb20">
											<select name="prefecture" class="form-control inline input-s" str_value="">
												{html_select_ken selected=$arr_post.prefecture class="form-control inline input-s option"}
											</select>
										</dd>
									</dl>
									<dl>
										<dt>市区町村・番地</dt>
										<dd class="mb20">
											<input name="address1" value="{$arr_post.address1|default:""}" type="text" placeholder="市区町村・番地を入力してください">
										</dd>
									</dl>
									<dl>
										<dt>建物・マンション名</dt>
										<dd class="mb20">
											<input name="address2" value="{$arr_post.address2|default:""}" type="text" placeholder="建物・マンション名を入力してください">
										</dd>
									</dl>
								</td>
							</tr>
								<tr>
									<th scope="row">メールアドレス<span class="need">必須</span></th>
									<td>
										{ng msg="mail"}
										<input type="text" name="mail" value="{$arr_post.mail|default:""}" maxlength="255" >
									</td>
								</tr>
								<tr>
									<th scope="row">電話番号<span class="need">必須</span></th>
									<td>
										{ng msg="tel"}
										<input type="text" name="tel" value="{$arr_post.tel|default:""}" maxlength="13" class="w150" placeholder="090-000-000">
									</td>
								</tr>
								<!--オンライン授業申し込み選択時のみ表示-->
								<tr id="th_content2"{if $arr_post.content|default:0 eq 0} style="display:none;"{/if}>
									<th scope="row" class="zoom">ZOOMオンラインの<br class="md_br">利用経験<span class="need">必須</span></th>
									<td>
										{ng msg="content2"}
										<input type="radio" name="content2" value="0" id="content20"{if $arr_post.content2|default:0 eq 0} checked="checked"{/if}><label for="content20" class="sp_mb10">ある</label>
										<input type="radio" name="content2" value="1" id="content21"{if $arr_post.content2 eq 1} checked="checked"{/if}><label for="content21">ない</label>
									</td>
								</tr>
								<!--オンライン授業申し込み選択時のみ表示-->
								<tr class="last">
									<th scope="row" id="th_comment">
										{if $arr_post.content|default:0 eq 0}
											お問い合わせ内容<span class="need">必須</span>
										{else}
											その他お問い合わせ
										{/if}
									</th>
									<td>
										{ng msg="comment"}
										<textarea rows="5" name="comment">{$arr_post.comment}</textarea>
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
{include file=$template_footer}
<!-- footer -->
<script>
</script>
</div>
</body>
</html>
