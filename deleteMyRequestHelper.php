<?php

include "db_connection.php";
session_start();

if (isset($_SESSION['nic'])) {

    $request_id = $_GET['request_id'];
    $sql = "DELETE FROM requests WHERE request_id=$request_id;";

    mysqli_query($connect, $sql);
    header("Location: dashboard.php");
    exit();

} else {
    header("Location: login.php");
    exit();
}
?>
