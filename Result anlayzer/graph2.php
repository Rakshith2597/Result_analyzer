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
  google.setOnLoadCallback(drawChart2);
    google.setOnLoadCallback(drawChart3);


 function drawChart() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php

 $college=$_POST["college"];
 $query = "SELECT count(grade) AS count,course FROM main WHERE grade='F' AND collegename= '$college' GROUP BY course";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['course']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Supplementary detail your college'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart'));

 chart.draw(data, options);
 }

 function drawChart2() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php

 $college=$_POST["college"];
 $dept=$_POST["department"];
 $query = "SELECT count(grade) AS count,course FROM main WHERE grade='F' AND collegename= '$college' AND deptname= '$dept' GROUP BY course";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['course']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Supplementary detail your college and department'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

 chart.draw(data, options);
 }

 function drawChart3() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php

 $college=$_POST["college"];
 $dept=$_POST["department"];
 $query = "SELECT count(grade) AS count,course FROM main WHERE grade='B+' AND collegename= '$college' AND deptname= '$dept' GROUP BY course";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['course']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'B+ in your college and dept'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

 chart.draw(data, options);
 }
 </script>
</head>
<body>
 <h3>Pie Chart</h3>
 <div id="piechart" style="width: 900px; height: 500px;"></div>
 <div id="piechart2" style="width: 900px; height: 500px;"></div>
 <div id="piechart3" style="width: 900px; height: 500px;"></div>
</body>
</html>
