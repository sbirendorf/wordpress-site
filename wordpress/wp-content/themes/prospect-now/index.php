<?php //ini_set('memory_limit', '700M');
get_header(); 
$temp = getRememberMe();
extract($temp);

?>

<div id="bigBannerSignUp1">
<section id="content" role="main" class="row">
<div id="mainCarousel"  class="carousel slide col-md-12" data-ride="carousel">
<ol class="carousel-indicators">
<?php
	$carousel_images = new WP_Query(array('post_type' => 'carousel_setup'));
	$i = 0;
	$images = array();
	// count the carousel images
	if ($carousel_images->have_posts()) {
		while ($carousel_images->have_posts()) {
			$carousel_images->the_post();
			if ($i==0)
				echo '<li data-target="#mainCarousel" data-slide-to="0" class="active"></li>';
			else
				echo '<li data-target="#mainCarousel" data-slide-to="' . $i . '"></li>';
				$i++;
		}
	}
?>				
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner">
<?php
$carousel_images = new WP_Query(array('post_type' => 'carousel_setup', 'orderby' => 'meta_value_num', 'meta_key' => 'carousel_order', 'order' => 'ASC'));
$i = 0;		
if ($carousel_images->have_posts()) {
	while ($carousel_images->have_posts()) {
		$carousel_images->the_post();
		$custom_fields = get_post_custom();
		if ($i==0) {?>		
			<div class="item active" style="background:url('<?php print_custom_field('carousel_image:to_image_src');?>') no-repeat scroll 0 0 / cover ">
		<?php 
		 }
		else { ?>							
			<div class="item" style="background:url('<?php print_custom_field('carousel_image:to_image_src');?>') no-repeat scroll 0 0 / cover ">
		<?php 
		}
		?>	 
<div class="container margin-center"><!---->		
   <div class="carousel-caption1" id="<?php print_custom_field('carousel_link'); ?>">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 caption-text">						
        <h3><?php print_custom_field('carousel_header'); ?></h3>
		<p><?php print_custom_field('carousel_text'); ?></p>
		<p class="try_it">try it for FREE <br /> <a href="/search-commercial-real-estate/">GET STARTED</a></p>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  text-center" style="margin-top:9px;">
			<img src="<?php print_custom_field('picture'); ?>"   />
		</div>
 	</div>						                                                
</div>			
</div>	
<?php				
$i++;
}
}
?>				
</div>

<?php /*if (!empty($custom_fields['carousel_link'][0])) { 
<a href="<?php print_custom_field('carousel_link'); ?>" target="<?php print_custom_field('carousel_link_target'); ?>"></a>
} */ ?>

<!-- Controls -->
<a class="left carousel-control" href="#mainCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#mainCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
		
</section>
</div>
<section class="row secondSection">
	<div class="col-md-12">
		<div id="threeColumnAbout" class="row inner-content ">
			<div class="col-md-4 ">
				<img alt='' src="<?php bloginfo('template_directory');?>/images/mapMagnify.png" class="headerIcon">
				<h1>What is ProspectNow?</h1>
				<p>100 million properties filtered by predictive analytics to help you find property owners most likely to list or refinance. Detailed property info includes phone numbers, building info and 30 million commercial tenants.</p>
			</div>
			<div class="col-md-4 middle">
				<img alt='' src="<?php bloginfo('template_directory');?>/images/briefcase.png" class="headerIcon">
				<h1>Who is it for?</h1>
				<p>Anyone marketing to property owners or businesses. Including real estate brokers, investors, banks, lenders, mortgage brokers, insurance agencies, ISPs, roofers, or solar companies among others.</p>
			</div>
			<div class="col-md-4">
				<img alt='' src="<?php bloginfo('template_directory');?>/images/clipboard.png" class="headerIcon">
				<h1>How is it different?</h1>
				<p>Unlike other databases, ProspectNow guides you to the properties most likely to be listed or refinanced.  Get the key decision makers and contact info for the property, as well as a CRM or export capability.</p>
			</div>
		</div>
	</div>
