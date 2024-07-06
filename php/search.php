<?php 
    include('db_config.php');
    session_start();


    if($_SERVER['REQUEST_METHOD']!="GET")
    {
        header("location: ../fend/index.php");
    }

    if(isset($_GET["searchtext"]) && $_GET["searchtext"]!="")
    { 
       $search_query=$_GET["searchtext"];
    


        $sql="SELECT * FROM `ground` WHERE `ground_name` LIKE '%".$search_query."%' OR `location` LIKE '%".$search_query."%' ";
        $result=mysqli_query($db, $sql);

        $count=mysqli_num_rows($result);

        if($count!=0)
        {
        
            while($row=mysqli_fetch_array($result))
            {
                echo
                (
                    $row['ground_name']." ".$row['location']."<br>"
                );
            }
            }
    }

    if(isset($_GET["searchtime"]))
    { 
       $search_time=$_GET["searchtime"];
    }

    if(isset($_GET["searchdate"]))
    { 
       $search_date=$_GET["searchdate"];
    }


    $sql="SELECT * FROM `reservation` WHERE `time`='$search_time' OR `date_of_booking`='$search_date' ";
    $result=mysqli_query($db, $sql);

    $count=$result->num_rows;

    if($count>0)
    {
        
        while($row=mysqli_fetch_array($result))
        {
            echo
            ("
                //print data through table <br>
            ");
        }
    }
?>