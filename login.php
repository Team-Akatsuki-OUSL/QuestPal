<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <title>Login</title>
</head>

<body style="background-image: url('images/login.jpg'); background-size:cover; min-height: 100vh; overflow:hidden">
  <div class="container mt-4">
    <div class="col-md-6 col-sm-10 col-xl-5 col-xxl-4 d-block mx-auto border border-2 p-4 shadow " style="background-color: rgba(255,255,255,.5);">
      <div class="head mb-4">
        <img src="images/image.png" class="d-block mx-auto" width="75px" alt="">
        <h2 class="text-center">QuestPal</h2>
      </div>
      <form method="POST" action="loginHelper.php">
        <?php if (isset($_GET['error'])) { ?>

          <p class="error w-100 text-bg-danger" style="padding: 10px 25px; "><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
          <label for="floatingInput">Username</label>
        </div>

        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="password">
          <label for="floatingInput">Password</label>
        </div>
        <button type="submit" class="btn btn-primary d-block mx-auto">Login</button>
      </form>
      <h6 class="text-center mt-3">Not a member? <div class="text-primary"><a href="register.php" style="cursor: pointer;">Register</a></div>
      </h6>
    </div>

  </div>

</body>

</html>

