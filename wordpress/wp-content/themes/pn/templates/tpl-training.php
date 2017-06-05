<?php
/**
 * Template Name: Training
 *
 * This is the template that lists Locations
 *
 * @package prospectnow
 */

get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<?php get_template_part('template-parts/page-hero'); ?>
	
	<?php get_template_part('template-parts/training/events'); ?>
	
	<?php get_template_part('template-parts/training/videos'); ?>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>