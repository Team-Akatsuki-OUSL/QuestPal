<?php

include "db_connection.php";
session_start();

if (isset($_SESSION['nic'])) {

    $title = $_POST['title'];
    $request_id = $_POST['request_id'];
    $description = $_REQUEST['description'];
    $category = $_POST['category'];
    $district = $_POST['district'];

    $sql = "UPDATE requests SET title='$title', description='$description', category='$category', district='$district' WHERE request_id=$request_id;";

    mysqli_query($connect, $sql);
    header("Location: viewMyRequest.php?request_id=$request_id");
    exit();

} else {
    header("Location: login.php");
    exit();
}

?>
