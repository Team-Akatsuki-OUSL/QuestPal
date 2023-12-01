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

} else {
    header("Location: login.php");
    exit();
}
?>
