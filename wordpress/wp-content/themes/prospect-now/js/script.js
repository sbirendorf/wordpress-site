function loadYoutube(you_id){
	var htmlval = '';
	htmlval += '<object style="width:100%" height="385">';
	htmlval += '<param name="movie" value="https://www.youtube.com/v/'+you_id+'?hl=en&fs=1"></param>'; 
	htmlval += '<param name="allowFullScreen" value="true"></param>';
	htmlval += '<param name="allowscriptaccess" value="always"></param>';
	htmlval += '<embed src="https://www.youtube.com/v/'+you_id+'?hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="385"></embed></object>';
	jQuery('#youtube_video').html(htmlval);  
}

function placeHolderFun(val,div,focus){
	
	if(focus){
		if(jQuery('#'+div).val() == val){
			jQuery('#'+div).val('');
		}
		jQuery('#'+div).css("color","#000");
	}		
	else{
		if(jQuery('#'+div).val() == ''){
			jQuery('#'+div).val(val);
			jQuery('#'+div).css("color","#ccc");
		}
	}
	
}

function submit_contact_ajax1() {
	jQuery('#error_msg1').html('')
	placeHolderFun('First Name','customerSupportTicket_firstName_popup',true);
	placeHolderFun('Last Name','customerSupportTicket_lastName_popup', true);
	placeHolderFun('Email Address','customerSupportTicket_email_popup', true);
	placeHolderFun('Phone Number','customerSupportTicket_phone_popup', true);
	placeHolderFun('Subject','customerSupportTicket_subject_popup', true);	
	if (jQuery('#customerSupportTicket_message_popup').html == 'Message') {
	 	jQuery('#customerSupportTicket_message_popup').html() = ''; 
	}
	var pr = $("#customer_support_popup_form").serialize();
	var ajaxUrl = '/webservice/contactus.php';
	var callback = function(data){		
		if (data.status === true) {			
			jQuery('.contactBox').hide();
			jQuery('#error_msg1').html('<br /><br /><div class="tempThanks"><b>Thank you for your submission</b></div>');
			setTimeout(function() {
				jQuery('#error_msg1').html('');
			}, 2000);
		} else {
			var html = '<ul style="color:red">';
			jQuery.each(data.error, function(index, value) {
				html +=  '<li>'+value + '</li>';
			});
			html += '</ul>';
			jQuery('#error_msg1').html(html);
		}
	}
	var ajax = $.ajax({
			url: ajaxUrl,
	        type: "post",
	        data: pr
			})
		.done(callback);
}

function submit_contact_ajax2() {
	jQuery('#error_msg1').html('')
	placeHolderFun('First Name','customerSupportTicket_firstName',true);
	placeHolderFun('Last Name','customerSupportTicket_lastName', true);
	placeHolderFun('Email Address','customerSupportTicket_email', true);
	placeHolderFun('Phone Number','customerSupportTicket_phone', true);
	placeHolderFun('Subject','customerSupportTicket_subject', true);	
	if (jQuery('#customerSupportTicket_message').html == 'Message') {
	 	jQuery('#customerSupportTicket_message').html() = ''; 
	}
	var pr = $("#customerSupportTicket_form").serialize();
	var ajaxUrl = '/webservice/contactus.php';
	var callback = function(data){		
		if (data.status === true) {			
			jQuery('.contactBox').hide();
			jQuery('#error_msg2').html('<br /><br /><div class="tempThanks"><b>Thank you for your submission</b></div>');
			setTimeout(function() {
				jQuery('#error_msg2').html('');
			}, 2000);
		} else {
			var html = '<ul style="color:red">';
			jQuery.each(data.error, function(index, value) {
				html +=  '<li>'+value + '</li>';
			});
			html += '</ul>';
			jQuery('#error_msg2').html(html);
		}
	}
	var ajax = $.ajax({
			url: ajaxUrl,
	        type: "post",
	        data: pr
			})
		.done(callback);
}


