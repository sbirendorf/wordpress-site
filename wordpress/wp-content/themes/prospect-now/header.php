<?php
//This is a hack to get https to work under a load balancer as the ec2 behind the load balancer doesnt recieve a https request 
if (stripos(get_option('siteurl'), 'https://') === 0) {
    $_SERVER['HTTPS'] = 'on';
}
global $configVars,$dbConfig,$service_locator,$dsn,$tableNames,$auth;

if(trim($auth->session['username']) != ''){

	$logged_in = true;
	$query = "select * from leadtrac_user where user_name='".trim($auth->session['username'])."'";
	$result = func_dbQuery($query);
	$row = $result->fetchRow(DB_FETCHMODE_ASSOC);
	$userType = $row['type'];
	if($userType == "S" || $userType == "A" || $userType == 'SR'){
	header('Location:admin/system/index.php?page=users&action=show&b=&o=&keyword=&start=&num=&entity=users');
	exit;
	}
	if($_SERVER['REQUEST_URI'] == '/'){
		header('Location:/leads/index.php?page=dashBoard');
		exit;
	}
}	
if(trim($_GET['code'])!=''){
	$_SESSION['promo_code'] = $_GET['code'];
	if(strtolower($_GET['code']) == 'goog'){
		$_SESSION['extra_goog_params'] = $_GET;
	}
	if($_GET['referrerid'] != ''){
		$_SESSION['referral_code'] = $_GET['referrerid'];
	}
}
if(trim($_GET['ref_api'])!=''){ 
  $_SESSION['ref_enable_api'] = $_GET['ref_api'];
}


ob_clean();



?>

<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	
		<head>
			<meta charset="<?php bloginfo('charset'); ?>" />
			<meta name="viewport" content="width=device-width" />
			<title><?php wp_title(' | ', true, 'right'); ?></title>
			<script type="text/javascript"  src="/include/js/jquery-1.11.0.min.js"> </script>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
			<link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css?v=2" rel="stylesheet" type="text/css">
			<link href="<?php bloginfo('template_directory');?>/custom.css?v=3" rel="stylesheet" type="text/css">
<?php if($logged_in): ?>
	<script> olark.configure('system.group', '2bb38981d0d705164bda6eea3c97b50c'); /*Routes to Support*/ </script>
<?php endif; ?>

<!--Kiss Code Start -->
<script type="text/javascript">var _kmq = _kmq || []; var _kmk = _kmk || '99331754e47b9d9444a2d5eb2b3091390806c43d'; function _kms(u){ setTimeout(function(){ var d = document, f = d.getElementsByTagName('script')[0], s = d.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = u; f.parentNode.insertBefore(s, f); }, 1); } _kms('//i.kissmetrics.com/i.js'); _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js'); </script>
<!--Kiss Code End -->
<script src="/include/JsModules/kisseventlogger.js?a=3"></script>
<script type="text/javascript">
function openLogin(){
	if(!$('#myModal3').length || !$('#myModal3').modal){
		window.location='/oldindex.php?page=login';
		return;
	}
	$('#myModal3').modal('toggle');
	return false;
}
</script>

		<link href='/include/css/google_font.compress.css' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
			<?php wp_head(); ?>
<style>

</style>

