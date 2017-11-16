<?php

$host= "localhost";
$username="root";
$password="password";
$db_name="analyzer";
$tbl_name="users";
$conn= mysqli_connect($host,$username,$password);


if ($conn)
  {
echo "sucessful";  }
mysqli_select_db($db_name,$conn);


$myusername=$_POST['user'];

$mypassword=$_POST['pass'];
$myusername= stripslashes($myusername);
$mypassword= stripcslashes($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

$result=mysqli_query($conn,$sql) or die("database query failed");


$count=mysqli_num_rows($result);
printf("username: %s\n",$myusername);
printf("password: %s\n",$mypassword);
printf("Result set has %d rows.\n",$count);
if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
header("location:sucess.php");
}
else
{
echo "Wrong Username or Password";
}


 ?>