var salesContact = 0;
jQuery(document).ready(function() {
	jQuery('.contactBox').hide();
	jQuery('#ticket1').click(function() {
		jQuery('#ticket1').css('color', '#000000');
		jQuery('#sales1').css('color', '#428bca');
		jQuery('.contactBox').hide();
		jQuery('#error_msg2').html('');
		jQuery('#type_selected_popup1').val('ticket');		
		jQuery('#customerSupportTicket').slideDown();
		return false;
	});
	jQuery('#sales1').click(function() {
		salesContact = 1;
		jQuery('#sales1').css('color', '#000000');
		jQuery('#ticket1').css('color', '#428bca');
		jQuery('.contactBox').hide();		
		jQuery('#error_msg2').html('');
		jQuery('#type_selected_popup1').val('sales');		
		jQuery('#customerSupportTicket').slideDown();
		return false;
	});
	jQuery('#ticket1_popup').click(function() {
		salesContact = 0;
		jQuery('#ticket1_popup').css('color', '#000000');
		jQuery('#sales1_popup').css('color', '#ffffff');
		jQuery('.contactBox').hide();
		jQuery('#error_msg1').html('');
		jQuery('#type_selected_popup').val('ticket');		
		jQuery('#customerSupport_popup').slideDown();
		return false;
	});
	jQuery('#sales1_popup').click(function() {
		salesContact = 1;
		jQuery('#sales1_popup').css('color', '#000000');
		jQuery('#ticket1_popup').css('color', '#ffffff');
		jQuery('.contactBox').hide();
		jQuery('#error_msg1').html('');	
		jQuery('#type_selected_popup').val('sales');
		jQuery('#customerSupport_popup').slideDown();
		return false;
	});
	
	
	/*if (jQuery('#content').height() < (jQuery(window).height()-jQuery('#footer').height()-jQuery('#header').height()) && jQuery(window).width() > 750) {
   jQuery('#content').height(jQuery(window).height()-jQuery('#footer').height()-jQuery('#header').height());
	}*/
});
jQuery(document).click(function(event) {
	 if(jQuery(event.target).parents().index(jQuery('.contactBox')) == -1) {
	        if(jQuery('.contactBox').is(":visible")) {
	            jQuery('.contactBox').hide()
	            jQuery('#error_msg2').html('');
	        }
    } 
});
/*function submit_contact_ajax(contact_type) {
	switch(contact_type) {
	case 'sales1':
		jQuery.post('/webservice/contactus.php', 
			{1: '1', send: 'Submit Query', sendmail: {name: jQuery('#contactSales_firstName').val() + ' ' + jQuery('#contactSales_lastName').val(), from: jQuery('#contactSales_email').val(), message: jQuery('#contactSales_message').val(), phone: jQuery('#contactSales_phone').val(), subject: jQuery('#contactSales_subject').val(), type: contact_type}})
		.done(function (data) {
			if (data.error.length === 0) {
				jQuery('#contactSales').slideUp();
				jQuery('.entry-content .peach_background').append('<div class="tempThanks"><b>Thank you for your submission</b></div>');
				setTimeout(function() {
					jQuery('.tempThanks').hide();
				}, 2000);
			} else {
				jQuery.each(data.error, function(index, value) {
					jQuery('#contactSales').append('<div><b>' + index + '</b> - ' + value + '</div>');
				});
			}
		});
		break;
	case 'ticket1':
		jQuery.post('/webservice/contactus.php', 
			{1: '1', send: 'Submit Query', sendmail: {name: jQuery('#customerSupportTicket_firstName').val() + ' ' + jQuery('#customerSupportTicket_lastName').val(), from: jQuery('#customerSupportTicket_email').val(), message: jQuery('#customerSupportTicket_message').val(), phone: jQuery('#customerSupportTicket_phone').val(), subject: jQuery('#customerSupportTicket_subject').val(), type: contact_type}})
		.done(function (data) {
			if (data.error.length === 0) {
				jQuery('#customerSupportTicket').slideUp();
				jQuery('.entry-content .peach_background').append('<div class="tempThanks"><b>Thank you for your submission</b></div>');
				setTimeout(function() {
					jQuery('.tempThanks').hide();
				}, 2000);
			} else {
				jQuery.each(data.error, function(index, value) {
					jQuery('#customerSupportTicket').append('<div><b>' + index + '</b> - ' + value + '</div>');
				});
			}
		});
		break;
	case 'ticket1_popup':
		jQuery.post('/webservice/contactus.php', 
			{1: '1', send: 'Submit Query', sendmail: {name: jQuery('#customerSupportTicket_firstName_popup').val() + ' ' + jQuery('#customerSupportTicket_lastName_popup').val(), from: jQuery('#customerSupportTicket_email_popup').val(), message: jQuery('#customerSupportTicket_message_popup').val(), phone: jQuery('#customerSupportTicket_phone_popup').val(), subject: jQuery('#customerSupportTicket_subject_popup').val(), type: contact_type}})
		.done(function (data) {
			if (data.error.length === 0) {
				jQuery('#customerSupportTicket_popup').slideUp();
				jQuery('#myModal2 .modal-body').append('<div class="tempThanks"><b>Thank you for your submission</b></div>');
				setTimeout(function() {
					jQuery('.tempThanks').hide();
				}, 2000);
			} else {
				jQuery.each(data.error, function(index, value) {
					jQuery('#customerSupportTicket_popup').append('<div><b>' + index + '</b> - ' + value + '</div>');
				});
			}
		});
		break;
	case 'sales1_popup':
		jQuery.post('/webservice/contactus.php', 
			{1: '1', send: 'Submit Query', sendmail: {name: jQuery('#contactSales_firstName_popup').val() + ' ' + jQuery('#contactSales_lastName_popup').val(),from: jQuery('#contactSales_email_popup').val(), message: jQuery('#contactSales_message_popup').val(), phone: jQuery('#contactSales_phone_popup').val(), subject: jQuery('#contactSales_subject_popup').val(), type: contact_type}})
		.done(function (data) {
			if (data.error.length === 0) {
				jQuery('#contactSales_popup').slideUp();
				jQuery('#myModal2 .modal-body').append('<div class="tempThanks"><b>Thank you for your submission</b></div>');
				setTimeout(function() {
					jQuery('.tempThanks').hide();
				}, 2000);
			} else {
				jQuery.each(data.error, function(index, value) {
					jQuery('#contactSales_popup').append('<div><b>' + index + '</b> - ' + value + '</div>');
				});
			}
		});
		break;
	}
}*/

