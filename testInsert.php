<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Insert</title>
</head>

<body>

    <?php
    require_once 'utils/dbConnect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = dbConnect();
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        $sql = "INSERT INTO customer (cust_fname, cust_lname, cust_email) VALUES ('$fname', '$lname', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }       

    ?>

    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">

        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>