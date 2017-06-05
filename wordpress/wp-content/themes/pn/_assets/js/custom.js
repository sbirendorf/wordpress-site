
function submitLoginForm() {
		var error = false;
		if(jQuery('#popupemail').val() == 'Email Address' || jQuery('#popupemail').val() == ''){
			if(!error){
				error = '';
			}
			error +="<P align=center><FONT color=#ff0000>Please Enter your Email Address</FONT></P>";
		}
		if(jQuery('#popuppassword').val() == 'Password' || jQuery('#popuppassword').val() == ''){
			if(!error){
				error = '';
			}
			error +="<P align=center><FONT color=#ff0000>Please Enter your Password</FONT></P>";
		}
		if(error){
			jQuery('#login_error').html(error);
			jQuery('#login_error').show();
			return false;
		}
		var rem = false;
		if(jQuery('#popupremember').prop('checked')){
			rem = jQuery('#popupremember').val();
		}

		jQuery('#login_error').hide();
		loginCall(jQuery('#popuppassword').val(), jQuery('#popupemail').val(), rem);
		
}
function loginCall(pw, user, rem){
	console.log('login');
	jQuery.post('/login_ajax.php?from=api&time='+jQuery.now(), {password: pw, username: user,rem: rem })
			.done(function (data) {
				
				data = jQuery.parseJSON(data);	
                console.log(data);  		
				if (data.redirect.length > 0 || data.redirect != "") {
					window.location = data.redirect;
				} else {
					jQuery('#login_error').html(data.error);
					jQuery('#login_error').show();
				}
			});
}
function registerFunctionS() {
		var d = new Date();
		var n = d.getTime();
	if(!jQuery('#t_o_s').prop('checked')){
		alert('Please Agree to the Terms of use');
		return;
	}
	
	var pr = {Submit: 'Start Prospecting', agreement: 'checkbox', cPassword: jQuery('#password').val(), code: '(optional)', first_name: jQuery('#firstName').val(), last_name: jQuery('#lastName').val(), phone: jQuery('#phoneNumber').val(), purchaseCounty: '37', user_name: jQuery('#emailAddress').val(),prole:jQuery('#prole').val(),prole_more:jQuery('#prole_more').val(),company:jQuery('#company').val()}
	if(typeof browser_details_object != 'undefined' && browser_details_object && browser_details_object.getUniqueId()){
		jQuery('#unique_id').val(browser_details_object.getUniqueId());
	}

		jQuery.post('/webservice/registerService.php?type=form_validation&time='+n, 
			pr)
			.done(function(data) {
				data = jQuery.parseJSON(data);
				console.log(data);
				var error_string = '<p style="color: red;">';
				for(i in data['errors']){
					error_string += data['errors'][i]+'<br>';
				}
				error_string += '</p>';
				if (data.status == false) {
					jQuery('#login_error').html(error_string);
					jQuery('#login_error').show();
					//alert(error_string);
					return;
				} else {
					console.log('in else');
					console.log(jQuery('#signup-form-frm1').submit());
					 
				}
			});	
	}


//submit the customer support form
function submit_contact_ajax2(type) {
    placeHolderFun('First Name','first_name',true);
    placeHolderFun('Last Name','lastName', true);
    placeHolderFun('Email Address','email_address', true);
    placeHolderFun('Phone Number','user_telephone', true);
    
    var pr = jQuery("#customer_form_"+type).serialize();
    console.log(pr);
    var ajaxUrl = '/webservice/contactus.php';
    var callback = function(data){        
        console.log(data);
        if (data.status === true) {            
            jQuery('.contactBox').hide();
            jQuery('#error_msg2_'+type).html('<br /><br /><div class="tempThanks"><b>Thank you for your submission</b></div>');
            setTimeout(function() {
                jQuery('#error_msg2_'+type).html('');
            }, 5000);
        } else {
            var html = '<ul style="color:red">';
            jQuery.each(data.error, function(index, value) {
                html +=  '<li>'+value + '</li>';
            });
            html += '</ul>';
            jQuery('#error_msg2_'+type).html(html);
        }
    }
    var ajax = jQuery.ajax({
            url: ajaxUrl,
            type: "post",
            data: pr
            })
        .done(callback);
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

function ajaxRequest(ajaxUrl,pr,callback){
	var ajax = jQuery.ajax({
		url: ajaxUrl,
        type: "post",
        data: pr
		}).done(callback);

	return ajax;
}

function niceMonth(date){
	var monthNames = ["January", "February", "March", "April", "May", "June",
  					"July", "August", "September", "October", "November", "December"];
  	var d = date.split("-");
  	var mo = Number(d[1] -1);	
  	return	monthNames[mo]+" "+d[2]+" "+d[0];			
}

function abbrState(fullname){
    
    var states = {
        'Arizona': 'AZ',
        'Alabama': 'AL',
        'Alaska': 'AK',
        'Arkansas': 'AR',
        'California': 'CA',
        'Colorado': 'CO',
        'Connecticut': 'CT',
        'Delaware': 'DE',
        'Florida': 'FL',
        'Georgia': 'GA',
        'Hawaii': 'HI',
        'Idaho': 'ID',
        'Illinois': 'IL',
        'Indiana': 'IN',
        'Iowa': 'IA',
        'Kansas': 'KS',
        'Kentucky': 'KY',
        'Kentucky': 'KY',
        'Louisiana': 'LA',
        'Maine': 'ME',
        'Maryland': 'MD',
        'Massachusetts': 'MA',
        'Michigan': 'MI',
        'Minnesota': 'MN',
        'Mississippi': 'MS',
        'Missouri': 'MO',
        'Montana': 'MT',
        'Nebraska': 'NE',
        'Nevada': 'NV',
        'New Hampshire': 'NH',
        'New Jersey': 'NJ',
        'New Mexico': 'NM',
        'New York': 'NY',
        'Newyork': 'NY',
        'North Carolina': 'NC',
        'North Dakota': 'ND',
        'Ohio': 'OH',
        'Oklahoma': 'OK',
        'Oregon': 'OR',
        'Pennsylvania': 'PA',
        'Rhode Island': 'RI',
        'South Carolina': 'SC',
        'South Dakota': 'SD',
        'Tennessee': 'TN',
        'Texas': 'TX',
        'Utah': 'UT',
        'Vermont': 'VT',
        'Virginia': 'VA',
        'Washington': 'WA',
        'West Virginia': 'WV',
        'Wisconsin': 'WI',
        'Wyoming': 'WY'};
    return states[fullname];
}

//move the box down when the user scroll down
    function signupScroller(div,margin){
        var element = jQuery(div),
        originalY = element.offset().top;
    
        // Space between element and top of screen (when scrolling)
        var topMargin = margin;
    
        // Should be set in CSS; need to fix
        element.css('position', 'relative');
    
        jQuery(window).on('scroll', function(event) {
            var scrollTop = jQuery(window).scrollTop();
            
            element.stop(false, false).animate({
                top: scrollTop < originalY
                        ? 0
                        : scrollTop - originalY + topMargin
            }, 250);
        });
    }