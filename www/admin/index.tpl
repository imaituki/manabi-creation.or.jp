<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理画面</title>
<link href="/admin/common/css/bootstrap.min.css" rel="stylesheet">
<link href="/admin/common/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/admin/common/css/animate.css" rel="stylesheet">
<link href="/admin/common/css/plugins/codemirror/codemirror.css" rel="stylesheet">
<link href="/admin/common/css/plugins/codemirror/ambiance.css" rel="stylesheet">
<link href="/admin/common/css/style.css" rel="stylesheet">
<!-- FooTable -->
<link href="/admin/common/css/plugins/footable/footable.core.css" rel="stylesheet">
<link href="/admin/common/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
{include file=$template_javascript}
<script src="/admin/common/js/plugins/flot/jquery.flot.js"></script> 
<script src="/admin/common/js/plugins/flot/jquery.flot.tooltip.min.js"></script> 
<script src="/admin/common/js/plugins/flot/jquery.flot.spline.js"></script> 
<script src="/admin/common/js/plugins/flot/jquery.flot.resize.js"></script> 
<script src="/admin/common/js/plugins/flot/jquery.flot.pie.js"></script> 
<script src="/admin/common/js/plugins/flot/jquery.flot.symbol.js"></script> 
<script src="/admin/common/js/plugins/flot/jquery.flot.time.js"></script> 
<script src="/admin/common/js/plugins/jquery-ui/jquery-ui.min.js"></script> 
<script src="/admin/common/js/plugins/easypiechart/jquery.easypiechart.js"></script> 
<script src="/admin/common/js/plugins/sparkline/jquery.sparkline.min.js"></script> 
<script src="/admin/common/js/plugins/footable/footable.all.min.js"></script> 
<!-- Page-Level Scripts --> 
<script>
	$(document).ready(function() {
		$('.footable').footable();
	});
</script> 

<script type="text/javascript">
	var dataReserve = new Object();
	var dataAccess  = new Object();
	var chartOptions = {
		xaxis: {
			mode: "time",
			tickSize: [3, "day"],
			tickLength: 0,
			axisLabel: "Date",
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 12,
			axisLabelFontFamily: 'Arial',
			axisLabelPadding: 10,
			color: "#d5d5d5"
		},
		yaxes: [{
			position: "left",
			max: 50,
			color: "#d5d5d5",
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 12,
			axisLabelFontFamily: 'Arial',
			axisLabelPadding: 3
		}, {
			position: "right",
			clolor: "#d5d5d5",
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 12,
			axisLabelFontFamily: ' Arial',
			axisLabelPadding: 67
		}
		],
		legend: {
			noColumns: 1,
			labelBoxBorderColor: "#000000",
			position: "nw"
		},
		grid: {
			hoverable: false,
			borderWidth: 0
		}
	};
	
	$(document).ready(function() {
		
		$('.changeChart.active').each( function(){
			var ym = $(this).attr('data-ym');
			var dataset = [
				{
					label: "予約数",
					data: dataReserve[ym],
					color: "#1ab394",
					bars: {
						show: true,
						align: "center",
						barWidth: 24 * 60 * 60 * 600,
						lineWidth:0
					}
				}, {
					label: "アクセス数",
					data: dataAccess[ym],
					yaxis: 2,
					color: "#1C84C6",
					lines: {
						lineWidth:1,
							show: true,
							fill: true,
						fillColor: {
							colors: [{
								opacity: 0.2
							}, {
								opacity: 0.4
							}]
						}
					},
					splines: {
						show: false,
						tension: 0.6,
						lineWidth: 1,
						fill: 0.1
					},
				}
			];
			$.plot( $("#flot-dashboard-chart"+ym), dataset, chartOptions );
			
		});
		$(document).on('click', '.changeChart', function() {
			var ym = $(this).attr('data-ym');
			$('.dispAnalysis').hide();
			$('.analysis-'+ym).show();
		});
		
	});
	function gd(year, month, day) {
		return new Date(year, month - 1, day).getTime();
	}
