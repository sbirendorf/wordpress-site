
<?php


 $email = $_POST['email_address'];
 if ($email == ""){
 	header('Location: /?page_id=15&email=');
 	exit();
 }
 //check if we have this email in the system
require_once('pnow_rest_api.php'); 		
$obj = new PnowRestAPI($_SERVER['SERVER_NAME']);

$data = array('email'=> $email);	

//save this email address in case the user did not finish the sign-up form
$response = $obj->postToServer('scripts/preSignup.php', $data);

//redirect to the sign-up page
header('Location: /?page_id=15&email='.$email);
exit();




