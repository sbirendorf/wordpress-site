<?php
/**
 * Template part for displaying IP Marketing - Stop Robots
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section" id="StopRobots">
	<div class="container">
		<div class="row">
			
			<div class="robot-content">
				
				<?php if ( get_field('prospectnow_ip_marketing_stop_robots_title') ) : ?>
				<h1 class="section-title left"><?php the_field('prospectnow_ip_marketing_stop_robots_title'); ?></h1>
				<?php endif; ?>
				
				<?php if ( get_field('prospectnow_ip_marketing_stop_robots_content') ) : ?>
				<?php the_field('prospectnow_ip_marketing_stop_robots_content'); ?>
				<?php endif; ?>
				
			</div>
			
			<?php $robotImage = get_field('prospectnow_ip_marketing_stop_robots_image'); ?>
			<?php $size = 'full'; ?>
			<?php if( $robotImage ) : ?>	
			<div class="robot-image">
				<?php echo wp_get_attachment_image( $robotImage, $size ); ?>
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
</section>