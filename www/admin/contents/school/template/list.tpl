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
						<th>エリア</th>
						<th>名称</th>
						<th>住所</th>
						<th>TEL／FAX</th>
						<th>写真</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$mst_school item="school" name="loopNews"}
					<tr id="{$school.id_school}">
						<td class="pos_ac pos_vm move_i">{if $arr_post.mode|default:"" == "search"}☓{else}<i class="fa fa-r fa-sort"><span></span></i>{/if}</td>
						<td>{$OptionArea[$school.id_area]}</td>
						<td><a href="./edit.php?id={$school.id_school}">{$school.name}</a></td>
						<td>
							{if $school.zip != NULL}〒{$school.zip}<br />{/if}
							{if $school.prefecture > 0}{html_select_ken pre=1 selected=$school.prefecture}{/if}{$school.address1}{$school.address2}
						</td>
						<td>
							{$school.tel}<br />
							{$school.fax}<br />
						</td>
						<td class="pos_al">
							<div class="lightBoxGallery">
								{foreach from=$_ARR_IMAGE item="file" name="file"}
									{if $school[$file.name]}
										<a href="{$_IMAGEFULLPATH}/{$_CONTENTS_DIR}/{$file.name}/l_{$school[$file.name]}" title="{$file.comment|default:""}" data-gallery=""><img src="{$_IMAGEFULLPATH}/{$_CONTENTS_DIR}/{$file.name}/s_{$school[$file.name]}" width="50" /></a>
									{/if}
									{if $smarty.foreach.file.iteration % 3 == 0}<br />{/if}
								{/foreach}
							</div>
						</td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display{$school.id_school}" data-id="{$school.id_school}"{if $school.display_flg == 1} checked{/if}>
									<label class="onoffswitch-label" for="display{$school.id_school}">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac">
							<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$school.id_school}">削除</a>
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
