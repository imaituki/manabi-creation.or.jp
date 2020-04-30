			{include file=$template_pagenavi}
			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
				<thead>
					<tr>
						<th>日付</th>
						<th>掲載期間</th>
						<th>カテゴリ</th>
						<th>タイトル</th>
						<th class="photo">写真</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$t_information item="information" name="loopInformation"}
					<tr>
						<td>{$information.date|date_format:"%Y/%m/%d"}</td>
						<td>
							{if $information.display_indefinite == 0}
								{$information.display_start|date_format:"%Y/%m/%d"}<br />
								{$information.display_end|date_format:"%Y/%m/%d"}
							{else}
								無期限
							{/if}
						</td>
						<td>{$OptionInformationCategory[$information.id_information_category]}</td>
						<td><a href="./edit.php?id={$information.id_information}">{$information.title}</a></td>
						<td class="pos_al">
							<div class="lightBoxGallery">
								{foreach from=$_ARR_IMAGE item="file" name="file"}
									{if $information[$file.name]}
										<a href="{$_IMAGEFULLPATH}/{$_CONTENTS_DIR}/{$file.name}/l_{$information[$file.name]}" title="{$file.comment|default:""}" data-gallery=""><img src="{$_IMAGEFULLPATH}/{$_CONTENTS_DIR}/{$file.name}/s_{$information[$file.name]}" width="50" /></a>
									{/if}
									{if $smarty.foreach.file.iteration % 3 == 0}<br />{/if}
								{/foreach}
							</div>
						</td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display{$information.id_information}" data-id="{$information.id_information}"{if $information.display_flg == 1} checked{/if}>
									<label class="onoffswitch-label" for="display{$information.id_information}">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac">
							<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$information.id_information}">削除</a>
						</td>
					</tr>
					{foreachelse}
					<tr>
						<td colspan="6">{$_CONTENTS_NAME}は見つかりません。</td>
					</tr>
					{/foreach}
				</tbody>
				<tfoot>
					<tr>
						<td colspan="10"><ul class="pagination pull-right">
							</ul></td>
					</tr>
				</tfoot>
			</table>
			{include file=$template_pagenavi}
			<div id="blueimp-gallery" class="blueimp-gallery">
				<div class="slides"></div>
				<h3 class="title"></h3>
				<a class="prev">‹</a>
				<a class="next">›</a>
				<a class="close">×</a>
				<a class="play-pause"></a>
				<ol class="indicator"></ol>
			</div>
