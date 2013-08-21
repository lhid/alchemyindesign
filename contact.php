<?php
	if(strlen($_REQUEST['email']) == 0 || strlen($_REQUEST['comments']) == 0){
		return false;
	}
	$to = "leban@alchemyindesign.com";
	$subject = "Contact Us";
	$email = $_REQUEST['email'];
	$message = $_REQUEST['comments'];
	$headers = "From: $email";
	$sent = mail($to, $subject, $message, $headers);
	if($sent){
		print "true";
		//print "Your mail was sent successfully <a href='index.html'>Home</a>"; 
	}
	else{
		print "false";
		//print "We encountered an error sending your mail"; 
	}
?>