function submitLoginForm() {
	var error = false;
	if($('#popupemail').val() == 'Email Address' || $('#popupemail').val() == ''){
		if(!error){
			error = '';
		}
		error +="<P align=center><FONT color=#ff0000>Please Enter your Email Address</FONT></P>";
	}
	if($('#popuppassword').val() == 'Password' || $('#popuppassword').val() == ''){
		if(!error){
			error = '';
		}
		error +="<P align=center><FONT color=#ff0000>Please Enter your Password</FONT></P>";
	}
	if(error){
		$('#login_error').html(error);
		$('#login_error').show();
		return false;
	}
	var rem = false;
	if($('#popupremember').prop('checked')){
		rem = 'yes';
	}
	$('#login_error').hide();
	var pr = {password: jQuery('#popuppassword').val(), username: jQuery('#popupemail').val(),rem:rem };
	
	if(typeof browser_details_object != 'undefined' && browser_details_object && browser_details_object.getUniqueId()){
		pr['unique_id'] = browser_details_object.getUniqueId();
	}
	else{
		//wait for it to get the uniqueid
		pr['unique_id'] = '';
		/*var cb = function(){submitLoginForm()};
		setTimeout(cb,1000);
		return;*/
	}

	jQuery.post('/login_ajax.php?time='+jQuery.now(), pr)
		.done(function (data) {
			data = jQuery.parseJSON(data);
			if (data.error.length === 0) {
kiss_event_logger.callKissFromJavascript('identify',jQuery('#popupemail').val());	
kiss_event_logger.callKissFromJavascript('record','login');	

				window.location = data.redirect;
			} else {
				$('#login_error').html(data.error);
				$('#login_error').show();
			}
		});
}
function submitLoginForm1() {
	var error = false;
		if($('#emailAddress2').val() == 'Email Address' || $('#emailAddress2').val() == ''){
			if(!error){
				error = '';
			}
			error +="Please Enter your Email Address \n";
		}
		if($('#lpassword').val() == 'Password' || $('#lpassword').val() == ''){
			if(!error){
				error = '';
			}
			error +="Please Enter your Password \n";
		}
		if(error){
			alert(error);
			return false;
		}
		var rem = false;
		if($('#remem_pass').prop('checked')){
			rem = 'yes';
		}
		$('#login_error').hide();
		
		var pr = {password: jQuery('#lpassword').val(), username: jQuery('#emailAddress2').val(),rem:rem };
		if(typeof browser_details_object != 'undefined' && browser_details_object && browser_details_object.getUniqueId()){
			pr['unique_id'] = browser_details_object.getUniqueId();
		}
		else{
			//wait for it to get the uniqueid
			pr['unique_id'] = '';
			/*var cb = function(){submitLoginForm1()};
			setTimeout(cb,1000);
			return;*/
		}

		jQuery.post('/login_ajax.php?time='+jQuery.now(), pr)
			.done(function (data) {
				
				data = jQuery.parseJSON(data);
				if (data.error.length === 0) {
					kiss_event_logger.callKissFromJavascript('identify', jQuery('#emailAddress2').val());	
					kiss_event_logger.callKissFromJavascript('record','login');
					window.location = data.redirect;
				} else {
					alert($('<div>'+data.error+'</div>').text());

				}
			});
	}

