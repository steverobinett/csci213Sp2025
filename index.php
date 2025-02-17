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
    require_once 'utils/dbConnect.php';

    // phpinfo();
    echo "now in a repo!<br>";
    echo "Starting PHP<br>";
    
    

    $conn = dbConnect();

    $sql = "SELECT * FROM customer";
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