<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1580972932193959');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1580972932193959&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

		</head>
		<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed container">
			<?php if(!$logged_in){ ?>			
			<header id="header" role="banner">
	
		<div class="navbar navbar-default navbar-static-top" role="navigation">      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	       <a  class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php esc_attr_e( get_bloginfo('name'), 'blankslate' ); ?>" rel="home">
				<img alt="" src="<?php bloginfo('template_directory');?>/images/headerLogo.png" height="66" class="hidden-xs " >
				<img src="<?php bloginfo('template_directory');?>/images/headerLogo-small.png" class="visible-xs">
			</a>
        </div>
         <div class="navbar-collapse collapse mainnav">
          <ul class="nav navbar-nav navbar-right hidden-sm hidden-md" id="right-nav-content"></li>
          		<li ><a href='#'  onclick="return openLogin();" >Login</a></li>
						<li ><a href='#' data-toggle="modal" data-target="#myModal2" onclick="provideSupportLaunch();">Help</a></li>
						<li ><a href='/real-estate-training/'>Training</a></li>						
		        	    <li>
		        	    <a class="linkedinShare socialButtons" id="" href="http://www.linkedin.com/company/prospectnow.com?trk=fc_badge" target="_blank"></a>
						<a class="rssShare socialButtons" id=""  href="http://blog.prospectnow.com/" ></a>
						<a class="twitterShare socialButtons" id="" href="http://twitter.com/ProspectNow" target="_blank"></a>
						<a class="faceBookShare socialButtons" id="" href="http://www.facebook.com/ProspectNow" target="_blank"></a>		
<a class="youtubeShare socialButtons" id="" href="http://www.youtube.com/subscription_center?add_user=prospectnowdotcom" target="_blank"></a>

						</li>
					            
          </ul>
                           
          <ul class="nav navbar-nav navbar-right visible-sm visible-md" >
          		<li class="dropdown">
				<a
				class="dropdown-toggle" data-toggle="dropdown" 
				href="#" style="background:#DDDDDD;border-radius:4px;"><img src="/images/new_design1/toggle.png" /></a>
				
									
									
                  <ul class="dropdown-menu">
                   	<li ><a href='#'  data-toggle="modal" data-target="#myModal3">Login</a></li>
						<li ><a href='#' data-toggle="modal" data-target="#myModal2">Help</a></li>
						<li ><a href='/real-estate-training/'>Training</a></li>						
		        	    <li style="margin-left:10px;">
		        	    <a class="linkedinShare socialButtons" id="" href="http://www.linkedin.com/company/prospectnow.com?trk=fc_badge" target="_blank"></a>
						<a class="rssShare socialButtons" id=""  href="http://blog.prospectnow.com/" ></a>
						<a class="twitterShare socialButtons" id="" href="http://twitter.com/ProspectNow" target="_blank"></a>
						<a class="faceBookShare socialButtons" id="" href="http://www.facebook.com/ProspectNow" target="_blank"></a>		
						<a class="youtubeShare socialButtons" id="" href="http://www.youtube.com/subscription_center?add_user=prospectnowdotcom" target="_blank"></a>
						</li>
					</ul>
				</li>            
          </ul>
          <ul class="nav navbar-nav" style="padding-left: 5%;">
          <li class="page_item page-item-15">
					<a href="/search-commercial-real-estate/" target="_parent">Free Trial</a>
			</li>
			<li class="page_item page-item-13">
					<a href="/products-to-find-apartment-building-owners/" target="_parent">Products</a>
			</li>
			<li class="page_item page-item-15">
					<a href="/commercial-building-owners-demo/" target="_parent">Demos</a>
			</li>
			<li class="dropdown page_item page-item-15">
              <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Roi Calculator <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/oldindex.php?page=roiCalculator">For Real Estate Brokers</a></li>
                <li><a href="/oldindex.php?page=roiCalculator&type=lenders">For Lenders</a></li>                 
              </ul>
            </li>
			<li class="page_item page-item-15">
					<a href="/faq-property-ownership-lists/" target="_parent">FAQ</a>
			</li>
			<li class="page_item page-item-15">
					<a href="/contact-us/" target="_parent">Contact Us</a>
			</li>		
			
          </ul>
         
        </div><!--/.nav-collapse -->
    </div>
	</header>
			<?php }else{ ?>
			<style type="text/css">
				#site-description a {
					font-size: 13px;
				}
			</style>
			<header role="banner" id="header">
					<div class="navbar navbar-default navbar-static-top" role="navigation">      
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
				       <a  class="navbar-brand" rel="home" title="Prospect Now" href="/leads/index.php?page=dashBoard">				
							<img alt="" src="/wp-content/themes/prospect-now/images/headerLogo.png" height="66" class="hidden-xs " >
							
							<img src="/images/twit/headerLogo-small.png" class="visible-xs">
						</a>
			        </div>
			         <div class="navbar-collapse collapse mainnav">
			          <ul class="nav navbar-nav navbar-right hidden-sm hidden-md" id="right-nav-content"></li>
			          		<li ><a href="/real-estate-training" target="_parent">Training</a></li>
							<li ><a href="/system/index.php?page=profile&amp;action=edit&amp;extra=contactInfo" target="_parent">My Account</a></li>
							<li ><a href="/oldindex.php?page=logout" target="_parent">Logout</a></li>
