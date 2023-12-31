<?php

session_start();

if (isset($_SESSION['nic'])) {

  include "db_connection.php";
  $nic = $_SESSION['nic'];
  $sql = "SELECT request_id, full_name, requests.title, category, district FROM requests INNER JOIN users ON requests.requester_id=users.nic";
  $result = $connect->query($sql);

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
          <div class=" ">
            <h3>Requests </h3>
            <hr>

          </div>
        </div>

        <!-- Results table -->
        <section>

          <div class="container ">
            <div class="row ">
              <div class="d-flex justify-content-between p-2 ">

                <h5 class="mx-2"></h5>
                <h6 class="mx-2">Number of Results: <?php echo $result->num_rows;?></h6>
              </div>
            </div>
            <table class="table table-hover align-middle">
              <thead>
                <tr>
                  <th scope="col" class="col">Request ID</th>
                  <th scope="col" class="col">Name</th>
                  <th scope="col" class="col">Request</th>
                  <th scope="col" class="col">District</th>
                  <th scope="col" class="col">Category</th>
                  <th scope="col" class="col"></th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                <?php

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                                        <td>' . $row["request_id"] . '</td>
                                        <td>' . $row["full_name"] . '</td>
                                        <td>' . $row["title"] . '</td>
                                        <td>' . $row["district"] . '</td>
                                        <td>' . $row["category"] . '</td>
                                        <td>
                                            <div>
                                                <button class="btn btn-outline-primary mx-2" onclick="window.location.href=\'viewRequest.php?request_id=' . $row["request_id"] . '\';"><i class="uil uil-eye"> </i>View</button>
                                            </div>
                                        </td></tr>';
                  }
                } else {
                  echo '<tr><td colspan="6" class="text-center"><h6 class="my-5">No Results</h6></td></tr>';
                }

                ?>
              </tbody>
            </table>
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