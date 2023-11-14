<?php
session_start();
include "db_connection.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['username'];
$pass = $_POST['password'];
$confpass = $_POST['confirmpassword'];
$email = $_POST['email'];
$contactNumber = $_POST['contactNumber'];
$postalAddress = $_POST['postalAddress'];
$nic = $_POST['nic'];
$occupation = $_POST['occupation'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];


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
}else if (empty($contactNumber)) {
    header("Location: register.php?error=contact Number is required");
    exit();
}else if (empty($postalAddress)) {
    header("Location: register.php?error=postal Address is required");
    exit();
}else if (empty($occupation)) {
    header("Location: register.php?error=occupation is required");
    exit();
}else if (empty($nic)) {
    header("Location: register.php?error=nic is required");
    exit();
}else if (empty($gender)) {
    header("Location: register.php?error=gender is required");
    exit();
}else if (empty($dob)) {
    header("Location: register.php?error=Date of Birth is required");
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
    $sql = "INSERT into users (username, email, password, first_name, last_name, contactNumber, postalAddress, nic, occupation, gender, dob) VALUES (
        '$uname','$email','$pass','$fname','$lname', '$contactNumber', '$postalAddress', '$nic', '$occupation', '$gender', '$dob'
    );";

    mysqli_query($connect, $sql);
    $_SESSION['fname'] = $fname;
    header("Location: reg_done.php");
    exit();

}
?>