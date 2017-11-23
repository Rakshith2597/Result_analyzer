<?php

$c=mysqli_connect("localhost","root","password","kturesult");



    $p=$_POST["coursecode"];
	$d=$_POST["newvalue"];

	$q="update subjects set credit='$d' where course='$p'";
	$result= mysqli_query($c,$q);





?>
