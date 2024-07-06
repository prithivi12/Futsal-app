<!DOCTYPE html>
<html>
<head>
        <title>Page Title</title>
</head>
<body>
<?php
        include('db_config.php');
        session_start();

        if($_SERVER['REQUEST_METHOD']!="POST")
        {
                header("location: ../fend/index.php");
        }

        $user_given_username=$_POST["username"];
        $user_given_password=sha1($_POST["password"]);

        

        $sql="SELECT * FROM `futsal_admin` WHERE username='$user_given_username' && encrypted_password='$user_given_password'";
        $result=mysqli_query($db, $sql);
        $row=mysqli_fetch_array($result);

        $count=$result->num_rows;

        if($count==1)
        {
                $_SESSION['logged_in_user_id']=$row['admin_id'];
                $_SESSION['logged_in_user']=1;
                header("location: ../fend/index.php");
                
        }
        else
        {
                $_SESSION['error']='login';
                header("location: ../fend/login.php");
        }
        
?>
</body>
</html>