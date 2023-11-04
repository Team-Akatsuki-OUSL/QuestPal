<?php

session_start();

if (isset($_SESSION['username'])) {

?>

     <!DOCTYPE html>

     <html>

     <head>

          <title>Request Donations</title>

           <!--Bootstarp-->
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
            <!-- Font Awesome -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
          <script src="../js/bootstrap.bundle.min.js"></script>
     </head>

     <body style="background-image: url('../images/hnd.jpg');  background-size:cover; background-position: center;">
    <!--Go back button-->
    <div class="container m-3"><a href="dashboard.php" style="text-decoration:none; color:#696969;"> < Back </a></div>

     <div class="container p-3 ">
        <div class=" border border-2 w-50 d-block mx-auto p-4">
            <!-- creating a new post -->
            <h2>Request Donation </h2> <br>
        <form>
            <div class="bg-white rounded p-3 input-group-lg ">
                    <!--Name-->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Full Name</span>
                        <input type="text" 
                        class="form-control" 
                        aria-label="Sizing example input" 
                        aria-describedby="inputGroup-sizing-default"
                        name="name">
                    </div>

                    <!--Telphone number-->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Telphone no.</span>
                        <input type="text" 
                        class="form-control"  
                        aria-label="Recipient's username" 
                        aria-describedby="button-addon2"
                        name="telphone">
                        <button class="btn btn-outline-secondary" 
                        type="button" 
                        id="button-addon2">varify</button>
                    </div>

                    <!--email-->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        <input type="text" 
                        class="form-control"  
                        aria-label="Recipient's username" 
                        aria-describedby="button-addon2"
                        name="email">
                        <button class="btn btn-outline-secondary" 
                        type="button" 
                        id="button-addon2">varify</button>
                    </div>

                    <!--NIC-->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">NIC</span>
                        <input type="text" 
                        class="form-control" 
                        aria-label="Sizing example input" 
                        aria-describedby="inputGroup-sizing-default"
                        name="nic">
                    </div>

                    <!-- choose location-->
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

                     <!--Address-->
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
                        <input type="text" 
                        class="form-control" 
                        aria-label="Sizing example input" 
                        aria-describedby="inputGroup-sizing-default"
                        name="address">
                    </div>


                    <!--category-->
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

                    <!-- description area-->
                    <div class="input-group">
                        <span class="input-group-text">Description</span>
                        <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                    </div>

                    <br>
                     <!-- input file-->
                     <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="documents">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <!-- discard-->
                    <div class="text-center mt-3">
                        <div class="row">
                            <div class="col">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                            <!-- create post-->
                            <div class="col">
                            <button type="button" class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                    </div>
                    
                    
            </div>

        </form>
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