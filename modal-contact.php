<?php
	if(strlen($_REQUEST['modal-email']) == 0 || strlen($_REQUEST['modal-comments']) == 0){
		return false;
	}
	$to = "leban@alchemyindesign.com";
	$subject = "Modal Contact Form";
	$email = $_REQUEST['modal-email'];
	$message = $_REQUEST['modal-comments'];
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