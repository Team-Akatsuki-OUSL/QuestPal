<?php

session_start();

if (isset($_SESSION['nic'])) {

    include "db_connection.php";
    $nic = $_SESSION['nic'];
    $request_id = $_GET['request_id'];
    $sql = "SELECT request_id, title, description, category, district FROM requests WHERE request_id=$request_id";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();

    $title = $row["title"];
    $description = $row["description"];
    $district = $row["district"];
    $category = $row["category"];


?>

    <!DOCTYPE html>

    <html>

    <head>

        <title>Requests</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/sidebar.css">
        <script src="js/sidebar.js" defer></script>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: '#desc',
                placeholder: "If you type more, you will get more attraction",
                entity_encoding: "raw"
            });
        </script>
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
                    <div class="d-flex justify-content-between align-items-center ">
                        <h3>My Requests</h3>
                        <h6 class="mx-2"></h6>
                    </div>
                    <hr class="mt-2">


                    <!-- Results table -->
                    <section>

                        <div class="pt-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="m-2 p-4">

                                        <p class="mb-2 "><strong>Title: </strong><?php echo $title ?></p>
                                        <hr>
                                        <p class="mb-2 "><strong>Category: </strong><?php echo $category ?></p>
                                        <hr>
                                        <p class="mb-2"><strong>District: </strong><?php echo $district ?></p>

                                        <hr>
                                        <p class="mb-2"><strong>Description: <br> </strong><?php echo $description ?></p>


                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary d-block w-100 mb-3" data-bs-toggle="modal" data-bs-target="#updateRequestModal" id="btnEdit"><i class="uil uil-edit mx-2"></i> Edit</button>
                                    <button class="btn btn-danger d-block w-100 mb-3" data-bs-toggle="modal" data-bs-target="#deleteRequestModal" id="btnUpdate"><i class="uil uil-trash-alt mx-2"></i> Delete</button>
                                </div>

                                <div class="modal fade" id="updateRequestModal" tabindex="-1" aria-labelledby="updateRequestModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="updateRequestModalLabel">Create a Request</h1>
                                                <button form="update-my-request" type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid d-block mx-auto">
                                                    <form id="update-my-request" method="POST" action="updateMyRequestHelper.php" class="ms-4">
                                                        <div class="bg-white rounded p-3 input-group-lg ">
                                                            <!--Name-->
                                                            <div class="input-group mb-3 row">
                                                                <span class="input-group-text col-3" id="inputGroup-sizing-default">Title</span>
                                                                <input type="text" class="form-control col-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="title" value="<?php echo $title?>">
                                                                <input type="text" style="display: none;" class="form-control col-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="request_id" value="<?php echo $request_id?>">
                                                            </div>

                                                            <!-- description area-->
                                                            <div class="input-group mb-3 row">
                                                                <span class="input-group-text col-3">Description</span>
                                                                <div class="form-control col-9 " style="padding: 0;">
                                                                    <textarea style="padding: 0; border: none" aria-label="With textarea" name="description"  id="desc"><?php echo $description ?></textarea>
                                                                </div>
                                                            </div>

                                                            <!--category-->
                                                            <div class="input-group mb-3 row">
                                                                <label class="input-group-text col-3" for="inputGroupSelect01">Category</label>
                                                                <select class="form-select col-9" id="inputGroupSelect01" name="category">
                                                                    <option value="<?php echo $category?>" selected hidden ><?php echo $category?></option>
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
                                                                    <option value="<?php echo $district?>" selected hidden><?php echo $district?></option>
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

                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-end align-items-center">
                                                    <button form="update-my-request" type="submit" class="btn btn-primary mx-5">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="deleteRequestModal" tabindex="-1" aria-labelledby="deleteRequestModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteRequestModalLabel">Delete a Request</h1>
                                                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to continue? This operation cannot be undone.</p>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-end align-items-center ">
                                                
                                                    <button data-bs-dismiss="modal" aria-label="Close" class="btn btn-secondary ms-3">No</button>
                                                    <button  class="btn btn-primary ms-3" onclick="window.location.href='deleteMyRequestHelper.php?request_id=<?php echo $request_id ?>;'">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </section>
                </div>

        </section>
        <script src="
https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
"></script>
        <script>
            $(window).scroll(function() {
                $('.top').toggleClass('scrolled', $(this).scrollTop() > 60);
            })
        </script>
    </body>

    </html>

<?php

} else {
    header("Location: index.php");
    exit();
}

?>