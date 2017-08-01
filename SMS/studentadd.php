<?php
session_start();
include 'dbh.php';

if(isset($_POST['upload'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$course = $_POST['course'];
	$semester = $_POST['semester'];
	$gender = $_POST['gender'];
	$target = "images/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];

	if(!$fname == ""){

	$sql = "INSERT INTO students(fname,lname,age,address,course,semester,gender,image) VALUES ('$fname','$lname','$age','$address','$course','$semester','$gender','$image');";

	$result = $conn->query($sql);


	if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
	$msg = "Sucess";
	}else{
	$msg = "failed";
	}
	$_SESSION['validateto'] ="Your in";
	header("Location: loggedin.php");
	}
	else{
		$_SESSION['validatefname'] ="Your out";
		header("Location: loggedin.php");
	}

}
?>
