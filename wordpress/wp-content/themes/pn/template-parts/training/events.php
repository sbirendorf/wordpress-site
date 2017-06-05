<?php
/**
 * Template part for displaying the Events on the Training Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

$title = get_field('prospectnow_training_events_title');
$description = get_field('prospectnow_training_events_description');

?>

<?php if ( $title ) : ?>
<section class="page-section alt-bg">
<?php else : ?>
<div class="page-section alt-bg">
<?php endif; ?>
	<div class="container">
		
		<div layout="row" layout-xs="column">
				
			<div flex>
				<div class="intro">
					
					<?php if ( $title ) : ?>
					<h1><?php echo $title; ?></h1>
					<?php endif; ?>
					
					<?php if ( $description ) : echo $description; endif; ?>
					
				</div>
			</div>
			
			<div flex class="training-time">
				
			</div>
		
		</div>
		
	</div>
<?php if ( $title ) : ?>
</section>
<?php else : ?>
</div>
<?php endif; ?>
<script type="text/javascript">
	setTimeout(function () {
		
		var webServiceUrl  = '/webservice/apiService.php?call=upcoming_traning';

		var callback = function(data){
			var res = jQuery.parseJSON(data);
			renderResults(res);

		};
		present_ajax = ajaxRequest(webServiceUrl,'',callback);

		function renderResults(res){
			var html ="";
			jQuery.each( res.data, function( key, value ) {
			  	html += '<div class="event-box">';
				html +=	'<i class="fa fa-calendar" aria-hidden="true"></i>';
				html +=	'	<time datetime="" class="event-date">'+value.date+' at '+value.time+' PST</time>';
				html +=	'	<h2 class="box-title">Advanced Training</h2>';
				html +=	'	<p><a href="'+value.url+'" title="Click Here">Click Here</a> to View Agenda and Register For Training.</p>';
				html +=	'</div>';
			});
			jQuery('.training-time').html(html);
				
		}

	}, 400);



</script>