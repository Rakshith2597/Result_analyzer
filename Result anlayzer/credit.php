<?php

	// Create connection
	$con=mysqli_connect("localhost","root","password","kturesult");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
$a=$_POST['sem'];
$b=$_POST['newvalue'];
$x="select sem from totcredit where sem='$a'";
$y=mysqli_query($con,$x);
$resultcheck=mysqli_num_rows($y);
if($resultcheck>0)
{


$sql="update totcredit set credit='$b' where sem='$a'";
mysqli_query($con,$sql);
	header('Location:upcredit.php?successfull');
	exit();
}
else
{
	header('Location:upcredit.php?unsuccessfull');
	exit();
}

?>
