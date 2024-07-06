
    <?php 
        
        if(!isset($_SESSION['logged_in_user']) || $_SESSION['logged_in_user']!=1)
        {
            header("location: index.php?bruteforcing=1");
        }
    ?>  
    <div class="reservation-box">
        
        <?php 
            $sql="SELECT * FROM `ground` WHERE admin_id='$current_ground_admin_id' ";
            $result=mysqli_query($db, $sql);
            $row=mysqli_fetch_array($result);
        
            echo("<h3>".$row['ground_name']."</h3> <br>");
        ?>

        <div class="reservation-form">
            <form action="../php/reservationCRUD.php" method="POST">
                <label>Reserver:<br>
                <input class="input" type="text" name="reserver" placeholder="Reserver"></label>
                <br>
                <label>Contact No:<br>
                <input class="input" type="text" name="contact_no" placeholder="Contact No"></label>
                <br>
                <label>Time:<br>
                <input class="input" type="time" name="time" ></label>
                <br>
                <label>Date:<br>
                <input class="input" type="date" name="date" ></label>
                <br>
                <input class="input button" type="submit" class="button" value="Reserve">
            </form>
        </div>
    </div>