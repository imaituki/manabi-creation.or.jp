			{include file=$template_pagenavi}
			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
				<thead>
					<tr>
						<th>アカウント</th>
						<th>社員名</th>
						<th>TEL</th>
						<th>メール</th>
						<th class="showhide">有効</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$mst_staff item="staff" name="loopNews"}
					<tr id="{$staff.id_school_staff}">
						<td>{$staff.account}</td>
						<td><a href="./edit.php?id={$staff.id_school_staff}">{$staff.name}</a></td>
						<td>{$staff.tel}</td>
						<td>{$staff.mail}</td>
						<td>
							{if $staff.master_flg == 1}
							変更不可
							{else}
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_valid" id="valid{$staff.id_school_staff}" data-id="{$staff.id_school_staff}"{if $staff.valid_flg == 1} checked{/if}>
									<label class="onoffswitch-label" for="valid{$staff.id_school_staff}">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
							{/if}
						</td>
						<td>
							{if $staff.master_flg == 1}
								削除不可
							{else}
								<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$staff.id_school_staff}">削除</a>
							{/if}
						</td>
					</tr>
					{foreachelse}
					<tr>
						<td colspan="6">{$_CONTENTS_NAME}は見つかりません。</td>
					</tr>
					{/foreach}
				</tbody>
			</table>
			{include file=$template_pagenavi}
