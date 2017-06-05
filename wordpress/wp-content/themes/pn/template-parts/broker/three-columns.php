<?php
/**
 * Template part for displaying Broker - Three Columns
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section ntp three-columns">
	<div class="container">
		
		<?php if ( get_field('prospectnow_broker_three_columns_section_title') ) : ?>
		<h1 class="section-title"><?php the_field('prospectnow_broker_three_columns_section_title'); ?></h1>
		<?php endif; ?>
		
		<?php if( have_rows('prospectnow_broker_three_columns_column') ): ?>
	
		<div layout="row" layout-margin layout-xs="column">
			
			<?php while( have_rows('prospectnow_broker_three_columns_column') ): the_row();
				$title = get_sub_field('prospectnow_broker_three_columns_column_title');
				$content = get_sub_field('prospectnow_broker_three_columns_column_content');
			?>
			
			<div flex>
				
				<?php if ( $title ) : ?>
				<h2><?php echo $title; ?></h2>
				<?php endif; ?>
				
				<?php if ( $content ) : ?>
				<?php echo $content; ?>
				<?php endif; ?>
				
			</div>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
		<?php if ( get_field('prospectnow_broker_three_columns_button_text') ) : ?>
		<div class="actions center">
			<md-button href="<?php the_field('prospectnow_broker_three_columns_button_url'); ?>" class="md-raised button orange"><?php the_field('prospectnow_broker_three_columns_button_text'); ?></md-button>
		</div>
		<?php endif; ?>
		
	</div>
</section>
<script type="text/javascript">
     
function drawChart(id, labels, data, colors){

	//this is a charts.js bug, if you re render it render on top of the old chart.
	//so remove the old canvas and add a new canvas 
	var prev = jQuery( "#"+id).closest( "p" );
	jQuery( "#"+id).remove();
	jQuery(prev).html('<canvas id="'+id+'" width="400" height="400"></canvas>');


    	var ctx = document.getElementById(id).getContext('2d');
		var myChart = new Chart(ctx, {
		  type: 'pie',
		  data: {
		    labels: labels,
		    datasets: [{
		      backgroundColor: colors,
		      data: data
		    }]
		  }
		});
    }

function getPropertyTypesChartsData(id){
      	var pr = {"county_id":id,"start": "0", "end": "12"};
		var webServiceUrl  = '/webservice/apiService.php?call=county_property_types';
		var callback = function(rtn){
			var res = jQuery.parseJSON(rtn);
			var d =[];
			d[0] = res.data.results.commercial;
			d[1] = res.data.results.residential;
			d[2] = res.data.results.industrial;
			d[3] = res.data.results.multifamily;
		    var labels = ['Commercial','Residential', 'Industrial', 'Multifamily'];
		    var colors = ["#a2cff6","#7ac16f","#fc8801","#fc5501"];
		   
		    drawChart('chart-num-1', labels, d,colors);


		};
		present_ajax = ajaxRequest(webServiceUrl,pr,callback);
}
function getOccupiedChartsData(id){
      	var pr = {"county_id":id,"start": "0", "end": "12"};
		var webServiceUrl  = '/webservice/apiService.php?call=county_owner';
		var callback = function(rtn){
			var res = jQuery.parseJSON(rtn);
			var d =[];
			d[0] = res.data.results.occupied;
			d[1] = res.data.results.absentee;
		    var labels = ['Occupied','Absentee'];
		    var colors = ["#a2cff6","#fc8801"];
		   
		    drawChart('chart-num-2', labels, d,colors);


		};
		present_ajax = ajaxRequest(webServiceUrl,pr,callback);

}
function getPredictedChartsData(id){
       	var pr = {"county_id":id};
		var webServiceUrl  = '/webservice/apiService.php?call=predicted_county_accuracy';
		var callback = function(rtn){
			var res = jQuery.parseJSON(rtn);

			var total = res.data.results.total_properties - res.data.results.total_properties_score_by_bucket['10']- res.data.results.total_properties_score_by_bucket['25'];
		    	   res.data.results.total_properties_score_by_bucket['50']
		    var d=[res.data.results.total_properties_score_by_bucket['10'],
		    	   res.data.results.total_properties_score_by_bucket['25'],
		    	   res.data.results.total_properties_score_by_bucket['50'],
		    	   total];
		    var labels = ['High','Medium','Moderate','Not Predicted'];
		    var colors = ["#1bc600","#168e03","#fc8801","#EE0000"];
		   
		    drawChart('chart-num-3', labels, d,colors);


		};
		present_ajax = ajaxRequest(webServiceUrl,pr,callback);

}
</script>