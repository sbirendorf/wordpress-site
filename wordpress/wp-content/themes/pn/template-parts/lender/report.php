<?php
/**
 * Template part for displaying Broker - Report
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section reports ntp">
	<div class="container">
	
		<div layout="row" layout-margin layout-xs="column">
			
			<div flex>
				<div class="entry-content">
					<?php if ( get_field('prospectnow_broker_reports_section_title') ) : ?>
					<h1><?php the_field('prospectnow_broker_reports_section_title'); ?></h1>
					<?php endif; ?>
					<?php if ( get_field('prospectnow_broker_reports_content') ) : ?>
					<?php the_field('prospectnow_broker_reports_content'); ?>
					<?php endif; ?>
				</div>
			</div>
			
			<div flex>
				<table>
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th><?php the_field('prospectnow_broker_reports_table_header_1'); ?></th>
							<!-- <th><?php the_field('prospectnow_broker_reports_table_header_2'); ?></th> -->
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Number of Properties</td>
							<td class="report-total-org" align="right">543</td>
							<!-- <td class="report-total-pred" align="right">234</td> -->
						</tr>
						<tr>
							<td>Properties Sold</td>
							<td class="report-sold-org" align="right">34</td>
							<!-- <td class="report-sold-pred" align="right">30</td> -->
						</tr>
						<tr>
							<td>Properties Predicted Sold</td>
							<td class="report-sold-pred" align="right">30</td>
						</tr>
						<tr>
							<td>Turnover Ratio</td>
							<td class="report-ratio-org" align="right">2%</td>
							<!-- <td class="report-ratio-pred" align="right">8%</td> -->
						</tr>
						<tr>
							<td>Avg. Value</td>
							<td class="report-avg-org" align="right">$245,000</td>
							<!-- <td class="report-avg-pred" align="right">$335,000</td> -->
						</tr>
					<!-- 	<tr>
							<td>Holding Period</td>
							<td class="report-hold-org" align="right">3.3yrs</td>
							<td class="report-hold-pred" align="right">7 yrd</td>
						</tr> -->
						<tr>
							<td>Avg. LTV</td>
							<td class="report-tlv-org" align="right">75%</td>
							<!-- <td class="report-tlv-pred" align="right">65%</td> -->
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
	
	</div>
</section>
<script type="text/javascript">
function getReportData(county_id){
     	var pr = {"county_id":county_id,"start": "0", "end": "12"};
		var webServiceUrl  = '/webservice/apiService.php?call=county_property_information';
		var callback = function(data){
		    var res = jQuery.parseJSON(data);
			drawResultsDataTable(res);

		};
		present_ajax = ajaxRequest(webServiceUrl,pr,callback);
}



function drawResultsDataTable(res){

	//dont show the table if we dont have data
	if(res.errors == true){
		jQuery( ".section.page-section.reports.ntp").hide();
		return;
	}
	jQuery( ".report-total-org").text(res.data.results.total_number_of_properties.toLocaleString());
	jQuery( ".report-sold-org").text(res.data.results.total_properties_sold.toLocaleString());

	var x = 100 * (res.data.results.total_properties_sold/res.data.results.total_number_of_properties);
	jQuery( ".report-ratio-org").text(x.toFixed(1)+"%");
	jQuery( ".report-avg-org").text("$"+res.data.results.average_price.toLocaleString());
	jQuery( ".report-avg-pred").text("$??");
	jQuery( ".report-sold-pred").text(res.data.results.total_predicted_properties_sold.toLocaleString());
	jQuery( ".report-tlv-org").text(res.data.results.average_ltv+"%");

	
}


</script>