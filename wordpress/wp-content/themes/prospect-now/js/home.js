	
	jQuery('#bigTestimonial .testimonialAdvance').click(function() {
		var toHighlight = jQuery('#bigTestimonial .activeTestimonial').next().length > 0 ? jQuery('#bigTestimonial .activeTestimonial').next() : jQuery('#bigTestimonial .testimonialList li').first();
        	jQuery('#bigTestimonial .activeTestimonial').removeClass('activeTestimonial');
        	toHighlight.addClass('activeTestimonial');
	});

	jQuery('#bigTestimonial .testimonialRetreat').click(function() {
		console.log(jQuery('.activeTestimonial').prev().length);
		var toHighlight2 = jQuery('#bigTestimonial .activeTestimonial').prev().length > 0 ? jQuery('#bigTestimonial .activeTestimonial').prev() : jQuery('#bigTestimonial .testimonialList li:last');
        	jQuery('#bigTestimonial .activeTestimonial').removeClass('activeTestimonial');
        	toHighlight2.addClass('activeTestimonial');
	});
	
	jQuery('#smallTestimonial .testimonialAdvance').click(function() {
		var toHighlight = jQuery('#bigTestimonial .activeTestimonial').next().length > 0 ? jQuery('#smallTestimonial .activeTestimonial').next() : jQuery('#smallTestimonial .testimonialList li').first();
        	jQuery('#smallTestimonial .activeTestimonial').removeClass('activeTestimonial');
        	toHighlight.addClass('activeTestimonial');
	});

	jQuery('#smallTestimonial .testimonialRetreat').click(function() {
		console.log(jQuery('.activeTestimonial').prev().length);
		var toHighlight2 = jQuery('#smallTestimonial .activeTestimonial').prev().length > 0 ? jQuery('#smallTestimonial .activeTestimonial').prev() : jQuery('#smallTestimonial .testimonialList li:last');
        	jQuery('#smallTestimonial .activeTestimonial').removeClass('activeTestimonial');
        	toHighlight2.addClass('activeTestimonial');
	});
	
	jQuery('#freeTrialButton-small').click(function(e) {
		e.preventDefault();
		var d = new Date();
		var n = d.getTime();
	
		jQuery.post('/webservice/registerService.php?type=form_validation&time='+n, 
			{Submit: 'Start Prospecting', agreement: 'checkbox', cPassword: jQuery('#password-small').val(), code: '(optional)', first_name: jQuery('#firstName-small').val(), last_name: jQuery('#lastName-small').val(), phone: jQuery('#phoneNumber-small').val(), purchaseCounty: '37', user_name: jQuery('#emailAddress-small').val(),prole:$('#prole-small').val(), prole_more: jQuery('#prole-small_more').val()})
			.done(function(data) {
				data = jQuery.parseJSON(data);
				
				var error_string='';
				for(i in data['errors']){
					error_string += data['errors'][i]+'\n';
				}
				
				if (error_string !='') {
					alert(error_string);
					return;
				} else {
				kiss_event_logger.callKissFromJavascript('identify',jQuery('#emailAddress-small').val());
					var properties = new Array();
					properties['url']= window.location.href;
					kiss_event_logger.callKissFromJavascript('record','signup',properties);

					jQuery('#signup-form-frm-small').submit();
				}
				
			});	
	});
	jQuery('#freeTrialButton').click(function(e) {
		e.preventDefault();
		
		var d = new Date();
		var n = d.getTime();
	
		jQuery.post('/webservice/registerService.php?type=form_validation&time='+n, 
			{Submit: 'Start Prospecting', agreement: 'checkbox', cPassword: jQuery('#password').val(), code: '(optional)', first_name: jQuery('#firstName').val(), last_name: jQuery('#lastName').val(), phone: jQuery('#phoneNumber').val(), prole :$('#prole').val(),purchaseCounty: '37', user_name: jQuery('#emailAddress').val(),prole_more :$('#prole_more').val()})
			.done(function(data) {
				data = jQuery.parseJSON(data);
				
				var error_string='';
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
					kiss_event_logger.callKissFromJavascript('record','signup',properties);

					jQuery('#signup-form-frm').submit();
				}
				
			});
});


