<?php get_header(); 
$temp = getRememberMe();
extract($temp);

?>

<section id="content" class="row" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="col-md-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!--<header class="header">
			<h1 class="entry-title"><?php the_title(); ?></h1> 
		</header>--><?php edit_post_link(); ?>
		<section class="entry-content">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<?php the_content(); ?>
			<div class="entry-links"><?php wp_link_pages(); ?></div>
		</section>
	</article>
	<?php if ( ! post_password_required() ) comments_template('', true); ?>
	<?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>