</section>
<div id='bigTestimonial'>
<section class="row testimonialSection">
	<div class="col-md-12">
		<div class="row inner-content">
			<div class="col-md-4">
				<span class="glyphicon glyphicon-chevron-right testimonialAdvance" style="cursor:pointer;float:right;margin-top: 1.5em;margin-right: 3em;"></span><span class="glyphicon glyphicon-chevron-left testimonialRetreat" style="cursor:pointer;float:right;margin-top: 1.5em;margin-right: 2em;"></span><h2>Testimonials</h2>
				<ul class="testimonialList">
				<?php
					$testimonials = new WP_Query(array('post_type' => 'testimonial'));
					$i=0;
					if ($testimonials->have_posts()) {
						while ($testimonials->have_posts()) {
							$testimonials->the_post();
								if (!$i) {	
									$i=1;
									echo '<li class="activeTestimonial">';
								} else {
									echo '<li>';
								}
								
				?>	
								<div class='testimonialText'>
									<div id='testimonial<?php echo $i; ?>' style="height: 6em; overflow: hidden;">
										<?php the_content();?>
									</div>
									<a href="#" data-toggle="modal" data-target="#myModal4" onclick="jQuery('#lengthyTestimonialText').html(jQuery('#testimonial<?php echo $i; ?>').html()).append(jQuery('#client<?php echo $i; ?>').html())" >read more</a>
								</div>
								<div id="client<?php echo $i; ?>">
									<dl class='testimonialClient'>
										<dt><?php the_title(); ?></dt>
										<dd><?php print_custom_field('location'); ?></dd>
									</dl>
									<img alt='' class="testimonialPicture" src="<?php print_custom_field('picture:to_image_src'); ?>">
								</div>
							</li>
				<?php 
							$i++;
						}
					}
				?>
				</ul>				
			</div>
			<div class="col-md-4">
				<h1>View the Property Database Demo</h1>
				<a href='#' data-toggle="modal" data-target="#myModal" class='testimonialDemo'>&nbsp;</a>
			</div>
			<div class="col-md-4 testimonialClients">
				<h2>Some of Our Clients</h2>
				<ul>
					<li><img alt='' src="/wp-content/uploads/2016/04/kwcommercial_logo.png" class="clientImage"></li>
					<li><img alt='' src="/wp-content/uploads/2016/04/svnlogo.png" class="clientImage"></li>

					<!-- <li><img alt='' src="<?php bloginfo('template_directory');?>/images/client-ccim.png" class="clientImage"></li>
					
<li><img alt='' src="<?php bloginfo('template_directory');?>/images/client-wellsfargo.png" class="clientImage"></li>
<li><img alt='' src="<?php bloginfo('template_directory');?>/images/client-sperryvanness.png" class="clientImage"></li> -->
					<li><img alt='' src="/wp-content/uploads/2016/04/intero-logo.png" class="clientImage"></li>
					<li><img alt='' src="/wp-content/uploads/2016/04/bank-of-the-west.png" class="clientImage"></li> 
					<li><img alt='' src="/wp-content/uploads/2016/04/CBC_Logo.jpg" class="clientImage"></li>
					
					
				</ul>
			</div>
		</div>
	</div>
