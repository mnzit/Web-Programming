<?php
session_start();
include'dbh.php';

$edit_id = $_GET['id'];
$sql = "SELECT * FROM students WHERE std_id = $edit_id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $std_id =$row['std_id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $age = $row['age'];
    $address = $row['address'];
    $course = $row['course'];
    $semester = $row['semester'];
    $gender = $row['gender'];

}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

         <div align="center" class = "edits">
     <a href = "index.php"><button class="btn2" id="buts"><b>Logout</b></button></a>
            <h1>Edit</h1>
            

                
                    <form action = "editinner.php" method = "POST">
                        <table>
                        <tr>
                        <td><label>Student Id</label></td>
                        <td><input type="text" name = "student_id" value=<?php echo $std_id?> readonly></td>
                        </tr>
                <tr>
                    <td><label>First Name</label></td>

                    <td><input type="text" name="upfname" value=<?php echo $fname?>></td>

                    <td><label>Last Name</label></td>

                    <td><input type="text" name="uplname" value=<?php echo $lname?>></td>
                </tr>
                <tr>
                    <td><label>Age</label></td>

                    <td><input type="text" name="age" value=<?php echo $age?>></td>

                    <td><label>Address</label> </td>

                    <td><input type="text" name="address" value=<?php echo $address?>></td>
                    <tr>
                        <td><label>Course</label></td>
                        <td>
                            <?php
if($course == 1){
    echo"<select name = 'course'>";
    echo"<option value = '1' selected>Bsc(hons)Computing</option>";
     echo"<option value = '2'>BSc.IT</option>";
      echo"<option value = '3'>BIM</option>";
       echo"<option value = '4'>BCA</option>";
        echo"<option value = '5'>CSIT</option></select>";
}
else if($course == 2){
    echo"<select name = 'course'>";
    echo"<option value = '1' >Bsc(hons)Computing</option>";
     echo"<option value = '2' selected>BSc.IT</option>";
      echo"<option value = '3'>BIM</option>";
       echo"<option value = '4'>BCA</option>";
        echo"<option value = '5'>CSIT</option></select>";
}
else if($course == 3){
    echo"<select name = 'course'>";
    echo"<option value = '1' >Bsc(hons)Computing</option>";
     echo"<option value = '2'>BSc.IT</option>";
      echo"<option value = '3' selected>BIM</option>";
       echo"<option value = '4'>BCA</option>";
        echo"<option value = '5'>CSIT</option></select>";
}
else if($course == 4){
    echo"<select name = 'course'>";
    echo"<option value = '1' >Bsc(hons)Computing</option>";
     echo"<option value = '2' >BSc.IT</option>";
      echo"<option value = '3'>BIM</option>";
       echo"<option value = '4' selected>BCA</option>";
        echo"<option value = '5'>CSIT</option></select>";
}
else{
    echo"<select name = 'course'>";
    echo"<option value = '1' >Bsc(hons)Computing</option>";
     echo"<option value = '2'>BSc.IT</option>";
      echo"<option value = '3'>BIM</option>";
       echo"<option value = '4'>BCA</option>";
        echo"<option value = '5' selected>CSIT</option></select>";
}

?>
                        </td>
                        <td><label>Semester</label></td>
                        <td>
                            <?php
