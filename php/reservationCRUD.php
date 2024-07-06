<!--post methord needed form username contact no time date price-->



<?php 
    include('db_config.php');
    session_start();

    if($_SERVER['REQUEST_METHOD']!="POST")
    {
        header("location:../fend/index.php");
    }


    if(!isset($_SESSION['logged_in_user']) || $_SESSION['logged_in_user']!=1)
    {
        header("location: ../fend/index.php");
    }


    $reserved_by_name=$_POST['reserver'];
    $reserved_by_no=$_POST['contact_no'];
    $reservation_time=$_POST['time'];
    $reservation_date=$_POST['date'];
    $reservation_price=$_POST['price'];

    $admin_id=$_SESSION['logged_in_user_id'];


    


    $sql="INSERT INTO `reservation` (`reserved_by_name`, `reserved_by_contact_no`, `time`, `date_of_booking`, `admin_id`) 
        VALUES ('$reserved_by_name', '$reserved_by_no', '$reservation_time',' $reservation_date', '$admin_id')";
    $result=mysqli_query($db, $sql);
    if (!$result) {
        header("location:../fend/index.php/?error=groundReg");
    }
    else
    {
        header("location: ../fend/index.php");
    }


?>