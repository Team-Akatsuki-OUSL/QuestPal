<?php

session_start();

if (isset($_SESSION['username'])) {

?>

  <!DOCTYPE html>

  <html>

  <head>

    <title>HOME</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/navbar.css">
    <script src="js/navbar.js" defer></script>
  </head>

  <body style="background-image: url('images/hnd.jpg');  background-size:cover;">

    <div class="custom-sidebar">
      <div class="logo_content">
        <div class="logo">
          <img src="images/logo.png" width="50px" alt="">
          <div class="logo_name ms-3">
            QuestPal
          </div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav_list">
        <li>
          <a href="#">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-user"></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-chat"></i>
            <span class="links_name">Messages</span>
          </a>
          <span class="tooltip">Messages</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Analytics</span>
          </a>
          <span class="tooltip">Analytics</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-folder"></i>
            <span class="links_name">Files Manager</span>
          </a>
          <span class="tooltip">Files</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cart-alt"></i>
            <span class="links_name">Order</span>
          </a>
          <span class="tooltip">Order</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-heart"></i>
            <span class="links_name">Saved</span>
          </a>
          <span class="tooltip">Saved</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">Settings</span>
          </a>
          <span class="tooltip">Settings</span>
        </li>
        <li>
            <a href="#">
              <i class="bx bx-log-out" id="log_out"></i>
              <span class="links_name">Log Out</span>
            </a>
            <span class="tooltip">Log Out</span>
          </li>
      </ul>
      <div class="profile_content">
        <div class="profile">
          <div class="profile_details">
            <div class="name_job">
              <div class="name "><?php echo "Made with Love ❤️ <br> Team Akatsuki" ?></div>
            </div>
          </div>
      
        </div>
      </div>
    </div>
    <div class="home_content">
      <div class="text">Home Content</div>
    </div>

    <script src="js/navbar.js"></script>
  </body>

  </html>

<?php

} else {

  header("Location: login.php");

  exit();
}

?>