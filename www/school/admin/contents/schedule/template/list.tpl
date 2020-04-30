				{if $mst_calendar.calendar != NULL}
					<p class="schedule_msgbox">{$OptionRelCurriculum[$arr_post.search_id_curriculum]}の開催日をクリックしてください。</p>
					<p class="pos_ac large f-bold mb30">
						<table width="100%">
							<tr>
								<td class="pos_al"><a href="#" class="schecule-change f_bold" data-y="{$mst_calendar.back_date|date_format:"%Y"}">&lt; 前年へ</a></td>
								<td class="pos_ac"><strong class="xx-large">{$mst_calendar.display_date|date_format:"%Y年"}</strong></td>
								<td class="pos_ar"><a href="#" class="schecule-change f_bold" data-y="{$mst_calendar.next_date|date_format:"%Y"}">次年へ &gt;</a></td>
							</tr>
						</table>
					</p>
					<div class="clearfix" style="margin:0 auto;">
						{foreach from=$mst_calendar.calendar item="calendar" key="ym" name="loopCurriculum"}
						<div class="fl_left schedule_calendar" data-curriculum="{$arr_post.search_id_curriculum}">
							<input type="hidden" name="ym{$ym}" class="ym" value="{$ym}" />
							<table class="table table-bordered">
								<thead>
									<tr>
										<th colspan="7" class="pos_ac">{$ym|substr:0:4}年{$ym|substr:4:2}月</th>
									</tr>
									<tr>
										<th class="c_red">日</th>
										<th>月</th>
										<th>火</th>
										<th>水</th>
										<th>木</th>
										<th>金</th>
										<th class="c_blue">土</th>
									</tr>
								</thead>
								<tbody>
									{foreach from=$calendar item="month" key="key" name="loopCurriculumMonth"}
										{if $smarty.foreach.loopCurriculumMonth.first == 1 || $month.week == 0}
											<tr height="10" width="10">
											{if $smarty.foreach.loopCurriculumMonth.first}
												{section start=0 loop=$month.week name="loopStart"}
													<td>&nbsp;</td>
												{/section}
											{/if}
										{/if}
										<td class="pos_vt pos_ac pointer{if $month.open != NULL} schedule_open{/if}{if $month.week == 0} c_red{elseif $month.week == 6} c_blue{/if}" data-set="{if $month.open != NULL}on{else}off{/if}"{if $month.open != NULL && $OptionCurriculumColor[$arr_post.search_id_curriculum] != NULL} style="background-color:#{$OptionCurriculumColor[$arr_post.search_id_curriculum]}"{/if} >
											{$key|string_format:"%d"}
										</td>
										{if $smarty.foreach.loopCurriculumMonth.last}
											{section start=$month.week loop=6 name="loopEnd"}
												<td>&nbsp;</td>
											{/section}
										{/if}
										{if $smarty.foreach.loopCurriculumMonth.last == 1 || $month.week == 6}
											</tr>
										{/if}
									{/foreach}
								</tbody>
							</table>
						</div>
						{/foreach}
					</div>
				{else}
					<p>スケジュールを組むカリキュラムを選択してください</p>
				{/if}