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
					<p class="pos_ac mb50">
						<img src="/common/image/contents/contact/check.png" alt="お問い合わせ・オンライン授業申し込み"  class="hidden-only">
						<img src="/common/image/contents/contact/sp_check.png" alt="お問い合わせ・オンライン授業申し込み"  class="visible-only">
					</p>
					<p class="mb10 c_red">まだフォームの送信は完了していません。</p>
					<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
					<form action="./#form" method="post">
						<table class="tbl_form mb50 check">
							<tbody>
								<tr class="first">
									<th scope="row">ご用件</th>
									<td>{$OptionContactType[$arr_post.type]}</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名</th>
									<td>{$arr_post.name}</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名(フリガナ)</th>
									<td>{$arr_post.ruby}</td>
								</tr>
								<tr>
									<th scope="row">受講するお子様の学年</th>
									<td>{$OptionContactSchoolYear[$arr_post.school_year]}</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名</th>
									<td>{$arr_post.student_name}</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名(フリガナ)</th>
									<td>{$arr_post.student_ruby}</td>
								</tr>
								<tr>
									<th scope="row">住所</th>
									<td>〒{$arr_post.zip} {if $arr_post.prefecture > 0}{html_select_ken selected=$arr_post.prefecture pre="1"}{/if} {$arr_post.address1} {$arr_post.address2}</td>
								</tr>
								<tr>
									<th scope="row">メールアドレス</th>
									<td>{$arr_post.mail}</td>
								</tr>
								<tr>
									<th scope="row">電話番号</th>
									<td>{$arr_post.tel}</td>
								</tr>
								{if not empty($arr_post.type)}
								<tr>
									<th scope="row" class="zoom">ZOOMオンラインの<br class="md_br">利用経験</th>
									<td>{$OptionContactZoom[$arr_post.zoom]}</td>
								</tr>
								{/if}
								<tr>
									<th scope="row">{if not empty($arr_post.type)}その他お問い合わせ{else}お問い合わせ内容{/if}</th>
									<td>{$arr_post.comment|nl2br}</td>
								</tr>
							</tbody>
						</table>
						<div class="row form_button _check">
							{foreach from=$arr_post item="value" key="name"}
							<input type="hidden" name="{$name}" value="{$value}" />
							{/foreach}
							<div class="col-sm-6 mb20 left">
								<button class="button _back" type="submit" formaction="./"><i class="fas fa-caret-left"></i>修正する</button>
							</div>
							<div class="col-sm-6 right">
								<button id="send_button" class="button" type="submit" formaction="./send.php">送信する<i class="fas fa-caret-right"></i></button>
							</div>
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
