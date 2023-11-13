<?php

session_start();

if (isset($_SESSION['username'])) {

?>

    <!DOCTYPE html>

    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.bundle.min.js"></script>

        <!----===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: '#desc',
                placeholder: "If you type more, you will get more attraction"
            });
        </script>

        <title>Admin Dashboard Panel</title>
    </head>

    <body>
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
                <div class="overview">
                    <div class="title" style="margin-top: 20px;">
                        <i class="uil uil-tachometer-fast-alt"></i>
                        <span class="text">Dashboard</span>
                    </div>

                    <div class="boxes">
                        <div class="box box1">
                            <i class="uil uil-receipt"></i>
                            <span class="text">My Requests</span>
                            <span class="number">0</span>
                        </div>
                        <div class="box box2">
                            <i class="uil uil-dollar-sign"></i>
                            <span class="text">My Donations</span>
                            <span class="number">0</span>
                        </div>
                        <div class="box box3">
                            <i class="uil uil-favorite"></i>
                            <span class="text">Favourites</span>
                            <span class="number">0</span>
                        </div>
                    </div>
                </div>

                <div class="activity">
                    <div class="title">
                        <div class="d-flex justify-content-between w-100">
                            <div class="d-flex align-items-center">
                                <i class="uil uil-receipt"></i>
                                <span class="text">My Requests</span>
                            </div>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class=" btn border-0 d-flex align-items-center text-bg-primary rounded rounded-3 p-2 px-3 pb-0">
                                <h3>+</h3>
                                <h6 class="ms-3">Add New</h6>
                            </button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create a Request</h1>
                                    <button form="create-request" type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid d-block mx-auto">
                                        <form id="create-request" class="ms-4">
                                            <div class="bg-white rounded p-3 input-group-lg ">
                                                <!--Name-->
                                                <div class="input-group mb-3 row">
                                                    <span class="input-group-text col-3" id="inputGroup-sizing-default">Title</span>
                                                    <input type="text" class="form-control col-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="title">
                                                </div>

                                                <!-- description area-->
                                                <div class="input-group mb-3 row">
                                                    <span class="input-group-text col-3">Description</span>
                                                    <div class="form-control col-9 " style="padding: 0;">
                                                        <textarea style="padding: 0; border: none" aria-label="With textarea" name="description" id="desc"></textarea>
                                                    </div>
                                                </div>

                                                <!--category-->
                                                <div class="input-group mb-3 row">
                                                    <label class="input-group-text col-3" for="inputGroupSelect01">Category</label>
                                                    <select class="form-select col-9" id="inputGroupSelect01" name="category">
                                                        <option value="" selected disabled hidden>Select</option>
                                                        <option value="Health">Health</option>
                                                        <option value="Education">Education</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Agriculture">Agriculture</option>
                                                        <option value="Finance">Finance</option>
                                                    </select>
                                                </div>


                                                <!-- choose location-->
                                                <div class="input-group mb-3 row">
                                                    <label class="input-group-text col-3" for="inputGroupSelect01">District</label>
                                                    <select class="form-select col-9" id="inputGroupSelect01" name="district">
                                                        <option value="" selected disabled hidden>Select</option>
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

                                                <!--Telphone number-->
                                                <div class="input-group mb-3 row">
                                                    <span class="input-group-text col-3" id="inputGroup-sizing-default">Telephone Number</span>
                                                    <input type="text" class="form-control col-9" aria-label="Recipient's username" aria-describedby="button-addon2" name="telphone">
                                                </div>

                                                <!--email-->
                                                <div class="input-group mb-3 row">
                                                    <span class="input-group-text col-3" id="inputGroup-sizing-default">Email</span>
                                                    <input type="text" class="form-control col-9" aria-label="Recipient's username" aria-describedby="button-addon2" name="email">
                                                </div>

                                                <!-- input file-->
                                                <div class="input-group mb-3 row">
                                                    <label class="input-group-text col-3" for="inputGroupFile02">Upload Files (If any)</label>
                                                    <input type="file" class="form-control col-9" id="inputGroupFile02" name="documents">
                                                </div>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between align-items-center mx-5">
                                    <span><i class="uil uil-exclamation-triangle text-danger"> </i>Please check the entered information twice before submitting the form.</span>
                                    <div class="">
                                        <button id="btn-reset" form="create-request" type="reset" class="btn btn-secondary">Reset</button>
                                        <button type="button" class="btn btn-primary ms-3">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container ">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-5">Name</th>
                                    <th scope="col" class="col-4">Subject</th>
                                    <th scope="col" class="col-3"></th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <td>Kavishka Prasad</td>
                                    <td>Rice</td>
                                    <td>
                                        <div class="">
                                            <button class="btn btn-primary mx-2">View</button>
                                            <button class="btn btn-success mx-2">Update</button>
                                            <button class="btn btn-danger mx-2">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Asanka Madushanka</td>
                                    <td>Medecine</td>
                                    <td>
                                        <div class="">
                                            <button class="btn btn-primary mx-2">View</button>
                                            <button class="btn btn-success mx-2">Update</button>
                                            <button class="btn btn-danger mx-2">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kavishka Prasad</td>
                                    <td>Rice</td>
                                    <td>
                                        <div class="">
                                            <button class="btn btn-primary mx-2">View</button>
                                            <button class="btn btn-success mx-2">Update</button>
                                            <button class="btn btn-danger mx-2">Delete</button>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Asanka Madushanka</td>
                                    <td>Medecine</td>
                                    <td>
                                        <div class="">
                                            <button class="btn btn-primary mx-2">View</button>
                                            <button class="btn btn-success mx-2">Update</button>
                                            <button class="btn btn-danger mx-2">Delete</button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                    <div class="title">
                        <div class="d-flex justify-content-between w-100 mt-4">
                            <div class="d-flex align-items-center">
                                <i class="uil uil-dollar-sign"></i>
                                <span class="text">My Donations</span>
                            </div>
                        </div>
                    </div>

                    <div class="container mb-5">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Requester Name</th>
                                        <th scope="col">Fulfilled Request</th>
                                        <th scope="col">Amount (Rs.)</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>Kavishka Prasad</td>
                                        <td>Rice</td>
                                        <td>91,000.00</td>
                                        <td>2023-11-11</td>
                                    </tr>
                                    <tr>
                                        <td>Asanka Madushanka</td>
                                        <td>Medecine</td>
                                        <td>100,000.00</td>
                                        <td>2023-11-11</td>
                                    </tr>
                                    <tr>
                                        <td>Kavishka Prasad</td>
                                        <td>Rice</td>
                                        <td>85,000.00</td>
                                        <td>2023-11-11</td>
                                    </tr>
                                    <tr>
                                        <td>Asanka Madushanka</td>
                                        <td>Medecine</td>
                                        <td>120,000.00</td>
                                        <td>2023-11-11</td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- <div class="d-flex justify-content-end m-2">
              <button class="btn btn-secondary">View more results</button>
            </div> -->
                        </div>
                </div>
            </div>
        </section>


        <script src="js/sidebar.js"></script>

        <script>
            var resetButton = document.getElementById("#btn-reset");
            resetButton.onclick(() => {
                alert("Reset Button Clicked")
            })
        </script>


    </body>

    </html>

<?php

} else {

    header("Location: login.php");

    exit();
}

?>