<?php
/**
 * Template Name: Contact
 *
 * Template for the Contact Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-section">
		<div class="container">
		
			<div layout="row" layout-xs="column">
					
				<div flex>
					
					<?php get_template_part( 'template-parts/contact/content' ); ?>
					
				</div>
				
				<div flex>
					
					<?php get_template_part( 'template-parts/contact/tabs' ); ?>
					
				</div>
			
			</div>
		
		</div>
	</div>
	
	<?php get_template_part( 'template-parts/contact/map' ); ?>

</article>

<?php endwhile; ?>

<?php get_footer(); ?>