<?php
 $con = mysqli_connect('localhost','root','password','kturesult');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Graphical Analysis
 </title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);

 function drawChart() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php
 $regno=$_POST["regno"];
 $query = "SELECT count(grade) AS count, semester FROM main WHERE grade='F'AND regno= '$regno' GROUP BY semester ";

 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['semester']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Your supplementary details',
 pieHole: 0.4,

 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart'));
 chart.draw(data, options);


 }
 </script>
</head>
<body>
 <h3>Pie Chart</h3>
 <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>
