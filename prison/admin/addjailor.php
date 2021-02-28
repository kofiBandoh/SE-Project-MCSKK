<?php

//initializing variables
$fname = "";
$lname = "";
$passport = "";
$dob = "";
$number = "";
$shift = "";
$start = "";
$end = "";


//storing the entered values in these variables
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$passport = $_POST['passport'];
$dob = $_POST['dob'];
$number = $_POST['mobile'];
$shift = $_POST['shift'];
$start = $_POST['start_time'];
$end = $_POST['end_time'];




//db connection
$servername = "localhost";
$dbname = "prisonpro";
$dbusername = "root";
$dbpassword = "";

$myconn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);



//inserting into db
$sql = "INSERT INTO jailor (f_name, l_name, passport_id, dob, phone_number, shift, start_time, end_time)
 VALUES ('$fname', '$lname', '$passport', '$dob', '$number', '$shift', '$start', '$end')";





if(mysqli_query($myconn, $sql)){

    echo '<script type="text/javascript">alert("Data Inserted");window.location=\'adminpanel.php\';</script>';
}
else{
    echo "<script>alert('Data Not Inserted')</script>";
}

mysqli_close($myconn);
?>