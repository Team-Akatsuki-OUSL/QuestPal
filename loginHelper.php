<?php
session_start();

include "db_connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: login.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] == $uname && $row['password'] == $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['fname'] = $row['first_name'];
                $_SESSION['lname'] = $row['last_name'];
    

                header("Location: dashboard.php");

                exit();
            } else {

                header("Location: login.php?error=Incorect User name or password");

                exit();
            }
        } else {

            header("Location: login.php?error=Incorect User name or password");

            exit();
        }
    }
} else {

    header("Location: login.php");

    exit();
}

?>