<?php
function dbConnect()
{
    $servername = "localhost:3306"; // or "localhost:3307" for XAMPP    
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "Connection failed:. $conn->connect_error<br>";
        return False;
    } else {
        return $conn;
    }
}


?>