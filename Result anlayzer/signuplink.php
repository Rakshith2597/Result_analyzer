<?php

	// Create connection
	$con = mysqli_connect('localhost','root','password','kturesult');

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}



		$username = $_POST['username'];
		$pass = $_POST['password'];
		$email = $_POST['email'];



		$sql="INSERT INTO users (username,password,email)
	VALUES('$username','$pass', '$email')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:signin.php?var=1');
	}

	else
	{
		header('Location:college.php?var=fail');
	}


?>
