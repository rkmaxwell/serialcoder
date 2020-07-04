<?php

require_once 'header.php';

if(!isset($_SESSION['serc_coder'])){
header("Location:sign-in.php");
}else{

$user=$_SESSION['serc_coder'];

$query=mysqli_query($con,"SELECT *FROM serc_enrolled WHERE developer='$user'");
$query2=mysqli_query($con,"SELECT *FROM serc_users WHERE id='$user'");

$username=mysqli_fetch_array($query2)['first_name'];

@$shortname=explode(" ",$username);

$fname=$shortname[0];
@$lname=$shortname[1];

    $learnercourses=mysqli_num_rows($query);
}


?>

<!DOCTYPE html>
<html lang="en">
      <link rel="stylesheet" href="css/styles.css"/>

<head>
    <style>
#select-course{padding:10px;width:50%;max-width:200px;float:right;}
.item{padding-left:1%;}

@media screen and (max-width: 600px) {
    
    #scourse{width:80%;}
    img{width:300px;max-height:250px;}
    .item{padding-left:0%;}
}

</style>
</head>
<body>


    <div class="containerblog">
    
    
    <?php
    if($learnercourses > 1){

        ?>
        <div class="alert alert-info">
    <strong>Welcome <?php echo ucwords($fname);?> ! You can switch courses on the selection</strong> 
<br><br>
<select id="scourse" style="max-width:400px;width:60%" onchange="fetchUserCourses(this.value)">
<?php

$sw=mysqli_query($con,"SELECT *FROM serc_enrolled WHERE developer='$user'");
while($ress=mysqli_fetch_array($sw)){

    $cosid=$ress['course'];

    $sww=mysqli_query($con,"SELECT *FROM serc_courses WHERE id='$cosid'");
    while($rows=mysqli_fetch_array($sww)){
        $coursename=$rows['name'];
    
?>
<option value="<?php echo  $rows['id'] ?>"><?php echo $coursename; ?></option>
<?php
    }
}
?>
</select>
</div>
<div class="container">
	<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
        

           
            <?php

for($i=0;$i<10;$i++){


?>

<div class="item">
    <div class="pad15">
    
    <img src="images/ant.png" style="max-width:2400px;height:140px"></iframe>
    
    </div>
</div>
<?php
}
?>
           
                
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>
	
</div>
</div>
    <?php
    }
    else if($learnercourses ==1){
?>
        <div class="alert alert-info">

        <strong>Welcome <?php echo ucwords($username);?>!</strong> 
      
</div>
<?php

    }
    else{

        ?>
        <div class="alert alert-info">

        <strong>Welcome <?php echo ucwords($username);?>! You have not enrolled for any course yet</strong> 


<a href="apply-course.php"><button type="button" style="margin-left:3%" class="btn btn-sm btn-success">Enroll now</button></a>
</div>
        
<?php
    }
    ?>
</div>
    

<script src="js/main.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>

function fetchUserCourses(c){
    
  var ajax=new XMLHttpRequest();

      ajax.onreadystatechange=function(){
          if(ajax.status==200 && ajax.readyState==4){

              var response=ajax.responseText.trim();
              alert(response);
          }
      }
      ajax.open("GET","course-fetcher.php?course="+c,true);
      ajax.send();
  
}


</script>
</body>
</html>