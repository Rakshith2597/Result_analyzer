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
 google.setOnLoadCallback(drawChart4);
 google.setOnLoadCallback(drawChart5);
 google.setOnLoadCallback(drawChart6);
 google.setOnLoadCallback(drawChart7);


 function drawChart() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php
 $query = "SELECT count(grade) AS count, course FROM main WHERE grade='F' GROUP BY course";

 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['course']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Supplementary per course'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart'));
 chart.draw(data, options);

 }

 function drawChart2() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php
 $query = "SELECT count(grade) AS count, course FROM main WHERE grade='O' GROUP BY course";

 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['course']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'O per course'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
 chart.draw(data, options);

 }


 function drawChart3() {

 var data = google.visualization.arrayToDataTable([
 ['Dept', 'Grade'],
 <?php
 $query = "SELECT count(grade) AS count,deptname FROM main WHERE grade='F' GROUP BY deptname";

 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['deptname']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Supplementary per branch(all sem combined)'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
 chart.draw(data, options);

 }


 function drawChart4() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php
 $query = "SELECT count(grade) AS count, deptname FROM main WHERE grade='F'AND semester='1' GROUP BY deptname";

 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['deptname']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Supplementary per branch on S1'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
 chart.draw(data, options);

 }

 function drawChart5() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php
 $query = "SELECT count(grade) AS count, deptname FROM main WHERE grade='F'AND semester='2' GROUP BY deptname";

 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['deptname']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Supplementary per branch on S2'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart5'));
 chart.draw(data, options);

 }

 function drawChart6() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php
 $query = "SELECT count(grade) AS count, deptname FROM main WHERE grade='F'AND semester='3' GROUP BY deptname";

 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['deptname']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Supplementary per branch on S3'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart6'));
 chart.draw(data, options);

 }

 function drawChart7() {

 var data = google.visualization.arrayToDataTable([
 ['Subject', 'Grade'],
 <?php
 $query = "SELECT count(grade) AS count, deptname FROM main WHERE grade='F'AND semester='4' GROUP BY deptname";

 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['deptname']."',".$row['count']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Supplementary per branch on S4'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart7'));
 chart.draw(data, options);

 }











 </script>
</head>
<body>
 <h3>Pie Chart</h3>
 <div id="piechart" style="width: 900px; height: 500px;"></div>
 <div id="piechart2" style="width: 900px; height: 500px;"></div>
 <div id="piechart3" style="width: 900px; height: 500px;"></div>
 <div id="piechart4" style="width: 900px; height: 500px;"></div>
 <div id="piechart5" style="width: 900px; height: 500px;"></div>
 <div id="piechart6" style="width: 900px; height: 500px;"></div>
 <div id="piechart7" style="width: 900px; height: 500px;"></div>

</body>
</html>
