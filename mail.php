<?php
$Phone='7875175975';
$OTP='100001';

	// Authorisation details.
	$username = "programmertsp@gmail.com";
	$hash = "9707e7463bbc7efc31ac71bfe75acc9cc414ff09ad83fbb928f88c72d155aa43";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "1";

	// Data for text message. This is the text message data.
	$sender = "sknscoe"; // This is who the message appears to be from.
	$numbers = "+917875175975"; // A single number or a comma-seperated list of numbers
	$message = "1000 This is a test message from the PHP API script.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);


	if($result==true){
			echo "Check your inbox please";
			echo "<script>alert('OTP has been Sent');</script>";
		}
		else
			echo "something wrong";
?> 