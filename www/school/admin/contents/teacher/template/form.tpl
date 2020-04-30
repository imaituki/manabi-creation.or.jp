			<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">役割</label>
						<div class="col-sm-6">
							{if $message.ng.id_teacher_role|default:"" != NULL}<p class="error">{$message.ng.id_teacher_role}</p>{/if}
							<select name="id_teacher_role" class="form-control">
								<option value="">選択してください</option>
								{html_options options=$OptionTeacherRole selected=$arr_post.id_teacher_role}
							</select>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">講師名</label>
						<div class="col-sm-6">
							{if $message.ng.name|default:"" != NULL}<p class="error">{$message.ng.name}</p>{/if}
							<input type="text" class="form-control" name="name" id="name" value="{$arr_post.name|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">講師名（ローマ字）</label>
						<div class="col-sm-6">
							{if $message.ng.name_en|default:"" != NULL}<p class="error">{$message.ng.name_en}</p>{/if}
							<input type="text" class="form-control" name="name_en" id="name_en" value="{$arr_post.name_en|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">性別</label>
						<div class="col-sm-6">
							{if $message.ng.sex|default:"" != NULL}<p class="error">{$message.ng.sex}</p>{/if}
							<select name="sex" class="form-control">
								<option value="">選択してください</option>
								{html_options options=$OptionSex selected=$arr_post.sex}
							</select>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">役職</label>
						<div class="col-sm-6">
							{if $message.ng.position|default:"" != NULL}<p class="error">{$message.ng.position}</p>{/if}
							<input type="text" class="form-control" name="position" id="position" value="{$arr_post.position|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">紹介文</label>
						<div class="col-sm-6">
							{if $message.ng.comment|default:"" != NULL}<p class="error">{$message.ng.comment}</p>{/if}
							<textarea class="form-control" name="comment" id="comment" rows="5">{$arr_post.comment|default:""}</textarea>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					{if $_ARR_IMAGE != NULL}
						{include file=$template_image path=$_IMAGEFULLPATH dir=$_CONTENTS_DIR prefix="s_"}
					{/if}
					<div class="form-group required">
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
					{if $mode == 'edit'}<input type="hidden" name="id_teacher" value="{$arr_post.id_teacher}" />{/if}
					<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
					<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2 pos_ar">
							<button class="btn btn-primary"  type="submit">この内容で登録</button>
						</div>
					</div>
				</div>
			</form>
