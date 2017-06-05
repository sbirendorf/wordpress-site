<?php
/**
 * Template part for displaying Broker - Properties Sold
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section sold-report ntp">
	<div class="container">
	
		<div class="inner-wrap">
			
			<?php if ( get_field('prospectnow_broker_properties_sold_section_title') ) : ?>
			<h1 class="section-title"><?php the_field('prospectnow_broker_properties_sold_section_title'); ?></h1>
			<?php endif; ?>
			
			<?php if ( get_field('prospectnow_broker_properties_sold_content') ) : ?>
			<?php the_field('prospectnow_broker_properties_sold_content'); ?>
			<?php endif; ?>
			
		</div>
		<center class="loading" style="display: none;"><img src="https://s3.amazonaws.com/livesitedata/siteimages/loading.png" alt="loading"></center>	
		<table class='sold-table'>
			<thead>
				<tr>
					<th><?php the_field('prospectnow_broker_properties_sold_table_header_1'); ?></th>
					<th><?php the_field('prospectnow_broker_properties_sold_table_header_2'); ?></th>
					<th><?php the_field('prospectnow_broker_properties_sold_table_header_3'); ?></th>
					<th><?php the_field('prospectnow_broker_properties_sold_table_header_4'); ?></th>
				</tr>
			</thead>
			<tbody class="sold-report-rows">
				
			</tbody>
		</table>
		
		<!-- <div class="pn-pagination">
			<md-button href="#" class="md-raised button blue prev-page disabled">Previous</md-button>
			<span>2</span>
			<a href="#" class="active">3</a>
			<span>4</span>
			<md-button href="#" class="md-raised button next-page blue">Next</md-button>
		</div> -->
	
	</div>
</section>
<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
function getSoldData(county_id, state, county){
		//var from_date = "2016-05-12";
		displayLoading();
     	var pr = {"county_id":county_id,"start": "0", "end": "50"};
		var webServiceUrl  = '/webservice/apiService.php?call=predicted_sold_in_past';
		var callback = function(data){
			
		    var res = jQuery.parseJSON(data);
			drawSoldResultsTable(res,state, county);

		};
		present_ajax = ajaxRequest(webServiceUrl,pr,callback);



}
function displayLoading(){
	jQuery( ".sold-report").show();
	jQuery( ".loading").show();
	jQuery( ".sold-table").hide();
}
function drawSoldResultsTable(res,state, county){
	var text = "";

	//dont show the table if we dont have data
	if(res.errors == true){
		jQuery( ".sold-report").hide();
		return;
	}
	for(var x=0; x<res.data.results.length; x++){
		var link = '/property_info/'+county.toLowerCase()+'-'+state.toLowerCase() +'/'+res.data.results[x].property_address.toLowerCase()+'-'+res.data.results[x].property_city.toLowerCase()+'-'+state.toLowerCase();
		link = link.replace(/\s+/g, '-');



		text+='<tr><td style="text-transform:capitalize;"><a style="color:#fff;" href="'+link+'">'+ res.data.results[x].property_address.toLowerCase()+' '+ res.data.results[x].property_city.toLowerCase()+ '</a></td><td>'+ niceMonth(res.data.results[x].sale_date) +'</td>';
		
		var type = "No";
		if(res.data.results[x].predicted){
			type = "Yes";
		}
		text+='<td align="right">'+ type +'</td>';
		text+='<td align="right">'+ parseInt(res.data.results[x].rank_score) +'</td></tr>';
	}
	jQuery( ".sold-report-rows").html(text);
	jQuery( ".loading").hide();
	jQuery( ".sold-table").show();

	var table = jQuery('.sold-table').DataTable({
		"searching": false,
		 "retrieve": true,
		 "aaSorting": [] 
	});
}

</script>