</script>
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	{include file=$template_secondary}
	<div id="page-wrapper" class="gray-bg">
		{include file=$template_header}
		<div class="wrapper wrapper-content">
{*
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ibox float-e-margins">
						<div class="ibox-title"> <span class="label label-success pull-right">Today</span>
							<h5>本日の予約数</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">{$mst_analysis.totalNow|default:"0"|number_format}</h1>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ibox float-e-margins">
						<div class="ibox-title"> <span class="label label-info pull-right">Monthly</span>
							<h5>今月の予約数</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">{$mst_analysis.totalMonth[0]|default:"0"|number_format}</h1>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ibox float-e-margins">
						<div class="ibox-title"> <span class="label label-warning pull-right">Year</span>
							<h5>今年の予約数</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">{$mst_analysis.totalYear|default:"0"|number_format}</h1></div>
						</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ibox float-e-margins">
						<div class="ibox-title"> <span class="label label-primary pull-right">Today</span>
							<h5>本日の閲覧数</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">2,120</h1>
							<div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
							<small>　</small> </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ibox float-e-margins">
						<div class="ibox-title"> <span class="label label-danger pull-right">Monthly</span>
							<h5>今月の閲覧数</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">80,600</h1>
							<div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
							<small>　</small> </div>
					</div>
				</div>
			</div>
			{foreach from=$mst_analysis.analysisDate item="analysis" key="key" name="loopAnalysis"}
			<div class="row dispAnalysis analysis-{$analysis|date_format:"%Y%m"}"{if $smarty.foreach.loopAnalysis.first != 1} style="display:none;"{/if}>
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>{$analysis|date_format:"%-m"}月のアクセス / 予約数</h5>
							<div class="pull-right">
								<div class="btn-group">
									{foreach from=$mst_analysis.analysisDate item="btnDate" key="key2" name="loopAnalysisDate"}
									<button type="button" class="btn btn-xs btn-white changeChart{if $key == $key2} active{/if}" data-ym="{$btnDate|date_format:"%Y%m"}">{$mst_analysis.analysisDateLabel[$key2]}</button>
									{/foreach}
								</div>
							</div>
						</div>
						<div class="ibox-content">
							<div class="row">
								<div class="col-lg-9">
									<div class="flot-chart">
										<div class="flot-chart-content" id="flot-dashboard-chart{$analysis|date_format:"%Y%m"}"></div>
<script type="text/javascript">
dataReserve['{$analysis|date_format:"%Y%m"}'] = [
{foreach from=$mst_analysis.totalDay[$key] item="count" key="day" name="loopTaotalDay"}[gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, {$day}), {$count}]{if $smarty.foreach.loopTaotalDay.last != 1}, {/if}

{/foreach}];
dataAccess['{$analysis|date_format:"%Y%m"}'] = [
	[gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 1), 800], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 2), 500], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 3), 600], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 4), 700],
	[gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 5), 500], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 6), 456], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 7), 800], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 8), 589],
	[gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 9), 467], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 10), 876], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 11), 689], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 12), 700],
	[gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 13), 500], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 14), 600], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 15), 700], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 16), 786],
	[gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 17), 345], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 18), 888], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 19), 888], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 20), 888],
	[gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 21), 987], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 22), 444], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 23), 999], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 24), 567],
	[gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 25), 786], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 26), 666], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 27), 888], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 28), 900],
	[gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 29), 178], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 30), 555], [gd({$analysis|date_format:"%Y"}, {$analysis|date_format:"%m"}, 31), 993]
];
</script>
									</div>
								</div>
								<div class="col-lg-3">
									<ul class="stat-list">
										<li>
											<h2 class="no-margins">{$mst_analysis.totalMonth[$key]|default:"0"|number_format}</h2>
											<small>{$analysis|date_format:"%-m"}月の予約数</small>
											<div class="stat-percent">{if $mst_analysis.ratioMonth[$key] != NULL}前年比 ： {$mst_analysis.ratioMonth[$key]}% <i class="fa {if $mst_analysis.ratioMonth[$key] > 0}fa-level-up{elseif $mst_analysis.ratioMonth[$key] < 0}fa-level-down{/if} text-navy">{else}－{/if}</i></div>
											<div class="progress progress-mini">
												<div style="width: {if $mst_analysis.ratioMonth[$key] > 0 && $mst_analysis.ratioMonth[$key] <= 100}{$mst_analysis.ratioMonth[$key]}{elseif $mst_analysis.ratioMonth[$key] > 100}100{else}0{/if}%;" class="progress-bar"></div>
											</div>
										</li>
										<li>
											<h2 class="no-margins ">80,600</h2>
											<small>{$analysis|date_format:"%-m"}月の閲覧数</small>
											<div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
											<div class="progress progress-mini">
												<div style="width: 60%;" class="progress-bar"></div>
											</div>
										</li>
										<li>
											<h2 class="no-margins ">3.15%</h2>
											<small>{$analysis|date_format:"%-m"}月の予約率</small>
											<div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
											<div class="progress progress-mini">
												<div style="width: 22%;" class="progress-bar"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{/foreach}
			{foreach from=$mst_analysis.analysisDate item="analysis" key="key" name="loopAnalysis"}
			<div class="row dispAnalysis analysis-{$analysis|date_format:"%Y%m"}"{if $smarty.foreach.loopAnalysis.first != 1} style="display:none;"{/if}>
				<div class="col-lg-12">
					<div class="ibox">
						<div class="ibox-content">
							<table class="footable table table-stripped toggle-arrow-tiny" data-page-size="50">
								<thead>
									<tr>
										<th>予約ID</th>
										<th data-hide="phone">出発・返却日</th>
										<th>名前</th>
										<th data-hide="phone">電話番号</th>
										<th data-hide="phone,tablet" >メールアドレス</th>
										<th data-hide="phone,tablet">クラス / 車種</th>
										<th data-hide="phone,tablet">出発・返却店舗</th>
										<th data-hide="phone,tablet">料金</th>
										<th data-hide="phone,tablet">予約環境</th>
									</tr>
								</thead>
								<tbody>
									{foreach from=$mst_analysis.reserveMonth[$key] item="reserve" name="loopReserveMonth"}
									<tr>
										<td>{$reserve.id_reserve}</td>
										<td>
											{$reserve.start_date|date_format:"%Y/%m/%d %H:%M"}<br>
											{$reserve.return_date|date_format:"%Y/%m/%d %H:%M"}
										</td>
										<td>
											{$reserve.name}<br>
											（{$reserve.ruby}）
										</td>
										<td>{$reserve.tel}</td>
										<td>{$reserve.mail}</td>
										<td>{$reserve.class}<br>{$reserve.car}</td>
										<td>
											{$reserve.start_shop}<br>
											{if $reserve.id_return_shop == 99}{$reserve.start_shop}{else}{$reserve.return_shop}{/if}
										</td>
										<td>{$reserve.price|number_format}円</td>
										<td><span class="label label-primary">{$reserve.type}</span></td>
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
						</div>
					</div>
				</div>
			</div>
			{/foreach}
*}
		</div>
	</div>
</div>
</body>
</html>
