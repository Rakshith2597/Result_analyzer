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
		if($rowcount == 1){


			session_start();
			$_SESSION['name'] =$_POST['username'];
			$_SESSION['pass'] = $_POST['password'];
			header('Location:college.php?var='.$name);
			//echo $_SESSION['user'];
	}

		else
		{
			header('Location:signin.php?var=fail');
		}


?>
