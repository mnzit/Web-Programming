<?php
	
$conn = mysqli_connect("localhost","root","","login_test");

if(!$conn){
	die("Connnection failed:".mysqli_connect_error());
}
?>
