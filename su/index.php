<!DOCTYPE html>
<html>
<head>
    <title>SuperUser
    </title>
</head>
<body>

    <?php 
        ob_start();
        session_start();

        if( !isset($_SESSION['logged_in_super']) || $_SESSION['logged_in_super']!=1)
        {
            include('login.php');
        }
        else
        {
            echo "You are Logged In";
        }
    
    ?>

</body>
</html>