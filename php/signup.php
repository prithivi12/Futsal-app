<?php
        
    include('db_config.php');
    session_start();

    var_dump($_POST);

    if($_SERVER['REQUEST_METHOD']!="POST")
    {
        header("location:../fend/index.php");
    }

    if($_SESSION['logged_in_super']!=1 || !isset($_SESSION['logged_in_super']))
    {
        header("location: ../su/index.php");
    }


    $given_username=$_POST['username'];
    $given_password=sha1($_POST['password']);
    $given_fname=$_POST['firstname'];
    $given_lname=$_POST['lastname'];


    $given_ground_name=$_POST['ground_name'];
    $given_location=$_POST['location'];
    $given_contact_no= $_POST['contact'];
    $given_email=$_POST['email'];



    
    $sql="SELECT `username` FROM `futsal_admin` WHERE `username`='$given_username'";
    $result=mysqli_query($db, $sql);
    $row=mysqli_fetch_array($result);
    $count=$count=mysqli_num_rows($result);
    if(count>=1)
    {
        header("location:../su/signup.php/?error=usernameTaken");
    }



    $sql="INSERT INTO `futsal_admin`(`username`, `encrypted_password`, `fname`, `lname`) 
        VALUES ('$given_username','$given_password','$given_fname','$given_lname')";
    $result=mysqli_query($db, $sql);
    if(!$result)
    {
        die("1st");
    }



    $sql="SELECT `admin_id` FROM `futsal_admin` WHERE `username`='$given_username'";
    $result=mysqli_query($db, $sql);
    $row=mysqli_fetch_array($result);

    if($result)
    {
        $new_admin_id=$row['admin_id'];
    }
    else
    {
        die("2nd");
    }
    

    $sql="INSERT INTO `ground`(`ground_name`, `location`, `admin_id`, `contact_no`, `email`)
    VALUES ('$given_ground_name','$given_location','$new_admin_id','$given_contact_no','$given_email')";
    $result=mysqli_query($db, $sql);

    if(!$result)
    {
        die("3rd");
    }



?>