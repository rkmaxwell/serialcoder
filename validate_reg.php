<?php

require_once 'db/dbconn.php';

if(isset($_POST['name'])){

    $name=trim(htmlentities(htmlentities(mysqli_real_escape_string($con,$_POST['name']))));
    $email=trim(htmlentities(htmlentities(mysqli_real_escape_string($con,$_POST['email']))));
    $phone=trim(htmlentities(htmlentities(mysqli_real_escape_string($con,$_POST['phone']))));
    $pass=trim(htmlentities(htmlentities(mysqli_real_escape_string($con,$_POST['password']))));
    $date=time();

    $datetoday=date('Y-m-d h:m:s',$date);

    $check=mysqli_query($con,"SELECT *FROM serc_users WHERE email='$email' OR phone='$phone'");

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Invalid email address, Please check and retry again";

    }else if(mysqli_num_rows($check) ==1){

            echo "We found either your phone or email address, seems you are already registered.";
        }else{


            $query=mysqli_query($con,"INSERT INTO serc_users VALUES('','$name','$email','$phone','$pass','$datetoday','1')");

            if($query){
                echo "Registration was successful";
            }else{

                echo "Failed. Please try again later";
            }


        }
        
    }
   
?>