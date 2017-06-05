<?php
/**
 * Template part for displaying Sales - Page Hero
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

			<md-content>
					<span id="error_msg2_sales"></span>
					<form action="" method="POST" id="customer_form_sales" class="contact-form">
						<div class="field double">
							<label for="first_name">First Name</label>
							<input type="text" id="first_name" name="sendmail[first_name]">
						</div>
						<!-- .field.double -->
						<div class="field double">
							<label for="last_name">Last Name</label>
							<input type="text" id="last_name" name="sendmail[last_name]">
						</div>
						<!-- .field.double -->
						<div class="field">
							<label for="email_address">Email Address</label>
							<input type="text" id="email_address" name="sendmail[from]">
						</div>
						<!-- .field -->
						<div class="field">
							<label for="user_telephone">Phone</label>
							<input type="tel" id="user_telephone" name="sendmail[phone]">
						</div>
						<input type="hidden" value="sales" name="sendmail[type]">
						<!-- .field -->
						<div class="field">
							<label for="user_message">Messages/Questions</label>
							<textarea id="si_user_message" name="sendmail[message]" required rows="10"></textarea>
						</div>
						<div class="field select">
							<label for="user_role">Industry Role:</label>

							<select name="rolePicker" class="field input">
								<option value="">Choose Your Role</option>
																<option value="Investory">Investory</option>
																<option value="Residential Real Estate Agent">Residential Real Estate Agent</option>
																<option value="Commercial Real Estate Agent">Commercial Real Estate Agent</option>
																<option value="Lender or Loan Broker">Lender or Loan Broker</option>
																<option value="Insurance Professional">Insurance Professional</option>
															</select>
						</div>

						<div class="field actions">
							<md-button type="button" onclick="submit_contact_ajax2('sales')"; class="md-raised md-primary button blue">Contact Us</md-button>
						</div>
					</form>
				</md-content>
			
			</div>
		</div><!-- layout="row" layout-xs="column" -->
			
	</div>
	<!-- .container -->
</section>
<!-- #Hero.signup -->
