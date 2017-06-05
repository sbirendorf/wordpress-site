<?php
/**
 * Template Name: About
 *
 * Template for the About Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

get_header(); ?>
 
<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
		
		<?php get_template_part( 'template-parts/about/content'); ?>
		
		<?php get_template_part( 'template-parts/about/team'); ?>
		
		<?php get_template_part( 'template-parts/about/contact'); ?>
	
	</article>

<?php endwhile; ?>

<?php get_footer(); ?>