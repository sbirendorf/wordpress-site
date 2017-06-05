<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
<!-- .page-header -->
<div class="page-wrapper">
	<div class="container">
		<?php the_content(); ?>
	</div>
	<!-- .container -->
</div>
<!-- .page-wrapper -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
