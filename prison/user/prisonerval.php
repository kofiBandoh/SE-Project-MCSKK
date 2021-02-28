<?php
//initializing variables
$fname = "";
$lname = "";
$passport = "";
$dob = "";
$jaildate = "";
$address = "";
$country = "";
$gender = "";
$offence = "";
$sentence = "";

//posting form values in these varialbles
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$passport = $_POST['passport'];
$dob = $_POST['dob'];
$jaildate = $_POST['jaildate'];
$address = $_POST['address'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$offence = $_POST['offence'];
$sentence = $_POST['sentence'];







//db connection
$servername = "localhost";
$dbname = "prisonpro";
$dbusername = "root";
$dbpassword = "";

$myconn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);



//inserting into db
$sql = "INSERT INTO criminals (f_name, l_name, passport_id, dob, jail_date, address, country, gender, offence, sentence)
 VALUES ('$fname', '$lname', '$passport', '$dob', '$jaildate', '$address', '$country', '$gender', '$offence', '$sentence')";





if(mysqli_query($myconn, $sql)){

    echo '<script type="text/javascript">alert("Data Inserted");window.location=\'prisoner.php\';</script>';
}
else{
    echo "<script>alert('Data Not Inserted')</script>";
}

mysqli_close($myconn);
?>