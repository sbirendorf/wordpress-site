<?php
/**
 * Template part for displaying basic Page Hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section id="Hero">
	<div class="container text-align-left">

		<?php if ( get_field('prospectnow_page_hero_title') ) : ?>
		<h1><?php the_field('prospectnow_page_hero_title'); ?></h1>
		<?php else : ?>
		<h1><?php the_title(); ?></h1>
		<?php endif; ?>

		<?php if ( get_field('prospectnow_page_hero_content') ) : ?>
		<?php the_field('prospectnow_page_hero_content'); ?>
		<?php endif; ?>

	</div>
</section>
