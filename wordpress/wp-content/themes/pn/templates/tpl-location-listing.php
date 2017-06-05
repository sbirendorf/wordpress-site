	<?php
	/**
	 * Template Name: Location Listing
	 *
	 * This is the template that lists Locations
	 *
	 * @package prospectnow
	 */

	get_header(); ?>
	<?php
	if(have_posts()):
		while(have_posts()): the_post();
	?>
	<div class="page-header">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="page-wrapper">
		<div class="container entry-content">
			<?php the_content(); ?>
			
			
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="location-wrap">

		<div layout="row" layout-margin layout-xs="column">

			<div flex>

				<div class="locations">

					<!-- <a href="#" title="Alameda" class="location">
						<div>
							<h2>Alameda</h2>
							<p><span>41,523</span> Commercial Property Owners</p>
							<p><span>451,436</span> Commercial & Apartment Buildings</p>
						</div>
					</a> -->

				</div>

				<!-- <div class="pn-pagination">
					<md-button href="#" class="md-raised button blue prev-page disabled">Previous</md-button>
					<span class="active">1</span>
					<a href="#" title="2">2</a>
					<a href="#" title="3">3</a>
					<md-button href="#" class="md-raised button next-page blue">Next</md-button>
				</div> -->

			</div>

			<div flex>

				<div class="form-wrap follow-scroll">

					<h2>Sign Up For 3 Day Trial</h2>
					<span id="login_error"></span>
					<form id="signup-form-frm1" action="/oldindex.php?page=register&plan=type=emailverify" method="POST" novalidate ng-submit="signup.form.$valid && signup.form.sendMessage()">
						<div class="field double">
							<label for="first_name"><?php the_field('prospectnow_page_hero_form_first_name_label'); ?></label>
							<input type="text" id="firstName" placeholder="First name" name="first_name" value="">
						</div>
						<!-- .field.double -->
						<div class="field double">
							<label for="last_name"><?php the_field('prospectnow_page_hero_form_last_name_label'); ?></label>
							<input type="text" id="lastName" placeholder="Last name" name="last_name" value="">
						</div>
						<!-- .field.double -->
						<div class="field">
							<label for="email_address"><?php the_field('prospectnow_page_hero_form_email_address_label'); ?></label>
							<input type="text" id="emailAddress" placeholder="Email address" name="user_name" value=''>
						</div>
						<!-- .field -->
						<div class="field">
							<label for="user_password"><?php the_field('prospectnow_page_hero_form_password_label'); ?></label>
							<input type="password" id="password" placeholder="Password" name="cPassword">
						</div>
						<!-- .field -->
						<div class="field">
							<label for="user_telephone"><?php the_field('prospectnow_page_hero_form_telephone_label'); ?></label>
							<input type="tel" id="phoneNumber" placeholder="Phone number" name="phone" value="">
						</div>
						<!-- .field -->

						<div class="field select">
							<label for="user_role"><?php the_field('prospectnow_page_hero_form_industry_role_label'); ?></label>

							<select name="prole" id="prole" class="field input">
								<option value="">Choose Your Role</option>
								<option value="Investor">Investor</option>
								<option value="Residential Real Estate Agent">Residential Real Estate Agent</option>
								<option value="Commercial Real Estate Agent">Commercial Real Estate Agent</option>
								<option value="Lender or Loan Broker">Lender or Loan Broker</option>
								<option value="Insurance Professional">Insurance Professional</option>
								<option value="Building Services, Management or Maintenance">Building Services, Management or Maintenance</option>

							</select>
						</div>

						<div class="field double checkbox">
							<label>
								<input type="checkbox" id="t_o_s" name="terms" value="1">
								I agree with the <a href="/terms-use/" target="_blank">Terms of Service</a>					
							</label>
						</div>
						<!-- .field.double.checkbox -->
						<div style="clear: none;" class="field double checkbox">
							<label>
								<input type="checkbox" name="mailinglist" value="1" checked="checked">
								Subscribe to our mailing list					
							</label>
						</div>
						<!-- .field.double.checkbox -->
						<input type="hidden" name="mode" value="register" />
						<div class="field actions">
							<md-button type="submit" onclick="registerFunctionS();return false;" class="md-raised md-primary button orange">Start Free Trial</md-button>
						</div>
					</form>

				</div>

			</div>

		</div>

	</div>

</div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
var state;
	setTimeout(function () {
		state = getStateNameFromUrl();
		var pr = {"state_code":abbrState(state)};
		var d = new Date();
		var n = d.getTime();
		var webServiceUrl  = '/webservice/apiService.php?call=counties_list&time='+n;
		var callback = function(data){
			var res = jQuery.parseJSON(data);
			drawCountyResults(res);

		};
		present_ajax = ajaxRequest(webServiceUrl,pr,callback);


		signupScroller('.follow-scroll', 155);

	}, 35);

	function getStateNameFromUrl(){
		var path = window.location.pathname;
		var str = path.split("/");
		str = str[1].split("-");
		str = str[0];
		return str.charAt(0).toUpperCase() + str.slice(1);
	}
	function drawCountyResults(res){
		var text = "";

		for(var x=0; x<res.data.results.length; x++){
			text+='<a href="/county-territory/'+state+'/'+res.data.results[x].county_name +'/'+res.data.results[x].id +'" title="'+res.data.results[x].county_name +'" class="location"><div><h2>'+ res.data.results[x].county_name +'</h2>';
			text+='<p><span>'+ res.data.results[x].number_owners +'</span> Commercial Property Owners</p>';
			text+='<p><span>'+ res.data.results[x].number_properties +'</span> Commercial & Apartment Buildings</p></div></a>';
					
		}
		jQuery( ".locations").html(text).fadeIn( "slow", function() {});;
		}	

</script>

