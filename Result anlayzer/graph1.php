<?php
 $con = mysqli_connect('localhost','root','password','analyzer');
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
 $query = "SELECT count(grade) AS count, id FROM result WHERE grade='A' GROUP BY id";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['id']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'id wise'
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
