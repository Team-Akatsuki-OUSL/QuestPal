<?php

session_start();
include "db_connection.php";

if (isset($_SESSION['nic'])) {

    $oldnic = $_SESSION['nic'];

    $title = $_POST['newTitle'];
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $fullName = $_POST['fullName'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $postalAddress = $_POST['postalAddress'];
    $dateOfBirth = $_POST['dob'];
    $password = $_POST['password'];

    $sqlDelete = "DELETE FROM users WHERE nic=$oldnic";

    $sqlUpdate = "INSERT into users (title, first_name, last_name, full_name, nic, email_address, mobile_number, postal_address, date_of_birth, password) VALUES (
        '$title','$firstName','$lastName','$fullName','$nic', '$email', '$mobileNumber', '$postalAddress', '$dateOfBirth', '$password'
    );";

    if (mysqli_query($connect, $sqlDelete)) {
        if (mysqli_query($connect, $sqlUpdate)) {
            $_SESSION['nic'] = $nic;
            echo '<script type="text/javascript">
            toastr.options.onHidden = function(){
                window.location.reload();
            }
            toastr.success("Have Fun")
            </script>';
            header("Location: myProfile.php");
        }
    } else {
        echo "Database Error!";
    }
} else {

    header("Location: login.php");

    exit();
}