function registerFunctionS() {
		var d = new Date();
		var n = d.getTime();
	if(!$('#t_o_s').prop('checked')){
		alert('Please Agree to the Terms of use');
		return;
	}
	if(jQuery('#password_confirm').size()>0 && jQuery('#password_confirm').val() != $('#password').val()){
		alert('Entered passwords Do not match');
		return;
	}
	
	var pr = {Submit: 'Start Prospecting', agreement: 'checkbox', cPassword: jQuery('#password').val(), code: '(optional)', first_name: jQuery('#firstName').val(), last_name: jQuery('#lastName').val(), phone: jQuery('#phoneNumber').val(), purchaseCounty: '37', user_name: jQuery('#emailAddress').val(),prole:$('#prole').val(),prole_more:$('#prole_more').val()}
	if(typeof browser_details_object != 'undefined' && browser_details_object && browser_details_object.getUniqueId()){
		$('#unique_id').val(browser_details_object.getUniqueId());
	}
	else{
		//wait till its loaded
		$('#unique_id').val('');
		/*var cb = function(){registerFunctionS()};
		setTimeout(cb,1000);
		return;*/
	}
	
		jQuery.post('/webservice/registerService.php?type=form_validation&time='+n, 
			pr)
			.done(function(data) {
				data = jQuery.parseJSON(data);
				var error_string = '';
				for(i in data['errors']){
					error_string += data['errors'][i]+'\n';
				}
				if (error_string !='') {
					alert(error_string);
					return;
				} else {
					kiss_event_logger.callKissFromJavascript('identify',jQuery('#emailAddress').val());
					var properties = new Array();
					properties['url']= window.location.href;
					kiss_event_logger.callKissFromJavascript('record','Signup',properties);
					$('#signup-form-frm1').submit();
				}
			});	
	}

