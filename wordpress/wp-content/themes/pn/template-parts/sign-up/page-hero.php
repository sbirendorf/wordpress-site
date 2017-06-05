<?php
/**
 * Template part for displaying Sign Up - Page Hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section id="Hero" class="sign-up">
	<div class="container">
		
		<div layout="column" layout-gt-sm="row">
			
			<div flex>
				
				<div class="hero-content">
					
				<?php if ( get_field('prospectnow_page_hero_title') ) : ?>
				<h1><?php the_field('prospectnow_page_hero_title'); ?></h1>
				<?php endif; ?>
		
				<?php if ( get_field('prospectnow_page_hero_content') ) : ?>
				<?php the_field('prospectnow_page_hero_content'); ?>
				<?php endif; ?>
			
				</div>
				
			</div>
			
			<div flex>

				<div class="search-properties" ng-controller="SignUpController as signup">
		
					<?php if ( get_field('prospectnow_page_hero_form_title') ) : ?>
					<h3><?php the_field('prospectnow_page_hero_form_title'); ?></h3>
					<?php endif; ?>
					
					<span id="login_error"></span>
					
					<!-- for now this will be a sign up form. instead of the search -->
					<form id="signup-form-frm1" action="/oldindex.php?page=register&plan=type=emailverify" method="POST" novalidate ng-submit="signup.form.$valid && signup.form.sendMessage()">
						<div class="field double">
							<label for="first_name"><?php the_field('prospectnow_page_hero_form_first_name_label'); ?></label>
							<input type="text" id="firstName" name="first_name" value="">
						</div>
						<!-- .field.double -->
						<div class="field double">
							<label for="last_name"><?php the_field('prospectnow_page_hero_form_last_name_label'); ?></label>
							<input type="text" id="lastName" name="last_name" value="">
						</div>
						<!-- .field -->
						<div class="field">
							<label for="user_telephone"><?php the_field('prospectnow_page_hero_form_telephone_label'); ?></label>
							<input type="tel" id="phoneNumber" name="phone" value="">
						</div>
						<!-- .field.double -->
						<div class="field">
							<label for="email_address"><?php the_field('prospectnow_page_hero_form_email_address_label'); ?></label>
							<?php if ( isset( $_GET['email'] ) && !empty( $_GET['email'] ) ) {
							  $email = $_GET['email'];
							} else {
							  $email ="";
							} ?>
							<input type="text" id="emailAddress" name="user_name" value='<?php echo $email ?>'>
						</div>
						<div class="field">
							<input type="password" id="password" placeholder="Password" name="cPassword" value="">
						</div>
	
						<div class="field select">
							<select name="prole" id="prole" class="field input">
								<option value="">Choose Role</option>
								<option value="Investor">Investor</option>
								<option value="Residential Real Estate Agent">Residential Real Estate Agent</option>
								<option value="Commercial Real Estate Agent">Commercial Real Estate Agent</option>
								<option value="Lender or Loan Broker">Lender or Loan Broker</option>
								<option value="Insurance Professional">Insurance Professional</option>
								<option value="Building Services, Management or Maintenance">Building Services, Management or Maintenance</option>
								<option value="Other">Other</option>
							</select>
						</div>
							


						<!-- .field -->
						<?php /*if( have_rows('prospectnow_page_hero_form_company_role_options') ) : 
						<div class="field select">
							<label for="user_role" class="screen-reader-text"><?php the_field('prospectnow_page_hero_form_company_role_label'); ?></label>
		
							<select name="prole" id="prole" class="field input">
								<option value=""><?php the_field('prospectnow_page_hero_form_company_role_label'); ?></option>
								<?php while( have_rows('prospectnow_page_hero_form_company_role_options') ): the_row(); ?>
								<option value="<?php the_sub_field('prospectnow_page_hero_form_company_role_value'); ?>"><?php the_sub_field('prospectnow_page_hero_form_company_role_option'); ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<?php endif; */?>

						<!-- .field.double -->
						<div class="field">
							<label for="desc_goals" class="screen-reader-text"><?php the_field('prospectnow_page_hero_form_describe_your_goals_label'); ?></label>
							<textarea type="text" id="descGoals" placeholder="Describe Your Goals" name="desc_goals" rows="6"></textarea>
							
						</div>
						
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
		</div><!-- layout="row" layout-xs="column" -->
			
	</div>
	<!-- .container -->
</section>
<!-- #Hero.signup -->