function loadYoutube(you_id){
	var htmlval = '';
	htmlval += '<object style="width:100%" height="385">';
	htmlval += '<param name="movie" value="https://www.youtube.com/v/'+you_id+'?hl=en&fs=1"></param>'; 
	htmlval += '<param name="allowFullScreen" value="true"></param>';
	htmlval += '<param name="allowscriptaccess" value="always"></param>';
	htmlval += '<embed src="https://www.youtube.com/v/'+you_id+'?hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="385"></embed></object>';
	jQuery('#youtube_video').html(htmlval);
	var w_h = $(window).height();
	if($("#myModal .modal-content").height() > w_h &&  $(window).width()>750){
		$("#myModal .modal-content").height(w_h);
		$("#myModal .modal-content").css('overflow','auto');		
        }
        else{
		$("#myModal .modal-content").css('height','auto');
        }
}
function loadTestimonial(you_id) {
	var htmlval = '';
	htmlval += '<object style="width:100%" height="385">';
	htmlval += '<param name="movie" value="https://www.youtube.com/v/'+you_id+'?hl=en&fs=1"></param>'; 
	htmlval += '<param name="allowFullScreen" value="true"></param>';
	htmlval += '<param name="allowscriptaccess" value="always"></param>';
	htmlval += '<embed src="https://www.youtube.com/v/'+you_id+'?hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="385"></embed></object>';
	jQuery('#videoTestimonial').html(htmlval);
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

var salesContact = 0;
jQuery(document).ready(function() {
       		if( $('#popupemail').val() == ''){
			$('#popupemail').val('Email Address');
			$('#popupemail').css("color","#ADADAD");
		} 
		$('#popupemail').focus(function(){
			if($(this).val() == 'Email Address'){
				$(this).val('');
			}
			else{
				$(this).css('color',"#000");
			}
		}).keydown(function(){
			$(this).css({'color':"#000","font-weight":"bold"});
		}).blur(function(){
		  if($(this).val() == ''){
		    $(this).val('Email Address');
		    $(this).css({'color':"#ADADAD","font-weight":"normal"});
		  }
		});
		
		if( $('#popuppassword').val() == ''){
			$('#popuppassword').val('Password');
			$('#popuppassword').css("color","#ADADAD");
		} 
		$('#popuppassword').focus(function(){
			if($(this).val() == 'Password'){
				$(this).val('');
			}
			else{
				$(this).css('color',"#000");
			}
		}).keydown(function(){
			$(this).css({'color':"#000","font-weight":"bold"});
		}).blur(function(){
		  if($(this).val() == ''){
		    $(this).val('Password');
		    $(this).css({'color':"#ADADAD","font-weight":"normal"});
		  }
		});
	
	jQuery('.contactBox').hide();
	jQuery('#ticket1').click(function() {
		salesContact = 0;
		jQuery('#ticket1').css('color', '#000000');
		jQuery('#sales1').css('color', '#ffffff');
		jQuery('.contactBox').hide();
		jQuery('#customerSupportTicket').slideDown();
		return false;
	});
	jQuery('#sales1').click(function() {
		salesContact = 0;
		jQuery('#sales1').css('color', '#000000');
		jQuery('#ticket1').css('color', '#ffffff');
		jQuery('.contactBox').hide();
		jQuery('#contactSales').slideDown();
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
	
	$.fn.textfill = function(options) {
			var fontSize = options.maxFontPixels;
			var ourText = $('span:visible:first', this);
			var maxHeight = $(this).height();
			var maxWidth = $(this).width();
			var textHeight;
			var textWidth;
			do {
				ourText.css('font-size', fontSize);
				textHeight = ourText.height();
				textWidth = ourText.width();
				fontSize = fontSize - 1;
			} while ((textHeight > maxHeight || textWidth > maxWidth) && fontSize > 3);
			return this;
		}
		
	jQuery('.testimonialClient').textfill({ maxFontPixels: 36 });
});
jQuery(document).click(function(event) { 
	
   if(jQuery(event.target).parents().index(jQuery('.contactBox')) == -1) {
        if(jQuery('.contactBox').is(":visible")) {
            jQuery('.contactBox').hide()
        }
    }
	
});
function submit_contact_ajax(contact_type) {
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
				jQuery('#error_msg1').html('');
				jQuery('#customerSupportTicket_popup').slideUp();
				jQuery('#myModal2 .modal-body').append('<div class="tempThanks"><b>Thank you for your submission</b></div>');
				setTimeout(function() {
					jQuery('.tempThanks').hide();
				}, 2000);
			} else {
				jQuery.each(data.error, function(index, value) {
					jQuery('#error_msg1').html('<div><b>' + index + '</b> - ' + value + '</div>');
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
}
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
		rem = $('#popupremember').val();
	}

	$('#login_error').hide();
	var pr = {password: jQuery('#popuppassword').val(), username: jQuery('#popupemail').val(),rem:rem };
	
	if(typeof browser_details_object != 'undefined' && browser_details_object && browser_details_object.getUniqueId()){
		pr['unique_id'] = browser_details_object.getUniqueId();
	}
	else{
		/*var cb = function(){submitLoginForm()};
		setTimeout(cb,1000);
		return;*/
		pr['unique_id'] = '';
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

$("#prole,#prole-small").change(function(){
   $('.more_role').remove();
   var id = $(this).prop('id')+'_more';
   if($(this).val() == 'Other'){
         var html = '<input type="text" id="'+id+'" value="Describe your role here" class="more_role wholeInput" name="prole_more" style="font-weight: bold; color: lightGrey;" onfocus="if($(this).val() ==\'\' || $(this).val() ==\'Describe your role here\'){$(this).val(\'\');$(this).css(\'color\',\'black\');}" onblur="if($(this).val() ==\'\' || $(this).val() ==\'Describe your role here\'){$(this).val(\'Describe your role here\');$(this).css(\'color\',\'lightGrey\')}">';
         $(this).after(html);
	$(this).hide();
   }
});

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


