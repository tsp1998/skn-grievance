<?php
$Host = "localhost";
$User = "root";
$Password = "";
$Database = "skn_db";
$Connection = mysqli_connect($Host, $User, $Password, $Database);
if (!$Connection) {
	echo "<script>alert('connection not established');</script>";
	session_destroy();
	exit;
}
