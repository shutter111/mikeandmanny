<?php
header('Access-Control-Allow-Origin: *');
header("Pragma: no-cache");
//include("connect.php");
 
	$FormEmail = $_REQUEST["FormEmail"];
	$FName = $_REQUEST["FName"];
	$LName = $_REQUEST["LName"];
	$phone = $_REQUEST["phone"];
	$email = $_REQUEST["email"];
	$skiClub = $_REQUEST["skiClub"];
	$athName = $_REQUEST["athName"];
	$ref = $_REQUEST["ref"];
	
	$to = $FormEmail;
	$subject = "Coach Application";
	$message = '<html><body>';
	$message .= "Name: ". $FName.' '. $LName .'<br>';
	$message .= "Phone Number: ". $phone .'<br>';
	$message .= "Email: ". $email.'<br>';
	$message .= "Ski Club: ". $skiClub .'<br>';
	$message .= "Athletes Name: ". $athName .'<br>';
	$message .= "Reference/Recommendation letter: ". $ref .'<br>';
	$message .= '</body></html>';

	$headers = "From: noreply@mikeandmanny.com" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	if(mail($to, $subject, $message, $headers)) { 
	  echo 'success'; 
	}



?>