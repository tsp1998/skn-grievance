<?php
session_start();
?>
<?php
include('functions.php');
$OTP = rand(100000, 1000000);
$_SESSION['OTP'] = $OTP;

$Name1 = test_input_($_POST["Name1"]);
$Name2 = test_input_($_POST["Name2"]);
$Name3 = test_input_($_POST["Name3"]);
$Department = $_POST["Department"];
$Position = $_POST["Position"];
$Year = $_POST["Year"];
$Division = $_POST["Division"];
$Roll = $_POST["Roll"];
$Phone = $_POST["Phone"];
$Email = $_POST["Email"];
$Subject = $_POST["Subject"];
$Concern = $_POST["Concern"];
$Detail = $_POST["Detail"];

date_default_timezone_set('Asia/Kolkata');
$Date = date("d/m/y");
$Time = date("h:i:sa");

include('adjust.php');

if (empty($Name1) || empty($Name2) || empty($Name3) || empty($Department) || empty($Position) || empty($Phone) || empty($Email) || empty($Subject) || empty($Concern) || empty($Detail)) {
	echo "<script>alert('something wrong');</script>";
	exit;
}

$Name = $Name1 . " " . $Name2 . " " . $Name3;

include('connection.php');


//echo "<script>alert('connection established');</script>";

$query = "INSERT INTO `skn_grievance_complaints`(`Name`, `Department`, `Position`, `Year`, `Division`, `Roll`, `Phone`, `Email`, `Subject`, `Concern`, `Detail`, `Date`, `Time`, `Confirmed`, `Resolved`) VALUES ('$Name','$Department','$Position','$Year','$Division','$Roll','$Phone','$Email','$Subject','$Concern','$Detail','$Date','$Time','0','0')";

if (!mysqli_query($Connection, $query)) {
	session_destroy();
	exit;
}
//echo "<script>alert('data inserted successfully');</script>";



// 	$query='SELECT ID from skn_grievance_complaints ORDER BY ID DESC';
// 	$result=mysqli_query($Connection,$query);
// 	if($result->num_rows>0){
// 		$row=$result->fetch_assoc();
// 		$ID=$row['ID'];
// 	}
// 	//echo $ID;
// 	$OTP=rand(100000,1000000);
// 	$_SESSION['ID']=$ID;
// 	$_SESSION['OTP']=$OTP;


// Authorisation details.
$username = "programmertsp@gmail.com";
$hash = "9707e7463bbc7efc31ac71bfe75acc9cc414ff09ad83fbb928f88c72d155aa43";

// Config variables. Consult http://api.textlocal.in/docs for more info.
$test = "0";

// Data for text message. This is the text message data.
$sender = "sknscoe grievance otp"; // This is who the message appears to be from.
$numbers = "+91" . "$Phone"; // A single number or a comma-seperated list of numbers
$message = "$OTP" . " is your otp";
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
$data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
$ch = curl_init('http://api.textlocal.in/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);


$query = 'SELECT ID from skn_grievance_complaints ORDER BY ID DESC';
$result = mysqli_query($Connection, $query);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$ID = $row['ID'];
}
//echo $ID;
$_SESSION['ID'] = $ID;


if ($result) {
	echo "Check your inbox please";
	echo "<script>alert('OTP has been Sent to Phone');</script>";
	header("Location: verify.php");
} else {
	echo "<script>alert('OTP not Sent to Phone');</script>";
}
// echo '<script>window.location="verify.php"</script>';
?>