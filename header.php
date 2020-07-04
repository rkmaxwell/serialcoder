<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Serial Coder&trade;</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
 
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/main.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <style>
.container{z-index:-1;}
#jumbo{z-index:-1;}
    select{
      padding:5px;width:100px;border-radius:10px;line-height:40px;font-size:12px;
    }

.profiler{
  max-width:400px;margin: 0 auto;min-height:300px;box-shadow:2px 2px 2px 2px rgba(100,100,100,0.3);
  position:fixed;top:15%;background:#fff;padding:10px;z-index:999;right:5%;
}


    </style>

</head>



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Serial Coder</a>
      <button class="navbar-toggler" id="buttontoggle" type="button"   aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsives">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="profile.html">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="apply-course.php">Courses</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="course.php">Enrolled courses</a>
          </li>
          
 
          <?php
if(isset($_SESSION['serc_coder'])){
require_once 'db/dbconn.php';
  $user=$_SESSION['serc_coder'];
  $query=mysqli_query($con,"SELECT *FROM serc_users WHERE id='$user'");
  $name=mysqli_fetch_array($query)['first_name'];

  echo '
  
  <li class="nav-item active">
<a class="nav-link" href="">
Test skills
</a>

</li>
  ';
echo '<li class="nav-item active" onclick="account()">
<a class="nav-link" href="logout.php">
<select name="select">
<option value="'.$name.'">'.ucwords($name).'</option>
</select>
</a>
</li>';
}else{
// echo '

// <li class="nav-item active" data-toggle="modal" data-target="#exampleModal">
// <a class="nav-link" href=""> Notifications <span class="badge badge-light">9</span></a>
    

// </li>
// ';
  echo ' <li class="nav-item active">
  <a class="nav-link" href="sign-in.php">Sign in <span style="font-size:14px;">or</span> Sign up</a>
</li>';

}

          ?>
         
        </ul>
      </div>
    </div>
  </nav>

 
<body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>

<script>
$("#buttontoggle").on('click',function(){

  $("#navbarResponsives").toggle();
  
  });

</script>