</section>
</div>
<div id='smallTestimonial'>
<section class="row testimonialSection">
	<div class="col-md-12">
		<div class="row inner-content">
			<div class="col-md-4">
				<h2>Testimonials</h2>
				<span class="glyphicon glyphicon-chevron-left testimonialRetreat" style="cursor:pointer;"></span><span class="glyphicon glyphicon-chevron-right testimonialAdvance" style="cursor:pointer"></span>
				<div style="text-align: center;">
				<ul class="testimonialList">
	<?php
					$testimonials = new WP_Query(array('post_type' => 'testimonial'));
					$i=0;
					if ($testimonials->have_posts()) {
						while ($testimonials->have_posts()) {
							$testimonials->the_post();
								if (!$i) {	
									$i=1;
									echo '<li class="activeTestimonial">';
								} else {
									echo '<li>';
								}
								
				?>	
								<div class='testimonialText'>
									<div id='testimonials<?php echo $i; ?>' style="height: 6em; overflow: hidden;">
										<?php the_content();?>
									</div>
									<a href="#" data-toggle="modal" data-target="#myModal4" onclick="jQuery('#lengthyTestimonialText').html(jQuery('#testimonials<?php echo $i; ?>').html()).append(jQuery('#clients<?php echo $i; ?>').html())" >read more</a>
								</div>
								<div id="clients<?php echo $i; ?>">
									<dl class='testimonialClient'>
										<dt><?php the_title(); ?></dt>
										<dd><?php print_custom_field('location'); ?></dd>
									</dl>
									<img alt='' class="testimonialPicture" src="<?php print_custom_field('picture:to_image_src'); ?>">
								</div>
							</li>
				<?php 
							$i++;
						}
					}
				?>

				</ul>	
				</div>			
			</div>
			<div class="col-md-4">
				<h1>View the Property Database Demo</h1>
				<a href='#' data-toggle="modal" data-target="#myModal"><img alt='' src="<?php bloginfo('template_directory');?>/images/demonstrationRollover2.png" onhover="this.src='<?php bloginfo('template_directory');?>/images/demonstrationRollover1.png'" onblur="this.src='<?php bloginfo('template_directory');?>/images/demonstrationRollover2.png'" style="width: 100%; max-width: 430px;" class="headerIcon"></a>
			</div>
			<div class="col-md-4 testimonialClients">
				<h2>Our Clients</h2>
				<ul>
					<li><img alt='' src="/wp-content/uploads/2016/04/kwcommercial_logo.png" class="clientImage"></li>
					<li><img alt='' src="/wp-content/uploads/2016/04/svnlogo.png" class="clientImage"></li>

					<!-- <li><img alt='' src="<?php bloginfo('template_directory');?>/images/client-ccim.png" class="clientImage"></li>
					
<li><img alt='' src="<?php bloginfo('template_directory');?>/images/client-wellsfargo.png" class="clientImage"></li>
<li><img alt='' src="<?php bloginfo('template_directory');?>/images/client-sperryvanness.png" class="clientImage"></li> -->
					<li><img alt='' src="/wp-content/uploads/2016/04/intero-logo.png" class="clientImage"></li>
					<li><img alt='' src="/wp-content/uploads/2016/04/bank-of-the-west.png" class="clientImage"></li> 
					<li><img alt='' src="/wp-content/uploads/2016/04/CBC_Logo.jpg" class="clientImage"></li>
				</ul>
			</div>
		</div>
	</div>
</section>
</div>
<section class="row socialSection">
	<div class="col-md-12" style="padding-bottom:20px;">
		<div class="row inner-content">
			<div class="col-md-4">
				<h2>Latest Tweets</h2>
                <?php echo do_shortcode('[get_tweet_timeline username="ProspectNow" number="2" showlinks="true" newwindow="true" nofollow="true" avatar="false"]'); ?>

			</div>
			<div class="col-md-4">
				<h2>From the Blog</h2>
				<ul class="blogEntries">
<?php
	$recent_posts = get_latest_blog_posts(3);
	foreach ($recent_posts as $recent) {
		$month	= date('M', strtotime($recent['date']));
		$day	= date('d', strtotime($recent['date']));
		$link	= $recent['link'];
		$title 	= $recent['title'];
		echo "<li><div class='date'><div class='month'>$month</div><div class='day'>$day</div></div><a href='" . $link . "'>$title</a></li>";
	}
