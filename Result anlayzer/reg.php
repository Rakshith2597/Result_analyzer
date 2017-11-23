<?php

$c=mysqli_connect("localhost","root","password","kturesult");




	$d=$_POST["value"];

	$q="insert into department values ('$d')";
	$result= mysqli_query($c,$q);

	

?>
