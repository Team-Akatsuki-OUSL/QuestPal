<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <title>Register</title>
</head>

<body style="background-image: url('images/login.jpg'); background-size:cover; min-height: 100vh; overflow:hidden">
  <div class="container mt-4" >
    <div class="col-md-8 col-sm-12 col-xl-6 col-xxl-5 d-block mx-auto border border-2 p-4 "style="background-color: rgba(255,255,255,.5);">
      <div class="head mb-4">
        <img src="images/image.png" class="d-block mx-auto" width="75px" alt="">
        <h2 class="text-center">QuestPal</h2>
      </div>
      <form method="POST" action="registrationHelper.php">
        <?php if (isset($_GET['error'])) { ?>

          <p class="error w-100 text-bg-danger" style="padding: 10px 25px; "><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <div class="row g-2">
          <div class="col form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput1" name="fname" placeholder="name@example.com">
            <label for="floatingInput1">First name</label>
          </div>
          <div class="col form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput2" name="lname" placeholder="name@example.com">
            <label for="floatingInput2">Last name</label>
          </div>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="contactNumber" placeholder="name@example.com">
          <label for="floatingInput">Contact Number</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="postalAddress" placeholder="name@example.com">
          <label for="floatingInput">Postal Address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="nic" placeholder="name@example.com">
          <label for="floatingInput">NIC</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="occupation" placeholder="name@example.com">
          <label for="floatingInput">occupation</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="gender" placeholder="name@example.com">
          <label for="floatingInput">Gender</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="dob" placeholder="name@example.com">
          <label for="floatingInput">dob</label>
        </div>

        <div class="row g-2">

          <div class="col form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" name="password" placeholder="name@example.com">
            <label for="floatingInput">Password</label>
          </div>
          <div class="col form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" name="confirmpassword" placeholder="name@example.com">
            <label for="floatingInput">Confirm password</label>
          </div>
        </div>
        <button type="submit" class="btn btn-success d-block mx-auto">Register</button>
      </form>
      <h6 class="text-center mt-3">Already a member? <div class="text-Success"><a href="login.php" style="cursor: pointer;">Login</a></div>
      </h6>
    </div>

  </div>

</body>

</html>
