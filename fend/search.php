<?php 
		include("header.php");
	?>
	

	<main>
		<section>

        <?php 
    		include('../php/db_config.php');


    		if($_SERVER['REQUEST_METHOD']!="GET")
    		{
    		    header("location:index.php");
    		}

    		if(isset($_GET["search"]) && $_GET["search"]!="")
    		{ 
    		   $search_query=$_GET["search"];
    


    		    $sql="SELECT * FROM `ground` WHERE `ground_name` LIKE '%".$search_query."%' OR `location` LIKE '%".$search_query."%' ";
    		    $result=mysqli_query($db, $sql);

				$count=mysqli_num_rows($result);

    		    if($count!=0)
   		    	{
        
        		    while($row=mysqli_fetch_array($result))
            		{
		                echo
        		        (	"<a id='searchItemhref' href='index.php?ground_id=".$row['admin_id']."'><div class='searchItem'>Name: ".
								$row['ground_name']." Location: ".$row['location']." Contact No:".$row['contact_no']."<br>".
							"</div></a>"
                		);
            		}
            	}
    		}
		?>


        </section>
	</main>

	<?php 
		include("footer.php");
	?>