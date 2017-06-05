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

		<!-- We're not going to use this until we go back to the new one.
		<div class="role">
			<h2>What best describes you?</h2>
			<select name="rolePicker">
				<option value="">Choose Your Role</option>
				<option value="res-real-estate-agent">Residential Real Estate Agent</option>
				<option value="com-real-estate-agent">Commercial Real Estate Agent</option>
				<option value="res-lender">Residential Bank Lender</option>
				<option value="com-lender">Commercial Bank Lender</option>
			</select>
			<ul class="role-switcher">
				<li><a href="#">Residential Real Estate Agent</a></li>
				<li><a href="#">Commercial Real Estate Agent</a></li>
				<li><a href="#">Residential Bank Lender</a></li>
				<li><a href="#">Commercial Bank Lender</a></li>
			</ul>
		</div>
	`	-->
		<!-- .role -->

		<div class="search-properties" ng-controller="SignUpController as signup">

			<?php if ( get_field('prospectnow_page_hero_form_title') ) : ?>
			<h3><?php the_field('prospectnow_page_hero_form_title'); ?></h3>
			<?php endif; ?>

			<!-- for now this will be a sign up form. instead of the search -->
			<form action="#" method="POST" novalidate ng-submit="signup.form.$valid && signup.form.sendMessage()">

				<div class="field double">
					<label for="first_name"><?php the_field('prospectnow_page_hero_form_first_name_label'); ?></label>
					<input type="text" id="first_name" name="first_name">
				</div>
				<!-- .field.double -->
				<div class="field double">
					<label for="last_name"><?php the_field('prospectnow_page_hero_form_last_name_label'); ?></label>
					<input type="text" id="last_name" name="last_name">
				</div>
				<!-- .field.double -->
				<div class="field">
					<label for="email_address"><?php the_field('prospectnow_page_hero_form_email_address_label'); ?></label>
					<input type="text" id="email_address" name="email_address">
				</div>
				<!-- .field -->
				<div class="field">
					<label for="user_password"><?php the_field('prospectnow_page_hero_form_password_label'); ?></label>
					<input type="password" id="user_password" name="user_password">
				</div>
				<!-- .field -->
				<div class="field">
					<label for="user_telephone"><?php the_field('prospectnow_page_hero_form_telephone_label'); ?></label>
					<input type="tel" id="user_telephone" name="user_telephone">
				</div>
				<!-- .field -->
				<?php if( have_rows('prospectnow_page_hero_form_industry_role_options') ) : ?>
				<div class="field select">
					<label for="user_role"><?php the_field('prospectnow_page_hero_form_industry_role_label'); ?></label>

					<select name="rolePicker">
						<option value="">Choose Your Role</option>
						<?php while( have_rows('prospectnow_page_hero_form_industry_role_options') ): the_row(); ?>
						<option value="<?php the_sub_field('prospectnow_page_hero_form_industry_role_value'); ?>"><?php the_sub_field('prospectnow_page_hero_form_industry_role_option'); ?></option>
						<?php endwhile; ?>
					</select>
				</div>
				<?php endif; ?>
				<div class="field double checkbox">
					<label>
						<input type="checkbox" name="terms" value="1">
						<?php the_field('prospectnow_page_hero_form_terms_of_service_text'); ?>
					</label>
				</div>
				<!-- .field.double.checkbox -->
				<div class="field double checkbox">
					<label>
						<input type="checkbox" name="mailinglist" value="1" checked="checked">
						<?php the_field('prospectnow_page_hero_form_subscribe_to_mailing_list_text'); ?>
					</label>
				</div>
				<!-- .field.double.checkbox -->
				<div class="field actions">
					<md-button type="submit" class="md-raised md-primary button orange"><?php the_field('prospectnow_page_hero_form_submit_button_text'); ?></md-button>
				</div>
			</form>
		</div>
		<!-- .search-properties -->

		<div class="meta-actions">
			<a href="#" class="actions-extra">What is ProspectNow <span class="icon down chevron"></span></a>
		</div>
		<!-- .meta-actions -->
	</div>
	<!-- .container -->
</section>
<!-- #Hero -->
