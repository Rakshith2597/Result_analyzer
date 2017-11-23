<?php

	// Create connection
	$con=mysqli_connect("localhost","root","password","kturesult");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}



		$sql="SELECT  * FROM users WHERE username = '".$_POST['username']."'  and password = '".$_POST['password']."' ";
		$result = mysqli_query($con,$sql);
		$rowcount=mysqli_num_rows($result);
		$name = $_POST['username'];
		$pass = $_POST['password'];
		if($rowcount == 1)
		{ if($name=='admin' && $pass='password')
			{session_start();
			$_SESSION['name'] =$_POST['username'];
			$_SESSION['pass'] = $_POST['password'];
			header('Location:adminlogin.html?var='.$name);


			}
			else{
					header('Location:adminsign.php?var=fail');

			//echo $_SESSION['user'];
		}}

		else
		{
			header('Location:adminsign.php?var=fail');
		}


?>
