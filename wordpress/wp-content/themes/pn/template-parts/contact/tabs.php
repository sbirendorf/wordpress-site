<?php
/**
 * Template part for displaying Contact Tabs
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<div ng-cloak>
	<md-content>
		<md-tabs md-dynamic-height md-border-bottom>
			<md-tab label="<?php the_field('prospectnow_contact_tab_1_label'); ?>">
				<md-content>
				<span id="error_msg2_ticket"></span>
					<form action="" method="POST" id="customer_form_ticket" class="contact-form">
						<div class="field double">
							<label for="first_name"><?php the_field('prospectnow_contact_form_left_first_name_label'); ?></label>
							<input type="text" id="first_name" name="sendmail[first_name]">
						</div>
						<!-- .field.double -->
						<div class="field double">
							<label for="last_name"><?php the_field('prospectnow_contact_form_left_last_name_label'); ?></label>
							<input type="text" id="last_name" name="sendmail[last_name]">
						</div>
						<!-- .field.double -->
						<div class="field">
							<label for="email_address"><?php the_field('prospectnow_contact_form_left_email_address_label'); ?></label>
							<input type="text" id="email_address" name="sendmail[from]">
						</div>
						<!-- .field -->
						<div class="field">
							<label for="user_telephone"><?php the_field('prospectnow_contact_form_left_phone_label'); ?></label>
							<input type="tel" id="user_telephone" name="sendmail[phone]">
						</div>
						<!-- .field -->
						<div class="field">
							<label for="subject">Subject</label>
							<input type="text" id="customerSupportTicket_subject" name="sendmail[subject]">

						</div>
						<input type="hidden" value="ticket" name="sendmail[type]">
						<div class="field">
							<label for="user_message"><?php the_field('prospectnow_contact_form_left_message_label'); ?></label>
							<textarea id="user_message" name="sendmail[message]" required rows="10"></textarea>
						</div>
						<div class="field actions">
							<md-button type="button" onclick="submit_contact_ajax2('ticket')"; class="md-raised md-primary button blue"><?php the_field('prospectnow_contact_form_left_submit_button_text'); ?></md-button>
						</div>
					</form>
				</md-content>
			</md-tab>
			<md-tab label="<?php the_field('prospectnow_contact_tab_2_label'); ?>">
				<md-content>
					<span id="error_msg2_sales"></span>
					<form action="" method="POST" id="customer_form_sales" class="contact-form">
						<div class="field double">
							<label for="first_name"><?php the_field('prospectnow_contact_form_right_first_name_label'); ?></label>
							<input type="text" id="first_name" name="sendmail[first_name]">
						</div>
						<!-- .field.double -->
						<div class="field double">
							<label for="last_name"><?php the_field('prospectnow_contact_form_right_last_name_label'); ?></label>
							<input type="text" id="last_name" name="sendmail[last_name]">
						</div>
						<!-- .field.double -->
						<div class="field">
							<label for="email_address"><?php the_field('prospectnow_contact_form_right_email_address_label'); ?></label>
							<input type="text" id="email_address" name="sendmail[from]">
						</div>
						<!-- .field -->
						<div class="field">
							<label for="user_telephone"><?php the_field('prospectnow_contact_form_right_phone_label'); ?></label>
							<input type="tel" id="user_telephone" name="sendmail[phone]">
						</div>
						<input type="hidden" value="sales" name="sendmail[type]">
						<!-- .field -->
						<div class="field">
							<label for="user_message"><?php the_field('prospectnow_contact_form_right_message_label'); ?></label>
							<textarea id="si_user_message" name="sendmail[message]" required rows="10"></textarea>
						</div>
						<?php if( have_rows('prospectnow_contact_form_right_industry_role_options') ) : ?>
						<div class="field select">
							<label for="user_role"><?php the_field('prospectnow_contact_form_right_industry_role_label'); ?></label>

							<select name="rolePicker" name="sendmail[role]" class="field input">
								<option value="">Choose Your Role</option>
								<?php while( have_rows('prospectnow_contact_form_right_industry_role_options') ): the_row(); ?>
								<option value="<?php the_sub_field('prospectnow_contact_form_right_industry_role_value'); ?>"><?php the_sub_field('prospectnow_contact_form_right_industry_role_option'); ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<?php endif; ?>
						<div class="field actions">
							<md-button type="button" onclick="submit_contact_ajax2('sales')"; class="md-raised md-primary button blue"><?php the_field('prospectnow_contact_form_right_submit_button_text'); ?></md-button>
						</div>
					</form>
				</md-content>
			</md-tab>
		</md-tabs>
	</md-content>
</div>