?>
					<!--<li><div class='date'><div class='month'>DEC</div><div class='day'>17</div></div><a href='#'>Lorem ipsum dolor sit amet sectetur adipiscing elitasellus pellentesque... dolor ante, quis rhoncus risus pellentesque</a></li>
					<li><div class='date'><div class='month'>NOV</div><div class='day'>13</div></div><a href='#'>Integer porttitor metus et dignissim tempusras auctor mollis elit vitae...</a></li>
					<li><div class='date'><div class='month'>SEP</div><div class='day'>10</div></div><a href='#'>Cras auctor mollis elit vitae posuere viverrsum sed vehicula...</a></li>-->
				</ul>
			</div>
			<div class="col-md-4 connectWithUs">
				<div id="connectWithUs">
					<div class="connectTitle">Connect With Us</div>
					<ul>
						<li><img alt='' src="<?php bloginfo('template_directory');?>/images/connectWithUsPhoneIcon.png"><b>Phone Number:</b> 888-956-9998</li>
						<li><img alt='' src="<?php bloginfo('template_directory');?>/images/connectWithUsEmailIcon.png" ><a data-toggle="modal" data-target="#myModal2" href='#' onclick="provideSupportLaunch();">Email</a></li>
						<li><img alt='' src="<?php bloginfo('template_directory');?>/images/connectWithUsChatIcon.png"><a data-toggle="modal" data-target="#myModal2" href='#' onclick="provideSupportLaunch();">Live Chat</a></li>
						<li><img alt='' src="<?php bloginfo('template_directory');?>/images/connectWithUsFacebookIcon.png">Follow us on <a target="_blank" href="http://www.facebook.com/ProspectNow" style="color:black"><b>Facebook</b></a></li>
						<li><img alt='' src="<?php bloginfo('template_directory');?>/images/connectWithUsTwitterIcon.png">Follow us on <a target="_blank" href="http://twitter.com/ProspectNow" style="color:black"><b>Twitter</b></a></li>
						<li><img  alt='' src="<?php bloginfo('template_directory');?>/images/connectWithUsBlogIcon.png">Follow us on the <a target="_blank" href="/blog" style="color:black"><b>Blog</b></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">View Property Database Demo</h4>
      </div>
      <div class="modal-body">
<div class="dmoBorder" id="youtube_video"><object style="width:100%;" height="385"><param name="movie" value="https://www.youtube.com/v/oSbk_5VG73A?hl=en&amp;fs=1"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed src="https://www.youtube.com/v/oSbk_5VG73A?hl=en&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" style="width: 100%;"  width="100%" height="385"></object></div>
	  <div class="row">
        <!-- <div class=''>   4R-wFygPaiw -->
		<div class="col-xs-12 col-md-4 modalRight">
			 				<p><a href="#" onclick="loadYoutube('oSbk_5VG73A');return false;">Introduction</a><br>
								An overview demo of the ProspectNow</p>
							<p><a href="#" onclick="loadYoutube('aAh9Vn9IJSY');return false;">Building a Call List </a><br>
								Build a call list of decision makers </p>
							<p><a href="#" onclick="loadYoutube('_an3S2M25jQ');return false;">Find Emails </a><br>
								Get emails for key decision makers </p>
		</div>

		<div class="col-xs-12 col-md-4 modalRight">
						   	<p><a href="#" onclick="loadYoutube('hflCiUutzg0');return false;">Sending Letters</a><br>
								How to send out letters and mail.</p>
							<p><a href="#" onclick="loadYoutube('yZuQRt0_UBE');return false;"> Commercial Tenant Search</a><br>
Search over 30 million tenants</p>
							<p><a href="#" onclick="loadYoutube('kYiMUYP7CiU');return false;">Multiple Address Search</a><br>
								Search hundreds of addresses at once</p>								
							
		</div>
	<div class="col-xs-12 col-md-4 modalRight">

						   	<p><a href="#" onclick="loadYoutube('PP62n8DCmaI');return false;">For Residential Agents</a><br>
								Find residential buyers and sellers</p>
							<p><a href="#" onclick="loadYoutube('qgXcirU-Gcg');return false;"> Nationwide Searching</a><br>
Search across 100 million properties </p>
							<p><a href="#" onclick="loadYoutube('sMbvYQ3DCcc');return false;">Mobile Demo</a><br>
				Use ProspectNow on your mobile device</p>								
							
</div>

	 </div>
      </div>
      <div class="modal-footer">
 	<p class="dmoSignup"><a class="btn og" href="/search-commercial-real-estate">Sign Up Now</a></p>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>         
	</div>
		</div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
<script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script> 
<script>
	<?php
		$obj = get_post_type_object( 'carousel_setup' );
		if ($obj->description > 0) {
			$interval = $obj->description * 1000;
			echo "jQuery('.carousel').carousel({interval: " . $interval . "});";
		} else {
			echo "jQuery('.carousel').carousel({interval: 10000});";
		}
	?>
	
