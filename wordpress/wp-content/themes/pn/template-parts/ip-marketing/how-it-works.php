<?php
/**
 * Template part for displaying IP Marketing - How It Works
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section" id="HowItWorks">
	<div class="container">
		
		<?php if ( get_field('prospectnow_ip_marketing_how_it_works_title') ) : ?>
		<h1 class="section-title"><?php the_field('prospectnow_ip_marketing_how_it_works_title'); ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('prospectnow_ip_marketing_how_it_works_steps') ) : ?>
		<div class="steps">
			<?php $i = 1; ?>
			<?php while( have_rows('prospectnow_ip_marketing_how_it_works_steps') ): the_row(); ?>
			<div class="step">
				<div class="num"><?php echo $i; ?></div>
				<p class="desc"><?php the_sub_field('prospectnow_ip_marketing_how_it_works_steps_description'); ?></p>
			</div>
			<?php $i++; ?>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
		<?php if ( get_field('prospectnow_ip_marketing_how_it_works_button_text') ) : ?>
		<?php
			// button vars
			$buttontext = get_field('prospectnow_ip_marketing_how_it_works_button_text');
			$buttonurl = get_field('prospectnow_ip_marketing_how_it_works_button_url');
		?>
		<div class="section-actions">
			<md-button href="<?php echo $buttonurl; ?>" class="md-primary md-raised button green"><?php echo $buttontext; ?></md-button>
		</div>
		<?php endif; ?>
		
	</div>
</section>