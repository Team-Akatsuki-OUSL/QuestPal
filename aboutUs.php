<?php

session_start();

if (isset($_SESSION['nic'])) {

?>

    <!DOCTYPE html>

    <html>

    <head>

        <title>About Us</title>

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
                        <h3>About Us </h3>
                        <hr>
                    </div>

                    <div class="row" style="top: 0; color: #5b5b5b;">
                        <div class="col-md 8 ">

                            <div class="d-block mx-4 mt-3">
                                <p class="text-justify  ">We are a group of first-year students at the Open University studying a
                                    Bachelor
                                    of Software Engineering. We were instructed to do this under a suitable theme under the subject EEY4189-Software Design in Group. We worked hard to build QuestPal step by
                                    step. This is our first project and we believe that maximum justice has been done.
                                    QuestPal is a fundraising web application that is a completely free platform for helping each other.
                                    We hope that our efforts to bring everyone together through QuestPal will be successful and provide
                                    you with excellent service</p>
                            </div>
                        </div>
                        <div class="col-lg-4    mt-3">
                            <div class="   text-dark rounded shadow  mb-4 bg-white d-block mx-4">
                                <div class="text-bg-primary p-4 rounded rounded-3">
                                    <h2 class="text-center ">Team Akatsuki</h2>
                                    <hr>
                                    <h6 class=" text-center ">

                                        W.I.S.D.P. Jansz<br>
                                        T.D.K.L.C. Gunasekara <br>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3>Contact Us </h3>
                        <hr>
                    </div>

                    <section class="">

                        <div class="row d-flex justify-content-center pt-1">
                            <div class="col-lg-6 px-4 mb-5">
                                <p class="mt-4">Want to get in touch with us? Please feel free to contact us by filling this form.
                                    Also you can mail us directly to the following email address. We would be happy to answer your questions.
                                </p>
                                <div class="mt-4 ms-3">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>admin.questpal@gmail.com</span>
                                </div>
                            </div>
                            <div class="col-lg-6 px-4">
                                <form>
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row mb-3 pt-4">
                                        <div class="col-md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1">First name</label>
                                                <input type="text" id="form3Example1" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example2">Last name</label>
                                                <input type="text" id="form3Example2" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email input -->
                                    <div class="mb-3">
                                        <label class="form-label" for="form3Example3">Email address</label>
                                        <input type="email" id="form3Example3" class="form-control" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="form3Example3">Subject</label>
                                        <input type="text" id="form3Example3" class="form-control" />
                                    </div>

                                    <!-- Password input -->
                                    <div class=" mb-4">
                                        <label class="form-label" for="form3Example4">Message</label>
                                        <textarea type="textarea" id="form3Example4" class="form-control" rows="6"></textarea>
                                    </div>



                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Submit
                                    </button>

                                </form>
                            </div>
                        </div>
                    </section>
                    <hr class="mt-5 mb-3">

                    <section class="footer  text-black">
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
                            © 2023 QuestPal. All Rights Reserved. <br> Developed by Team Akatsuki.
                        </p>

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