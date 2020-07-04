
<?php



?>

<?php


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/Java.png">

    <title>Signin</title>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->
    <style>

  
        a{
            color: #000;
        }
        .div-signin{
            margin: 0 auto;
            padding: 10px;
            max-width: 400px;
            width: 40%;
            min-height: 300px;
        }

        @media screen and (max-width:400px){

          .div-signin{
            width:80%;
          }
        }


    </style>
  </head>

  <body class="text-center">
    <div class="div-signin">
    <form class="form-signin" id="loginform">
      <img class="mb-4" src="images/code.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Serial Coder</h1>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

      
      <div class="alert alert-danger" style="display: none;" id="alerterror">
        
        <span id="error"></span>
      </div>
      
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <br>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
    </form>
      <button class="btn btn-lg btn-primary btn-block" type="button" id="buttonLogin">Sign in</button>
      <br>
      <div class="division">
          <div class="left"></div>
          or
          <div class="right"></div>

          </div>
          <p style="cursor: pointer;"><a href="sign-up.html">Don't have an account? Create</a></p>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </div>
  </body>

  <script>
     
     function _(el){return document.getElementById(el);}
    $("#buttonLogin").on('click',function(){

      $mail=$("#inputEmail").val();
      $pass=$("#inputPassword").val();

      if($mail=="" || $pass==""){
        $("#alerterror").show();
            _("alerterror").innerHTML="Please enter email and password";
      }else{
      var fom=document.getElementById("loginform");
      var data =new FormData(fom);
    

      var ajax=new XMLHttpRequest();
      ajax.onreadystatechange=function(){
        if(ajax.status==200 && ajax.readyState==4){

          var response=ajax.responseText.trim();

          if(response=="correct"){
            window.location="index.php";
          }else{
        
        $("#alerterror").show();
            _("alerterror").innerHTML=response;
          }
        }
      }
      ajax.open("POST","validate_login.php",true);
      ajax.send(data);
      }
    });
    
      </script>
</html>
