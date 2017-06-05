<?php
/**
 * Template Name: FAQs
 *
 * This is the template that displays the FAQs
 *
 * @package prospectnow
 */

get_header(); ?>
<?php
	if(have_posts()):
		while(have_posts()): the_post();
?>
<div class="page-header">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="page-wrapper">
	<div class="container entry-content">
		<?php the_content(); ?>
		
		
<?php endwhile; ?>
<?php endif; ?>
		
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
</div>

<?php get_footer(); ?>
