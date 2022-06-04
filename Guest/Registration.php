<?php
// include("../Connection/Connection.php");
  
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "db_car";
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) ;

 

  if(isset($_POST['btnsave'])){
   
     $name=$_POST['txtname'];
   
    $email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
    $username=$_POST['txtusername'];

    $sel="select user_email from user where user_email='".$email."'";
    $row=mysqli_query($con,$sel);
    $count=mysqli_num_rows($row);
    if($count>0)
				 	{
				 echo "<script>alert('Invalid Username!!!');</script>";
			   	
			   	   }
                      else{
                          
					$ins="insert into user(user_name,user_email,user_username,user_password) values('".$name."','".$email."','".$username."','".$password."')";
                    mysqli_query($con,$ins);
                   // header("Location:Login.php");
                      }
                    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form method="post" >
		<table align="center" cellspacing="5" cellpadding="5">
			
			
			<tr>
				<td>
					Name
				</td>
				<td>
					<input type="text" name="txtname" placeholder="enter name here" pattern="[a-zA-Z. ]{2,30}" title="this format" required="" autocomplete="off">
				</td>
			</tr>
			
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="email" name="txtemail" id="txtemail" required="" autocomplete="off" placeholder="enter email here">
				</td>
			</tr>
			
			
			<tr>
				<td>
					Username
				</td>
				<td>
					<input type="text" name="txtusername" id="txtusername" required=""   placeholder="enter username" autocomplete="off">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="Password" name="txtpassword" id="txtpassword" required=""    autocomplete="off" placeholder="enter password here" >
				</td>
			</tr>
			
			<tr>
			<td colspan="2" align="center">
					<input type="submit" name="btnsave" value="save"/>
				
					<input type="submit" name="btncancel" value="cancel"/>
				</td>
			</tr>
		</table>
    </form>
</body>
</html>