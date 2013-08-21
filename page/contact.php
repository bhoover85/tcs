<?php

if (isset($_POST['honeypot'])) {
	 header( 'Location: /' ) ;
}
else {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];

	$formcontent="Name: $name \nEmail: $email \n\nComments: $comments";
	$recipient = "info@thincrustsquare.com";
	$subject = "Thin Crust Square Contact Form";
	$mailheader = "From: thincrustsquare.com \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

	}
?>