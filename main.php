<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grievance Redressal Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>


   <body background="bg2.jpg">
 
<form method="post" action="submit.php" onsubmit="return validation_()" name="Grievance">
      <header class="header">Grievance Redressal Form</header>
      <br>
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
           <input type="text" placeholder="Surname" name="Name1" id="Name1" />
		   <input type="text" placeholder="First Name" name="Name2" id="Name2" />
			<input type="text" placeholder="Middle Name" name="Name3" id="Name3" />
          
          <label for="mail">Email:</label>
          <input type="email" placeholder="Enter Your Email ID" name="Email" />
          
          <label for="password">Phone Number:</label>
          <input type="number" placeholder="Enter Your Phone Number" maxlength="10" minlength="10" name="Phone" />
         
        </fieldset>
        
        <fieldset>
        	<legend><span class="number">2</span>Your profile</legend>

		<label>Department:</label>
         	<select name="Department">
		<option value="-1">Your Department</option>
		<option value="1">CSE</option>
		<option value="2">Mechanical</option>
		<option value="3">EnTC</option>
		<option value="4">Civil</option>
		<option value="5">Electrical</option>
		<option value="6">First Year</option>
			</select>

		<label>Position:</label>
          <select name="Position" onchange="stud_field_(this);">
		<option value="-1">Your Position</option>
		<option value="1">Student</option>
		<option value="2">Teacher</option>
		<option value="3">Other Stakeholder</option>
		</select>

	<div id='Student' style="display: none;">
		<label>Year:</label>
		<select name="Year">
		<option value="-1">Year of Study</option>
		<option value="1">First Year</option>
		<option value="2">Second Year</option>
		<option value="3">Third Year</option>
		<option value="4">Final Year</option>
		</select>

		<label>Division:</label>
		 <select name="Division">
		<option value="-1">Division</option>
		<option value="1">A</option>
		<option value="2">B</option>
		<option value="3">C</option>
		<option value="4">D</option>
		<option value="5">E</option>
		<option value="6">-</option>
	</select>

			<label>Roll Number :</label>
			<input type="number" placeholder="Enter Your Roll Number" max="100" min="1" name="Roll" />
	</div>
        </fieldset>


        <fieldset>
	<legend><span class="number">3</span>Grievance info</legend>
			<label>Subject of Concern :</label>
			<input type="text" placeholder="" name="Subject" />


			<label>Type of Concern:</label>
			<select name="Concern">
		<option value="-1">Type of Concern</option>
		<option value="1">Ragging</option>
		<option value="2">Sexual Harassment</option>
		<option value="3">Campus Related</option>
		<option value="4">Faculty Related</option>
		<option value="5">Library Related</option>
		<option value="6">Other</option>
		</select>

          
          <label for="bio">Type Detailed Complaint :</label>
          	<textarea rows=5 cols=50 placeholder="Type Detailed Complaint" name="Detail"></textarea>
        </fieldset>
        <button type="submit" name="Submit" value="" class="submit">Submit</button>
      </form>
      


      <script type="text/javascript">
      	function stud_field_(that) {
      		if(that.value=="1"){
            	document.getElementById("Student").style.display = "block";
      		}
      		else
      			document.getElementById("Student").style.display = "none";
      	}


	function validation_() {

	if(document.Grievance.Name1.value==""||document.Grievance.Name1.value.length<3){
		document.Grievance.Name1.value=="";
		document.Grievance.Name1.placeholder="*";
		document.Grievance.Name1.focus();
		return false;
	}

	if(document.Grievance.Name2.value==""||document.Grievance.Name2.value.length<3){
		document.Grievance.Name2.value=="";
		document.Grievance.Name2.placeholder="*";
		document.Grievance.Name2.focus();
		return false;
	}

	if(document.Grievance.Name3.value==""||document.Grievance.Name3.value.length<3){
		document.Grievance.Name3.value=="";
		document.Grievance.Name3.placeholder="*";
		document.Grievance.Name3.focus();
		return false;
	}
	
	if(document.Grievance.Department.value=="-1"){
		return false;
	}
	if(document.Grievance.Position.value=="-1"){
		return false;
	}
	// if(document.Grievance.Year.value=="-1"){
	// 	return false;
	// }
	// if(document.Grievance.Division.value=="-1"){
	// 	return false;
	// }

	// if(document.Grievance.Roll.value==""){
	// 	document.Grievance.Roll.focus();
	// 	return false;
	// }
	// if(document.Grievance.Phone.value==""){
	// 	document.Grievance.Phone.focus();
	// 	return false;
	// }

	if(document.Grievance.Phone.value==""||document.Grievance.Phone.value.length<10){
		document.Grievance.Phone.value=="";
		document.Grievance.Phone.placeholder="*";
		document.Grievance.Phone.focus();
		return false;
	}

	if(document.Grievance.Email.value==""||document.Grievance.Email.value.length<6 || document.Grievance.Email.value.search(".")==-1){
		document.Grievance.Email.value=="";
		document.Grievance.Email.placeholder="*";
		document.Grievance.Email.focus();
		return false;
	}

	if(document.Grievance.Subject.value==""||document.Grievance.Subject.value.length<3){
		document.Grievance.Subject.value=="";
		document.Grievance.Subject.placeholder="*";
		document.Grievance.Subject.focus();
		return false;
	}

	if(document.Grievance.Concern.value=="-1"){
		return false;
	}

	if(document.Grievance.Detail.value==""||document.Grievance.Detail.value.length<5){
		document.Grievance.Detail.value=="";
		document.Grievance.Detail.placeholder="*";
		document.Grievance.Detail.focus();
		return false;
	}
		}
	
</script>

<a href="main2.php" style="color: black;">tsp</a>
    </body>

</html>