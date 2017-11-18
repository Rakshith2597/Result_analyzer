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

echo "<input id="college" list="college" >
<datalist id="college" >";
$sql="select username from users ";

foreach ($dbo->query($sql) as $row) {
echo "<option value="$row[username]"/>"; // Format for adding options

echo "</datalist>";
}


 ?>
