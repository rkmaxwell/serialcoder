<?php
session_start();
require_once 'db/dbconn.php';
if(isset($_SESSION['serc_coder'])){
    unset($_SESSION['serc_coder']);
    session_destroy();
    header("Location:sign-in.php");
}
?>