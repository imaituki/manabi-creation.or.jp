	<nav class="navbar-default navbar-static-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav metismenu" id="side-menu" style="padding-bottom:30px;">
				<li class="nav-header">
					<div class="dropdown profile-element">
						<span>
							{if !empty($smarty.cookies.sc_image1)}
								<img alt="image" style="width:100%" src="/common/photo/school/image1/s_{$smarty.cookies.sc_image1}" /></span>
							{else}
							{/if}
							<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)">
								<span class="clear">
									<span class="block m-t-xs"><strong class="font-bold">{$smarty.cookies.sc_name}</strong></span>
								</span>
							</a>
{*						<span><a class="text-muted text-xs " href="/school/admin/manual/manual.pdf" target="_blank">管理者マニュアル</a></span>*}
						{*
						<ul class="dropdown-menu animated fadeInRight m-t-xs">

							<li><a href="bottom_template/profile.html">管理者設定</a></li>
							<li class="divider"></li>

							<li><a href="/school/admin/logout.php">ログアウト</a></li>
						</ul>*}
					</div>
				</li>
				<li><a href="/school/admin/"><i class="fa fa-home"></i><span class="nav-label">HOME</span></a></li>
				<li><a href="/school/admin/contents/information/"><i class="fa fa-newspaper-o"></i><span class="nav-label">お知らせ管理</span></a></li>
				<li><a href="/school/admin/contents/staff/"><i class="fa fa-newspaper-o"></i><span class="nav-label">スタッフ管理</span></a></li>
				<li><a href="/school/admin/contents/school/"><i class="fa fa-newspaper-o"></i><span class="nav-label">学校情報</span></a></li>
				<li><a href="/school/admin/contents/teacher_role/"><i class="fa fa-newspaper-o"></i><span class="nav-label">役割管理</span></a></li>
				<li><a href="/school/admin/contents/teacher/"><i class="fa fa-newspaper-o"></i><span class="nav-label">講師管理</span></a></li>
				<li><a href="/school/admin/contents/schedule/"><i class="fa fa-newspaper-o"></i><span class="nav-label">スケジュール管理</span></a></li>
				<li><a href="/school/admin/contents/contact/"><i class="fa fa-newspaper-o"></i><span class="nav-label">お問い合わせ管理</span></a></li>
{* 固定のため機能非表示
				<li><a href="/school/admin/contents/information_category/"><i class="fa fa-newspaper-o"></i><span class="nav-label">カテゴリ管理</span></a></li>
*}
			</ul>
		</div>
	</nav>
