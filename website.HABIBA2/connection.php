<?php
$host ="localhost";
$name="root";
$pass="";
$db="web";
$con = mysqli_connect($host,$name,$pass);
if(!$con){
	die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Connected successfully";
	mysqli_select_db($con,$db);
}
?>