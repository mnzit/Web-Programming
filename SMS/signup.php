<?php
session_start();
include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
//$pwd = password_hash($_POST['pwd'],PASSWORD_BCRYPT);
$pwd = md5($_POST['pwd']);
$sql = "insert into users (first,last,uid,pwd) 
values ('$first','$last','$uid','$pwd')";

$result = $conn->query($sql);

header("Location: index.php");
echo"User sucessfully created";
?>