</script>
</div>
	<footer id="footer" role="contentinfo" class="row">
		<div id="copyright" class="col-md-12">
			<div class="row inner-content fivecolumns">
				<div class="col-md-1">
					<h2>About prospectnow</h2>
					<ul>
						<li><a href='/about-our-commercial-real-estate-database/'>About Us</a></li>
						<li><a href='/building-owner-data-careers/'>Careers</a></li>
						<li><a href='/property-owner-records-partners/'>Partners</a></li>
						<li><a href='/terms-use/'>Terms of Service & Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h2>Popular search for commercial real estate</h2>
					<ul>
						<li><a href='/commercial-real-estate-owner-california'>Commercial Real Estate Search</a></li>
						<li><a href='/retail-buildings-california'>Commercial Building Owners</a></li>
						<li><a href='/industrial-properties-california'>Industrial Real Estate</a></li>
						<li><a href='/multifamily-properties-california'>Apartment Building Lists</a></li>
						<li><a href='/multifamily-properties-nevada'>Multifamily Property Owners</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h2>Popular states for commercial real estate</h2>
					<ul>
						<li><a href='/commercial-real-estate-california'>California Commercial Real Estate</a></li>
						<li><a href='/commercial-real-estate-florida'>Florida Commercial Real Estate</a></li>
						<li><a href='/commercial-real-estate-texas'>Texas Commercial Real Estate</a></li>
						<li><a href='/commercial-real-estate-new-york'>New York Commercial Real Estate</a></li>
						<li><a href='/commercial-real-estate-arizona'>Arizona Commercial Real Estate</a></li>
					</ul>
				</div>
				<div class="col-md-2 third">
					<h2>Popular states for commercial foreclosures</h2>
					<ul>
						<li><a href='/commercial-foreclosures-california'>Commercial Foreclosures in California</a></li>
						<li><a href='/commercial-foreclosures-washington'>Commercial Foreclosures in Washington</a></li>
						<li><a href='/commercial-foreclosures-florida'>Commercial Foreclosures in Arizona</a></li>
						<li><a href='/commercial-foreclosures-nevada'>Commercial Foreclosures in Nevada</a></li>
					</ul>
				</div>
				<div class="col-md-2 last">
					<h2>Apartment building lists by state</h2>
					<ul>
						<li><a href='/multifamily-properties-california'>California Apartment Owners</a></li>
						<li><a href='/multifamily-properties-florida'>Florida Apartment Owners</a></li>
						<li><a href='/multifamily-properties-texas'>Texas Apartment Owners</a></li>
						<li><a href='/multifamily-properties-new-york'>New York Apartment Owners</a></li>
						<li><a href='/multifamily-properties-arizona'>Arizona Apartment Owners</a></li>
					</ul>
				</div>
			</div>
			<div class="row inner-content copyright-text text-center">
				Copyright <?php echo date('Y')?> &copy; <a href='#'>ProspectNow</a> - All Rights Reserved
			</div>
		</div>
	</footer>
</div>
<!-- Modal2 -->
<div id="ciRxTj" style="z-index:100; position:absolute;"></div>
            <div id="scRxTj" style="display:none"></div>
            <div id="sdRxTj" style="display:none"></div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Contact Us</h4>
      </div>
      <div class="modal-body">
