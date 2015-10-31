<?php
    include("common/db.php");
    $startNum = $_POST["startNum"];
    
    $sql = "SELECT * FROM game_levels";
    $result = mysql_query($sql);

    $num_rows = mysql_num_rows($result);
    for($i = $startNum; $i < $num_rows; $i++)
    {
        $row = mysql_fetch_array($result);
        echo $row["data"] . "*" ;  
    }
?>