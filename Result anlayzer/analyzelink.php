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

$p="SELECT s.course AS m,s.grade AS g
from main as s  WHERE s.regno='$a' AND s.semester='$b' and s.deptname='$c'";

$res = mysqli_query($con,$sql);
$result=mysqli_query($con,$p);

if (	$resultcheck1=mysqli_num_rows($res) > 0) {
	echo "helooooo";

	while($row = mysqli_fetch_assoc($result)) {
		?>
		  
		<table align='center' border='3' cellpadding='10' padding='50' width='50%'>
			<tr>
			<td ><?php echo $row["c"]; ?></td>

			</tr>

			<tr>


			</table>

		<?php
}

}
else {
	echo "";
}
		 ?>



<?php
	if (	$resultcheck=mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

?>

		  <table align='center' border='3' cellpadding='10' padding='50' width='50%'>
        <tr>
        <td ><?php echo $row["m"]; ?></td>
        <td><?php echo $row["g"]; ?></td>
        </tr>

				<tr>


        </table>

			<?php
	}

}

?>
