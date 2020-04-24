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
						<th>メニュー名称</th>
						<th>カリキュラム名称</th>
						<th class="photo">写真</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$mst_curriculum item="curriculum" name="loopNews"}
					<tr id="{$curriculum.id_curriculum}">
						<td class="pos_ac pos_vm move_i">{if $arr_post.mode|default:"" == "search"}☓{else}<i class="fa fa-r fa-sort"><span></span></i>{/if}</td>
						<td><a href="./edit.php?id={$curriculum.id_curriculum}">{$curriculum.menu}</a></td>
						<td>{$curriculum.name|nl2br}</td>
						<td class="pos_al">
							<div class="lightBoxGallery">
								{foreach from=$_ARR_IMAGE item="file" name="file"}
									{if $curriculum[$file.name]}
										<a href="{$_IMAGEFULLPATH}/{$_CONTENTS_DIR}/{$file.name}/l_{$curriculum[$file.name]}" title="{$file.comment|default:""}" data-gallery=""><img src="{$_IMAGEFULLPATH}/{$_CONTENTS_DIR}/{$file.name}/s_{$curriculum[$file.name]}" width="50" /></a>
									{/if}
									{if $smarty.foreach.file.iteration % 3 == 0}<br />{/if}
								{/foreach}
							</div>
						</td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display{$curriculum.id_curriculum}" data-id="{$curriculum.id_curriculum}"{if $curriculum.display_flg == 1} checked{/if}>
									<label class="onoffswitch-label" for="display{$curriculum.id_curriculum}">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac">
							<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$curriculum.id_curriculum}">削除</a>
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