//var seRxTj=document.createElement("script");
//seRxTj.type="text/javascript";
//var seRxTjs=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/leadtrac/safe-standard.js?ps_h=RxTj\u0026ps_t="+new Date().getTime()+"\u0026UserID=\u0026Paid=No ";
//var sez3pF;
//var sez3pFs;
function provideSupportLaunch(){
	return;
	$('#provide_support').html('');
	if($('#provide_support').size()<1){
		return;
	}
	if($('#provide_support').html() == ''){
		
		seRxTj.src=seRxTjs;document.getElementById('sdRxTj').appendChild(seRxTj);
		var html = '<div id="ciz3pF" style="z-index:100;position:absolute"></div><div id="scz3pF" style="display:inline"></div>';
		html += '<div id="sdz3pF" style="display:none"></div><script type="text/javascript">var sez3pF=document.createElement("script");sez3pF.type="text/javascript";';
		html += 'var sez3pFs=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/06v5x6dbn5qgp025mae1i7awqa/safe-textlink.js?ps_h=z3pF&ps_t="+new Date().getTime()+"&online-link-html=%3Cdiv%20class%3D%22btn%20og%22%20style%3D%22margin-top%3A4px%3Bfont-size%3A14px%20%21important%3Bmargin-right%3A10px%3Bfont-weight%3Abold%22%3ELive%20Chat%3C/div%3E%0A&offline-link-html=";setTimeout("sez3pF.src=sez3pFs;document.getElementById(\'sdz3pF\').appendChild(sez3pF)",1)';
		html += '<\/script>';
		html += '<noscript>';
		html += '<div style="display:inline"><a href="http://www.providesupport.com?messenger=06v5x6dbn5qgp025mae1i7awqa">Online Chat</a></div></noscript>';
		$('#provide_support').html(html);
		var sez3pF=document.createElement("script");
		sez3pF.type="text/javascript";
		sez3pFs=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/06v5x6dbn5qgp025mae1i7awqa/safe-textlink.js?ps_h=z3pF&ps_t="+new Date().getTime()+"&online-link-html=%3Cdiv%20class%3D%22btn%20og%22%20style%3D%22margin-top%3A4px%3Bfont-size%3A14px%20%21important%3Bmargin-right%3A10px%3Bfont-weight%3Abold%22%3ELive%20Chat%3C/div%3E%0A&offline-link-html=";
		setTimeout("sez3pF.src=sez3pFs;document.getElementById('sdz3pF').appendChild(sez3pF)",1);
	}
}
function openHelpModule(){
	if($("#myModal_contact").size()){
		$("#myModal_contact").modal();
	}
	else{
		$("#myModal2").modal();
	}
}
function loadScript(src, callback)
{
  var s,
      r,
      t;
  r = false;
  s = document.createElement('script');
  s.type = 'text/javascript';
  s.src = src;
  s.onload = s.onreadystatechange = function() {
    //console.log( this.readyState ); //uncomment this line to see which ready states are called.
    if ( !r && (!this.readyState || this.readyState == 'complete') )
    {
      r = true;
      callback();
    }
  };
  t = document.getElementsByTagName('script')[0];
  t.parentNode.insertBefore(s, t);
}
function AsynchronousLoader(js,check,callback){
	if($.isFunction(window[check])){
		callback();
		return;
	}
	if(typeof $LAB == 'undefined'){
		var call = function(){AsynchronousLoader(js,check,callback)};
		loadScript('/include/js/LAB.min.js',call);
		return;
	}
	
	js = js+'?a='+new Date().getTime();
	$LAB.script(js).wait(function(){
		callback();
	});
}
var browser_details_object =false;
var browser_details_function = function(){
	browser_details_object = new BrowserDetails();
	browser_details_object.initialize();
}
AsynchronousLoader('/include/js/browseridentify/BrowserDetails.js','BrowserDetails',browser_details_function);
