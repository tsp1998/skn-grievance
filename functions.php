<?php
function connect_()
{
	$Host = "localhost";
	$User = "root";
	$Password = "tsp321";
	$Database = "skn_db";
	$Connection = mysqli_connect($Host, $User, $Password, $Database);
	if (!$Connection) {
		echo "connection not established";
		return 0;
	} else
		return $Connection;
}

function test_input_($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
