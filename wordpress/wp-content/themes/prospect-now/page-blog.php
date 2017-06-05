<?php 			
	get_header();
?>
<style type="text/css">
.entry-content {
padding-left: 15px;
width: 70%;
}
</style>
<?php
get_sidebar();
	
// The Query
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

query_posts('posts_per_page=3&&order=DESC&paged=' . $paged); 



// The Loop
while ( have_posts() ) : the_post();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( is_singular() ) {echo '<h1 class="entry-title">';} else {echo '<h2 class="entry-title">';} ?>

<a href="<?php echo get_permalink();?>"><?php the_title(); ?></a>
<a class="comment-bubble" href='<?php comments_link(); ?>' style="display:inline-block;"><?php echo comments_number( '0', '1', '% Comments' ); ?></a>

<?php if ( is_singular() ) {echo '</h1>';} else {echo '</h2>';} ?> <?php edit_post_link(); ?>
<?php if (!is_search()) get_template_part('entry', 'meta'); ?>
</header>

<?php get_template_part('entry', (is_archive() || is_search() ? 'summary' : 'content')); ?>
<?php if (!is_search()) get_template_part('entry-footer'); ?>
</article>
<?php
endwhile;

 next_posts_link();
 previous_posts_link(); 

// Reset Query
wp_reset_query();

	get_footer();	
	
	

