<?php

	// Create connection
	$con=mysqli_connect('localhost','root','password','kturesult');

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$a=$_POST['regno'];
$b=$_POST['semester'];
$c=$_POST['department'];


$sql="SELECT SUM(g.point *su.credit)/t.credit AS c
FROM main AS s, subjects AS su ,gradepoint AS g,totcredit AS t
WHERE s.regno='$a' AND s.semester='$b' AND
s.grade=g.grade AND s.course=su.course AND
su.department='$c' AND s.deptname='$c' AND
su.semester='$b' AND t.sem='$b'";

$p="SELECT s.course AS s,s.grade AS g
from main as s  WHERE s.regno='$a' AND s.semester='$b' and s.deptname='$c'";

$result1= mysqli_query($con,$p);
$result=mysqli_query($con,$sql);
$resultcheck=mysqli_num_rows($result);
$resultcheck1=mysqli_num_rows($result1);

if($resultcheck1 < 1)
{
	header("Location:overall.html?empty table");
	exit();
}
else
{ ?>
	<html>
		<body>
		<table border="4" bg color="white" cellspacing="2" cellpadding="2" align="right" width="50%" >
		<center> <h1></h1></center>
		<tr>
			<td><center><h4><?php echo"COURSE" ;?></h4></center></td>
		<td><center><h4><?php echo "NO: OF SUPPLIMENTARY";?></h4></center></td>


	 </tr>
	 <?php
	while($row = mysqli_fetch_assoc($result))
	{
		?>

	 <tr>

	 <td><center><?php echo  $row["course"];?></center></td>
		<td><center><?php echo  $row["count"];?></center></td>


	 </tr>
	 <?php
	}
	?>
	</table>
	</body>
	</html>
	<?php
}

?>
