<header>
	<div id="head">
		<div class="head_wrap">
			<h1 class="site_logo">
				<a class="ov" href="/school/?sc={$displaySchool.id_school}">
					<img src="/common/image/head/logo.png" alt="学びクリエーション" class="top_logo">
					<img src="/common/image/head/logo_sp.png" alt="学びクリエーション" class="top_none_logo">
				</a>
			</h1>
			<div class="head_contact _head hidden-xs">
				<div class="tel_unit pos_re">
					<span class="tel sans" data-tel="{$displaySchool.tel}"><img src="/common/image/head/phone.png" class="pos_vm tel_i" alt="電話番号" /><a href="tel:{$displaySchool.tel}">{$displaySchool.tel}</a></span>
					<span class="time">受付時間 {$displaySchool.reception_time}</span>
					<p class=" tel_back"><img src="/common/image/head/tel_back.png" alt="電話番号" /></p>
				</div>
				<div class="mail_unit">
					<a href="/school/contact/?sc={$displaySchool.id_school}" class="btn_contact ov">
						<div class="disp_td">
							<p class="mail_i m0auto"><img src="/common/image/head/mail.png" class="pos_vm" alt="お問合せ"></p>
							<p class="pos_ac">お問合せ</p>
						</div>
					</a>
				</div>
			</div>
			<div id="btn_open"><a href="javascript:void(0);"><i class="fa fa-bars"></i></a></div>
		</div>
		<div id="head_navi">
			<div class="center">
				<ul>
					<li class="first"><a href="/school/?sc={$displaySchool.id_school}#top_about">{$displaySchool.short_name}について</a></li>
					<li><a href="/school/?sc={$displaySchool.id_school}#top_schedule">スケジュール</a></li>
					<li><a href="/school/news/?sc={$displaySchool.id_school}">お知らせ・イベント</a></li>
					<li><a href="/school/curriculum/?sc={$displaySchool.id_school}">カリキュラム</a></li>
					<li><a href="/school/teacher/?sc={$displaySchool.id_school}">講師</a></li>
					<li class="last"><a href="/school/access/?sc={$displaySchool.id_school}">アクセス</a></li>
					<li class="head_contact">
						<div class="tel_unit">
							<span class="tel sans" data-tel="{$displaySchool.tel}"><img src="/common/image/head/phone.png" class="pos_vm" alt="電話番号" /><a href="tel:{$displaySchool.tel}">{$displaySchool.tel}</a></span>
							<span class="time">受付時間 {$displaySchool.reception_time}</span>
						</div>
						<div class="mail_unit">
							<a href="/school/contact/?sc={$displaySchool.id_school}" class="btn_contact ov">
								<div class="disp_td">
									<p class="mail_i m0auto"><img src="/common/image/head/mail.png" class="pos_vm" alt="お問い合わせ" /></p>
									<p class="pos_ac sp_none">お問合せ</p>
									<p class="pos_ac pc_none">お問い合わせ</p>
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
			{if $displaySchool.facebook != NULL || $displaySchool.twitter != NULL}
			<div class="sns_icon">
				{if $displaySchool.facebook != NULL}<a class="fb ov ga_link" href="{$displaySchool.facebook}" target="_blank"><i class="fab fa-facebook-f"></i></a>{/if}
				{if $displaySchool.twitter != NULL}<a href="{$displaySchool.twitter}" target="_blank" class="twitter ov"><i class="fab fa-twitter"></i></a>{/if}
			</div>
			{/if}
		</div>
	</div>
</header>
