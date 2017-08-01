<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="Script.js"></script>
</head>

<body id = "logs">
    <!-- <img src = "logo.png" class = "size"> -->
    <div class="whole">
        <img src="SMS.png" width="200" height="150">
        <div class="sign">
            <h2>Sign up</h2>
            <form action="signup.php" method="post" onsubmit="return checkBlank()">
                <label>Enter you firstname</label><br>
                <input type="text" name="first" placeholder="Firstname" id="first" ><br>
                <label>Enter you lastname</label><br>
                <input type="text" name="last" placeholder="Lastname" id="last"><br>
                <label>Enter you username</label><br>
                <input type="text" name="uid" placeholder="Username" id="uid" ><br>
                <label>Enter you password</label><br>
                <input type="password" name="pwd" placeholder="Password" id="password" >
                <button type="submit" class="btn">SIGN UP</button>
                <button class="btn"><a href = "index.php">LOG IN</a></button>
            </form>
        </div>
    </div>
     <div class = "copyright">Copyright © 2017 california.com Designated trademarks and brands are the property of their respective owners. Use of this web site constitutes acceptance of the Terms Of Use , Safety Tips.</div></body>
</div>
</body>

</html>
