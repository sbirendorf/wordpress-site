<?php get_header(); ?>
<style type="text/css">
.entry-content {
padding-left: 15px;
width: 70%;
}
</style>
<?php
get_sidebar();?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part('entry'); ?>
<?php if ( ! post_password_required() ) comments_template('', true); ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part('nav', 'below-single'); ?>
</footer>
</section>
<div class="clearfix"></div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>