<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package prospectnow
 */

get_header(); ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()):  the_post();
		setup_postdata($post);

	 ?>
	<div class="page-header">
		<div class="container">
			<div class="post-meta <?php if(has_post_thumbnail()) { echo 'has-thumbnail'; } ?>">
				<?php if(has_post_thumbnail()): ?>
				<div class="post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
				<!-- .post-thumbnails -->
				<?php endif; ?>
				<div class="post-meta-desc">
					<h1><?php the_title(); ?></h2>
					<p class="date"><?php the_date(); ?> &middot; <?php the_author(); ?></p>
				</div>
				<!-- .post-meta-desc -->
			</div>
			<!-- .post-meta -->
		</div>
		<!-- .container -->
	</div>
	<!-- .page-header -->
	<div class="page-wrapper">
		<div class="container">
			<article class="article-content">
				<?php the_content(); ?>
			</article>
			<!-- .article-content -->
			<aside class="sidebar">
				<?php get_sidebar(); ?>
			</aside>
			<!-- .sidebar -->
		</div>
		<!-- .container -->
	</div>
	<?php endwhile; ?>
<?php endif; ?>
<!-- .page-wrapper -->

<?php get_footer();
