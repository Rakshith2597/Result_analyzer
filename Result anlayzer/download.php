<?php

function fetch_data()
{
$output = '';
$conn = mysqli_connect("localhost", "root", "password", "kturesult");
$grade=$_POST['grade'];
$query = "SELECT count(grade) AS count, course FROM main WHERE grade='$grade' GROUP BY course";
$result = mysqli_query($conn, $query);

}



?>
<!DOCTYPE html>
<html>
<head>
<title>OVERALL DETAILED</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
<br />
<div class="container">
<h4 align="center"> OVERALL ANALYSIS</h4><br />
<div class="table-responsive">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="col-md-12" align="center">



<form align="center" method="post" action="download1.php">
  <input type="text" name="grade"  placeholder="grade" />

  <input type="submit" name="submit" class="btn btn-success" value="GET details" />


</form>
</div>
<br/>
<br/>

<?php
echo fetch_data();
?>

</div>
</div>
</body>
</html>
