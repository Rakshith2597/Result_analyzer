<?php

		$con = mysqli_connect('localhost','root','password','kturesult');


		$query = "SELECT count(grade) AS count, course FROM main WHERE grade='F' GROUP BY course";
		$query1 = "SELECT count(grade) AS count,deptname FROM main WHERE grade='F' GROUP BY deptname";
		$result1= mysqli_query($con,$query1);
		$result=mysqli_query($con,$query);
		$resultcheck=mysqli_num_rows($result);
		$resultcheck1=mysqli_num_rows($result1);

		if($resultcheck < 1)
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
					<td><center><h4><?php echo"DEPARTMENT NAME" ;?></h4></center></td>
			  <td><center><h4><?php echo "NO: OF SUPPLIMENTARY";?></h4></center></td>


			 </tr>
			 <?php
		  while($row = mysqli_fetch_assoc($result1))
		  {
			  ?>

			 <tr>

			 <td><center><?php echo  $row["deptname"];?></center></td>
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
