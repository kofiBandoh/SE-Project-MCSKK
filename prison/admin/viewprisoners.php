<html>
<head>
  <title>PRIOSONER DETAILS  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1000' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="criminals";

$con = mysqli_connect("$host","$username","$password") or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot connect");

//reading from db
$sel= mysqli_query($con, "select * from $tbl_name");
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>PRISONER INFORMATION</h3></caption>
<tr bgcolor='green'>

<th width='10%'>First Name</th>
<th width='10%'>Last Name</th>
<th width='10%'>Passport ID</th>
<th width='10%'>DOB</th>
<th width='10%'>Jail Date</th>
<th width='15%'>Address</th>
<th width='10%'>Country</th>
<th width='10%'>Gender</th>
<th width='3%'>Offence</th>
<th width='10%'>Sentence</th>

</tr>";

   while($row=mysqli_fetch_array ($sel))
{
  //displaying from db
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['f_name']."</td>";
echo  "<td width='7%'>".$row ['l_name']."</td>";
echo  "<td width='5%'>".$row ['passport_id']."</td>";
echo  "<td width='5%'>".$row ['dob']."</td>";
echo  "<td width='5%'>".$row ['jail_date']."</td>";
echo  "<td width='7%'>".$row ['address']. "</td>";
echo  "<td width='5%'>".$row ['country']."</td>";
echo  "<td width='3%'>" .$row ['gender']."</td>";
echo  "<td width='7%'>".$row ['offence']."</td>";
echo  "<td width='10%'>".$row ['sentence']."</td>";


echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			
			<a href='../index.php''>Log out</a></td>
		
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