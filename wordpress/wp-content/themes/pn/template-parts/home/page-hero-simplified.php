<?php
/**
 * Template part for displaying Home - Page Hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section id="Hero">
	<div class="container">

		<?php if ( get_field('prospectnow_page_hero_title') ) : ?>
		<h1><?php the_field('prospectnow_page_hero_title'); ?></h1>
		<?php endif; ?>

		<?php if ( get_field('prospectnow_page_hero_content') ) : ?>
		<?php the_field('prospectnow_page_hero_content'); ?>
		<?php endif; ?>

		<div class="search-properties simplified-form" ng-controller="SignUpController as signup">

			<?php if ( get_field('prospectnow_page_hero_form_title') ) : ?>
			<h3><?php the_field('prospectnow_page_hero_form_title'); ?></h3>
			<?php endif; ?>

			<!-- for now this will be a sign up form. instead of the search -->
			<form action="/wp-content/plugins/prospectnow/pnow_signup.php" method="POST" novalidate ng-submit="signup.form.$valid && signup.form.sendMessage()">

				<div class="field">
					<label for="email_address"><?php the_field('prospectnow_page_hero_form_email_address_label'); ?></label>
					<input type="text" id="email_address" name="email_address">
				</div>
				<div class="field actions">
					<md-button type="submit" class="md-raised md-primary button orange"><?php the_field('prospectnow_page_hero_form_submit_button_text'); ?></md-button>
				</div>
			</form>
		</div>
		
	</div>
	<!-- .container -->
</section>
<!-- #Hero -->
