<?php
/**
 * Template part for displaying Broker - Page Hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section id="Hero" class="broker-lender-landing">
	<div class="container text-align-left">

		<?php if ( get_field('prospectnow_page_hero_title') ) : ?>
		<h1 class="county-title" style="display: none;"><?php the_field('prospectnow_page_hero_title');?><span class="county-name"></span></h1>
		<?php endif; ?>

		<?php if ( get_field('prospectnow_page_hero_content') ) : ?>
		<?php the_field('prospectnow_page_hero_content'); ?>
		<?php endif; ?>

	</div>
</section>
<script type="text/javascript">
<?php 

$state ="California";
$county = "ALAMEDA";
$countyId = "17";
$url = explode('/', $_SERVER['REQUEST_URI']);

if ( isset($url[2]) && !empty( $url[2]) && isset( $url[3] ) && !empty( $url[3]) && $url[4] >0 ) {
		$state = $url[2];
		$county = $url[3];
		$countyId = $url[4];
	}
?>
    var state = '<?php  echo $state; ?>';
    var county = '<?php  echo $county; ?>';	
    var county_id = '<?php  echo $countyId; ?>';	


	setTimeout(function () {
		county = county.toLowerCase();
		console.log(state);
		state = abbrState(state);
		jQuery( ".county-name").html(" "+ county.charAt(0).toUpperCase()+ county.slice(1) + " " + state);
		jQuery( ".county-title").fadeIn( "slow", function() {});
		
		jQuery( ".sold-report").hide();
		getReportData(county_id);
		getSoldData(county_id,state,county);
		getPropertyTypesChartsData(county_id);//chart1
		getOccupiedChartsData(county_id);//chart2
		getPredictedChartsData(county_id);//chart3

    }, 1200);


</script>

