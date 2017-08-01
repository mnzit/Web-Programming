<?php
include'dbh.php';
$std_id = $_GET['id'];
		$sql = "DELETE FROM students WHERE std_id = '$std_id'";
		$result = $conn->query($sql);
		header("Location: student_list.php");
?>
