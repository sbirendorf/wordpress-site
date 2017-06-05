<?php $temp = getRememberMe();
extract($temp);

?>
<div class="clearfix"></div>
<div class="clearfix"><br /></div>
<footer id="footer" role="contentinfo" class="row"><a href="#">
		</a><div id="copyright" class="col-md-12"><a href="#">
			</a><div class="row inner-content copyright-text right-copy">
				<?php wp_nav_menu( array( 'theme_location' => 'Interior Footer' ) ); ?>
				Toll Free 888 956 9998 | © LTRAC LLC 2006-<?php echo date('Y')?>
			</div>
			<div class="row inner-content copyright-text">
				Copyright <?php echo date('Y')?> © <a href="http://www.prospectnow.com/">ProspectNow</a> - All Rights Reserved
			</div>
		</div>
	</footer>
<!-- Modal5 -->
<div id="ciRxTj" style="z-index:100; position:absolute;"></div>
            <div id="scRxTj" style="display:none"></div>
            <div id="sdRxTj" style="display:none"></div>
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
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Contact Us</h4>
      </div>
      <div class="modal-body">
	<div id="provide_support"></div> 
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
<form action="#" method="POST" name="login_form" id="login_form">
		<span style="display:none;" id="login_error"></span>
		<input  onclick='if (this.value == "Email Address") {this.value="";this.style.color="black";this.style.fontWeight="bold";}' onblur='if (this.value == "") {this.value="Email Address";this.style.color="#ADADAD";this.style.fontWeight="normal";'}' type="text" name="popupemail" id="popupemail" class="wholeInput" onkeydown="if (event.keyCode == 13){submitLoginForm();}" value="<?php if($uname == ''){echo 'Email Address';}else{echo $uname;} ?>"><br>
		<input value="<?php if($upwd == ''){echo 'Password';}else{echo $upwd;} ?>" onclick='if (this.value == "Password") {this.value="";this.style.color="black";this.style.fontWeight="bold";}' onblur='if (this.value == "") {this.value="Password";this.style.color="#ADADAD";this.style.fontWeight="normal";'} type="password" name="popuppassword" id="popuppassword" class="wholeInput" onkeydown="if (event.keyCode == 13){submitLoginForm();}"><br>
		<p style='float:left;'><input type="checkbox" id="popupremember" <?php if($remember){echo ' checked';} ?>> Remember me</p><a href='/oldindex.php?page=forgotPass' style='float: right;'>Forgot Password?</a><br><br>
		<a class="btn og" style="width: 100%" id="popuplogin" href="#" onclick="submitLoginForm()">Login</a><br></form>
		<hr>
		Don't have an account?    <a href='/search-commercial-real-estate/'>Sign Up</a><br>
		</div>
		
	  </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal3 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">View Property Database Demo</h4>
      </div>
      <div class="modal-body">
      	<div class="dmoBorder" id="youtube_video"><object style="width:100%;" height="385"><param name="movie" value="https://www.youtube.com/v/oSbk_5VG73A?hl=en&amp;fs=1"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed src="https://www.youtube.com/v/oSbk_5VG73A?hl=en&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" style="width: 100%;"  height="385"></object></div>
      
	  <div class="row">
<div class="col-xs-12 col-md-4 modalRight">
			 				<p><a href="#" onclick="loadYoutube('oSbk_5VG73A');return false;">Introduction</a><br>
								An overview demo of the ProspectNow</p>
							<p><a href="#" onclick="loadYoutube('aAh9Vn9IJSY');return false;">Building a Call List </a><br>
								Build a call list of decision makers </p>
							<p><a href="#" onclick="loadYoutube('SaXpN05jcOo');return false;">Find Emails </a><br>
								Get emails for key decision makers </p>
							<p><a href="#" onclick="loadYoutube('kYiMUYP7CiU');return false;">Multiple Address Search</a><br>
								Search hundreds of addresses at once</p>

		</div>

		<div class="col-xs-12 col-md-4 modalRight">
<p><a href="#" onclick="loadYoutube('OV7nndbcOlk');return false;">Integrated Dialer</a><br>
								Make twice the calls in half the time.</p>	
						   	<p><a href="#" onclick="loadYoutube('hflCiUutzg0');return false;">Sending Letters</a><br>
								How to send out letters and mail.</p>
							<p><a href="#" onclick="loadYoutube('yZuQRt0_UBE');return false;"> Commercial Tenant Search</a><br>
Search over 30 million tenants</p>

		<p><a href="#" onclick="loadYoutube('vOnVXSj1el4');return false;">Commercial Insurance Leads</a><br>
				Use ProspectNow to locate insurance policies coming upon renewal and contact the decision maker directly.</p>	 							
											
							
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
       	<p class="dmoSignup"><a class="btn og" href="/search-commercial-real-estate/">Sign Up Now</a></p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--<script src="https://code.jquery.com/jquery-latest.js"></script>-->
<script src="/wp-content/themes/prospect-now/js/bootstrap.min.js"></script>
<script src="/wp-content/themes/prospect-now/js/script.js?a=2"></script>


<!-- Segment Pixel - Prospect Now_Remarketing - DO NOT MODIFY -->
<?php 

if(isset($_SESSION['promo_code'])){
	if($_SESSION['promo_code'] == 'GOOG' || $_SESSION['promo_code'] == 'goog'){
		echo '<script src="http://ad01.advertise.com/seg?add=179819&t=1" type="text/javascript"></script>';
	}
}


?>
<!-- End of Segment Pixel -->
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