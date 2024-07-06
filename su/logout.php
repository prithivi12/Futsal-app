<?php 
    ob_start();
    session_start();
    $_SESSION['logged_in_super_id']=null;
    $_SESSION['logged_in_super']=0;
    header("location:index.php");
?>