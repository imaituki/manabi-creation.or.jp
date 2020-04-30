			<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">お名前</label>
						<div class="col-sm-6">
							{if $message.ng.name|default:"" != NULL}<p class="error">{$message.ng.name}</p>{/if}
							<input type="text" class="form-control" name="name" id="name" value="{$arr_post.name|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">電話番号</label>
						<div class="col-sm-6">
							{if $message.ng.tel|default:"" != NULL}<p class="error">{$message.ng.tel}</p>{/if}
							<input type="text" class="form-control" name="tel" id="tel" value="{$arr_post.tel|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">メールアドレス</label>
						<div class="col-sm-6">
							{if $message.ng.mail|default:"" != NULL}<p class="error">{$message.ng.mail}</p>{/if}
							<input type="text" class="form-control" name="mail" id="mail" value="{$arr_post.mail|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">アカウント</label>
						<div class="col-sm-6">
							{if $message.ng.account|default:"" != NULL}<p class="error">{$message.ng.account}</p>{/if}
							<input type="text" class="form-control" name="account" id="account" value="{$arr_post.account|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">パスワード</label>
						<div class="col-sm-6">
							{if $message.ng.password|default:"" != NULL}<p class="error">{$message.ng.password}</p>{/if}
							<input type="password" class="form-control" name="password" id="password" value="{$arr_post.password|default:""}" placeholder="4～32文字" maxlength="32" />
							<label><input type="checkbox" id="displaypass"> パスワードを表示する</label>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">有効／無効</label>
						<div class="col-sm-6">
							{if $arr_post.master_flg == 1}
								変更不可
								<input type="hidden" name="master_flg" value="1" />
								<input type="hidden" name="valid_flg" value="1" />
							{else}
								{if $message.ng.valid_flg|default:"" != NULL}<p class="error">{$message.ng.valid_flg}</p>{/if}
								<div class="radio m-r-xs inline">
									{html_radios name="valid_flg" values=0 selected=$arr_post.valid_flg|default:"0" output="無効"}&nbsp;&nbsp;
									{html_radios name="valid_flg" values=1 selected=$arr_post.valid_flg|default:"0" output="有効"}
								</div>
							{/if}
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					{if $mode == 'edit'}<input type="hidden" name="id_school_staff" value="{$arr_post.id_school_staff}" />{/if}
					<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
					<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2 pos_ar">
							<button class="btn btn-primary"  type="submit">この内容で登録</button>
						</div>
					</div>
				</div>
			</form>
