<?php 
    include('db_config.php');
    session_start();
    //die("hfhf");
    if(!isset($_SESSION['logged_in_user']) ||  $_SESSION['logged_in_user']!=1)
    {
        header("location: ../fend/index.php");
    }

    if($_SERVER['REQUEST_METHOD']!="POST")
    {
        header("location: ../fend/index.php");
    }

    $given_date1=$_POST['datefrom'];
    $given_date2=$_POST['dateto'];
    $admin_id=$_SESSION['logged_in_user_id'];
   
    
    $sql="SELECT sum(price),avg(price),count(reservation_id) FROM `reservation` WHERE admin_id='$admin_id' AND date_of_booking >= '$given_date1' AND date_of_booking <='$given_date2' ";
    $result=mysqli_query($db, $sql);
    $row=mysqli_fetch_array($result);


    
    $sum=$row['sum(price)'];
    $avg=number_format((float)$row['avg(price)'],2,'.','');
    $count=$row['count(reservation_id)'];

    echo($sum."/". $avg."/".$count);

    if($result)
    {
        header("location:../fend/accountingmodule.php/?searchresult=y&sum=".$sum."&avg=".$avg."&count=".$count);
    }



?>