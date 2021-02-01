<?php 
session_start();

echo $OTP=$_SESSION['OTP'].'<br>';
	echo $TempID=$_SESSION['ID'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Verify OTP</title>
	<link rel='stylesheet' type='text/css' href='css/style.css'>
</head>
<body background='bg2.jpg'>

<script type="text/javascript">
	function validation_() {
	if(document.Confirm.OTP2.value==""||document.Confirm.OTP2.value.length<6){
		document.Confirm.OTP2.value=="";
		document.Confirm.OTP2.placeholder="*";
		document.Confirm.OTP2.focus();
		return false;
	}
</script>

<center><header2>Grievance Redressal Form</header2><center><br>

<div class="container-fluid">
<form method="post" action="verifying.php" onsubmit="return validation_()" name="Confirm">
<input type="text" placeholder="Enter OTP Here" name="OTP2" id="OTP2" />
<input type="submit" name="Submit2" value="Submit" class="submit">
</form>
</div>
</body>
</html>
