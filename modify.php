<?php 
$ID=$_POST['hidden'];
echo $ID;
	include('connection.php');

		//echo "<script>alert('connection established');</script>";
	
		//$query="UPDATE `_complaints_` SET `Confirmed`='1' WHERE ID=$ID";
		$query='UPDATE _complaints_ SET Resolved="1" WHERE ID='.$ID;
		if(mysqli_query($Connection,$query)){
		echo '<script>window.location="admin_table.php"</script>';
}
?>