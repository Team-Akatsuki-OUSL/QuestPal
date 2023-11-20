<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/form-styles.css">
  <title>Login</title>
</head>

<body>

  <div class="container ">
    <div class="row">
      <div class="col-lg-6">
        <div class="d-flex flex-column justify-content-center align-items-center logo-unit">
          <img src="images/logo.png" width="100px" alt="">
          <h2 class="mt-2 text-white">QuestPal</h2>
        </div>
      </div>
      <div class="col-lg-6 ">
        <div class="d-flex justify-content-center align-items-center flex-column logo-unit">
            <div class=" p-4 w-75 rounded rounded-3" style="background-color:rgba(255,255,255,0.4)">
              <form method="POST" action="loginHelper.php">
                <?php if (isset($_GET['error'])) { ?>

                  <p class="error w-100 text-bg-danger" style="padding: 10px 25px; "><?php echo $_GET['error']; ?></p>

                <?php } ?>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="emailAddress" required>
                  <label for="floatingInput">Email Address</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="password" required>
                  <label for="floatingInput">Password</label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary d-block mx-auto mt-5">Login</button>
              </form>
              <h6 class="text-center mt-5">Not a member? <div class="text-primary"><a href="register.php" style="cursor: pointer;">Register</a></div>
              </h6>
            </div>
          </div>
      </div>
    </div>
  </div>



</body>

</html>