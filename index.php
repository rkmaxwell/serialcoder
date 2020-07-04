<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Serial Coder&trade;</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

  <style>

  .profiler{z-index:999;}
  h1{font-size:12px;}
  #jumbo{
    padding:12px;
  }
#services{z-index:-1;}
.profiler{
  max-width:400px;margin: 0 auto;min-height:300px;box-shadow:2px 2px 2px 2px rgba(100,100,100,0.3);
  position:fixed;top:15%;background:#fff;padding:10px;z-index:999;right:5%;
}

    </style>

</head>

<body>

  <!-- Navigation -->
  <?php require_once 'header.php';?>

  <!-- Page Content -->
  <div class="container">

  <!-- <div class="profiler"></div> -->

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" id="jumbo">
      <h1 style="font-size:25px" class="display-3">A Warm Welcome!</h1>
      <p class="lead"> Welcome to Serial Coder&copy;, learn to code using a programming language.</p>
      <a href="apply-course.php" class="btn btn-primary btn-lg">Get started!</a><br>
   
    </header>

    <!-- Page Features -->
    <div class="row text-center" id="services">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/android.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Android Development</h4>
            <p class="card-text">Learn to develop Android apps, for commercial, personal and business use. </p>
          </div>
          <div class="card-footer">
            <a href="courses.php" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" id="cos">
        <div class="card h-100">
          <img class="card-img-top" src="images/web2.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Web Programming</h4>
            <p class="card-text">Learn to build scalable, responsive websites using popular frameworks like 
              Boostrap and backend language like PHP
            </p>
          </div>
          <div class="card-footer">
            <a href="courses.php" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/autocad.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">2D &amp; 3D Drawing</h4>
            <p class="card-text">Using AutoCAD learn how to bring images to real life objects, Imagine and Draw.</p>
          </div>
          <div class="card-footer">
            <a href="courses.php" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/Java.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Java Programming</h4>
            <p class="card-text">Java is great programming language with more than five different technologies.
              Learn Java core, JavaFX and Java servlets Programming here.</p>
          </div>
          <div class="card-footer">
            <a href="courses.php" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      
     <div style="margin-left:2%"><a href="apply-course.php"><button type="button" class="btn btn-sm btn-success">View More</button></a></div>
      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <br>
  <br>
  <br>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Serial Coder <?php echo date('Y'); ?></p>
      <p>

      
      <div class="input-group" style="margin:0 auto;">
      
      <label for="exampleInputAmount" class="col-sm-4"></label>
      
        <input type="text" style="width:40%;max-width:350px;" class="form-control" id="exampleInputAmount" placeholder="Email address (for a monthly Newsletter)">
        <span class="input-group-btn">
          <button type="button" class="btn btn-primary">Go!</button>
        </span>
      </div>
      
      </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<script>
$(".navbar-toggle").on('click',function(){$("#navbarResponsives").toggle();});

</script>