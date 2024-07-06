<?php

    $boolPrintTD=false;

    if(isset($_GET['ground_id']))
        {
            $current_ground_admin_id=$_GET['ground_id'];
        }
    else
        {
            $current_ground_admin_id=1;
        }
    if(!isset($_SESSION['logged_in_user']) || $_SESSION['logged_in_user']!=1)
    {
        include("informationmodule.php");
    }
    ?>
<div class="tableOfReservation">
    <h3><u>Reservation Table</u></h3>
    <table>
        <tr>
        <th>Time</th>
        <th>Name</th>
        <?php  
            
            if($_SESSION['logged_in_user']==1 && $current_ground_admin_id==$_SESSION['logged_in_user_id'])
            {
                echo("<th> Contact no </th>");
            }
            ?>
        </tr>
    
    <?php
        $timeArray=array("7:00:00","8:00:00","9:00:00","10:00:00","11:00:00","12:00:00","13:00:00","14:00:00","15:00:00","16:00:00","17:00:00","18:00:00");
        include('../php/db_config.php');
        
        
        $sql="SELECT * FROM `ground` WHERE `admin_id`='$current_ground_admin_id'";
        $result=mysqli_query($db, $sql);
        $row=mysqli_fetch_array($result);
        $currentDate=date("Y-m-d");


        for($a=0;$a<count($timeArray);$a++)
        {
            $boolPrintTD=false;


            
            echo("<tr>");


            echo("<td>".$timeArray[$a]."</td>");

                
            $sql="SELECT * FROM `reservation` WHERE `date_of_booking`='$currentDate' AND `time`='$timeArray[$a]'";
            $result=mysqli_query($db, $sql);
            $count=$result->num_rows;

            $row=mysqli_fetch_array($result);

            if($row['admin_id']==$current_ground_admin_id)
            {
                echo("<td>".$row['reserved_by_name']."</td>");
                $boolPrintTD=true;
            }
                


            if($_SESSION['logged_in_user']==1 && $current_ground_admin_id==$_SESSION['logged_in_user_id'])
            {
                echo("<td>".$row['reserved_by_contact_no']."</td>");
            }
            if(!$boolPrintTD)
            {
                echo("<td>-----</td>");
            }
                
            echo("</tr>");
        }
            
    ?>
    </table>
</div>

