<?php /* Smarty version Smarty-3.1.18, created on 2020-03-31 14:06:39
         compiled from ".\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2102568925e83324f6877b9-09400953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dfb6d298930cfbbe7fcc2824c930c4965e662f1' => 
    array (
      0 => '.\\index.tpl',
      1 => 1582010005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2102568925e83324f6877b9-09400953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_javascript' => 0,
    'template_secondary' => 0,
    'template_header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e83324f7942d8_60582967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e83324f7942d8_60582967')) {function content_5e83324f7942d8_60582967($_smarty_tpl) {?><!DOCTYPE html>
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
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="page-wrapper" class="gray-bg">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="wrapper wrapper-content">

		</div>
	</div>
</div>
</body>
</html>
<?php }} ?>
