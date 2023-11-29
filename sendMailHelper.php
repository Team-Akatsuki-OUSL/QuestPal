<?php

include "db_connection.php";
session_start();

if (isset($_SESSION['nic'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['subject'];
    $email_address = $_POST['email_address'];
    $description = $_POST['description'];

    $to = "lakshan.idx@gmail.com";
    $headers = "From:". $email_address."";
    $description = "Name: ".$first_name." ".$last_name."\n\n" .wordwrap($description, 70);

    if(mail("From", "From", "From")){
        echo "Success";
    }else{
        echo "failed";
    }

} else {
    header("Location: login.php");
    exit();
}
