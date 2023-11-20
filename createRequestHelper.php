<?php

include "db_connection.php";
session_start();

if (isset($_SESSION['nic'])) {

    $nic = $_SESSION['nic'];
    $title = $_POST['title'];
    $description = $_REQUEST['description'];
    $category = $_POST['category'];
    $district = $_POST['district'];

    $sql = "INSERT into requests (requester_id, title, description, category, district) VALUES ('$nic','$title','$description','$category','$district');";

    mysqli_query($connect, $sql);
    header("Location: dashboard.php");
    exit();

    /* if (empty($fname)) {
        header("Location: register.php?error=First name is required");
        exit();
    } else if (empty($lname)) {
        header("Location: register.php?error=Last name is required");
        exit();
    } else if (empty($uname)) {
        header("Location: register.php?error=Username is required");
        exit();
    } else if (!ctype_alnum($uname)) {
        header("Location: register.php?error=Not a valid username");
        exit();
    } else if (empty($email)) {
        header("Location: register.php?error=Email is required");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?error=Not a valid email");
        exit();
    } else if (empty($pass)) {
        header("Location: register.php?error=Password is required");
        exit();
    } else if (empty($confpass)) {
        header("Location: register.php?error=Confirm password is required");
        exit();
    } else if ($pass != $confpass) {
        header("Location: register.php?error=Passwords are not same");
        exit();
    } else {
        
    } */
} else {
    header("Location: login.php");
    exit();
}
