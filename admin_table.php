<?php
session_start();
?>

<?php  
if(isset($_POST['LogOut'])){
session_destroy();
echo '<script>window.location="admin.php"</script>';
}
?>

<?php  

if(isset($_POST['Submit']))
{
	include('functions.php');
$User1=$_POST["User"];
$Password1=$_POST["Password"];
$_SESSION['User']=$User1;
$_SESSION['Password']=$Password1;
}else{
		//echo "<script>alert('hi there');</script>";
		$User1=$_SESSION['User'];
		$Password1=$_SESSION['Password'];
}
if(empty($User1) || empty($Password1)) {
	echo "<script>alert('Wrong Username or Password ');</script>";
	exit;
}else{
// adjust_($Department,$Position,$Year,$Division,$Concern);

	include('connection.php');

	//	echo "connected";

		$AdminFound=0;
		// $query = "SELECT PASSWORD FROM `_admin_` WHERE user=$User1";
		// $result=mysqli_query($Connection,$query);
		// if($result->num_rows>0){
		// 	echo "<script>alert('login done');</script>";
		// 	}
		$query='SELECT * from _admin_';
		$result=mysqli_query($Connection,$query);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$PasswordDB=$row['Password'];
				$UserDB=$row['User'];	
				//echo '<br>'.$UserDB.'<br>'.$PasswordDB;
				//echo '<br>'.$User1.'<br>'.$Password1;
				if($User1==$UserDB && $Password1==$PasswordDB){
				//echo "<script>alert('found');</script>";
				$AdminFound=1;
					break;
				}
			}
		}

		if($AdminFound==0){
			//echo "<script>alert($AdminFound);</script>";
			//echo "<script>alert('Wrong Username or Password ');</script>";
			$_SESSION["pin"]="111";
			exit;
			}
		echo "<html>";
		echo "<header>";
		echo "<title> Complaint Table </title>";
		echo "</header>";
		echo " <body background='bg2.jpg'>";
		echo '<link rel="stylesheet" type="text/css" href="css/style.css">';
		echo "<br>";
	 	echo "<header>Grievance Redressal Admin Page</header>";
	 	echo "<br>";
	 	
	 	echo '<form method="post" action="" onsubmit="" name="LogOut">
		<input type="submit" name="LogOut" value="LogOut" class="submit">
		</form>';

		echo "<br>";

				
			$query='SELECT * from _complaints_ ORDER BY ID DESC';
		$result=mysqli_query($Connection,$query);
		if($result->num_rows>0){
			echo "<table border='1px' class='record_table' width='100%' cellpadding='5px'>";
			echo "<tr class='output'>";
				echo "<td>"."ID"."</td>"."<td>"."Name"."</td>"."<td>"."Department"."</td>"."<td>"."Position"."</td>"."<td>"."Year"."</td>"."<td>"."Division"."</td>"."<td>"."Roll"."</td>"."<td>"."Phone"."</td>"."<td>"."Email"."</td>"."<td>"."Subject"."</td>"."<td>"."Concern"."</td>"."<td>"."Detail"."</td>"."<td>"."Date"."</td>"."<td>"."Time"."</td>"."<td>"."Resolved"."</td>";
				echo "</tr>";
				//."<td>"."Confirmed"."</td>"
			while($row=$result->fetch_assoc()){
				$ID=$row["ID"];
				$Name=$row["Name"];
				$Department=$row["Department"];
				$Position=$row["Position"];
				$Year=$row["Year"];
				$Division=$row["Division"];
				$Roll=$row["Roll"];
				$Phone=$row["Phone"];
				$Email=$row["Email"];
				$Subject=$row["Subject"];
				$Concern=$row["Concern"];
				$Detail=$row["Detail"];
				$Confirmed=$row["Confirmed"];
				$Resolved=$row["Resolved"];
				$Date=$row["Date"];
				$Time=$row["Time"];

				echo "<tr class='record'>";
				echo "<td>"."$ID"."</td>"."<td>"."$Name"."</td>"."<td>"."$Department"."</td>"."<td>"."$Position"."</td>"."<td>"."$Year"."</td>"."<td>"."$Division"."</td>"."<td>"."$Roll"."</td>"."<td>"."$Phone"."</td>"."<td>"."$Email"."</td>"."<td>"."$Subject"."</td>"."<td>"."$Concern"."</td>"."<td>"."$Detail"."</td>"."<td>"."$Date"."</td>"."<td>"."$Time"."</td>";
				// if($Confirmed==1)	
				// echo "<td>"."Confirmed"."</td>";
				// else
				// echo "<td>"."Not Confirmed"."</td>";

				if($Resolved==1)	
				echo "<td>"."Resolved"."</td>";
				else{
				echo "<td>";
				echo '<form method="post" action="modify.php" name="Resolved">';
				echo '<input type="hidden" name="hidden" value='.$ID.'>';
				echo '<input type="submit" name="submit" class="submit" value="Resolve" >';
				echo '</form>';
				echo "</td>";
				}
				echo "</tr>";
				echo "<br>";
			}
			echo "</table>";
		}
				echo "</body>";
		echo "</html>";
}
?>

