<?php
/**
 * Template Name: Property info
 *
 * Template for the Property info
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

get_header(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

	<div class="propertyInfoWrap" layout="row" layout-margin layout-xs="column">

	 <div flex>

						<div class="panel panel-default owner">
							<div class="panel-body">								

								<div class="row topOwnerPanel">
									<table cellspacing="0" class="propertyInfoTable">
										<thead>
											<tr>
												<th colspan="2" class="hd">													
													<span class="propertyInfoOwnerTitle">Property Owner</span>																		
													<div style="float:left;width:100%;position:relative;">
														<div id="actionContain1" style="left: 0px; top: 0px;display:none;"></div>
													</div>														
												</th>
											</tr>
										</thead>
										<tfoot class="shareFooter">
											<tr>
												<td colspan="2" class="hd sharePropertyArea">
													<div id="toolbox_container" style="margin-top: -4px;">
														<div class="pull-left">
															<strong class="hidden-lg sharePropertyTitle">Share this property:</strong>
														</div>
														<div id="goog_url" style="margin-left:20px;" class="pull-left">
																<img width="35" height="37" src="/wp-content/themes/pn/_assets/img/share_icon.png" id="share_icon">
														</div>																	
													</div>																		
												</td>
											</tr>						
										</tfoot>
										<tbody>												
											<tr>
												<td class="col">Owner First Name
														<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The first name of the primary owner of the property.</span>
														</div>
												</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" />
											</tr>
											<tr>
												<td class="col">Owner Last Name
												<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
												</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" />
											</tr>
											<tr>
												<td class="col">Phone
												<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
												</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" />
											</tr>	
											<tr>
												<td class="col">Cell Phone
												<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" />
											</tr>										
											<tr>
												<td class="col">Address
												<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" />
											</tr>
												
																					
											<tr>
												<td class="col">Owner Type 
												<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>
											<tr>
												<td class="col">Other Owner Type</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>
											<tr>
												<td class="col">Ownership Status
												<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" />
											</tr>														
										</tbody>        	
									</table>
								</div>
							</div>
						</div>
						
					  </div>

			



		<div flex>

			<div class="form-wrap follow-scroll">

				<h2>Sign Up For 3 Day Trial</h2>
				<span id="login_error"></span>
				<form id="signup-form-frm1" action="/oldindex.php?page=register&plan=type=emailverify" method="POST" novalidate ng-submit="signup.form.jQueryvalid && signup.form.sendMessage()">
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


<center class="loading"><img src="https://s3.amazonaws.com/livesitedata/siteimages/loading.png" alt="loading"></center>
<div class="page-section" id="propertyDetails" style="display: none">
		
			<div class="container">
			
			    <div class="row">
					
					<div class="col-lg-6">

						<table cellspacing="0" class="propertyInfoTable lowerDetails">
							<thead>
								<tr>
									<th colspan="2" class="hd">													
										<span class="propertyDetailsTable">Deed Details</span>		
										<div class="propertAddress"></div>
									</th>
								</tr>
							</thead>
							<tbody>												
								<tr>
									<td class="col">Parcel No</td>
									<td class="Parcel-No"></td>
								</tr>
								<tr>
									<td class="col">Situs Address</td>
									<td class="Situs-Address"></td>
								</tr>		
								<tr>
									<td class="col">County Name <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
									<td>Santa Clara</td>
								</tr>											
								<tr>
									<td class="col">Situs City</td>
									<td class="Situs-City"></td>
								</tr>
								<tr>
									<td class="col">State</td>
									<td class="State"></td>
								</tr>
								<tr>
									<td class="col">Zip Code <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
									<td class="Zip-Code"></td>
								</tr>
								<tr>
									<td class="col">Situs House No</td>
									<td class="Situs-House-No"></td>
								</tr>
								<tr>
									<td class="col">Situs Street Name</td>
									<td class="Situs-Street-Name"></td>
								</tr>
								<tr>
									<td class="col">Recording Date</td>
									<td class="Recording-Date"></td>
								</tr>
								<tr>
									<td class="col">Loan Amount <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
									<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
								</tr>
								<tr>
									<td class="col">Year Built</td>
									<td class="Year-Built"></td>
								</tr>
								<tr>
									<td class="col">No. of Units</td>
									<td class="No-of-Units"></td>
								</tr>
								<tr>
									<td class="col">Lot Size</td>
									<td class="Lot-Size"></td>
								</tr>									
							</tbody>        	
						</table>
						
					</div>
					
					<div class="col-lg-6 pullTop10">

						<table cellspacing="0" class="propertyInfoTable lowerDetails">
							<thead>
								<tr>
									<th colspan="2" class="hd">													
										<span class="propertyDetailsTable">Property Details</span>		
										<div class="propertAddress"></div>
									</th>
								</tr>
							</thead>							
							<tbody>													
								<tr>
									<td class="col">Bldg Sq. Ft.</td>
									<td class="Bldg-Sq"></td>
								</tr>
								<tr>
									<td class="col">Land Value</td>
									<td class="Land-Value"></td>
								</tr>
								<tr>
									<td class="col">Improvement Value</td>
									<td class="Improvement-Value"></td>
								</tr>
								<tr>
									<td class="col">Total Assessed Value</td>
									<td class="Total-Assessed-Value"></td>
								</tr>
								<tr>
									<td class="col">No Stories 
									<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
									<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
								</tr>
								<tr>
									<td class="col">PropertyUse</td>
									<td class="PropertyUse"></td>
								</tr>
								<tr>
									<td class="col">Structure <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
									<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
								</tr>
								<tr>
									<td class="col">Exterior <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
									<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
								</tr>
								<tr>
									<td class="col">Construction Quality <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
									<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
								</tr>
								<tr>
									<td class="col">Roof 
									<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
									<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
								</tr>
								<tr>
									<td class="col">Document Type 
									<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
									<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
								</tr>	
								<tr>
									<td class="col">Record Type 
									<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
									<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
								</tr>									
							</tbody>        	
						</table>
						
					</div>					
					
				</div>
			
			    <div class="row">
				
					<div class="col-lg-12">
						<h1>Transaction History</h1>
					</div>
				
					<div class="col-lg-12">

						<div class="accordion">
						
							<div id="transHistory0" class="transHistoryAccord">
								<h2 class="accordion-title history_title0">Refinance or Equity on 2013-10-08</h2>
								<div class="accordion-content hideNonMember">
									<table cellspacing="0" class="propertyInfoTable transactionDetails">
										<tbody>														
											<tr>
												<td class="col history_date0">Recording Date</td>
												<td>2013-10-08</td>
											</tr>
											<tr>
												<td class="col">Financing Type</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>	
											<tr>
												<td class="col">Loan Amount <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>	
											<tr>
												<td class="col">Lender</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>		
											<tr>
												<td class="col">Buyer <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div>
														</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>	
											<tr>
												<td class="col">Document Type <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>
											<tr>
												<td class="col">Record Type <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>	
											<tr>
												<td class="col">Lender First Name</td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>								
										</tbody>        	
									</table>
								</div>
							</div>

							<div id="transHistory1" class="transHistoryAccord">
								<h2 class="accordion-title history_title1">Resale on 2011-12-30</h2>
								<div class="accordion-content hideNonMember">
									<table cellspacing="0" class="propertyInfoTable transactionDetails">
										<tbody>														
											<tr>
												<td class="col history_date1">Recording Date</td>
												<td>2011-12-30</td>
											</tr>				
											<tr>
												<td class="col">Buyer <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>
											<tr>
												<td class="col">Seller <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>											
											<tr>
												<td class="col">Document Type <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>
											<tr>
												<td class="col">Record Type <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>									
										</tbody>        	
									</table>
								</div>
							</div>

							<div id="transHistory2" class="transHistoryAccord">
								<h2 class="accordion-title history_title2">Resale on 2011-12-22</h2>
								<div class="accordion-content hideNonMember">
									<table cellspacing="0" class="propertyInfoTable transactionDetails">
										<tbody>														
											<tr>
												<td class="col history_date2">Recording Date</td>
												<td>2011-12-22</td>
											</tr>				
											<tr>
												<td class="col">Buyer <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>
											<tr>
												<td class="col">Seller<div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>											
											<tr>
												<td class="col">Record Type <div class="tooltip">
														<img src="/wp-content/themes/pn/_assets/img/tooltip.png" alt="Tooltip" />
																<span class="tooltiptext">The last name of the primary owner of the property.</span>
														</div></td>
												<td><img src="/wp-content/themes/pn/_assets/img/greenCheck.png" class="greenCheck" alt="Green Checkmark" /></td>
											</tr>									
										</tbody>        	
									</table>
								</div>
							</div>							
							
						</div>											
						
					</div>
					
				</div>				
				
			</div>
			
		</div>	



<a href="#" data-type="map"><img src="http://maps.googleapis.com/maps/api/staticmap?center=37.37891200,-122.11623800&zoom=14&size=797x200&markers=color:red%7Clabel:P%7C220%20Main%20St,Los%20Altos,CA,94022&key=AIzaSyCR2M7GmUPKONSKO_GkvH3pJY4lCmcrDfU" class="map-click"></a>

		<div class="page-section" id="mapStreetView">
		
			<div class="container">
			
			    <div class="row">
					
					<div class="col-md-12">
						
						<div class="propertyInfoMap">
							<h1>Map</h1>
							<a href="#" data-type="map" class='the-map'><img src="http://maps.googleapis.com/maps/api/staticmap?center=37.37891200,-122.11623800&zoom=14&size=797x200&markers=color:red%7Clabel:P%7C220%20Main%20St,Los%20Altos,CA,94022&key=AIzaSyCR2M7GmUPKONSKO_GkvH3pJY4lCmcrDfU" class="map-click"></a>
						</div>
						
					</div>
									
				
				</div>


				<div class="row">

					
					<div class="col-md-12">

						<div class=" propertyStreetView">
							<h1>Street View</h1>
							<a href="https://www.google.com/maps/place/220+Main+St,+Los+Altos,+CA+94022/@37.3787239,-122.1160107,3a,60y,90t/data=!3m6!1e1!3m4!1sZEj2r54sG07NKEgmN49y6w!2e0!7i13312!8i6656!4m5!3m4!1s0x808fb0efb5ccfbbb:0xddfa460f8e3718b7!8m2!3d37.3789233!4d-122.1162133!6m1!1e1?hl=en" target="_blank"><img src="/wp-content/themes/pn/_assets/img/streetView.jpg" width="100%" height="100%" alt="Street View" /></a>
						</div>				
					
				   </div>					
				
				</div>
			</div>
		
		</div>	
<?php get_footer(); ?>

<script type="text/javascript">
	setTimeout(function () {
		 
		var path = window.location.pathname;
		var str = path.split("/");
		var link = "/property/"+str[2]+"/"+str[3]+".html";

		var pr = {"state_code":""};
		var webServiceUrl  = link;
		//change the title
		var address = str[3].replace(/-/g, ' ');//.split(" ");
 		address = address.slice(0, -1) + address.slice(-1).toUpperCase();//make the last char upper case
		jQuery( ".page-header h1").html(address).css( 'text-transform','capitalize');


	    var img = '<img src="http://maps.googleapis.com/maps/api/staticmap?center=37.37891200,-122.11623800&zoom=14&size=797x200&markers=color:red%7Clabel:P%7C220%20Main%20St,Los%20Altos,CA,94022&key=AIzaSyCR2M7GmUPKONSKO_GkvH3pJY4lCmcrDfU" class="map-click">';
		jQuery( ".the-map").html(address);
			

		var callback = function(data){
			var res = jQuery.parseJSON(data);
			renderResults(res);

		};
		present_ajax = ajaxRequest(webServiceUrl,pr,callback);


	}, 35);

	function renderResults(res){	
		 jQuery(".No-of-Units").html(res['No. of Units.'].value);
		 delete res["No. of Units."];

		 jQuery(".Bldg-Sq").html(res['Bldg Sq. Ft.'].value);
		 delete res["Bldg Sq. Ft."];
		jQuery.each( res, function( key, value ) {
		  	var k = key.replace(/ /g, '-');
		 	jQuery("."+k).html(value.value);
		});


		//history_title1
		jQuery.each( res['history_table'], function( key, value ) {
		  	if(key == 2){return;}//max of 3 

		  	if(value.title.length > 10){
		  		jQuery('.history_title'+key).html( value.title );
		  		jQuery('.history_date'+key).html( value.date.value );
		  	}
		  	
		  	jQuery('.loading').hide();
		  	jQuery('#propertyDetails').show();
		});
		
	}

	//add HistoryAccord code
	jQuery(".transHistoryAccord").click( function(){	
		 if(jQuery("."+this.className).children('.hideNonMember').length == 0) {
    			jQuery('.accordion-content').removeClass( "hideNonMember" );
     		}
	});

</script>

