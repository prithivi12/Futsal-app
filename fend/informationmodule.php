<?php 

    include("../php/db_config.php");


    $sql="SELECT * FROM `ground` WHERE admin_id='$current_ground_admin_id'";
    $result=mysqli_query($db, $sql);
    $row=mysqli_fetch_array($result);

    echo('<div class="information-box">');
    echo('<h3>'.$row['ground_name'].'</h3><br>');
    echo('<h4>'.$row['location'].'&nbsp<i class="material-icons">location_on</i></h4> <br>');
    echo('<h4>'.$row['contact_no'].'&nbsp<i class="material-icons">phone</i></h4>');
    echo("</div>");
?>