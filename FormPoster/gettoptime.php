<?php
    include("db.php");

    $sql = "SELECT MIN(time) AS min FROM scores";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo $row["min"];
?>