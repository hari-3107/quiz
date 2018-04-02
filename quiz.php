<?php
$server = "localhost";
$user = "root";
$pass = "Qwertyuiop123!";
$dbname = "harry";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$address = $_POST['address'];
$sqlcon = mysqli_connect($server,$user,$pass,$dbname);
if(!$sqlcon) {
	die ("Connection Error");
	}
	echo "Connection Established!";
$query = "insert into memdata(fname,lname,dob,mob,email,branch,semester,address) values 
('$fname','$lname','$dob','$mob','$email','$branch','$semester','$address')";
$result = mysqli_query($sqlcon,$query);
if($result) 
{
	echo "Successfully Created the Account!";
	}
	
else {
	echo "Error :";
}	
	
?>
