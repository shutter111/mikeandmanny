<?php
header('Access-Control-Allow-Origin: *');
header("Pragma: no-cache");
//include("connect.php");
 
	$FormEmail = $_REQUEST["FormEmail"];
	$FName = $_REQUEST["FName"];
	$LName = $_REQUEST["LName"];
	$addr = $_REQUEST["addr"];
	$city = $_REQUEST["city"];
	$province = $_REQUEST["province"];
	$phone = $_REQUEST["phone"];
	$email = $_REQUEST["email"];
	$skiClub = $_REQUEST["skiClub"];
	$coachName = $_REQUEST["coachName"];
	$gender = $_REQUEST["gender"];
	$yob = $_REQUEST["yob"];
	$height = $_REQUEST["height"];
	$weight = $_REQUEST["weight"];
	$hSize = $_REQUEST["hSize"];
	$pSize = $_REQUEST["pSize"];
	$sSize = $_REQUEST["sSize"];
	$q1 = $_REQUEST["q1"];
	$q2 = $_REQUEST["q2"];
	$q3 = $_REQUEST["q3"];
	$q4 = $_REQUEST["q4"];
	$q5 = $_REQUEST["q5"];
	$q6 = $_REQUEST["q6"];
	$q7 = $_REQUEST["q7"];

	//$sql = "INSERT INTO wp_form_submits(Type,Name,Email,Org,Enquiry) 
				//VALUES('$Type','$Name','$Email','$Org','$Enquiry')";
		//mysql_query($sql) or die( $sql . " - " . mysql_error() );


	$to = $FormEmail;
	$subject = "Athlete Application";
	$message = '<html><body>';
	$message .= "Name: ". $FName.' '. $LName .'<br>';
	$message .= "Address: ". $addr .'<br>';
	$message .= "City: ". $city .'<br>';
	$message .= "Province: ". $province .'<br>';
	$message .= "Phone Number: ". $phone .'<br>';
	$message .= "Email: ". $email.'<br>';
	$message .= "Ski Club: ". $skiClub .'<br>';
	$message .= "Coach Name: ". $coachName .'<br>';
	$message .= "gender: ". $gender .'<br>';
	$message .= "Year Of Birth: ". $yob .'<br>';
	$message .= "Height: ". $height.'<br>';
	$message .= "Weight: ". $weight.'<br>';
	$message .= "Helet Size: ". $hSize .'<br>';
	$message .= "Pole Size: ". $pSize .'<br>';
	$message .= "Ski Size: ". $sSize.'<br>';
	$message .= "How many off season camps have you attended in the last 2 years and where? ". $q1 .'<br>';
	$message .= "How many siblings do you have?: ". $q2 .'<br>';
	$message .= "Do you play any other sports? If yes, which ones? ". $q3 .'<br>';
	$message .= "What do you hope to gain from the Mike and Manny Camp? ". $q4 .'<br>';
	$message .= "What does ski racing mean to you? ". $q5 .'<br>';
	$message .= "Describe your perfect day on the mountain. ". $q6 .'<br>';
	$message .= "Describe yourself in 3 words. ". $q7 .'<br>';
	$message .= '</body></html>';

	$headers = "From: noreply@mikeandmanny.com" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	if(mail($to, $subject, $message, $headers)) { 
	  echo 'success'; 
	}



?>