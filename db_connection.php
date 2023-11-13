<?php 
    /* $hostname = "db4free.net:3306";
    $username = "questpaldb";
    $password = "12345678asdfghjkl";
    $dbname = "questpal";
    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$connect) {
        echo "Connection failed!";
    } */

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "questpal";
    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$connect) {
        echo "Connection failed!";
    }
?>