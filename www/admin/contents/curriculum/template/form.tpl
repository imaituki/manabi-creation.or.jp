			<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">メニュー名称</label>
						<div class="col-sm-6">
							{if $message.ng.menu|default:"" != NULL}<p class="error">{$message.ng.menu}</p>{/if}
							<input type="text" class="form-control" name="menu" id="menu" value="{$arr_post.menu|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">カリキュラム名称</label>
						<div class="col-sm-6">
							{if $message.ng.name|default:"" != NULL}<p class="error">{$message.ng.name}</p>{/if}
							<textarea class="form-control" name="name" id="name" rows="3">{$arr_post.name|default:""}</textarea>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					{if $_ARR_IMAGE != NULL}
						{include file=$template_image path=$_IMAGEFULLPATH dir=$_CONTENTS_DIR prefix="s_"}
					{/if}
					<div class="form-group required">
						<label class="col-sm-2 control-label">内容</label>
						<div class="col-sm-6">
							{if $message.ng.comment|default:"" != NULL}<p class="error">{$message.ng.comment}</p>{/if}
							<textarea name="comment" id="comment" rows="7" class="form-control ckeditor">{$arr_post.comment|default:""}</textarea>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">公開／非公開</label>
						<div class="col-sm-6">
							{if $message.ng.display_flg|default:"" != NULL}<p class="error">{$message.ng.display_flg}</p>{/if}
							<div class="radio m-r-xs inline">
								{html_radios name="display_flg" values=1 selected=$arr_post.display_flg|default:"1" output="する"}&nbsp;&nbsp;
								{html_radios name="display_flg" values=0 selected=$arr_post.display_flg|default:"1" output="しない"}
							</div>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					{if $mode == 'edit'}<input type="hidden" name="id_curriculum" value="{$arr_post.id_curriculum}" />{/if}
					<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
					<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2 pos_ar">
							<button class="btn btn-primary"  type="submit">この内容で登録</button>
						</div>
					</div>
				</div>
			</form>
