			<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">契約名称</label>
						<div class="col-sm-6">
							{if $message.ng.name|default:"" != NULL}<p class="error">{$message.ng.name}</p>{/if}
							<input type="text" class="form-control" name="name" id="name" value="{$arr_post.name|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">公開名称</label>
						<div class="col-sm-6">
							{if $message.ng.short_name|default:"" != NULL}<p class="error">{$message.ng.short_name}</p>{/if}
							<input type="text" class="form-control" name="short_name" id="short_name" value="{$arr_post.short_name|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
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
							<div class="row mb10">
								<div class="col-sm-7">
									<div class="input-group">
										<input type="text" class="form-control" name="zip" id="zip" value="{$arr_post.zip|default:""}" placeholder="000-0000" maxlength="8" />
										<span class="input-group-addon">
											<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');">郵便番号から検索する</a>
										</span>
									</div>
								</div>
							</div>
							<div class="row mb10">
								<div class="col-sm-5">
									<select name="prefecture" class="form-control">
										{html_select_ken selected=$arr_post.prefecture}
									</select>
								</div>
							</div>
							<input type="text" class="form-control mb10" name="address1" id="address1" value="{$arr_post.address1|default:""}" placeholder="市区町村・番地" />
							<input type="text" class="form-control" name="address2" id="address2" value="{$arr_post.address2|default:""}" placeholder="建物・マンション名" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">電話番号</label>
						<div class="col-sm-4">
							{if $message.ng.tel|default:"" != NULL}<p class="error">{$message.ng.tel}</p>{/if}
							<input type="text" class="form-control" name="tel" id="tel" value="{$arr_post.tel|default:""}" maxlength="14" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">FAX番号</label>
						<div class="col-sm-4">
							{if $message.ng.fax|default:"" != NULL}<p class="error">{$message.ng.fax}</p>{/if}
							<input type="text" class="form-control" name="fax" id="fax" value="{$arr_post.fax|default:""}" maxlength="14" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">メールアドレス</label>
						<div class="col-sm-6">
							{if $message.ng.mail|default:"" != NULL}<p class="error">{$message.ng.mail}</p>{/if}
							<p>※ お問い合わせ先のメールアドレスになります。</p>
							<input type="text" class="form-control" name="mail" id="mail" value="{$arr_post.mail|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">受付時間</label>
						<div class="col-sm-4">
							{if $message.ng.reception_time|default:"" != NULL}<p class="error">{$message.ng.reception_time}</p>{/if}
							<input type="text" class="form-control" name="reception_time" id="reception_time" value="{$arr_post.reception_time|default:""}" maxlength="32" placeholder="例）9:00～18：00（日曜定休）" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">学校紹介</label>
						<div class="col-sm-6">
							{if $message.ng.comment|default:"" != NULL}<p class="error">{$message.ng.comment}</p>{/if}
							<textarea class="form-control" name="comment" id="comment" rows="5">{$arr_post.comment|default:""}</textarea>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">取り扱いカリキュラム</label>
						<div class="col-sm-6">
							{if $message.ng.curriculum_id|default:"" != NULL}<p class="error">{$message.ng.curriculum_id}</p>{/if}
							{foreach from=$OptionCurriculum item="curriculum" key="key" name="loopCurriculum"}
								<div class="i-checks">{html_checkboxes name="curriculum[id]" output=$curriculum values=$key selected=$arr_post.curriculum.id|default:""}</div>
							{/foreach}
						</div>
					</div>
					
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Facebook</label>
						<div class="col-sm-6">
							{if $message.ng.facebook|default:"" != NULL}<p class="error">{$message.ng.facebook}</p>{/if}
							<input type="text" class="form-control" name="facebook" id="facebook" value="{$arr_post.facebook|default:""}" maxlength="255" placeholder="URLをご記入ください" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Twitter</label>
						<div class="col-sm-6">
							{if $message.ng.twitter|default:"" != NULL}<p class="error">{$message.ng.twitter}</p>{/if}
							<input type="text" class="form-control" name="twitter" id="twitter" value="{$arr_post.twitter|default:""}" maxlength="255" placeholder="URLをご記入ください" />
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
					{if $_ARR_IMAGE != NULL}
						{include file=$template_image path=$_IMAGEFULLPATH dir=$_CONTENTS_DIR prefix="s_"}
					{/if}
					<div class="form-group">
						<label class="col-sm-2 control-label">SEO</label>
						<div class="col-sm-6">
							{if $message.ng.keyword|default:"" != NULL || $message.ng.description|default:"" != NULL}
								<p class="error">
									{$message.ng.keyword}
									{$message.ng.description}
								</p>
							{/if}
							<p>キーワード</p>
							<input type="text" class="form-control mb10" name="keyword" id="keyword" value="{$arr_post.keyword|default:""}" placeholder="キーワード" />
							<p>ディスクリプション</p>
							<input type="text" class="form-control" name="description" id="description" value="{$arr_post.description|default:""}" placeholder="ディスクリプション" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">公開／非公開（アクセス）</label>
						<div class="col-sm-6">
							{if $message.ng.display_flg|default:"" != NULL}<p class="error">{$message.ng.display_flg}</p>{/if}
							<div class="radio m-r-xs inline">
								{html_radios name="display_flg" values=1 selected=$arr_post.display_flg|default:"1" output="する"}&nbsp;&nbsp;
								{html_radios name="display_flg" values=0 selected=$arr_post.display_flg|default:"1" output="しない"}
							</div>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">公開／非公開（HP）</label>
						<div class="col-sm-6">
							{if $message.ng.display_hp_flg|default:"" != NULL}<p class="error">{$message.ng.display_hp_flg}</p>{/if}
							<div class="radio m-r-xs inline">
								{html_radios name="display_hp_flg" values=1 selected=$arr_post.display_hp_flg|default:"1" output="する"}&nbsp;&nbsp;
								{html_radios name="display_hp_flg" values=0 selected=$arr_post.display_hp_flg|default:"1" output="しない"}
							</div>
						</div>
					</div>
					
					
					<div class="ibox-title">
						<h5>アカウント情報</h5>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">アカウント</label>
						<div class="col-sm-6">
							{if $message.ng.staff_account|default:"" != NULL}<p class="error">{$message.ng.staff_account}</p>{/if}
							<input type="text" class="form-control" name="staff[account]" id="staff_account" value="{$arr_post.staff.account|default:""}" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">パスワード</label>
						<div class="col-sm-6">
							{if $message.ng.staff_password|default:"" != NULL}<p class="error">{$message.ng.staff_password}</p>{/if}
							<input type="password" class="form-control" name="staff[password]" id="staff_password" value="{$arr_post.staff.password|default:""}" placeholder="4～32文字" maxlength="32" />
							<label><input type="checkbox" id="displaypass"> パスワードを表示する</label>
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">有効／無効</label>
						<div class="col-sm-6">
							{if $message.ng.staff_valid_flg|default:"" != NULL}<p class="error">{$message.ng.staff_valid_flg}</p>{/if}
							<div class="radio m-r-xs inline">
								{html_radios name="staff[valid_flg]" values=0 selected=$arr_post.staff.valid_flg|default:"0" output="無効"}&nbsp;&nbsp;
								{html_radios name="staff[valid_flg]" values=1 selected=$arr_post.staff.valid_flg|default:"0" output="有効"}
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
