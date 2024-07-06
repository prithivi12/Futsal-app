
<?php 
include("header.php");
?>

    <?php 
        
        if(isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user']!=0)
        {
            header("location: ../fend/index.php");
        }
    ?>

    <script type="text/javascript">
        function userLoginValidate()
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
                alert( "Passowrd Not Long" );
                document.loginForm.password.focus() ;
                return false;
            }
            return true;
        }
    </script>

    <main>
		<section>
            <div class="login-box">
                    <div class="login-form">
                    <form onSubmit="return(userLoginValidate());" name="loginForm"action="../php/loginVerifcation.php" method="POST">
                    <label><p>Username: </p> <input class="input" type="text" name='username' placeholder="Username"></label>
                    <label><p>Password: </p> <input class="input" type="password" name="password" placeholder="Password"></label>
                    <br>
                    <input class="button input" type="submit" name='login' value="Log In">
                    </form>
                </div>
            </div>
        </section>
	</main>

	<?php 
		include("footer.php");
	?>