if($semester == 1){
     echo"<select name = 'semester'>";
    echo"<option value = '1' selected>1st</option>";
     echo"<option value = '2'>2nd</option>";
      echo"<option value = '3'>3rd</option>";
       echo"<option value = '4'>4th</option>";
        echo"<option value = '5'>5th</option>";
         echo"<option value = '6'>6th</option>";
          echo"<option value = '7'>7th</option>";
           echo"<option value = '8'>8th</option>";
            echo"<option value = '9'>9th</option></select>";
}
else if($semester == 2){
     echo"<select name = 'semester'>";
    echo"<option value = '1' >1st</option>";
     echo"<option value = '2' selected>2nd</option>";
      echo"<option value = '3'>3rd</option>";
       echo"<option value = '4'>4th</option>";
        echo"<option value = '5'>5th</option>";
         echo"<option value = '6'>6th</option>";
          echo"<option value = '7'>7th</option>";
           echo"<option value = '8'>8th</option>";
            echo"<option value = '9'>9th</option></select>";
}
else if($semester == 3){
     echo"<select name = 'semester'>";
    echo"<option value = '1' >1st</option>";
     echo"<option value = '2'>2nd</option>";
      echo"<option value = '3' selected>3rd</option>";
       echo"<option value = '4'>4th</option>";
        echo"<option value = '5'>5th</option>";
         echo"<option value = '6'>6th</option>";
          echo"<option value = '7'>7th</option>";
           echo"<option value = '8'>8th</option>";
            echo"<option value = '9'>9th</option></select>";
}
else if($semester == 4){
     echo"<select name = 'semester'>";
    echo"<option value = '1' >1st</option>";
     echo"<option value = '2'>2nd</option>";
      echo"<option value = '3'>3rd</option>";
       echo"<option value = '4' selected>4th</option>";
        echo"<option value = '5'>5th</option>";
         echo"<option value = '6'>6th</option>";
          echo"<option value = '7'>7th</option>";
           echo"<option value = '8'>8th</option>";
            echo"<option value = '9'>9th</option></select>";
}
else if($semester == 5){
     echo"<select name = 'semester'>";
    echo"<option value = '1' >1st</option>";
     echo"<option value = '2'>2nd</option>";
      echo"<option value = '3'>3rd</option>";
       echo"<option value = '4'>4th</option>";
        echo"<option value = '5' selected>5th</option>";
         echo"<option value = '6'>6th</option>";
          echo"<option value = '7'>7th</option>";
           echo"<option value = '8'>8th</option>";
            echo"<option value = '9'>9th</option></select>";
}
else if($semester == 6){
     echo"<select name = 'semester'>";
    echo"<option value = '1' >1st</option>";
     echo"<option value = '2'>2nd</option>";
      echo"<option value = '3'>3rd</option>";
       echo"<option value = '4'>4th</option>";
        echo"<option value = '5'>5th</option>";
         echo"<option value = '6' selected>6th</option>";
          echo"<option value = '7'>7th</option>";
           echo"<option value = '8'>8th</option>";
            echo"<option value = '9'>9th</option></select>";
}
else if($semester == 7){
     echo"<select name = 'semester'>";
    echo"<option value = '1' >1st</option>";
     echo"<option value = '2'>2nd</option>";
      echo"<option value = '3'>3rd</option>";
       echo"<option value = '4'>4th</option>";
        echo"<option value = '5'>5th</option>";
         echo"<option value = '6'>6th</option>";
          echo"<option value = '7' selected>7th</option>";
           echo"<option value = '8'>8th</option>";
            echo"<option value = '9'>9th</option></select>";
}
else if($semester == 8){
     echo"<select name = 'semester'>";
    echo"<option value = '1' >1st</option>";
     echo"<option value = '2'>2nd</option>";
      echo"<option value = '3'>3rd</option>";
       echo"<option value = '4'>4th</option>";
        echo"<option value = '5'>5th</option>";
         echo"<option value = '6'>6th</option>";
          echo"<option value = '7'>7th</option>";
           echo"<option value = '8' selected>8th</option>";
            echo"<option value = '9'>9th</option></select>";
}
else{
     echo"<select name = 'semester'>";
    echo"<option value = '1' >1st</option>";
     echo"<option value = '2'>2nd</option>";
      echo"<option value = '3'>3rd</option>";
       echo"<option value = '4'>4th</option>";
        echo"<option value = '5'>5th</option>";
         echo"<option value = '6'>6th</option>";
          echo"<option value = '7'>7th</option>";
           echo"<option value = '8'>8th</option>";
            echo"<option value = '9' selected>9th</option></select>";
}
?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Gender</label></td>
                        <td>

 <?php
if($gender == 0){

    echo"<input type='radio' name='gender' value='1'>Male";
     echo"<input type='radio' name='gender' value='0'checked>Female";
}
else{
    echo"<input type='radio' name='gender' value='1' checked>Male";
     echo"<input type='radio' name='gender' value='0'>Female";
}
?>
                        </td>
                        </tr>
                        <tr><td></td><td></td><td></td>
                        <td><button type="submit" class="btn">Update</button></td><td> <a href = "studentlist.php"><button class="btn2">Show all records</button></a></td>
                    </tr>
</table>
                    </form>

                    <br><br><br>
                    <div class = "copyright">Copyright © 2017 california.com Designated trademarks and brands are the property of their respective owners. Use of this web site constitutes acceptance of the Terms Of Use , Safety Tips.</div>

    </body>

    </html>
