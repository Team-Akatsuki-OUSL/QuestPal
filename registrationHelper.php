<?php
session_start();
include "db_connection.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['username'];
$pass = $_POST['password'];
$confpass = $_POST['confirmpassword'];
$email = $_POST['email'];

if (empty($fname)) {
    header("Location: register.php?error=First name is required");
    exit();
}else if (empty($lname)) {
    header("Location: register.php?error=Last name is required");
    exit();
}else if(empty($uname)) {
    header("Location: register.php?error=Username is required");
    exit();
}else if (!ctype_alnum($uname)) {
    header("Location: register.php?error=Not a valid username");
    exit();
}else if (empty($email)) {
    header("Location: register.php?error=Email is required");
    exit();
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: register.php?error=Not a valid email");
    exit();
} else if (empty($pass)) {
    header("Location: register.php?error=Password is required");
    exit();
} else if (empty($confpass)) {
    header("Location: register.php?error=Confirm password is required");
    exit();
} else if ($pass!=$confpass) {
    header("Location: register.php?error=Passwords are not same");
    exit();
}else {
    $sql = "INSERT into users (username, email, password, first_name, last_name) VALUES (
        '$uname','$email','$pass','$fname','$lname'
    );";

    mysqli_query($connect, $sql);
    $_SESSION['fname'] = $fname;
    header("Location: reg_done.php");
    exit();

}
?>