			<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">カテゴリ名</label>
						<div class="col-sm-6">
							{if $message.ng.name|default:"" != NULL}<p class="error">{$message.ng.name}</p>{/if}
							<input type="text" class="form-control" name="name" id="name" value="{$arr_post.name|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">表示／非表示</label>
						<div class="col-sm-6">
							{if $message.ng.display_flg|default:"" != NULL}<p class="error">{$message.ng.display_flg}</p>{/if}
							<div class="radio m-r-xs inline">
								{html_radios name="display_flg" values=1 selected=$arr_post.display_flg|default:"1" output="する"}&nbsp;&nbsp;
								{html_radios name="display_flg" values=0 selected=$arr_post.display_flg|default:"1" output="しない"}
							</div>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					{if $mode == 'edit'}<input type="hidden" name="id_information_category" value="{$arr_post.id_information_category}" />{/if}
					<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
					<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2 pos_ar">
							<button class="btn btn-primary"  type="submit">この内容で登録</button>
						</div>
					</div>
				</div>
			</form>
