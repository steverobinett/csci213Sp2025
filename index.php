<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>The Widgets Database</title>
</head>

<body>

    <h4>DB Connection Demo</h4>

    <?php
    require_once 'utils/dbConnect.php';
    require_once 'utils/customer.php';

    // phpinfo();
    echo "now in a repo!<br>";
    echo "Starting PHP<br>";



    $conn = dbConnect();


    $sql = "SELECT * FROM customer";

    $customerArr = array();

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $cust = new Customer();
          
                $cust->setCustomerID($row['cust_id']);
                $cust->setFirstName($row['cust_fname']);
                $cust->setLastName($row['cust_lname']);
                $cust->setEmail($row['cust_email']);
                array_push($customerArr, $cust);

            }
            // $cust->setCustomerID($row[0]);
            // $cust->setFirstName($row[1]);
            // $cust->setLastName($row[2])

        }
     else {
        echo "0 results";
    }


    foreach($customerArr as $c) {
        echo "Customer ID: " . $c->getCustomerID() . "<br>";
        echo "First Name: " . $c->getFirstName() . "<br>";
        echo "Last Name: " . $c->getLastName() . "<br>";
        echo "Email: " . $c->getEmail() . "<br>";
        echo "<br>";
    }
    ?>
</body>

</html>