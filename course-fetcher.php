<?php

require_once 'db/dbconn.php';

if(isset($_GET['course'])){


    $course=trim($_GET['course']);
   // $user=trim($_GET['user']);

 
   switch($course){

    case 1:

    break;

    case 2:

    break;
    case 3:

    break;
    case 4:

    break;
    case 5:

    break;

    default:

    echo "Invalid course name chosen";
    break;

   }




}else{
    echo "Invalid parameters";
}


?>