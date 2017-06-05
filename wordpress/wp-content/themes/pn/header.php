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
</head>

<body <?php body_class(); ?>>
	<div id="Application" ng-app="ProspectNowMarketing">
		<nav id="MainNavigation">
			<div class="container">
				<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
				<span class="mobile-social">
						<a href="//www.facebook.com/ProspectNow" target="_blank"><span class="icon facebook"></span></a>
						<a href="//www.youtube.com/channel/UCJCBDA5Y8RsuSC0O8hT_NyQ" target="_blank"><span class="icon youtube"></span></a>
						<a href="//twitter.com/ProspectNow" target="_blank"><span class="icon twitter"></span></a>
				</span>
			</div>
			<!-- .container -->
		</nav>
		<!-- #MainNavigation -->
		<section id="TopBar">
			<div class="container">
				<div class="mobile-menu"><span><em></em></span></div>
				<a href="/" id="Logo"><span>ProspectNow</span></a>
				<div class="right-nav" ng-controller="LogInController">
				<!-- 	<a style="color: #3f78be; margin-top: 5px;" href="tel:1+8889569998" class="header-phone inline-block spacing"><span class="fa fa-mobile"></span> 888 956 9998</a> -->
				<!-- 	<md-button href="tel:1+8889569998" class="button link"><span class="fa fa-mobile"></span> 888 956 9998</md-button> -->
					<md-button href="#" class="button link" id="login" ng-click="openLogin($event)">Log In</md-button>
					<md-button href="/search-commercial-real-estate/" class="md-raised md-primary button orange">Start Your Free Trial</md-button>
					<span class="top-social">
						<a href="//www.facebook.com/ProspectNow" target="_blank"><span class="icon facebook"></span></a>
						<a href="//www.youtube.com/channel/UCJCBDA5Y8RsuSC0O8hT_NyQ" target="_blank"><span class="icon youtube"></span></a>
						<a href="//twitter.com/ProspectNow" target="_blank"><span class="icon twitter"></span></a>
					</span>
				</div>
				<!-- .right-nav -->
			</div>
			<!-- .container -->
		</section>
		<!-- #TopBar -->
