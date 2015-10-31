<?php
    include("db.php");
   
    $time = $_POST["time"];
    
    $sql = "INSERT INTO scores (time) VALUES ('$time')";
    mysql_query($sql);
?>