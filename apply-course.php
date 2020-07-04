<?php

require_once 'header.php';
if(isset($_GET['course'])){
    $cc=trim($_GET['course']);

    $sq=mysqli_query($con,"SELECT *FROM serc_courses WHERE name='$cc'");
    $cosid=mysqli_fetch_array($sq)['id'];
if(isset($_SESSION['serc_coder'])){

    $user=$_SESSION['serc_coder'];

    $sqp=mysqli_query($con,"SELECT *FROM serc_users WHERE id='$user'");
    $username=mysqli_fetch_array($sqp)['first_name'];
    ?>

    <head>
    <style>

.form{
    max-width:400px;width:60%;
}

@media screen and (min-width:768px){

  input[type=text]{
    width:80%;
    max-width:300px;
  }
}
@media screen and (min-width:320px){
  .form{width:80%;}
input[type=text], select{
  
  width:100%;
  max-width:300px;
}
}

    </style>
    <body>
    <div class="container">

<!-- Jumbotron Header -->
<header class="jumbotron my-4">
  
  <div class="alert alert-danger" id="error" style="display:none">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    
  </div>
  
  <div class="form">
  <h2>Last step, Let's finish up</h2>
  <div class="form-group">
    <form method="POST" id="courseform">
    <label for="inputCourse">Course</label>
    <select name="course" id="inputCourse" class="form-control">
      
    <option value="<?php echo $cosid; ?>"><?php echo ucfirst($cc); ?></option>

</select>
    
    <br>
    <label for="inputSchool">School/College</label>
    
    
    <input type="text" name="school" id="inputSchool" class="form-control" value="" required="required" pattern="" title="">
    
    <br>
    <label for="inputinterests">Tell us your interests in <?php echo ucfirst($cc); ?> (Optional) </label>
    <br>
    <?php
    if($cc=="web"){
      
    ?>
    <button type="button" class="btn btn-sm btn-success">Javascript</button>
    <button type="button" class="btn btn-sm btn-success">Bootstrap</button>
    <button type="button" class="btn btn-sm btn-success">jQuery</button>
    <button type="button" class="btn btn-sm btn-success">HTML5</button>
    <button type="button" class="btn btn-sm btn-success">CSS</button>
    <br>
    <br>

    <?php

    }
    ?>
    
    <input type="text" name="interests" id="inputinterests" class="form-control" value="" required="required" pattern="" title="">
    <br>

  </form>
    
    <button type="button" style="width:50%" class="btn btn-large btn-block btn-success" onclick="apply()">Apply</button>
    
  </div>
  </div>
</header>
</div>

<script>
function _(el){return document.getElementById(el);}
function apply(){

var course=_("inputCourse").value;
var school=_("inputSchool").value;
var interests=_("inputinterests").value;
if(course==""){
  _("error").style.display='block';
_("error").innerHTML="Please pick your course";
}
else if(school ==""){
  _("error").style.display='block';
_("error").innerHTML="Please provide your current school";
}else{

  var fom=_("courseform");
  var data=new FormData(fom);

  var ajax=new XMLHttpRequest();
      ajax.onreadystatechange=function(){
        if(ajax.status==200 && ajax.readyState==4){

          var response=ajax.responseText.trim();
         if(response=="success"){

           window.location="course.php?developer=<?php echo $username; ?>";
         }
         _("error").style.display='block';
    _("error").innerHTML=response;
         

        }
      }
      ajax.open("POST","apply.php",true);
      ajax.send(data);

}

}

  </script>
  </body>

    <?php

  }else{

    ?>

<script>
 
    
window.location="sign-in.php?course=<?php echo $cc; ?>";
</script>
    <?php
  }

}else{
    header("Location:courses.php");
}


?>