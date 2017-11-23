<html lang="en">
  <head>
    <title>College analysis</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!--cutom css -->
      <link href="css/stylish-portfolio.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

            <!-- Custom Fonts -->
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">



  </head>

<body>
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">

      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">KTU Result Analyzer</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html" class="page-scroll">Home</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><center>
<table><tr><td>
<?php
$c=mysqli_connect("localhost","root","password","kturesult");
if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sem=$_POST['semster'];
	$college=$_POST['college'];
	$dept=$_POST['department'];

	$r=mysqli_query($c,"SELECT COUNT(grade) from main WHERE grade= 'F' AND semester='$sem' AND collegename='$college' AND deptname='$dept'");
    while($a=mysqli_fetch_row($r))
	{?>

         <label><h3><b><font color="#0000FF"><center>GRADE DETAILS......</center></font></b></h3></label>

         <table><tr><td><font color="#9999CC">Number of 'F' in Semester(<?php echo "$sem"?>)=</font></td><td><?php echo $a[0];?></td></tr></table>

	<?php } ?>
    <?php
	$s=mysqli_query($c,"SELECT COUNT(grade) from main WHERE grade='F' AND collegename='$college' AND deptname='$dept'");
    while($a=mysqli_fetch_row($s))
	{?>
         <table><tr><td><font color="#9999CC">Number of 'F'in Department(<?php echo "$dept"?>)= </font></td><td><?php echo $a[0];?></td></tr></table>

	<?php } ?>
    <?php
	$P=mysqli_query($c,"SELECT COUNT(DISTINCT regno) from main WHERE grade='F' AND collegename='$college' AND deptname='$dept'");
    while($a=mysqli_fetch_row($P))
	{?>
         <table><tr><td><font color="#9999CC">NO of students failed in Department(<?php echo "$dept" ?>)=</font></td><td><?php echo $a[0];?></td></tr></table>

	<?php } ?>
	 <?php
	$w=mysqli_query($c,"SELECT COUNT(grade) from main WHERE grade='O' AND collegename='$college' AND deptname='$dept'");
    while($a=mysqli_fetch_row($w))
	{?>
         <table><tr><td><font color="#9999CC">NO of 'O' in Department(<?php echo "$dept" ?>)=</font></td><td><?php echo $a[0];?></td></tr></table>

	<?php } ?>
	 <?php
	$e=mysqli_query($c,"SELECT COUNT(grade) from main WHERE grade='Absent' AND collegename='$college' AND deptname='$dept'");
    while($a=mysqli_fetch_row($e))
	{?>
         <table><tr><td><font color="#9999CC">NO of 'Absents'in Department(<?php echo "$dept" ?>)=</font></td><td><?php echo $a[0];?></td></tr></table>

	<?php } ?>





    </td></tr></table></center>
