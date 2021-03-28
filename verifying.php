<?php
session_start();
?>
<?php
if (isset($_POST['Submit2'])) {
	$OTP = $_SESSION['OTP'] . '<br>';
	$TempID = $_SESSION['ID'];
	//$ID=(int)$TempID;
	$ID = intval($TempID);
	//echo $ID.'<br>';
	//echo $OTP.'<br>';

	$OTP2 = $_POST['OTP2'];

	if ((int)$OTP2 != (int)$OTP) {
		//echo '<script>alert("wrong OTP");</script>';
		echo '<script>window.location="verify.php"</script>';
		exit;
	} else {
		//echo '<script>alert("Correct OTP");</script>';
		include('connection.php');
		//echo "<script>alert('connection established');</script>";

		//$query="UPDATE `skn_grievance_complaints` SET `Confirmed`='1' WHERE ID=$ID";
		$query = 'UPDATE skn_grievance_complaints SET Confirmed="1" WHERE ID=' . $ID;
		if (mysqli_query($Connection, $query)) {
			echo "<script>alert('Confirmed');</script>";
			session_destroy();
			echo '<script>window.location="index.php"</script>';
		} else {
			//echo "<script>alert('Something Wrong');</script>";
			//echo $ID;
			//echo $OTP;
		}
	}
}
?>