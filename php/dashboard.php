<?php

session_start();

if (isset($_SESSION['username'])) {

?>

     <!DOCTYPE html>

     <html>

     <head>

          <title>HOME</title>
          <!--Bootstrap-->
          <link rel="stylesheet" href="../styles/bootstrap.min.css">
          <!-- Font Awesome -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
          <script src="../js/bootstrap.bundle.min.js"></script>
     </head>

     <body style="background-image: url('../images/hnd.jpg');  background-size:cover;">
          <!--main container-->
          <div class="container p-3 ">
          <div style="text-align:right;"><a class="btn btn-primary mb-3" href="logout.php">Logout</a></div>
                        
               <!--container with border-->
               <div class=" border border-2 d-block">
                    <h2 class="my-4 text-center">Hello, <?php echo $_SESSION['fname']; ?>!<br></h2>
                    <div class="d-flex justify-content-center">

                         
                    </div>

                    <!-- Wrapper-->
                    <div class="container">

                         <!--donation lists card-->
                         <div class="card">
                              <h5 class="card-header">Your donations</h5>
                              <div class="card-body">
                              <p class="card-text">You haven't done any donations yet.</p>
                              <a href="#" class="btn btn-primary">New Donation list</a>
                              </div>
                         </div>
                         <br><hr><br>
                         <!--donation request card-->
                         <div class="card">
                              <h5 class="card-header">Your donation requests</h5>
                              <div class="card-body">
                              <p class="card-text">You haven't done any donation requests yet.</p>
                              <a href="createpost.php" class="btn btn-primary">New Donation request</a>
                              </div>
                         </div>
                    </div>
                         <!--end of the wrapper-->

               </div>
          </div>

                  <!--Footer-->
        <section class="footer text-bg-primary py-3 text-bg-light">
            <div class="d-flex justify-content-center">
                <div class="text-center mt-3">

                <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
                    <i class="fab fa-facebook-f" style="scale: 1.5; margin-top:2px;"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
                    <i class="fab fa-google" style="scale: 1.5; margin-top:2px;"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
                    <i class="fab fa-twitter" style="scale: 1.5; margin-top:2px;"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
                    <i class="fab fa-github" style="scale: 1.5; margin-top:2px;"></i>
                </button>
                </div>
            </div>
            <p class="copyright text-center mt-3">
                © 2022 QuestPal. All Rights Reserved <br> Developed by Team Akatsuki.
            </p>




            <p class="text-end" style="margin-top: -50px; margin-right: 25px;"><a href="#top"
                style="text-decoration: none; ">&uarr; Back to top</a></p>

        </section>

     </body>

     </html>

<?php

} else {

     header("Location: index.php");

     exit();
}

?>