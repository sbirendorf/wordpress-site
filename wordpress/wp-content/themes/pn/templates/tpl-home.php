<?php
/**
 * Template Name: Homepage
 *
 * Template for the Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

get_header(); ?>

<?php get_template_part('template-parts/home/page-hero'); ?>

<?php get_template_part('template-parts/home/portal'); ?>

<?php get_template_part('template-parts/home/lp-marketing'); ?>

<?php get_template_part('template-parts/home/clients'); ?>

<?php get_template_part('template-parts/home/blog'); ?>

<?php get_footer(); ?>
