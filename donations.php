<?php

session_start();

if (isset($_SESSION['username'])) {

?>

    <!DOCTYPE html>

    <html>

    <head>

        <title>Donations</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/sidebar.css">
        <script src="js/sidebar.js" defer></script>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    </head>

    <body style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('../images/hnd.jpg');  background-size:cover; background-position: center; min-height: 100vh;">
        <!--Go back button-->
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
                        <h3>Donations </h3>
                        <h6 class="mx-2">Number of Results: 0</h6>
                    </div>
                    <hr class="mt-2">


                    <!-- Results table -->
                    <section>

                        <div class="container pt-3">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Donator Name</th>
                                        <th scope="col">Fulfilled Request</th>
                                        <th scope="col">Amount (Rs.)</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>Kavishka Prasad</td>
                                        <td>Rice</td>
                                        <td>91,000.00</td>
                                        <td>2023-11-11</td>
                                    </tr>
                                    <tr>
                                        <td>Asanka Madushanka</td>
                                        <td>Medecine</td>
                                        <td>100,000.00</td>
                                        <td>2023-11-11</td>
                                    </tr>
                                    <tr>
                                        <td>Kavishka Prasad</td>
                                        <td>Rice</td>
                                        <td>85,000.00</td>
                                        <td>2023-11-11</td>
                                    </tr>
                                    <tr>
                                        <td>Asanka Madushanka</td>
                                        <td>Medecine</td>
                                        <td>120,000.00</td>
                                        <td>2023-11-11</td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- <div class="d-flex justify-content-end m-2">
              <button class="btn btn-secondary">View more results</button>
            </div> -->
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