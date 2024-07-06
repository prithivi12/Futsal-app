<?php
        //authentication data is sent by post methord from the form
        include('db_config.php');
        session_start();

                
        if($_SERVER['REQUEST_METHOD']!="POST")
        {
            header("location: ../fend/location:index.php");
        }


        $user_given_username=$_POST["username"];
        $user_given_password=sha1($_POST["password"]);

        $sql="SELECT `id` FROM `superuser` WHERE username='$user_given_username' && password='$user_given_password'";
        $result=mysqli_query($db, $sql);
        $row=mysqli_fetch_array($result);

        $count=$result->num_rows;

        if($count==1)
        {

            $_SESSION['logged_in_super_id']=$row['id'];
            $_SESSION['logged_in_super']=1;
            header("location: ../su/index.php");
        }
        else
        {
            $_SESSION['error']='login';
            header("location: ../su/index.php");
        }
?>