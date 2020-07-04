<?php

session_start();
require_once 'db/dbconn.php';
if(isset($_SESSION['serc_coder'])){

    $user=$_SESSION['serc_coder'];

$sqp=mysqli_query($con,"SELECT *FROM serc_users WHERE id='$user'");
$username=mysqli_fetch_array($sqp)['first_name'];

$q=mysqli_query($con,"SELECT *FROM serc_enrolled WHERE developer='$user'");

if(isset($_POST['course'])){

    $course=trim(htmlentities(mysqli_real_escape_string($con,$_POST['course'])));
    $school=trim(htmlentities(mysqli_real_escape_string($con,$_POST['school'])));
    $intr=trim(htmlentities(mysqli_real_escape_string($con,$_POST['interests'])));

    
    $swe=mysqli_query($con,"SELECT *FROM serc_enrolled WHERE developer='$user' AND course='$course'");
    $swerows=mysqli_num_rows($swe);

    $date=time();

    $datetoday=date('Y-m-d h:m:s', $date);

    if(mysqli_num_rows($q) >= 2){

        echo "You have enrolled in two courses already, you can enroll when you finish one";
    }else if($swerows ==1){
        
        echo "You have already enrolled for this course";
    }else{

    $query=mysqli_query($con,"INSERT INTO serc_enrolled VALUES('','$course','$school','$user','$intr','$datetoday','1')");

    if($query){
        
        echo "success";
    }else{
        echo "Failed, Please try again";
    }


    }

}
}

?>