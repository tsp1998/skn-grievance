<?php 
session_start();
?>
<?php
	include('functions.php');

	$Name1=test_input_($_POST["Name1"]);
	$Name2=test_input_($_POST["Name2"]);
	$Name3=test_input_($_POST["Name3"]);
	$Department=$_POST["Department"];
	$Position=$_POST["Position"];
	$Year=$_POST["Year"];
	$Division=$_POST["Division"];
	$Roll=$_POST["Roll"];
	$Phone=$_POST["Phone"];
	$Email=$_POST["Email"];
	$Subject=$_POST["Subject"];
	$Concern=$_POST["Concern"];
	$Detail=$_POST["Detail"];

	date_default_timezone_set('Asia/Kolkata');
	$Date=date("d/m/y");
	$Time=date("h:i:sa");
	
	include('adjust.php');

	if(empty($Name1) || empty($Name2) ||empty($Name3) ||empty($Department) || empty($Position) || empty($Phone) || empty($Email) || empty($Subject) || empty($Concern) || empty($Detail)){
	echo "<script>alert('something wrong');</script>";
	exit;
	}

	$Name=$Name1." ".$Name2." ".$Name3;

	include('connection.php');

 		
		//echo "<script>alert('connection established');</script>";
	
		 $query="INSERT INTO `_complaints_`(`Name`, `Department`, `Position`, `Year`, `Division`, `Roll`, `Phone`, `Email`, `Subject`, `Concern`, `Detail`, `Date`, `Time`, `Confirmed`, `Resolved`) VALUES ('$Name','$Department','$Position','$Year','$Division','$Roll','$Phone','$Email','$Subject','$Concern','$Detail','$Date','$Time','0','0')";

		if(!mysqli_query($Connection,$query)){
			session_destroy();
			exit;
		}
		//echo "<script>alert('data inserted successfully');</script>";
	session_destroy();
	echo '<script>window.location="success.php"</script>';
  ?>