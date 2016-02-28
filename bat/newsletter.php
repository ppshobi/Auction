<?php
	
/* Email Address */	
$to = '';

/* Subject */
$subject = 'Farmercart Newsletter Form';

/* Headers */
// $headers = 'From: Farmercart' . "\r\n" .
//     'Reply-To: Farmercart@Farmercart.com' . "\r\n" .
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