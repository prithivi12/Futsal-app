<script type="text/javascript">
        function suLoginValidate()
        {
            if(document.loginForm.username.value=="")
            {
                alert( "Username Empty!" );
                document.loginForm.username.focus() ;
                return false;
            }

            if(document.loginForm.password.value=="")
            {
                alert( "Password Empty" );
                document.loginForm.password.focus() ;
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


<form action="../php/suLoginVerification.php" name="loginForm" onSubmit="return(suLoginValidate());" method="POST">
    <label><p>Username: </p> <input type="text" name='username' placeholder="Username"></label>
    <label><p>Password: </p> <input type="password" name="password" placeholder="Password"></label>
    <input type="submit" name='sulogin' value="Log In">
</form>
