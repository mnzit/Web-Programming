<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd =  md5($_POST['pwd']);

$sql = "Select * from users where uid = '$uid' and pwd = '$pwd'";
$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
	echo"Your name or password is incorrect!";
	$_SESSION['unvalid'] ="not_authorize";
	header("Location: index.php");
	$_SESSION['username'] = $uid;
}
else{
	$_SESSION['id'] = $row['id'];	
	header("Location: loggedin.php");
}



?>
