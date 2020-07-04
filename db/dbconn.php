
<?php

$db="serial_db";
$user="root";
$host="localhost";
$password="";

$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
    echo "Connection failed, Please try again";
}



?>