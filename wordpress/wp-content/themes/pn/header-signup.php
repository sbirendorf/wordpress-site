<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up to the content
 *
 * @package prospectnow
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_assets/css/landings/sign-up.css">
</head>

<body <?php body_class(); ?>>
	<div id="Application" ng-app="ProspectNowMarketing">
		<section id="TopBar">
			<div class="container">
				<a href="/" id="Logo"><span>ProspectNow</span></a>
				<div class="right-nav" ng-controller="LogInController">
					<md-button href="/search-commercial-real-estate/" class="md-raised md-primary button orange">Start Your Free Trial</md-button>
					<md-button href="#" class="button link" id="login" ng-click="openLogin()">Log In</md-button>
				</div>
				<!-- .right-nav -->
			</div>
			<!-- .container -->
		</section>
		<!-- #TopBar -->
