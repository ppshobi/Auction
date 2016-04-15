<?php
	
/* Email Address */	
$to = '';

/* Subject */
$subject = 'Online Auction Newsletter Form';

/* Headers */
// $headers = 'From: Online Auction' . "\r\n" .
//     'Reply-To: Online Auction@Online Auction.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

$email = $_POST['newsletter-email'];

if(isset($email) && !empty($email)){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message = 'Email: '.$email;
		echo mail($to, $subject, $message);
	}else{
		echo 2;
	}
	
}

?>