<div id="provide_support" style="display:inline;"></div> 
        <a class="btn og" id="ticket1_popup" href="#">Submit a Customer Support Ticket</a>    <a class="btn og" id="sales1_popup" href="#">Contact Sales</a>
        <span id="error_msg1"></span>		 
		<div class="contactBox" id="customerSupport_popup">
		<form name="customer_support_popup_form" id="customer_support_popup_form">
			<input type="text" value="First Name" onfocus="placeHolderFun('First Name','customerSupportTicket_firstName_popup',true);" onblur="placeHolderFun('First Name','customerSupportTicket_firstName_popup',false);" class="halfInput" name="sendmail[first_name]" id="customerSupportTicket_firstName_popup">
			<input type="text" value="Last Name" onfocus="placeHolderFun('Last Name','customerSupportTicket_lastName_popup', true);" onblur="placeHolderFun('Last Name','customerSupportTicket_lastName_popup', false);" class="halfInput" name="sendmail[last_name]" id="customerSupportTicket_lastName_popup"><br>
			<input value="Email Address" onfocus="placeHolderFun('Email Address','customerSupportTicket_email_popup', true);" onblur="placeHolderFun('Email Address','customerSupportTicket_email_popup',false);"  class="wholeInput" type="text" name="sendmail[from]" id="customerSupportTicket_email_popup"><br>
			<input type="text"  value="Phone Number" onfocus="placeHolderFun('Phone Number','customerSupportTicket_phone_popup', true);" onblur="placeHolderFun('Phone Number','customerSupportTicket_phone_popup', false);" class="wholeInput" name="sendmail[phone]" id="customerSupportTicket_phone_popup"><br>
			<input value="Subject" onfocus="placeHolderFun('Subject','customerSupportTicket_subject_popup', true);" onblur="placeHolderFun('Subject','customerSupportTicket_subject_popup', false);"  class="wholeInput"  type="text" name="sendmail[subject]" id="customerSupportTicket_subject_popup"><br>
			<input type="hidden" id="type_selected_popup" class="inpTxt" name="sendmail[type]" value="ticket">
			<textarea value="Message" onfocus="if (this.innerHTML == 'Message') { this.innerHTML = ''; this.style.color='black';this.style.fontWeight='bold';}" onblur="if (this.innerHTML == '') { this.innerHTML = 'Message'; }"  class="wholeInput" name="sendmail[message]" id="customerSupportTicket_message_popup">Message</textarea>
			<br><br>
			<input type="button" class="contact_form_submit submit_button1 btn og" name="send" value="Submit Query" onclick="submit_contact_ajax1(); return false;">
			</form>
		</div>		
		
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal2 -->
<!-- Modal3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel3">Login</h4>
      </div>
      <div class="modal-body">
		<div style="width:100%;max-width:284px; margin-left:auto; margin-right: auto;">
		<span style="display:none;" id="login_error"></span>


		<form id="login_form" name="login_form" method="POST" action="#">
		<input value="<?php if($uname == ''){echo '';}else{echo $uname;} ?>"   type="text" name="popupemail" id="popupemail" class="wholeInput" onkeydown="if (event.keyCode == 13){submitLoginForm();}" style="color:#000;">

<br>
		<input value="<?php if($upwd == ''){echo '';}else{echo $upwd;} ?>" type="password" name="popuppassword" id="popuppassword" class="wholeInput" onkeydown="if (event.keyCode == 13){submitLoginForm();}">

<br>
		<p style='float:left;'><input type="checkbox" id="popupremember" <?php if($remember){echo ' checked';} ?> name="rem" value="yes"> Remember me</p><a href='/oldindex.php?page=forgotPass' style='float: right;'>Forgot Password?</a><br><br>
		<a class="btn og" style="width: 100%" id="popuplogin" onclick="submitLoginForm()" href="#">Login</a><br></form>
		<hr>
		Don't have an account?    <a href='/search-commercial-real-estate'>Sign Up</a><br>
		</div>
		
	  </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal3 -->
<!-- Modal4 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel3">Testimonial</h4>
      </div>
      <div class="modal-body">
		<div id='lengthyTestimonialText'>
		</div>
		
	  </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal4 -->
<!-- Modal5 -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel3">Testimonial</h4>
      </div>
      <div class="modal-body">
		<div id="videoTestimonial">
			<object width="80%" height="385"><param name="movie" value="https://www.youtube.com/v/N8_DBVaHXIk?hl=en&amp;fs=1"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed src="https://www.youtube.com/v/N8_DBVaHXIk?hl=en&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="80%"></object>
		</div>
	  </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal5 -->
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script src="/wp-content/themes/prospect-now/js/bootstrap.min.js"></script>-->
 
<script src="/wp-content/themes/prospect-now/js/home.js?a=2"></script>
 

<?php wp_footer(); ?>
<script src="/include/js/afterloadscripts.js?a=<?php echo time() ?>" type="text/javascript"></script> 
<script type="text/javascript">
var browser_details_object =false;
$(document).ready(function(){
	var after_load = new AfterLoad();
	after_load.load();
	after_load = false;
});
</script>


</body>
</html>