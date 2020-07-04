<?php

session_start();
require_once 'db/dbconn.php';
if(isset($_POST['email'])){
	
	$fname=$_POST['email'];
	$password=$_POST['password'];
	
	
	$query=mysqli_query($con,"SELECT *FROM serc_users WHERE email='$fname' AND password='$password'");

	$rows=mysqli_num_rows($query);
	$fields=mysqli_fetch_array($query);

	if($rows===1){

		$_SESSION['serc_coder']=$fields['id'];

		echo 'correct';

		if(isset($_GET['redirect'])){

			$redirect=trim($_GET['redirect']);

			header("Location:apply-course.php?course="+redirect);
		}
	}else{
		echo "Incorrect email or password, Please try again";
	}

}
?>