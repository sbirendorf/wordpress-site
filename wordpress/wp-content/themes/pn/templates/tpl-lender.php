<?php
/**
 * Template Name: Lender page
 *
 * Template for the Lender
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

get_header(); ?>

<?php get_template_part('template-parts/lender/page-hero'); ?>

<?php get_template_part('template-parts/lender/qualified-leads'); ?>

<?php get_template_part('template-parts/lender/report'); ?>

<?php get_template_part('template-parts/lender/properties-sold'); ?>

<?php get_template_part('template-parts/lender/three-columns'); ?>

<?php get_footer(); ?>