<?php
/**
 * Template part for displaying About - Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section about-contact">
	<div class="container">
		
		<?php if ( get_field('prospectnow_about_contact_title') ) : ?>
		<h1 class="section-title"><?php the_field('prospectnow_about_contact_title'); ?></h1>
		<?php endif; ?>
		
		<div layout="row" layout-xs="column">
			
			<div flex>
				 <form action="" method="POST" id="customer_form_sales" class="contact-form">
						<div class="field double">
							<label for="first_name"><?php the_field('prospectnow_about_contact_form_first_name_label'); ?></label>
							<input type="text" id="first_name" name="sendmail[first_name]">
						</div>
						<!-- .field.double -->
						<div class="field double">
							<label for="last_name"><?php the_field('prospectnow_about_contact_form_last_name_label'); ?></label>
							<input type="text" id="last_name" name="sendmail[last_name]">
						</div>
						<!-- .field.double -->
						<div class="field">
							<label for="email_address"><?php the_field('prospectnow_about_contact_form_email_label'); ?></label>
							<input type="text" id="email_address" name="sendmail[from]">
						</div>
						<!-- .field -->
						<div class="field">
							<label for="user_telephone"><?php the_field('prospectnow_about_contact_form_phone_label'); ?></label>
							<input type="tel" id="user_telephone" name="sendmail[phone]">
						</div>
						<input type="hidden" value="sales" name="sendmail[type]">
						<!-- .field -->
						<div class="field">
							<label for="user_message"><?php the_field('prospectnow_about_contact_form_messages'); ?></label>
							<textarea id="si_user_message" name="sendmail[message]" required rows="10"></textarea>
						</div>
						
						<div class="field select">
							<label for="user_role"><?php the_field('prospectnow_contact_form_right_industry_role_label'); ?></label>

							<select name="rolePicker" name="sendmail[role]" class="field input">
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
							<span id="error_msg2_sales"></span>
						</div>
					</form>



				
				
			</div>
			
			<div flex>
				
				<div class="entry-content">
					
					<?php if ( get_field('prospectnow_about_contact_content') ) : ?>
					<?php the_field('prospectnow_about_contact_content'); ?>
					<?php endif; ?>
					
					<?php if ( get_field('prospectnow_about_contact_button_text') ) : ?>
					<md-button href="<?php the_field('prospectnow_about_contact_button_url'); ?>" class="md-raised md-primary button orange"><?php the_field('prospectnow_about_contact_button_text'); ?></md-button>
					<?php endif; ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
</section>