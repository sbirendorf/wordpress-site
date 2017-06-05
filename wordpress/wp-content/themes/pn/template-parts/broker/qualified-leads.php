<?php
/**
 * Template part for displaying Broker - Qualified Leads
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section" id="QualifiedLeads">
	<div class="container">

		<div class="inner-wrap">

			<?php if ( get_field('prospectnow_broker_qualified_leads_section_title') ) : ?>
			<h1 class="section-title"><?php the_field('prospectnow_broker_qualified_leads_section_title'); ?></h1>
			<?php endif; ?>

			<?php if ( get_field('prospectnow_broker_qualified_leads_section_content') ) : ?>
			<?php the_field('prospectnow_broker_qualified_leads_section_content'); ?>
			<?php endif; ?>

		</div>

		<div class="commissions-calculator">
			<form action="#" id="roi_form" novalidate>
				<div class="form-fields">
					<div class="row">
						<div class="field">
							<select name="sub[state_code]" id="state_code" class="form-control required-value character pull-left field input" data-fieldname="State" style="width:47%">
							<option value="AK">Alaska</option>
							<option value="AL">Alabama</option>
							<option value="AR">Arkansas</option>
							<option value="AZ">Arizona</option>
							<option value="CA" selected="selected">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DC">District of Columbia</option>
							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="IA">Iowa</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="MA">Massachusetts</option>
							<option value="MD">Maryland</option>
							<option value="ME">Maine</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MO">Missouri</option>
							<option value="NC">North Carolina</option>
							<option value="NE">Nebraska</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NV">Nevada</option>
							<option value="NY">New York</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WI">Wisconsin</option>
							<option value="WV">West Virginia</option>

									</select>

							<select class="form-control required-value numeric pull-left field input" style="width:47%;margin-left: 15px;"
							id="county_select_list" name="sub[county_id]" data-fieldname="County Name">
								<option value="17">ALAMEDA</option>
								<option value="18">CONTRA COSTA</option>
								<option value="27">EL DORADO</option>
								<option value="28">FRESNO</option>
								<option value="33">KERN</option>
								<option value="37">LOS ANGELES</option>
								<option value="20">MARIN</option>
								<option value="40">MERCED</option>
								<option value="42">MONTEREY</option>
								<option value="45">ORANGE</option>
								<option value="46">PLACER</option>
								<option value="48">RIVERSIDE</option>
								<option value="49">SACRAMENTO</option>
								<option value="51">SAN BERNARDINO</option>
								<option value="52">SAN DIEGO</option>
								<option value="19">SAN FRANCISCO</option>
								<option value="53">SAN JOAQUIN</option>
								<option value="54">SAN LUIS OBISPO</option>
								<option value="15">SAN MATEO</option>
								<option value="55">SANTA BARBARA</option>
								<option value="6">SANTA CLARA</option>
								<option value="60">SOLANO</option>
								<option value="61">SONOMA</option>
								<option value="62">STANISLAUS</option>
								<option value="66">TULARE</option>
								<option value="68">VENTURA</option>
							</select>
						</div>
					</div>
					<div class="row sliderControllers" ng-controller="SliderController">
						<input type="hidden" id="defaultMarketing" value="<?php echo get_field('prospectnow_broker_qualified_leads_form_annual_marketing_speed_slider_default'); ?>">
						<input type="hidden" id="defaultSales" value="<?php echo get_field('prospectnow_broker_qualified_leads_form_how_many_deals_default'); ?>">
						<input type="hidden" id="defaultDeal" value="<?php echo get_field('prospectnow_broker_qualified_leads_form_average_deal_amount_default'); ?>">
						<div class="col slider">
							<?php
								// slider vars
								$label1 = get_field('prospectnow_broker_qualified_leads_form_annual_marketing_speed_label');
								$min1 = get_field('prospectnow_broker_qualified_leads_form_annual_marketing_speed_slider_min');
								$max1 = get_field('prospectnow_broker_qualified_leads_form_annual_marketing_speed_slider_max');
								$step1 = get_field('prospectnow_broker_qualified_leads_form_annual_marketing_speed_slider_step');
							?>
							<label><?php echo $label1; ?></label>
							<span class="value" ng-cloak>{{ commissions.marketing | currency:'$':0 }}</span>
							<md-slider-container>
								<md-slider ng-change="roiUpdate()" flex min="<?php echo $min1; ?>" <?php if ( $max1 ) { echo 'max="'.$max1.'"'; } ?> step="<?php echo $step1; ?>" ng-model="commissions.marketing" aria-label="Annual Marketing Spend" vid="annualMarketing" class="md-primary"></md-slider>
								<md-input-container>
									<input flex type="number" class="roi-1" name="sub[marketing_spend]" aria-controls="annualMarketing" ng-model="commissions.marketing" aria-label="Annual Marketing Spend">
								</md-input-container>
							</md-slider-container>

						</div>
						<div class="col slider">
							<?php
								// slider vars
								$label2 = get_field('prospectnow_broker_qualified_leads_form_how_many_deals_label');
								$min2 = get_field('prospectnow_broker_qualified_leads_form_how_many_deals_min');
								$max2 = get_field('prospectnow_broker_qualified_leads_form_how_many_deals_max');
								$step2 = get_field('prospectnow_broker_qualified_leads_form_how_many_deals_step');
							?>
							<label><?php echo $label2; ?></label>
							<span class="value" ng-cloak>{{ commissions.sales | number:0 }}</span>
							<md-slider-container>
								<md-slider ng-change="roiUpdate()" flex min="<?php echo $min2; ?>" <?php if ( $max2 ) { echo 'max="'.$max2.'"'; } ?> step="<?php echo $step2; ?>" ng-model="commissions.sales" aria-label="Sales Last Year" id="howManySalesLastYear" class="md-primary"></md-slider>
								<md-input-container>
									<input flex type="number" class="roi-2" name="sub[number_listings]" aria-controls="howManySalesLastYear" ng-model="commissions.sales" aria-label="Sales Last Year">
								</md-input-container>
							</md-slider-container>

						</div>
						<div class="col slider">
							<?php
								// slider vars
								$label3 = get_field('prospectnow_broker_qualified_leads_form_average_deal_amount_label');
								$min3 = get_field('prospectnow_broker_qualified_leads_form_average_deal_amount_min');
								$max3 = get_field('prospectnow_broker_qualified_leads_form_average_deal_amount_max');
								$step3 = get_field('prospectnow_broker_qualified_leads_form_average_deal_amount_step')
							?>
							<label><?php echo $label3; ?></label>
							<span class="value" ng-cloak>{{ commissions.deal | currency: '$':0 }}</span>
							<md-slider-container>
								<md-slider ng-change="roiUpdate()" flex value="{{ commissions.deal }}" min="<?php echo $min3; ?>" <?php if ( $max3 ) { echo 'max="'.$max3.'"'; } ?> step="<?php echo $step3; ?>" ng-model="commissions.deal" aria-label="Average Deal Amount" id="averageDealAmount" class="md-primary"></md-slider>
								<md-input-container flex>
									<input type="number" class="roi-3" name="sub[average_listing_price]" aria-controls="averageDealAmount" ng-model="commissions.deal" aria-label="Average Deal Amount">
								</md-input-container>
							</md-slider-container>

						</div>
					</div>
					<br>
					<input type="button" value="Calculate" id="calculate_button" class="md-raised md-primary button orange md-button md-ink-ripple">

					<!-- <md-button id="calculate_button" class="md-raised md-primary button orange md-button md-ink-ripple">Calculate</md-button> -->
				</div>
				</form>
			<div class="wrapper-calculator-results">
				<div class="lead-calculator-results">
					<div class="col first">
						<?php if ( get_field('prospectnow_broker_qualified_leads_results_title') ) : ?>
						<h2><?php the_field('prospectnow_broker_qualified_leads_results_title'); ?></h2>
						<?php endif; ?>
						<p class="amount">$247,389</p>
						<h2><p class="roi-percent-text"><span class="roi-percent"></span> increase in probability of selling</p></h2>
					</div>
					<div class="col">
						<table cellpadding="5" cellspacing="0" border="0">
							<thead>
								<tr>
									<th></th>
									<th><?php the_field('prospectnow_broker_qualified_leads_results_table_heading_1'); ?></th>
									<th><?php the_field('prospectnow_broker_qualified_leads_results_table_heading_2'); ?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Sales Turnover in Farm*</td>
									<td class="roi_sales_org">3%</td>
									<td class="roi_sales_calc">4.74%</td>
								</tr>
								<tr>
									<td>Marketing Spend</td>
									<td class="roi_marketing_org">3%</td>
									<td class="roi_marketing_calc">4.74%</td>
								</tr>
								<tr>
									<td>Potential Listings</td>
									<td class="roi_listing_org">3%</td>
									<td class="roi_listing_calc">4.74%</td>
								</tr>
								<tr>
									<td>Commissions**</td>
									<td class="roi_commissions_org">3%</td>
									<td class="roi_commissions_calc">4.74%</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<?php $url = $_SERVER['REQUEST_URI'];
				if (strpos($url,'lender') !== false) {//if lender
				   	?>
				   	<div class="results-footer">
						<div class="col first">
							<?php the_field('prospectnow_lender_qualified_leads_results_table_footer'); ?>
						</div>
					</div>

				   	<?php
				} else {
					?>
				    <?php if ( get_field('prospectnow_broker_qualified_leads_results_table_footer_left') ||get_field('prospectnow_broker_qualified_leads_results_table_footer_right') ) : ?>
				<div class="results-footer">
					<div class="col first">
						<?php the_field('prospectnow_broker_qualified_leads_results_table_footer_left'); ?>
					</div>
					<div class="col">
						<?php the_field('prospectnow_broker_qualified_leads_results_table_footer_right'); ?>
					</div>
				</div>
				<?php endif; ?>

				<?php
				}?>

				<div layout="row" layout-margin layout-xs="column">
					<?php if ( get_field('prospectnow_broker_qualified_leads_results_left_button_text') ) : ?>
					<div flex>
						<md-button href="<?php the_field('prospectnow_broker_qualified_leads_results_left_button_url'); ?>" class="md-raised md-primary button orange start-button"><?php the_field('prospectnow_broker_qualified_leads_results_left_button_text'); ?></md-button>
					</div>
					<?php endif; ?>
				<!-- 	<div flex>
						<md-button href="#" class="md-raised button line orange"><?php the_field('prospectnow_broker_qualified_leads_results_right_button_text'); ?></md-button>
					</div> -->
				</div>


				</div>

		</div>

	</div>
</section>
<script type="text/javascript">

 var pageType = "";
	setTimeout(function () {
      	jQuery( ".wrapper-calculator-results").hide();
      	jQuery( ".reports").hide();
      	jQuery( ".sold-report").hide();
		jQuery( ".three-columns").hide();

		//check what page we are on, this template been uses by broker and lender
		if(window.location.href.indexOf("lender") > -1) {
	       	pageType = "&subtypetype=borrower";
	    }
    }, 20);

    //on calculate button click
	jQuery( "#calculate_button").click(function (){
		var num1 = jQuery( ".roi-1").val();
		var num2 = jQuery( ".roi-2").val();
		var num3 = jQuery( ".roi-3").val();
		//validate the data
		if(num1 == '' || num2 == '' || num3 == ''){
			alert('Please fill out all the fields');
			return;
		}
		var pr = jQuery('#roi_form').serialize();
		var webServiceUrl  = '/webservice/newAdvancedAjax.php?type=predictive&subtype=roi_calculator'+pageType;
		var callback = function(data){
			present_ajax = false;
			var res = jQuery.parseJSON(data);
			drawRoiResultsTable(res);

		};
		present_ajax = ajaxRequest(webServiceUrl,pr,callback);
		var county_id = jQuery('#county_select_list').val();
		getSoldData(county_id,jQuery('#state_code').val(),jQuery('#county_select_list option:selected').text());
		getReportData(county_id);
		getPropertyTypesChartsData(county_id);//chart1
		getOccupiedChartsData(county_id);//chart2
		getPredictedChartsData(county_id);//chart3
		jQuery( ".wrapper-calculator-results").show();
      	jQuery( ".reports").show();
		jQuery( ".three-columns").show();
	});

	jQuery('#state_code').change(function (){
			changeCountyList(jQuery('#state_code').val());
	});

function drawRoiResultsTable(data){
		jQuery(".roi_sales_org").html(data.original.sales+"%");
		jQuery(".roi_sales_calc").html(data.prospectnow.sales+"%");

		jQuery(".roi_marketing_org").html("$"+data.original.marketing_spend);
		jQuery(".roi_marketing_calc").html("$"+data.prospectnow.marketing_spend.toFixed(0));

		jQuery(".roi_listing_org").html(data.original.number_listings);
		jQuery(".roi_listing_calc").html(data.prospectnow.number_listings.toFixed(0));

		jQuery(".roi_commissions_org").html("$"+data.original.commisions.toLocaleString());
		jQuery(".roi_commissions_calc").html("$"+data.prospectnow.commisions.toLocaleString());

		var percent = (data.prospectnow.success_multiplier-100)/100;
		var total = percent * data.original.commisions;

		jQuery(".amount").html("$"+total.toLocaleString());
		jQuery(".roi-percent").html((percent*100).toFixed(2)+"%");

		jQuery('html, body').animate({
        scrollTop: jQuery("#calculate_button").offset().top
   		 }, 1000);
}
function changeCountyList(state){
	jQuery('#county_select_list').html('<option value="">Loading</option>');
	var pr = {"state_code":state,'start':'0','end':'999'};
	var webServiceUrl  = '/webservice/apiService.php?call=counties_list';
	var callback = function(data){
		var res = jQuery.parseJSON(data);
		drawCountyList(res['data']);
	};

	ajaxRequest(webServiceUrl,pr,callback);
}
//draw the county drop down
function drawCountyList(county_list){
		var html = '';
		for(var i=0;i<county_list.results.length; i++){
			html += '<option value="'+county_list.results[i]['id']+'">'+county_list.results[i]['county_name']+'</option>';
		}
		jQuery('#county_select_list').html(html);

	}

</script>