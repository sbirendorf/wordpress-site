<?php
/**
 * Template part for displaying IP Marketing - Only Human Traffic
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section" id="OnlyHumanTraffic">
	<div class="container">
		
		<div class="inner-wrap">
			
			<?php if ( get_field('prospectnow_ip_marketing_only_human_traffic_title') ) : ?>
			<h1 class="section-title"><?php the_field('prospectnow_ip_marketing_only_human_traffic_title'); ?></h1>
			<?php endif; ?>
			
			<?php if ( get_field('prospectnow_ip_marketing_only_human_traffic_content') ) : ?>
			<?php the_field('prospectnow_ip_marketing_only_human_traffic_content'); ?>
			<?php endif; ?>
		
		</div>
		
		<div class="section-actions row">
			
			<?php if ( get_field('prospectnow_ip_marketing_only_human_traffic_button_text') ) : ?>
			<?php
				// button vars
				$buttontext = get_field('prospectnow_ip_marketing_only_human_traffic_button_text');
				$buttonurl = get_field('prospectnow_ip_marketing_only_human_traffic_button_url');
			?>
			<div class="buttons">
				<md-button class="md-raised button orange" href="<?php echo $buttonurl; ?>"><?php echo $buttontext; ?></md-button>
			</div>
			<?php endif; ?>
			
			<?php $sectionImage = get_field('prospectnow_ip_marketing_only_human_traffic_image'); ?>
			<?php $size = 'full'; ?>
			<?php if( $sectionImage ) : ?>	
			<div class="section-image">
				<?php echo wp_get_attachment_image( $sectionImage, $size ); ?>
			</div>
			<?php endif; ?>
			
		</div>
		
		
	</div>
	
</section>