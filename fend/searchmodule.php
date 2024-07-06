
    <?php 
        ob_start();
        session_start();
    ?>
    <form action=" ../php/search.php" method="get">
    
        <input type="text" name="searchtext">

        <input type="date" name="searchdate">

        <input type="time" name="searchtime">

        <input  type="submit" value="submit">

        
    </form>
