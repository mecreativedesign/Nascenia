<?php
if( isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mobile']) && isset($_POST['address']) && isset($_POST['email']) ){
	$fn = $_POST['firstname']; // HINT: use preg_replace() to filter the data
	$ln = $_POST['lastname'];
	$m = $_POST['mobile'];
	$a = $_POST['address'];
	$e = $_POST['email'];
	$to = "you@domain.com";	
	$from = $e;
	$subject = 'Contact Form Robin';
	$message = '<b>Name:</b> '.$fn. ' ' .$ln.' <br><b>Email:</b> '.$e.' <p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>