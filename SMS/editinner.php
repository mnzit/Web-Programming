<?php
session_start();
include 'dbh.php';

	$id = $_POST['student_id'];
	$fname = $_POST['upfname'];
	$lname = $_POST['uplname'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$course = $_POST['course'];
	$semester = $_POST['semester'];
	$gender = $_POST['gender'];


	$sql = "UPDATE students SET fname = '$fname',lname = '$lname',age = '$age',address = '$address',course = '$course',semester = '$semester',gender = '$gender' WHERE std_id = '$id'";

	$result = $conn->query($sql);
	header("Location: student_list.php");

	?>
