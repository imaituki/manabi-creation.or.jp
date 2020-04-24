			<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">名称</label>
						<div class="col-sm-6">
							{if $message.ng.name|default:"" != NULL}<p class="error">{$message.ng.name}</p>{/if}
							<input type="text" class="form-control" name="name" id="name" value="{$arr_post.name|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					{if $_ARR_IMAGE != NULL}
						{include file=$template_image path=$_IMAGEFULLPATH dir=$_CONTENTS_DIR prefix="s_"}
					{/if}
					<div class="form-group required">
						<label class="col-sm-2 control-label">エリア</label>
						<div class="col-sm-6">
							{if $message.ng.id_area|default:"" != NULL}<p class="error">{$message.ng.id_area}</p>{/if}
							<select name="id_area" class="form-control">
								<option value="">選択してください</option>
								{html_options options=$OptionArea selected=$arr_post.id_area|default:""}
							</select>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">住所</label>
						<div class="col-sm-6">
							{if $message.ng.zip|default:"" != NULL || 
								$message.ng.prefecture|default:"" != NULL || 
								$message.ng.address1|default:"" != NULL || 
								$message.ng.address2|default:"" != NULL}
								<p class="error">
									{$message.ng.zip}
									{$message.ng.prefecture}
									{$message.ng.address1}
									{$message.ng.address2}
								</p>
							{/if}
							<input type="text" class="form-control" name="zip" id="zip" value="{$arr_post.zip|default:""}" placeholder="000-0000" maxlength="8" />
							<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');">郵便番号から検索する</a>
							<select name="prefecture" class="form-control">
								{html_select_ken selected=$arr_post.prefecture}
							</select>
							<input type="text" class="form-control" name="address1" id="address1" value="{$arr_post.address1|default:""}" />
							<input type="text" class="form-control" name="address2" id="address1" value="{$arr_post.address2|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">電話番号</label>
						<div class="col-sm-6">
							{if $message.ng.tel|default:"" != NULL}<p class="error">{$message.ng.tel}</p>{/if}
							<input type="text" class="form-control" name="tel" id="tel" value="{$arr_post.tel|default:""}" maxlength="14" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">FAX番号</label>
						<div class="col-sm-6">
							{if $message.ng.fax|default:"" != NULL}<p class="error">{$message.ng.fax}</p>{/if}
							<input type="text" class="form-control" name="fax" id="fax" value="{$arr_post.fax|default:""}" maxlength="14" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">GoogleMap</label>
						<div class="col-sm-6">
							{if $message.ng.map|default:"" != NULL}<p class="error">{$message.ng.map}</p>{/if}
							<p>
								<strong>【設定方法】</strong><br />
								１．<a href="https://www.google.co.jp/maps/?hl=ja" target="_blank">GoogleMap</a>で検索を行ってください。<br />
								２．共有マークをクリックし、タブ「地図を埋め込む」を選択。<br />
								３．「HTMLをコピー」をクリックして下記欄にコピーしてください。<br />
							</p>
							<textarea class="form-control" name="map" id="map" rows="3">{$arr_post.map|default:""}</textarea>
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
					{if $mode == 'edit'}<input type="hidden" name="id_school" value="{$arr_post.id_school}" />{/if}
					<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
					<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2 pos_ar">
							<button class="btn btn-primary"  type="submit">この内容で登録</button>
						</div>
					</div>
				</div>
			</form>
