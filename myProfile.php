<?php

session_start();

if (isset($_SESSION['username'])) {

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
          <div class=" ">
            <h3>Requests </h3>
            <hr>
            <div class="p-2 px-4 rounded rounded-3" style="background-color: #4DA3FF;">

              <form>
                <!-- choose location-->
                <div class="row mt-3">
                  <div class="col">
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="inputGroupSelect01">District</label>
                      <select class="form-select" id="inputGroupSelect01" name="district">
                        <option value="Colombo">Colombo</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Kalutara">Kalutara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Matale">Matale</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Galle">Galle</option>
                        <option value="Matara">Matara</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Vavuniya">Vavuniya</option>
                        <option value="Mullaitivu">Mullaitivu</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Moneragala">Moneragala</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Kegalle">Kegalle</option>
                      </select>
                    </div>
                  </div>


                  <!--category-->
                  <div class="col">
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="inputGroupSelect01">Category</label>
                      <select class="form-select" id="inputGroupSelect01" name="category">
                        <option value="Health">Health</option>
                        <option value="Education">Education</option>
                        <option value="Transport">Transport</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Finance">Finance</option>
                      </select>
                    </div>
                  </div>



                  <!-- discard-->
                  <div class="col-auto">
                    <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-secondary">Search</button>
                    </div>
                  </div>
                </div>



              </form>
            </div>

          </div>
        </div>

        <!-- Results table -->
        <section>

          <div class="container ">
            <div class="row ">
              <div class="d-flex justify-content-between p-2 ">

                <h5 class="mx-2"></h5>
                <h6 class="mx-2">Number of Results: 0</h6>
              </div>
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Subject</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kavishka Prasad</td>
                  <td>Rice</td>
                  <td><button class="btn btn-primary">View</button></td>
                </tr>
                <tr>
                  <td>Asanka Madushanka</td>
                  <td>Medecine</td>
                  <td><button class="btn btn-primary">View</button></td>
                </tr>
                <tr>
                  <td>Kavishka Prasad</td>
                  <td>Rice</td>
                  <td><button class="btn btn-primary">View</button></td>
                </tr>
                <tr>
                  <td>Asanka Madushanka</td>
                  <td>Medecine</td>
                  <td><button class="btn btn-primary">View</button></td>
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