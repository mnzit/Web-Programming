<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>Login</title>
	<link rel = "stylesheet" type ="text/css" href = "style.css">
	</head>
<body id = "log">


<div class = "whole">
<img src = "SMS.png" width="200" height = "150">
<?php
	if(isset($_SESSION['unvalid'])){
		echo '<div class="alert">
   <b>Username and password is invalid</b></div>';
		session_destroy();
	}
?><br>
<div class= "sign"><h2>Sign in</h2>
<form action = "login.php" method = "post" onsubmit="return validateForm()">
<label>Enter your Username:</label><br>
<input type = "text"  name = "uid" id = "uid"placeholder = "Username" required><br>
<label>Enter your Password:</label><br>
<input type = "password" name = "pwd" id = "password" placeholder = "Password" required><br><br>
<button type = "submit" class = "btn">LOGIN</button>

</form>
</div>

<!-- <?php
	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	}else{
		echo"You're not logged in ";
	}
?> -->
<a href="newaccount.php"><button class = "btns">Create a new account</button></a>
</div>
<div class = "copyright">Copyright © 2017 california.com Designated trademarks and brands are the property of their respective owners. Use of this web site constitutes acceptance of the Terms Of Use , Safety Tips.</div>
</body>
</html>