<li ><a href="#" onclick="openHelpModule();return false;">Help</a></li>
				            <li>
				         		<a class="linkedinShare socialButtons" id="" href="http://www.linkedin.com/company/prospectnow.com?trk=fc_badge" target="_blank"></a>
								<a class="rssShare socialButtons" id=""  href="http://blog.prospectnow.com/" ></a>
								<a class="twitterShare socialButtons" id="" href="http://twitter.com/ProspectNow" target="_blank"></a>
								<a class="faceBookShare socialButtons" id="" href="http://www.facebook.com/ProspectNow" target="_blank"></a>		
								<a class="youtubeShare socialButtons" id="" href="http://www.youtube.com/subscription_center?add_user=prospectnowdotcom" target="_blank"></a>
							</li>							            
			          </ul>
			                           
			          <ul class="nav navbar-nav navbar-right visible-sm visible-md" >
			          		<li class="dropdown">
							<a
							class="dropdown-toggle" data-toggle="dropdown" 
							href="#" style="background:#DDDDDD;border-radius:4px;"><img src="/images/new_design1/toggle.png" /></a>
							
			                  <ul class="dropdown-menu">
			                  
					          		<li ><a href="/real-estate-training" target="_parent">Training</a></li>
									<li ><a href="/system/index.php?page=profile&amp;action=edit&amp;extra=contactInfo" target="_parent">My Account</a></li>
									<li ><a href="/oldindex.php?page=logout" target="_parent">Logout</a></li>
<li ><a href="#" onclick="openHelpModule();return false;">Help</a></li>
					        	    <li style="margin-left:10px;">
					        	    	<a class="linkedinShare socialButtons" id="" href="http://www.linkedin.com/company/prospectnow.com?trk=fc_badge" target="_blank"></a>
										<a class="rssShare socialButtons" id=""  href="http://blog.prospectnow.com/" ></a>
										<a class="twitterShare socialButtons" id="" href="http://twitter.com/ProspectNow" target="_blank"></a>
										<a class="faceBookShare socialButtons" id="" href="http://www.facebook.com/ProspectNow" target="_blank"></a>		
										<a class="youtubeShare socialButtons" id="" href="http://www.youtube.com/subscription_center?add_user=prospectnowdotcom" target="_blank"></a>			
									</li>
								</ul>
							</li>            
			          </ul>
			          <ul class="nav navbar-nav" style="padding-left:10px">
	          <li class="page_item page-item-15"><a href="/leads/index.php?page=searchWizard">
Guided Search</a>
						</li>
			            <li class="page_item page-item-15">
								<a href="/leads/index.php?page=newAdvancedSearch&lastsearch=true">Property Search</a>
						</li>
						<li class="page_item page-item-13">
								<a href="/leads/index.php?page=newAdvancedBusinessSearch&lastsearch=true">Tenant Search</a>
						</li>		
						<li class="dropdown">
							<a
							class="dropdown-toggle" data-toggle="dropdown" 
							href="#">Contact Manager &#x25BC;</a>
							
			                  <ul class="dropdown-menu">
			                    <li><a href="/leads/index.php?page=newAdvancedSearch&lastsearch=true&is_cm=true">My Properties</a></li>
			                    <li><a href="/leads/index.php?page=newAdvancedBusinessSearch&lastsearch=true&is_cm=true">My Tenants</a></li>
			                   <!-- <li><a href="#" 
			                    	onclick="OpenDhtmlPopupWindow('chooseGroup', 'View Property Groups', 660, 450,'/leads/index.php?page=personalGroups&action=show&entity=chooseGroup&viewfrom=header_property&isNavThere=2');return false;"
			                    	>Property Groups</a></li>
			                    <li><a href="#"
			                    	onclick="OpenDhtmlPopupWindow('chooseGroup', 'View Tenant Groups', 660, 450,'/leads/index.php?page=personalGroups&action=show&entity=chooseGroup&viewfrom=header_tenant&isNavThere=2');return false;"
			                    >Tenant Groups</a></li> -->
			                    <li><a href="/leads/index.php?page=entities&entity=activityMonitor">Activity</a></li>
			                    <li><a href="/leads/index.php?page=entities&entity=pipelines">Pipeline</a></li>
			                    <li><a href="/leads/index.php?page=entities&entity=tasks">Task Manager</a></li>
			                    <li><a href="/leads/index.php?page=entities&entity=noteManager">Notes Manager</a></li>
			                    <li><a href="/leads/index.php?page=events&extra=">Appointments</a></li>
			                  </ul>
			                
						</li>
			          </ul>
			         
			        </div><!--/.nav-collapse -->
			    </div>
				</header>
			
			<?php } ?>
    <!--[if lt IE 9]>			
			<div id="container">
<div id="alertbox" style="display:none;">
     		<div class="alert alert-warning alert-dismissable" style="background-color:lightBlue;">
	  			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  			<span id = "message_alert"></span>
			</div>
     	</div>

      <script type="text/javascript">
      	$('#message_alert').html('This site is not optimized for IE8 and below. Please Upgrade your browser for an Optimal Experience');
      	$('#alertbox').show();
      </script>
      
    <![endif]-->
    
    