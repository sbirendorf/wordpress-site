<?php
/**
 * Template part for displaying Free 3 days trial- Page Hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section id="Hero" class="sign-up">
	<div class="container">

		<?php if ( get_field('prospectnow_page_hero_title') ) : ?>
		<div class="free-trial-title">
			<h1><?php the_field('prospectnow_page_hero_title'); ?></h1>
		<?php endif; ?>

		<?php if ( get_field('prospectnow_page_hero_content') ) : ?>
		<?php the_field('prospectnow_page_hero_content'); ?>
		</div>
		<?php endif; ?>

		<div class="search-properties" ng-controller="SignUpController as signup">

			
			<span id="login_error"></span>
			<!-- for now this will be a sign up form. instead of the search -->
			<form id="" action="" method="POST" novalidate ng-submit="">
			<label>Card Holder Name</label><br>
			 <input name="cardholder-name" class="field" placeholder="" />
				
				<!-- <div class="field double">
				   <input maxlength="50" size="14" name="sub[first_name]" placeholder="First name" value="" id="cardFirstName">
				</div>
				<div class="field double">
					 <input maxlength="50" size="14" name="sub[last_name]" placeholder="Last name" value="" id="cardLastName">
				</div> -->
			
			<label>Billing Address</label><br>
			<div class="field double">
				   <input maxlength="50" size="35" name="sub[address]" value="" id="cardHolderAddress">
			</div>
				<!-- .field.double -->
			<div class="field double">
					 <input maxlength="50" size="14" name="sub[city]" placeholder="City" value="" id="city">
			</div>
			<span class="error_class error_city">&nbsp;</span>
			<span class="error_class error_state">&nbsp;</span>
			<span class="error_class error_zip">&nbsp;</span>



				<!-- .field -->
				<div class="field">
					<label for="user_password"><?php the_field('prospectnow_page_hero_form_password_label'); ?></label>
					<input type="password" id="password" name="cPassword">
				</div>
				<!-- .field -->
				<div class="field">
					<label for="user_telephone"><?php the_field('prospectnow_page_hero_form_telephone_label'); ?></label>
					<input type="tel" id="phoneNumber" name="phone" value="">
				</div>
				<!-- .field -->
				<div class="field">
					<label for="user_company">Company</label>
					<input type="text" id="company" name="company" value="">
				</div>
				<!-- .field -->
				<?php if( have_rows('prospectnow_page_hero_form_industry_role_options') ) : ?>
				<div class="field select">
					<label for="user_role"><?php the_field('prospectnow_page_hero_form_industry_role_label'); ?></label>

					<select name="prole" id="prole" class="field input">
						<option value="">Choose Your Role</option>
						<?php while( have_rows('prospectnow_page_hero_form_industry_role_options') ): the_row(); ?>
						<option value="<?php the_sub_field('prospectnow_page_hero_form_industry_role_value'); ?>"><?php the_sub_field('prospectnow_page_hero_form_industry_role_option'); ?></option>
						<?php endwhile; ?>
					</select>
				</div>
				<?php endif; ?>
				<div class="field double checkbox">
					<label>
						<input type="checkbox" id="t_o_s" name="terms" value="1">
						<?php the_field('prospectnow_page_hero_form_terms_of_service_text'); ?>
					</label>
				</div>
				<!-- .field.double.checkbox -->
				<div style="clear: none;" class="field double checkbox">
					<label>
						<input type="checkbox" name="mailinglist" value="1" checked="checked">
						<?php the_field('prospectnow_page_hero_form_subscribe_to_mailing_list_text'); ?>
					</label>
				</div>
				<!-- .field.double.checkbox -->
				<input type="hidden" name="mode" value="register" />
				<div class="field actions">
					<md-button type="submit" onclick="registerFunctionS();return false;" class="md-raised md-primary button orange"><?php the_field('prospectnow_page_hero_form_submit_button_text'); ?></md-button>
				</div>
			</form>
		</div>
		<!-- .search-properties -->
	</div>
	<!-- .container -->
</section>
<!-- #Hero.signup -->
<!-- <script src="https://js.stripe.com/v3/"></script>
<form>
  <label>
    <span>Name</span>
    <input name="cardholder-name" class="field" placeholder="Jane Doe" />
  </label>
  <label>
    <span>Phone</span>
    <input class="field" placeholder="(123) 456-7890" type="tel" />
  </label>
  <label>
    <span>ZIP code</span>
    <input name="address-zip" class="field" placeholder="94110" />
  </label>
  <label>
    <span>Card</span>
    <div id="card-element" class="field"></div>
  </label>
  <button type="submit">Pay $25</button>
  <div class="outcome">
    <div class="error" role="alert"></div>
    <div class="success">
      Success! Your Stripe token is <span class="token"></span>
    </div>
  </div>
</form> -->