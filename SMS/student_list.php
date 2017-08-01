<?php

session_start();
include 'dbh.php';

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="javascript.js"></script>
    </head>

    <body id = "student_list">
        <br>
        <div align = right>
        <a href="loggedin.php"><button class = "btn2"  id = "add">Add new Student</button></a>
        <a href="logout.php">
            <button class="btn2"><b>Logout</b></button></a>
            </div>
            <table class ="hovertable">
                <thead>
                    <tr>
                        <th>Student_id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Course</th>
                        <th>Semester</th>
                        <th>Gender</th>
                        <th>Photo</th>
                        <th>Edit/Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- HTML, PHP And Mysqli Code Here For Generating The Table-->
                    <?php
    
    $sql = 'SELECT * FROM students';
    $result = $conn->query($sql);   

    while($row = mysqli_fetch_array($result)){
        $i = $row['std_id'];
    	echo '<tr>';
    	echo "<td>".$row['std_id']."</td>";
    	echo "<td>".$row['fname']."</td>";
    	echo "<td>".$row['lname']."</td>";
    	echo "<td>".$row['age']."</td>";
    	echo "<td>".$row['address']."</td>";

    	if($row['course'] == 1){
    		echo"<td>Bsc(Hons)Computing</td>";
    	}
    	else if($row['course'] == 2){
    		echo"<td>Bsc.IT</td>";
    	}

    	else if($row['course'] == 3){
    		echo"<td>BIM</td>";
    	}

    	else if($row['course'] == 4){
    		echo"<td>BCA</td>";
    	}
    	else {
    		echo"<td>CSIT</td>";
    	}

    	if($row['semester'] == 1){
    		echo"<td>1st</td>";
    	}
    	else if($row['semester'] == 2){
    		echo"<td>2nd</td>";
    	}
    	else if($row['semester'] == 3){
    		echo"<td>3rd</td>";
    	}
    	else if($row['semester'] == 4){
    		echo"<td>4th</td>";
    	}
    	else if($row['semester'] == 5){
    		echo"<td>5th</td>";
    	}
    	else if($row['semester'] == 6){
    		echo"<td>6th</td>";
    	}
    	else if($row['semester'] == 7){
    		echo"<td>7th</td>";
    	}
    	else if($row['semester'] == 8){
    		echo"<td>8th</td>";
    	}
    	else {
    		echo"<td>9th</td>";
    	}
    	if($row['gender'] == 0){
    		echo "<td>Female</td>";
    	}
    	else {
    		echo "<td>Male</td>";
    	}
        echo "<td><img  class = 'size' src='images/".$row['image']."'</td>";
        echo"<td>";
        echo"<a href ='edit.php?id=$i'><button class = 'btn2' id='edit'>Edit</button>&emsp;</a>";
        echo"<a href ='delete.php?id=$i'><button class = 'btn2' id = 'delete'>Delete</button</td></a>";
    	echo '</tr>';
        }
    die;
    ?>
                </tbody>
            </table>

    </body>

    </html>
