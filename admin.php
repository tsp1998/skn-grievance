<?php
session_start();
?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Grievance Admin Page</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body background="bg2.jpg">
 	<header>Grievance Redressal Admin Page</header>
 	<br>
 <form method="POST" action="admin_table.php" onsubmit="return validation_()" name="GrievanceAdmin">
 			
 			Username<br>
 			<input type="text" name="User" placeholder="Enter Username"><br>
 			Password<br>
 			<input type="password" name="Password" placeholder="Enter Password"><br>
 			<input type="submit" name="Submit" value="Submit" class="submit">

 </form>

<script type="text/javascript">
	function validation_() {
		if(document.GrievanceAdmin.User.value==""||document.GrievanceAdmin.User.value.length<3){
		document.GrievanceAdmin.User.value=="";
		document.GrievanceAdmin.User.placeholder="*";
		document.GrievanceAdmin.User.focus();
		return false;
	}
	
	if(document.GrievanceAdmin.Password.value==""||document.GrievanceAdmin.Password.value.length<8){
		document.GrievanceAdmin.Password.value=="";
		document.GrievanceAdmin.Password.placeholder="*";
		document.GrievanceAdmin.Password.focus();
		return false;
	}
	}
</script>

 </body>
 </html>