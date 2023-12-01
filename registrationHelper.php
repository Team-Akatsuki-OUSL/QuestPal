<?php
include "db_connection.php";

$title = $_POST['title'];
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$fullName = $_POST['fullName'];
$nic = $_POST['nic'];
$email = $_POST['email'];
$mobileNumber = $_POST['mobileNumber'];
$postalAddress = $_POST['postalAddress'];
$dateOfBirth = $_POST['dob'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmpassword'];


if ($password!=$confirmPassword) {
    header("Location: register.php?error=Passwords are not same");
    exit();
}else { 
    $sql = "INSERT into users (title, first_name, last_name, full_name, nic, email_address, mobile_number, postal_address, date_of_birth, password) VALUES (
        '$title','$firstName','$lastName','$fullName','$nic', '$email', '$mobileNumber', '$postalAddress', '$dateOfBirth', '$password'
    );";

    if (mysqli_query($connect, $sql)){
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
                <h3 class="mt-4">Registration Successful</h3>
                <p>Please login to the system.</p>
                <p class="mt-3">Redirecting...</p>
            </div>
        </div>
    </body>

    </html>
        ';
        header( "refresh:4; url=login.php" );
    }else{
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
                <h3 class="mt-4 text-center">Database error occurred. <br> Please try again later.</h3>
                <p class="mt-3">Redirecting...</p>
            </div>
        </div>
    </body>

    </html>
        ';
        header( "refresh:4; url=index.php" );
    }

    

}
?>