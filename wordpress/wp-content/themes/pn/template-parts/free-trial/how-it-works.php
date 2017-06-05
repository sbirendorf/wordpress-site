<?php
/**
 * Template part for displaying Sign Up - How it Works
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section id="HowItWorks" class="page-section">
	<div class="container">
		
		<?php if ( get_field('prospectnow_signup_how_it_works_section_title') ) : ?>
		<h1 class="section-title"><?php the_field('prospectnow_signup_how_it_works_section_title'); ?></h1>
		<?php endif; ?>
		
		<?php if ( get_field('prospectnow_signup_how_it_works_content') ) : ?>
		<?php the_field('prospectnow_signup_how_it_works_content'); ?>
		<?php endif; ?>
		
		<?php if( have_rows('prospectnow_signup_how_it_works_steps') ) : ?>
		<div class="steps">
			<?php $i = 1; ?>
			<?php while( have_rows('prospectnow_signup_how_it_works_steps') ): the_row(); ?>
			<div class="step">
				<div class="num"><?php echo $i; ?></div>
				<p class="desc"><?php the_sub_field('prospectnow_signup_how_it_works_steps_description'); ?></p>
			</div>
			<?php $i++; ?>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		
	</div>
</section>



<div class="page-wrapper">
	<div class="container entry-content">
		<?php the_content(); ?>
		
		
		<?php
			$args = array(
			'post_type'			=>	'faq',
			'orderby'			=>	'menu_order',
			'order'				=>	'ASC',
			'posts_per_page'	=>	9999,
			);
		?>
		<?php $posts = new WP_Query( $args ); ?>
		
		<?php if($posts->have_posts()) : ?>
		
		<div class="accordion">
			
			<?php while($posts->have_posts()) : $posts->the_post(); ?>
			
			<div id="faq-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="accordion-title"><?php the_title(); ?></h2>
				<div class="accordion-content">
					<?php the_content(); ?>
				</div>
			</div>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; wp_reset_postdata(); ?>
		
	</div>
		<?php if ( get_field('prospectnow_signup_how_it_works_button_text') ) : ?>
		<?php
			// button vars
			$buttontext = get_field('prospectnow_signup_how_it_works_button_text');
			$buttonurl = get_field('prospectnow_signup_how_it_works_button_url');
		?>
		<div class="section-actions">
			<md-button href="<?php echo $buttonurl; ?>" class="md-raised md-primary button orange"><?php echo $buttontext; ?></md-button>
		</div>
		<?php endif; ?>
</div>