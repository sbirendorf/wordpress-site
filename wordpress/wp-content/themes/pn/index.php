<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<div class="container">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</div>
		</header>
	<?php else : ?>
	<header class="page-header">
		<div class="container">
			<h2 class="page-title"><?php _e( 'Posts'); ?></h2>
		</div>
	</header>
	<?php endif; ?>
	<div class="page-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="container">

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

					?>
					<div class="communityPost">
						<article id="post_<?php the_ID(); ?>">
							<?php if(has_post_thumbnail()): ?>
								<div class="communityPostThumbnail">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('blog-post'); ?>
									</a>
									<div class="comments-link">
										<a href="<?php comments_link(); ?>">
											<?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
										</a>
									</div><!-- .comments-link -->
	                            </div><!-- .communityPostThumbnail -->
							<?php else: ?>
								<div class="communityPostThumbnail">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<img src="<?php bloginfo('template_directory'); ?>/_assets/img/blog-default.jpg" alt="ProspectNow">
									</a>
									<div class="comments-link">
										<a href="<?php comments_link(); ?>">
											<?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
										</a>
									</div><!-- .comments-link -->
	                            </div><!-- .communityPostThumbnail -->
							<?php endif; ?>
							<div class="communityTitle">
								<h2 class="entry-title">
									<a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>">
										<?php the_title(); ?>
									</a>
	                			</h2>
							    <h5><?php the_category(', '); ?></h5>
	                			<h3>By: <strong><?php the_author(); ?></strong></h3>
	                			<h4 class="date"><?php the_time('F j, Y'); ?></h4>
	                		</div><!-- .CommunityTitle -->
							<div class="communitySummary">
	                    		<p><?php the_excerpt(); ?></p>
								<md-button href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>" class="md-link button link">Read Post</a>
	                		</div><!-- .communitySummary -->
	            		</article><!-- #post -->

	                </div>
					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;
					echo '<div class="pn-pagination">';
					the_posts_pagination( array(
						'prev_text' => '<span class="">' . __( 'Previous Page' ) . '</span>',
						'next_text' => '<span class="">' . __( 'Next Page' ) . '</span>',
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',
					) );
					echo '</div>';

				else :

					//get_template_part( 'template-parts/post/content', 'none' );

				endif;
				?>
				</div>
				<!-- .container -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
