<html>
<head></head>
<body>
	<form method="post">
		<fieldset>
            <legend>Theme Card Info</legend>
            Theme:<br/>
            <input type="text" name="Theme" value=""/>
            <br/>
			Type:<br/>
			<select name="Type">
				<option value="Object">Object</option>
				<option value="Place">Place</option>
				<option value="Setting">Setting</option>
                <option value="Other">Other</option>
			</select>
			<br/><br/>
			<input type="submit" value="Submit"/>
        </fieldset>
    </form>
</body>
<?php
    include("common/db.php");
    $connection = StartConnection();

    $sql = "SELECT Name, TimeStamp FROM Theme_Cards";
    $result = mysql_query($sql);

    $num_rows = mysql_num_rows($result);
    
    echo $num_rows;

    $themeText = $_POST["Theme"];
    echo $themeText;
    
    while($row = mysql_fetch_assoc($result))
    {
        echo $row["Name"];
        if(strcasecmp($row["Name"], $themeText) == 0)
        {
            echo "Found " . $row["Name"] . " added at: " . $row["TimeStamp"];
            break;
        }
    }

    $themeType = $_POST["Type"];
    $datetime = date('Y-m-d H:i:s');

    $insertSql = "INSERT INTO Theme_Cards (Name, Type, TimeStamp) VALUES ($themeText, $themeType, $datetime)";
    if($connection->query($insertSql) === FALSE)
    {
        echo "Query failed: " . mysql_error();
    }

    $connection->close();
?>
</html>