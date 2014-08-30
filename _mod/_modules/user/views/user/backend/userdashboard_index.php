<?php defined('SYSPATH') or die('No direct script access.'); ?>
<script type="text/javascript">
$(document).ready(function(){
	$.jqplot.config.enablePlugins = true;
	<?php 
	$buffers = array();
	$i = 0;
	foreach ($article_top_ten_hits as $val1) { 
		$buffers['articles'][] = '"'.trim($val1->subject).'"';
		$buffers['hits'][]	 = $val1->hits;
		$i++;
	};
	?>		
	var s1 = [<?php echo implode(',', $buffers['hits']); ?>];
	var ticks = [<?php echo implode(',', $buffers['articles']); ?>];	
	plot1 = $.jqplot('chart1', [s1], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
			sortData:true,
			grid: {
				drawBorder: false,
				drawGridlines: false,
				background: '#ffffff',
				shadow:false
			},
            seriesDefaults:{
				shadow:false,
                renderer:$.jqplot.BarRenderer,
                pointLabels: { show: true }
            },
			axesDefaults: {
				tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
				tickOptions: {
					angle: -28,
					fontSize: '1.1em'
				}
			},
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },
            highlighter: { show: true },
			//legend: { show:true, labels:'Article', location: 'w', rowSpacing:0, placement:"outsideGrid", border:"0px",fontSize:'1.0em' },
			title: { show:true, text:'Top 10 Article Hits' }
        });
	<?php 
	$buffers = array();
	foreach ($media_top_ten_hits as $val2) { 
		$buffers[] = json_encode(array('&nbsp;Hits ('. $val2->hits .') - ' . $val2->file_name, $val2->hits / 100),TRUE);
	};
	?>	
	var data2 = [		
			<?php echo implode(',', $buffers); ?>
	];
	var plot2 = $.jqplot ('chart2', [data2],
		{
		sortData:true,
		grid: {
            drawBorder: false,
            drawGridlines: false,
            background: '#ffffff',
            shadow:false
        },
        axesDefaults: {
        },
		seriesDefaults: {
			shadow:false,
			// Make this a pie chart.
			renderer: $.jqplot.PieRenderer,
			rendererOptions: {
				sliceMargin: 4,
                // rotate the starting position of the pie around to 12 o'clock.
                startAngle: -90,
				// Put data labels on the pie slices.
				// By default, labels show the percentage of the slice.
				showDataLabels: true
			}
		},
		legend: { show:true, location: 'w', rowSpacing:0, placement:"outsideGrid", border:"0px",fontSize:'1.0em' },
		title: { show:true, text:'Top 10 Media File Hits' }
		}
	);
	<?php 
	$buffers = array();
	foreach ($download_top_ten_hits as $val3) { 
		$buffers[] = json_encode(array('&nbsp;Hits ('. $val3->hits .') - ' . $val3->file_name, $val3->hits / 100),TRUE);
	};
	?>	
	var data3 = [		
			<?php echo implode(',', $buffers); ?>
	];
	var plot3 = $.jqplot ('chart3', [data3],
		{
		sortData:true,
		grid: {
            drawBorder: false,
            drawGridlines: false,
            background: '#ffffff',
            shadow:false
        },
        axesDefaults: {
        },
		seriesDefaults: {
			shadow:false,
			// Make this a pie chart.
			renderer: $.jqplot.PieRenderer,
			rendererOptions: {
				sliceMargin: 4,
                // rotate the starting position of the pie around to 12 o'clock.
                startAngle: -90,
				// Put data labels on the pie slices.
				// By default, labels show the percentage of the slice.
			showDataLabels: true
			}
		},
		legend: { show:true, location: 'w', rowSpacing:0, placement:"outsideGrid", border:"0px",fontSize:'1.0em' },
		title: { show:true, text:'Top 10 Download File Hits' }
		}
	);	
});
</script>
<h2><?php echo $module_menu;?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<?php 
echo Form::open(URL::site('admin-cp/'.$module_name.'/index/select_action'),array('method'=>'post','class'=>'form_details')); 
?>
<div class="ls10"></div>
<div class="container-fluid">
	<div class="row-fluid">
		<div style="float:left; position: relative; margin: 0px auto 20px auto; padding: 0 0 0 100px; clear:both;">
			<span class="hide">Top 10 Articles</span>
			<div id="chart1" style="height:400px; width:640px; clear:both"></div>
		</div>
		<div style="float:left; position: relative; margin: 0 0 20px 0; clear:both;">
			<span class="hide">Top 10 Media File Hits</span>
			<div id="chart2" style="height:340px; width:660px; clear:both"></div>
		</div>
		<div style="float:left; position: relative; margin: 0 0 20px 0; clear:both">
			<span class="hide">Top 10 Download File Hits</span>
			<div id="chart3" style="height:340px; width:660px; clear:both"></div>
		</div>
	</div>
</div>	
<div class="row-fluid" style="clear:both;">
<?php
// Load widget data statistical value
echo $widget->load('stats_dashboard',
		array(
				'module'	=> $module_name,
				'content'	=> array(
									'data_name' => 'Top 10 Article Hit List',
									'data_head' => array('Hits','Articles'),
									'data_rows' => $article_top_ten_hits
								),
			)
		);
echo $widget->load('stats_file_dashboard',
		array(
				'module'	=> $module_name,
				'content'	=> array(
									'data_name' => 'Top 10 Media File Hit List',
									'data_head' => array('Hits','Medias'),
									'data_rows' => $media_top_ten_hits
								),
			)
		);
echo $widget->load('stats_file_dashboard',
		array(
				'module'	=> $module_name,
				'content'	=> array(
									'data_name' => 'Top 10 Download File Hit List',
									'data_head' => array('Hits','Files'),
									'data_rows' => $download_top_ten_hits
								),
			)
		);
?>
</div>
<?php 
echo Form::close();
?>
<div class="ls10"></div>
<div class="bar"></div>