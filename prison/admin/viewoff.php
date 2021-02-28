
<html>
<head>
  <title>View visitors </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1300' cellpadding='8' cellspacing='0' height='200'>

          <tr>
            <td bgcolor='#999999' valign='center'>

<?php


$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="jailor";

//db connection
$con = mysqli_connect("$host","$username","$password") or die("cannot connect");
mysqli_select_db($con, "$db_name")or die("cannot connect");


//reading from db
$sel= mysqli_query($con, "select * from $tbl_name");
echo"<table align='center' width='100%' bgcolor='GREEN' border='0' bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>JAILORS INFORMATION</h3></caption>
<tr bgcolor='green'>
<th width='3%'>First Name</th>
<th width='10%'>Last Name</th>
<th width='15%'>Passport ID</th>
<th width='10%'>Date of birth</th>
<th width='10%'>Telephone</th>

<th width='10%'>Shift</th>

<th width='10%'>Start Time</th>
<th width='10%'>End Time</th>


</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='white'>";


echo  "<td width='7%'>".$row ['f_name']."</td>";
echo  "<td width='10%'>".$row ['l_name']."</td>";
echo  "<td width='10%'>".$row ['passport_id']. "</td>";
echo  "<td width='10%'>".$row ['dob']. "</td>";

echo  "<td width='3%'>" .$row ['phone_number']."</td>";
echo  "<td width='10%'>".$row ['shift']."</td>";
echo  "<td width='10%'>".$row ['start_time']."</td>";
echo  "<td width='10%'>".$row ['end_time']."</td>";




echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='green'><a href="adminpanel.php" target="_parent">Officer Admin <b>|</b></a>
      <a href="../admin/officereport.php" target="_parent">Report <b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'>
					<?php
           include("footer.php");
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</html>