<footer>
	<div id="foot_contact" class="wrapper center">
		<div class="contact_area">
			<div class="row">
				<div class="col-xs-6">
					<div class="tel_unit">
						<h4>お電話でのお問い合わせ</h4>
						<span class="tel" data-tel="{$displaySchool.tel}"><img src="/common/image/head/phone.png" alt="電話番号" /><a href="tel:{$displaySchool.tel}">{$displaySchool.tel}</a></span>
					</div>
				</div>
				<div class="col-xs-6">
					<a href="/school/contact/?sc={$displaySchool.id_school}" class="ov btn_foot_contact">
						<span class="img flex_c"><img src="/common/image/contents/top/mail.png" alt="お問合せ"></span>
						<span class="text flex_c">お問い合わせ</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div id="foot">
		<div class="center">
			<div class="row">
				<div class="col-md-5">
					<div class="address_unit">
						<div class="disp_td fw_bold">
							<h5><a class="ov" href="/"><img src="/common/image/foot/logo.png" alt="学びクリエーション" /></a></h5>
							<p>〒{$displaySchool.zip}  {html_select_ken pre="1" selected=$displaySchool.prefecture}{$displaySchool.address1}{$displaySchool.address2}</p>
							{if $displaySchool.tel|default:"" != NULL}<p><span class="tel" data-tel="{$displaySchool.tel}">TEL：<a href="tel:{$displaySchool.tel}">{$displaySchool.tel}</a></span></p>{/if}
							{if $displaySchool.mail|default:"" != NULL}<p class="mb20">メール：<a href="mailto:{$displaySchool.mail}">{$displaySchool.mail}</a></p>{/if}
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="foot_navi">
						<ul>
							<li class="main"><a href="/" class="ov">日本学びクリエーションTOP</a></li>
							<li class="main"><a href="/school/?sc={$displaySchool.id_school}#top_about" class="ov">{$displaySchool.short_name}について</a></li>
							<li class="main"><a href="/school/?sc={$displaySchool.id_school}#top_schedule" class="ov">スケジュール</a></li>
							<li class="main"><a href="/school/teacher/?sc={$displaySchool.id_school}" class="ov">講師紹介</a></li>
						</ul>
						<ul class="second">
							<li class="main"><a href="/school/curriculum/?sc={$displaySchool.id_school}" class="ov">取り扱いカリキュラム</a></li>
							{foreach from=$OptionSchoolCurriculum item="curriculum" key="key" name="loopCurriculum"}
							<li class="sub"><a href="/school/curriculum/?sc={$displaySchool.id_school}#curriculum{$key}">{$curriculum}</a></li>
							{/foreach}
						</ul>
						<ul>
							<li class="main"><a href="/school/?sc={$displaySchool.id_school}#top_info" class="ov">アクセス</a></li>
							<li class="main"><a href="/school/news/?sc={$displaySchool.id_school}" class="ov">お知らせ・イベント</a></li>
							<li class="main"><a href="/school/contact/?sc={$displaySchool.id_school}" class="ov">お問い合わせ</a></li>
							<li class="main"><a href="/school/privacy/?sc={$displaySchool.id_school}" class="ov">プライバシーポリシー</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="copyright" class="bg_lgreen">
		<p class="pos_ac">&copy; 2020 Manabi Creation All Rights Reserved.</p>
	</div>
    <div id="pagetop"><a href="javascript:void(0);" class="fa fa-angle-up"><span>pagetop</span></a></div>
</footer>
