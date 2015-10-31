<?php
    include("common/db.php");
    
    $sql = "SELECT * FROM game_levels";
    $result = mysql_query($sql);

    $num_rows = mysql_num_rows($result);
    
    echo $num_rows;
?>