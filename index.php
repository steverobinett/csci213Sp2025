<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h4>DB Connection Demo</h4>

    <?php

    // phpinfo();
    echo "now in a repo!<br>";
    echo "Starting PHP<br>";
    $servername = "localhost:3306"; // or "localhost:3307" for XAMPP
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully<br>";
    }

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            foreach ($row as $key => $value) {
                echo "$key:&nbsp;$value ";
            }
            echo "<br><br>";
        }
    } else {
        echo "0 results";
    }
    ?>
</body>

</html>