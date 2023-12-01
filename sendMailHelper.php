<?php

session_start();

if (isset($_SESSION['nic'])) {

    include "db_connection.php";
    $nic = $_SESSION['nic'];

    $sql = "SELECT full_name, nic, title, postal_address, email_address, mobile_number FROM users WHERE nic=$nic";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();

    $title = $row["title"];
    $name = $row["full_name"];
    $email_address = $row['email_address'];
    $mobileNumber = $row["mobile_number"];
    $address = $row["postal_address"];
    $subject = $_POST['subject'];
    $description = $_POST['description'];

    $to = "s92066537@ousl.lk";
    $headers = "From: {$email_address}\r\nContent-type: text/html";
    $description = "<b>Name: </b>{$title}{$name} <br>
                    <b>NIC: </b>{$nic} <br> 
                    <b>Email: </b>{$email_address} <br> 
                    <b>Mobile Number: </b>{$mobileNumber} <br> 
                    <b>Postal Address: </b>{$address} <br> 
                    <b>Subject: </b>{$subject} <br> 
                    <b>Description: </b> <br>
                     {$description}";

    if (mail($to, $subject, $description, $headers)) {
        echo '
        <html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.bundle.min.js" defer></script>
    </head>

    <body>
        <div class="container-fluid text-bg-light">
            <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh">
            <img src="images/success.png" alt="" width="100px">
                <h3 class="mt-4">Successfully Submitted the Form</h3>
                <p>We will reach you as soon as possible</p>
                <p class="mt-3">Redirecting...</p>
            </div>
        </div>
    </body>

    </html>
        ';
        header( "refresh:4; url=dashboard.php" );
    } else {
        echo '
        <html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.bundle.min.js" defer></script>
    </head>

    <body>
        <div class="container-fluid text-bg-light">
            <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh">
            <img src="images/error.png" alt="" width="100px">
                <h3 class="mt-4 text-center">An error occurred. <br> Please try again later.</h3>
                <p class="mt-3">Redirecting...</p>
            </div>
        </div>
    </body>

    </html>
        ';
        header( "refresh:4; url=dashboard.php" );
    }
} else {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['subject'];
    $email_address = $_POST['email_address'];
    $description = $_POST['description'];

    $to = "s92066537@ousl.lk";
    $headers = "From: {$email_address}\r\nContent-type: text/html";
    $description = "<b>Name: </b>{$first_name} {$last_name} <br>  <b>Email: </b>{$email_address} <br> <b>Subject: </b>{$subject} <br> <b>Description: </b> <br> {$description}";

    if (mail($to, $subject, $description, $headers)) {
        echo '
        <html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.bundle.min.js" defer></script>
    </head>

    <body>
        <div class="container-fluid text-bg-light">
            <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh">
            <img src="images/success.png" alt="" width="100px">
                <h3 class="mt-4">Successfully Submitted the Form</h3>
                <p>We will reach you as soon as possible</p>
                <p class="mt-3">Redirecting...</p>
            </div>
        </div>
    </body>

    </html>
        ';
        header( "refresh:4; url=dashboard.php" );
    } else {
        echo '
        <html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.bundle.min.js" defer></script>
    </head>

    <body>
        <div class="container-fluid text-bg-light">
            <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh">
            <img src="images/error.png" alt="" width="100px">
                <h3 class="mt-4 text-center">An error occurred. <br> Please try again later.</h3>
                <p class="mt-3">Redirecting...</p>
            </div>
        </div>
    </body>

    </html>
        ';
        header( "refresh:4; url=index.php" );
    }
}
