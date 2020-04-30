			{literal}
			<script type="text/javascript">
				sortableInit();
			</script>
			{/literal}
			{include file=$template_pagenavi}
			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
				<thead>
					<tr>
						<th></th>
						<th>役割</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$mst_teacher_role item="teacher_role" name="loopNews"}
					<tr id="{$teacher_role.id_teacher_role}">
						<td class="pos_ac pos_vm move_i">{if $arr_post.mode|default:"" == "search"}☓{else}<i class="fa fa-r fa-sort"><span></span></i>{/if}</td>
						<td><a href="./edit.php?id={$teacher_role.id_teacher_role}">{$teacher_role.name}</a></td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display{$teacher_role.id_teacher_role}" data-id="{$teacher_role.id_teacher_role}"{if $teacher_role.display_flg == 1} checked{/if}>
									<label class="onoffswitch-label" for="display{$teacher_role.id_teacher_role}">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac">
							<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$teacher_role.id_teacher_role}">削除</a>
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
