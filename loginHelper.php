<?php
session_start();

include "db_connection.php";

if (isset($_POST['emailAddress']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['emailAddress']);
    $pass = validate($_POST['password']);
    if (empty($email)) {
        header("Location: login.php?error=Email is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email_address='$email' AND password='$pass'";

        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email_address'] == $email && $row['password'] == $pass) {
                echo "Logged in!";           
                $_SESSION['nic'] = $row['nic'];
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