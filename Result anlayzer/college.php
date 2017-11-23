<html lang="en">
  <head>
    <title>Overall analysis</title>
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

    <div class="login-card">
      <br>

    <h1>PROVIDE SOME DETAILS</h1><br>






  <form method="post" action="analyzelink.php">
        <label for="regno">Register number </label>

    <input type="text" list="regno" placeholder="register number" name="regno">
    <datalist id="regno">

    </datalist>

    <label for="semester">Select Semester </label>

    <input type="text" placeholder="semester" name="semester">
    <datalist id="semester">

    </datalist>

    <label for="department">Select Department </label>

    <input list="Department" type="text" placeholder="department" name="department">
    <datalist id="department">

    </datalist>

    <input type="submit" name="analyze" class="login login-submit" value="Analyze">
  </form>


<form method="post" action=ind.html>
    <input type="submit" name="graph" class="login login-submit" value="Graphical">
  </form>


  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
