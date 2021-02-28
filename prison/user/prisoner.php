<html>
<head>
   <head>
  
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
	  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body> 

	<table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
          <tr>
            <td colspan="2" height="2"><img src="../banner.gif" width="860"></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
	     	   <font size="4">   
           <a href="userpanel.php">HOME</a>  |
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
       
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="prisonerval.php">
       <h2 >Register Prisoner </h2>
            <div class="control_input">
                <label for="FirstName" class="label">First Name</label>
                <input type="text" id="f_name" name="f_name" size=8  maxlength=8 class="reg_fields" required placeholder="First Name"  />
            </div>
            <div class="control_input">
                <label for="LastName" class="label">Last Name</label>
                <input type="text" id="l_name" name="l_name" class="reg_fields" required placeholder="Last Name"/>
            </div>

            <div class="control_input">               
            <label for="Passport" class="label">Passport ID</label>
                <input type="text" id="passport" name="passport" class="reg_fields" required placeholder="Passport ID"/>
            </div>
                
            

            <div class="control_input">               
            <label for="DOB" class="label">DOB</label>
                <input type="date" id="dob" name="dob" class="reg_fields" required placeholder="DOB"/>
            </div>

            <div class="control_input">               
            <label for="JailDate" class="label">Jail Date</label>
                <input type="date" id="jaildate" name="jaildate" class="reg_fields" required placeholder="Jail Date"/>
            </div>


            <div class="control_input">
                <label for="address" class="label">Address</label>
                <input type="text" id="address" name="address" class="reg_fields" required placeholder="Address"/>
            </div>

            <div class="control_input">
                <label for="country" class="label">country</label>
                <input type="text" id="country" name="country" class="reg_fields" required placeholder="Country"/>
            </div>

            <div class="control_input">
                <label for="Gender" class="label">Gender</label>
                <select name="gender" id="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    
  </select>
            </div>

            <div class="control_input">
                <label for="offence" class="label">Offence</label>
                <input type="text" id="offence" name="offence" class="reg_fields" required placeholder="Offence"/>
            </div>

            <div class="control_input">
                <label for="sentence" class="label">Sentence</label>
                <input type="text" id="sentence" name="sentence" class="reg_fields" required placeholder="Sentence"/>
            </div>
            
                             
            


            <div class="control_input">
                <input type="submit" name="signup" id="Add" value="Add " title="" border="0">
            </div>
            
            <div id="validation_msg">
            </div>
    </form>
</td>
</tr>
<tr>
  <?php
           include("Footer.php");
                ?>
</tr>
</table>
</body>
</html>