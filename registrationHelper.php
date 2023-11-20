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



/* if (empty($fname)) {
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
} else*/ 

if ($password!=$confirmPassword) {
    header("Location: register.php?error=Passwords are not same");
    exit();
}else { 
    $sql = "INSERT into users (title, first_name, last_name, full_name, nic, email_address, mobile_number, postal_address, date_of_birth, password) VALUES (
        '$title','$firstName','$lastName','$fullName','$nic', '$email', '$mobileNumber', '$postalAddress', '$dateOfBirth', '$password'
    );";

    if (mysqli_query($connect, $sql)){
        header("Location: reg_done.php");
        exit();
    }else{
        echo "Database Error!";
    }

    

}
?>