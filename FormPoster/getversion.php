<?php
echo "getting results ";
    include("common/db.php");
    
    $sql = "SELECT TOP * FROM version";
    $result = mysql_query($sql);
    echo "getting results ";
    if(mysql_num_rows($result) > 0)
    {
        echo " 1 > ";
        while($row = mysql_fetch_assoc($result)){
            echo "results "
            echo $row["version"];
        }
    }
?>