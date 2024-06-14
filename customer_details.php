<?php
// Include connection.php to connect to the database
include ("connection.php");

// Check if the name parameter is set in the URL
if (isset($_GET['name'])) {
    // Sanitize the input to prevent SQL injection
    $customer_name = mysqli_real_escape_string($conn, $_GET['name']);

    // Query to retrieve customer data based on the name
    $query = "SELECT Name, Date, Birth_date, Age, Contact_No FROM patient WHERE Name = '$customer_name'";
    $result = mysqli_query($conn, $query);

    // Fetch customer data
    $customer_data = mysqli_fetch_assoc($result);
} else {
    // Redirect to dashboard.php if name parameter is not set
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>

    <style>
        /* Additional CSS styles specific to this page */
        body {
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            padding: 0;
            /* Reset padding */
            margin: 0;
            /* Reset margin */
        }

        .navbar {
            background: rgba(28, 78, 95, 0.9);
            --white: #fff;
            --gray: #f5f5f5;
            --black1: #222;
            --black2: #999;
            width: 100%;
            /* background-color: #333; */
            color: white;
            padding: 20px 0;
            margin: 0;
        }

        .navbar ul {
            list-style-type: none;
            /* Remove default list styles */
            padding: 10px;
            /* Remove default list padding */
            margin: 0;
            /* Remove default list margin */
            text-align: right;
        }

        .navbar li {
            display: inline-block;
            margin-right: 20px;
        }

        .navbar li:last-child {
            margin-right: 20px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
        }

        /* Add hover effect */
        .navbar li:hover a {
            color: #ccc;
            /* Change color to grey on hover */
        }

        .customer-details {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .details {
            text-align: center;
            font-size: 1.7em;
        }

        .header {
            padding: 50px;
            text-align: center;
        }
    </style>


</head>

<body>
    <div class="container">
        <div class="navbar">
            <!-- Your navbar content here -->
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="dashboard.php">DASHBOARD</a></li>
                <!-- Add more navbar links as needed -->
            </ul>
        </div>
    </div>


    <!-- Header -->

    <div class="header">
        <h1>Customer Details</h1>
    </div>

    <!-- Customer Details -->
    <div class="customer-details">
        <div class="container">
            <div class="details">
                <p><strong>Name:</strong> <?php echo $customer_data['Name']; ?></p>
                <p><strong>Date:</strong> <?php echo $customer_data['Date']; ?></p>
                <p><strong>Birthdate:</strong> <?php echo $customer_data['Birth_date']; ?></p>
                <p><strong>Age:</strong> <?php echo $customer_data['Age']; ?></p>
                <p><strong>Contact Number:</strong> <?php echo $customer_data['Contact_No']; ?></p>
            </div>
        </div>
    </div>
</body>

</html>