<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>

</head>
<body>
    <?php 
        ob_start();
        session_start();
        if(!isset($_SESSION['logged_in_super']) || $_SESSION['logged_in_super']!=1)
        {
            header("location: ../fend/index.php");
        }
    ?>



    <script type="text/javascript">
        function signupValidate()
        {
            if(document.loginForm.username.value=="")
            {
                alert( "Username Empty!" );
                document.loginForm.username.focus() ;
                return false;
            }
            
            if(document.loginForm.password.value=="")
            {
                alert( "Password Empty!" );
                document.loginForm.password.focus() ;
                return false;
            }
            
            if(document.loginForm.firstname.value=="")
            {
                alert( "First Name Empty!" );
                document.loginForm.firstname.focus() ;
                return false;
            }
            
            if(document.loginForm.lastname.value=="")
            {
                alert( "Last Name Empty!" );
                document.loginForm.lastname.focus() ;
                return false;
            }
            
            if(document.loginForm.ground_name.value=="")
            {
                alert( "Ground Name Empty!" );
                document.loginForm.ground_name.focus() ;
                return false;
            }
            
            if(document.loginForm.location.value=="")
            {
                alert( "Location Empty!" );
                document.loginForm.location.focus() ;
                return false;
            }
            
            if(document.loginForm.contact.value=="")
            {
                alert( "Contact Empty!" );
                document.loginForm.contact.focus() ;
                return false;
            }
            
            if(document.loginForm.email.value=="")
            {
                alert( "E-Mail Empty!" );
                document.loginForm.Email.focus() ;
                return false;
            }


            if(document.loginForm.password.value.length<8)
            {
                alert( "Password Not Long" );
                document.loginForm.password.focus() ;
                return false;
            }

            return true;
        }
    
    </script>


    <form action="../php/signup.php" name="signup" onSubmit="retutn(signupValidate())"method="POST">

    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name ="firstname" placeholder="First Name">
    <input type="text" name ="lastname" placeholder="Last Name">
    <br>
    <input type="text" name="ground_name" placeholder="Ground Name">
    <input type="text" name="location" placeholder="Location">
    <input type="text" name="contact" placeholder="Contact No">
    <input type="text" name="email" placeholder="E-Mail">
    <br>
    <input type="submit" value="Sign Up">

</form>
</body>
</html>