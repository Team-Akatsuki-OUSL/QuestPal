<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <title>Register</title>
  <link rel="stylesheet" href="css/form-styles.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 p-0">
        <div class="d-flex flex-column align-items-center justify-content-center m-0 p-0 logo-unit" >
          <img src="images/logo.png" width="100px" alt="">
          <h2 class="mt-2 text-white">QuestPal</h2>
        </div>
      </div>
      <div class="col-lg-6 p-0">
        <div class="w-100 p-3 form-fields" style="height: 100vh;">
          <div class="p-4 rounded rounded-3" style="background-color:rgba(255,255,255,0.4)">
            <form method="POST" action="registrationHelper.php">
              <?php if (isset($_GET['error'])) { ?>

                <p class="error w-100 text-bg-danger" style="padding: 10px 25px; "><?php echo $_GET['error']; ?></p>

              <?php } ?>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Title</label>
                <select class="form-select" id="inputGroupSelect01" name="title" required>
                  <option value="" selected disabled hidden>Select</option>

                  <option value="Rev.">Rev.</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                </select>
              </div>

              <div class="row g-2">
                <div class="col form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput1" name="fname" placeholder=" " required>
                  <label for="floatingInput1">First Name</label>
                </div>
                <div class="col form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput2" name="lname" placeholder=" " required>
                  <label for="floatingInput2">Last Name</label>
                </div>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="fullName" placeholder=" " required>
                <label for="floatingInput">Full Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="nic" placeholder=" " required>
                <label for="floatingInput">NIC</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder=" " required>
                <label for="floatingInput">Email address</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="mobileNumber" placeholder=" " required>
                <label for="floatingInput">Mobile Number</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="postalAddress" placeholder=" " required>
                <label for="floatingInput">Postal Address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInput" name="dob" placeholder=" " required>
                <label for="floatingInput">Date of Birth</label>
              </div>

              <div class="row g-2">

                <div class="col form-floating mb-3">
                  <input type="password" class="form-control" id="floatingInput" name="password" placeholder=" " required>
                  <label for="floatingInput">Password</label>
                </div>
                <div class="col form-floating mb-3">
                  <input type="password" class="form-control" id="floatingInput" name="confirmpassword" placeholder=" " required>
                  <label for="floatingInput">Confirm password</label>
                </div>
              </div>
              <div class="form-check mt-4">
                <input type="checkbox" class="form-check-input" id="agreeCheckbox" required>
                <label class="form-check-label checkbox-label" for="agreeCheckbox">
                  I agree that my details may be shared with other registered users.
                </label>
              </div>
              <button type="submit" class="btn btn-lg mt-5 btn-success d-block mx-auto">Register</button>
            </form>
            <h6 class="text-center mt-4">Already a member? <div class="text-Success"><a href="login.php" style="cursor: pointer;">Login</a></div>
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>