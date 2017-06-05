<?php
/**
 * Template part for displaying Home - Blog
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section" id="Blog">
	<div class="container">

		<h1 class="section-title">From Our Blog</h1>

		<?php
			$args = array(
				'showposts' => 4
			);
			$homeBlog = new WP_Query($args);

			if($homeBlog->have_posts()):
				while($homeBlog->have_posts()) : $homeBlog->the_post();
		?>
		<div class="blog">
			<div class="blog-date"><span class="month"><?php the_time('M'); ?></span><span class="day"><?php the_time('d'); ?></span></div>
			<div class="blog-link">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<p class="author">By: <?php the_author(); ?></p>
			</div>
			<!-- .blog-link -->
		</div>
		<!-- .blog -->
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="meta-actions">
			<md-button href="/blog" class="md-raised button blue">Read Our Blog</md-button>
		</div>
	</div>
	<!-- .container -->
</section>
<!-- #Blog -->
