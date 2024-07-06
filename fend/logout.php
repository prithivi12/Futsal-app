<?php 
session_start();
ob_start();
$_SESSION['logged_in_user_id']=null;
$_SESSION['logged_in_user']=0;
header("location:index.php");
?>