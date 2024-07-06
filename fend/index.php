

	<?php 
		include("header.php");
	?>
	

	<main>
		<section>
		<?php 
        

        if(!isset($_SESSION['logged_in_user']) || $_SESSION['logged_in_user']!=1)
        {
			include("tablemodule.php");
        }
        else
        {
			include("tablemodule.php");
        	include("reservationmodule.php");

        }
    
	?>
	
		</section>
	</main>

	<?php 
		include("footer.php");
	?>