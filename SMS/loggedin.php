<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="javascript.js"></script>
    <title></title>
</head>

<body><div class = "image">
        <form action="logout.php">
            <div align = right>
            <button class="btn2"><b>Logout</b></button></form></div> </div>
    <form action="studentadd.php" method="post" enctype="multipart/form-data" onsubmit="return validateform()">
        <div align="right">
        <div id = "m1">
           <h2>
               Insert new record of student
            </h2>
            </div>
            <?php

if(isset($_SESSION['validateto'])){
       echo '<div class="alert2">

   <b>Added successfully</b></div>'   
    ;   
}else if(isset($_SESSION['validatefname'])){
       echo '<div class="alert2">
   <b>Not added</b></div>'   
    ;   
}else{

}
?>

                <?php 
session_destroy()?>
                    <br>
                    <table class = "tablesv">
                    <div class = "table11">
                        <tr>
                            <td>
                                <label>First Name</label>
                            </td>
                            <td>
                                <input type="text" name="fname" placeholder="Firstname" title="Enter firstname" </td>
                                <td>
                                    <label>Course&emsp;</label>
                                </td>
                                <td>
                                    <div class="drop">
                                        <select name="course" id="course">
                                            <option value="1" selected="selected">Bsc(hons)Computing</option>
                                            <option value="2">BSc.IT</option>
                                            <option value="3">BIM</option>
                                            <option value="4">BCA</option>
                                            <option value="5">CSIT</option>
                                        </select>
                                    </div>
                                </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Last Name</label>
                            </td>
                            <td>
                                <input type="text" name="lname" placeholder="Lastname" title="Enter lastname">
                            </td>
                            <td>
                                <label>Age</label>
                            </td>
                            <td>
                                <input type="text" name="age" placeholder="age" maxlength="2" title="Please age" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Address</label>
                            </td>
                            <td>
                                <input type="text" name="address" placeholder="Address" title="Enter Address/Hometown" />
                            </td>
                            <td>Upload Image</td>
                            <td>
                                <input type="file" name="image" class="choice" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Phone No.</label>
                            </td>
                            <td>
                                <input type="text" name="Phone No." placeholder="Phone No." maxlength="10" title="Please enter exactly 10 digits" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Gender</label>
                            </td>
                            <td>
                                <input type="radio" name="gender" id="gender_m" value="1" checked="checked"> Male&emsp;&emsp;&emsp;&emsp;&emsp; </input>
                                <input type="radio" name="gender" id="gender_f" value="0"> Female </input>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Semester</label>
                            </td>
                            <td>
                                <div class="drop">
                                    <select name="semester" id="semester">
                                        <option value="1">1st</option>
                                        <option value="2" selected="selected">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">4th</option>
                                        <option value="5">5th</option>
                                        <option value="6">6th</option>
                                        <option value="7">7th</option>
                                        <option value="8">8th</option>
                                        <option value="9">9th</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> </td>
                            <td>
                                <button type="Submit" class="btn" name="upload">Add</button>
    </form>
    </td>
    <form action="student_list.php">
        <td>
            <button type="Submit" class="btn2">Show all records</button>
        </td>
        </tr>
    </form>
  
    </table>
    <div class = "copyright">Copyright © 2017 SMS Designated trademarks and brands are the property of their respective owners. Use of this web site constitutes acceptance of the Terms Of Use , Safety Tips.</div></body>
</div>
<body>
</html>