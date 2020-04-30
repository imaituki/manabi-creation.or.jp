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
				<li><a href="/school/?sc={$displaySchool.id_school}">{$displaySchool.short_name}</a></li>
				<li>お問い合わせ</li>
			</ul>
		</div>
	</div>
	<section>
        <div class="wrapper">
            <div class="center finish">
                <div class="box">
                    <p class="pos_ac mb50">
                        <img src="/common/image/contents/contact/finish.png" alt="お問い合わせ・ご予約"  class="hidden-only">
                        <img src="/common/image/contents/contact/sp_finish.png" alt="お問い合わせ・ご予約"  class="visible-only">
                    </p>
                    <h2>お問い合わせが完了しました</h2>
                    <p class="mb20">ご入力いただいたメールアドレス{if !empty( $arr_post.mail )}({$arr_post.mail}){/if}宛に、確認メールをお送りしておりますのでご確認ください。</p>
                    <p class="mb20">
                        しばらくたっても自動送信メールが届かない場合には、主に次の原因が考えられます。<br>
                        「ご入力いただいたメールアドレスが間違っている」<br>
                        「迷惑メール対策による受信メールの自動削除設定」<br>
                        「メールボックスの容量オーバー（特にフリーメール）」<br>
                        「メールの受信制限や拒否設定（特に携帯メール）」</p>
                    <p class="mb20">メールアドレスの間違いや、ドメイン指定などの受信設定を今一度ご確認いただき、<br>
                        送受信できる正しいメールアドレスを、メールまたはお電話にてご連絡くださいますようお願い申し上げます。</p>
                    <p class="mb50">その他、何かご不明な点等ございましたら、お気軽にお問い合わせください。</p>
                    <div class="button m0auto"><a href="/" class="_type1 ov">トップページに戻る<i class="fas fa-caret-right"></i></a></div>
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
