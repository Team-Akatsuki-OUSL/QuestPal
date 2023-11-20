<?php

session_start();

if (isset($_SESSION['nic'])) {

  include "db_connection.php";
  $nic = $_SESSION['nic'];
  $sql = "SELECT * FROM users WHERE nic=$nic";
  $result = $connect->query($sql);
  $row = $result->fetch_assoc();

?>

  <!DOCTYPE html>

  <html>

  <head>

    <title>My Profile</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/sidebar.css">
    <script src="js/sidebar.js" defer></script>
    <script src="js/editProfile.js" defer></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js" defer></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js" defer></script>


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
            <h3>My Profile </h3>
            <hr>
          </div>
        </div>

        <!-- Results table -->
        <section>

          <div class="container ">
            <div class="row">
              <div class="col-lg-8 px-5 py-4">
                <form method="POST" action="updateProfileHelper.php" id="update-profile">
                  <?php if (isset($_GET['error'])) { ?>

                    <p class="error w-100 text-bg-danger" style="padding: 10px 25px; "><?php echo $_GET['error']; ?></p>

                  <?php } ?>
                  <div class="input-group mb-3">
                    <label class="input-group-text" for="titleSelect">Title</label>
                    <select class="form-select inputField" id="titleSelect" name="newTitle" disabled required>
                      <option value="<?php echo $row['title'] ?>" selected hidden><?php echo $row['title'] ?></option>

                      <option value="Rev.">Rev.</option>
                      <option value="Mr.">Mr.</option>
                      <option value="Ms.">Ms.</option>
                      <option value="Mrs.">Mrs.</option>
                    </select>
                  </div>

                  <div class="row g-2">
                    <div class="col form-floating mb-3">
                      <input type="text" class="form-control inputField" id="floatingInput1" name="fname" placeholder=" " value="<?php echo $row['first_name'] ?>" disabled>
                      <label for="floatingInput1">First Name</label>
                    </div>
                    <div class="col form-floating mb-3">
                      <input type="text" class="form-control inputField" id="floatingInput2" name="lname" placeholder=" " value="<?php echo $row['last_name'] ?>" disabled>
                      <label for="floatingInput2">Last Name</label>
                    </div>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control inputField" id="floatingInput" name="fullName" placeholder=" " value="<?php echo $row['full_name'] ?>" disabled>
                    <label for="floatingInput">Full Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control inputField" id="floatingInput" name="nic" placeholder=" " value="<?php echo $row['nic'] ?>" disabled>
                    <label for="floatingInput">NIC</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control inputField" id="floatingInput" name="email" placeholder=" " value="<?php echo $row['email_address'] ?>" disabled>
                    <label for="floatingInput">Email address</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="number" class="form-control inputField" id="floatingInput" name="mobileNumber" placeholder=" " value="<?php echo $row['mobile_number'] ?>" disabled>
                    <label for="floatingInput">Mobile Number</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control inputField" id="floatingInput" name="postalAddress" placeholder=" " value="<?php echo $row['postal_address'] ?>" disabled>
                    <label for="floatingInput">Postal Address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="date" class="form-control inputField" id="floatingInput" name="dob" placeholder=" " value="<?php echo $row['date_of_birth'] ?>" disabled>
                    <label for="floatingInput">Date of Birth</label>
                  </div>


                  <div class="col form-floating mb-3">
                    <input type="password" class="form-control inputField" id="floatingInput" name="password" placeholder=" " value="<?php echo $row['password'] ?>" disabled>
                    <label for="floatingInput">Password</label>
                  </div>

                </form>
              </div>
              <div class="col-lg-4 px-5 py-4">
                <button class="btn btn-primary d-block w-100 mb-3" id="btnEdit" onclick="toggleInput()">Edit</button>
                <button class="btn btn-primary d-block w-100 mb-3" id="btnUpdate" type="submit" form="update-profile" disabled>Update</button>
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