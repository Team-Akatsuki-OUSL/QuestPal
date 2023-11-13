<?php 
include "db_connection.php";

$fname = $_POST['title'];
$lname = $_POST['description'];
$uname = $_POST['category'];
$pass = $_POST['district'];
$confpass = $_POST['telephone'];
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


        <!--Footer-->
        <!-- <section class="footer text-bg-primary py-3 text-bg-light">
            <div class="d-flex justify-content-center">
                <div class="text-center mt-3">

                <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
                    <i class="fab fa-facebook-f" style="scale: 1.5; margin-top:2px;"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
                    <i class="fab fa-google" style="scale: 1.5; margin-top:2px;"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
                    <i class="fab fa-twitter" style="scale: 1.5; margin-top:2px;"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
                    <i class="fab fa-github" style="scale: 1.5; margin-top:2px;"></i>
                </button>
                </div>
            </div>
            <p class="copyright text-center mt-3">
                © 2022 QuestPal. All Rights Reserved <br> Developed by Team Akatsuki.
            </p>




            <p class="text-end" style="margin-top: -50px; margin-right: 25px;"><a href="#top"
                style="text-decoration: none; ">&uarr; Back to top</a></p>

        </section> -->