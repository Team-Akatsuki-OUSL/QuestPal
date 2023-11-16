<?php

session_start();

if (isset($_SESSION['username'])) {

    include "db_connection.php";
    $nic = "200116403146";
    $request_id = $_GET['request_id'];
    $sql = "SELECT request_id, CONCAT(first_name, ' ', last_name ) as name, title, description, category, district FROM requests INNER JOIN users ON requests.requester_id=users.nic WHERE request_id=$request_id";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    
    $request_id = $row["request_id"];
    $name = $row["name"] ;
    $title = $row["title"] ;
    $description = $row["description"] ;
    $district = $row["district"];
    $category = $row["category"];


?>

    <!DOCTYPE html>

    <html>

    <head>

        <title>Requests</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/sidebar.css">
        <script src="js/sidebar.js" defer></script>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    </head>

    <body >
  
        <nav>
            <div class="logo-name">
                <div class="logo-image">
                    <img src="images/logo.png" alt="">
                </div>

                <span class="logo_name">QuestPal</span>
            </div>

            <div class="menu-items">
                <ul class="nav-links p-0">
                    <li><a href="dashboard.php">
                            <i class="uil uil-estate"></i>
                            <span class="link-name">Dahsboard</span>
                        </a></li>
                    <li><a href="requests.php">
                            <i class="uil uil-files-landscapes"></i>
                            <span class="link-name">Requests</span>
                        </a></li>
                    <li><a href="donations.php">
                            <i class="uil uil-dollar-sign"></i>
                            <span class="link-name">Donations</span>
                        </a></li>
                    <li><a href="myProfile.php">
                            <i class="uil uil-user-circle"></i>
                            <span class="link-name">My Profile</span>
                        </a></li>
                    <li><a href="aboutUs.php">
                            <i class="uil uil-exclamation-circle"></i>
                            <span class="link-name">About Us</span>
                        </a></li>
                </ul>

                <ul class="logout-mode mb-0 p-0">
                    <li><a href="logout.php">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                        </a></li>

                </ul>
            </div>
        </nav>


        <section class="dashboard">
            <div class="top">
                <i class="uil uil-bars sidebar-toggle"></i>
            </div>
            <div class="dash-content">

                <div class="container m-3  d-block mx-auto">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h3><?php echo "Request #".$request_id." - ". $title  ?> </h3>
                        <h6 class="mx-2"></h6>
                    </div>
                    <hr class="mt-2">


                    <!-- Results table -->
                    <section>

                        <div class="pt-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="m-2 p-4"> 
                                        <p class="mb-2"><strong><?php echo $title ?></strong></p>
                                        <p class="mb-4"><?php echo $title ?></p>
                                        <p class="mb-2"><strong>Category: </strong><?php echo $category ?></p>
                                        <p class="mb-2"><strong>District: </strong><?php echo $district ?></p>
                                    </div>
                                    <?php echo $description ?>
                                </div>
                                <div class="col-md-4">
                                    <div class="m-2 p-4 text-bg-lignt border border-1 rounded rounded-3">
                                        <h3 class="text-center mb-5">Contact Details</h3>
                                        <p class="mb-1"><strong>Name: </strong> <?php echo $name; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>

        </section>
    </body>

    </html>

<?php

} else {

    header("Location: index.php");

    exit();
}

?>