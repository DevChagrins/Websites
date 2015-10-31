<?php
    function StartConnection()
    {
        $host=""; // Host name 
        $username=""; // Mysql username 
        $password=""; // Mysql password 
        $db_name=""; // Database name

        // Connect to server and select databse.
        $conn = mysql_connect("$host", "$username", "$password")
        if(!$conn)
        {
            die("Connection failed: " . mysql_error()); 
        }

        $selectedDb = mysql_select_db($db_name)
        if(!$selectedDb)
        {
            die("Database selection failed: " . mysql_error());
        }

        return $conn;
    }
?>