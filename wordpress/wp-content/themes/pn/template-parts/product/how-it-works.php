<?php
/**
 * Template part for displaying Product - How it Works
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section">
	<div class="container">
		
		<div class="inner-wrap">
			
			<?php if ( get_field('prospectnow_product_how_does_it_work_title') ) : ?>
			<h1 class="section-title"><?php the_field('prospectnow_product_how_does_it_work_title'); ?></h2>
			<?php endif; ?>
			
			<?php if ( get_field('prospectnow_product_how_does_it_work_content') ) : ?>
			<?php the_field('prospectnow_product_how_does_it_work_content'); ?>
			<?php endif; ?>
			
		</div>
		
		<?php if ( get_field('prospectnow_product_how_does_it_work_features_title') ) : ?>
		<h2 class="section-title"><?php the_field('prospectnow_product_how_does_it_work_features_title'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('prospectnow_product_how_does_it_work_features') ) : ?>
		<div class="steps boxes">
			<?php $i = 1; ?>
			<?php while( have_rows('prospectnow_product_how_does_it_work_features') ): the_row(); ?>
			<div class="step">
				
				<?php 
					$link = get_sub_field('prospectnow_product_how_does_it_work_features_feature_link');
					$image = get_sub_field('prospectnow_product_how_does_it_work_features_feature_image');
					$title = get_sub_field('prospectnow_product_how_does_it_work_features_feature_title');
					$description = get_sub_field('prospectnow_product_how_does_it_work_features_feature_description');
				?>
				
				<?php if ( $link ) : ?>
				<a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
				<?php endif; ?>
				
				<?php 
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
				if( $image ) : ?>
				<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif; ?>
				
				<?php if ( $title ) : ?>
				<h3 class="step-title"><?php echo $title; ?></h3>
				<?php endif; ?>
				
				<?php if ( $description ) : ?>
				<?php echo $description; ?>
				<?php endif; ?>
				
				<?php if ( $link ) : ?>
				</a>
				<?php endif; ?>
				
			</div>
			<?php $i++; ?>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
		<?php if ( get_field('prospectnow_product_how_does_it_work_button_text') ) : ?>
		<?php
			// button vars
			$buttontext = get_field('prospectnow_product_how_does_it_work_button_text');
			$buttonurl = get_field('prospectnow_product_how_does_it_work_button_url');
		?>
		<div class="section-actions">
			<md-button href="<?php echo $buttonurl; ?>" class="md-raised md-primary button orange"><?php echo $buttontext; ?></md-button>
		</div>
		<?php endif; ?>
		
	</div>
</section>