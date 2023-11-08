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
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
        </style>
    </head>

    <body style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('../images/hnd.jpg');  background-size:cover; background-position: center; min-height: 100vh;">
        <!--Go back button-->
        <div class="container p-3"><a href="dashboard.php"><button class="btn btn-secondary">
                    < Back</button>
            </a>
        </div>

        <div class="container m-3  d-block mx-auto">
            <div class=" border border-2 w-75 d-block mx-auto p-4 bg-light">
                <!-- creating a new post -->
                <h2>Search requests </h2> <br>
                <form>
                    <!-- choose location-->
                    <div class="row">
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

                    </div>

                    <!-- discard-->
                    <div class="mt-3">
                        <div class="row">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary">Search</button>
                            </div>
                        </div>
                    </div>



                </form>
            </div>
        </div>

        <!-- Results table -->
        <section>

            <div class="container border border-2 p-2 bg-light">
                <div class="row ">
                    <div class="d-flex justify-content-between p-2 ">

                        <h3 class="mx-2">Results</h3>
                        <h5 class="mx-2">Number of Results: 0</h5>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kavishka Prasad</td>
                            <td>Rice</td>
                        </tr>
                        <tr>
                            <td>Asanka Madushanka</td>
                            <td>Medecine</td>
                        </tr>

                    </tbody>
                </table>
                <div class="d-flex justify-content-end m-2">
                    <button class="btn btn-secondary">View more results</button>
                </div>
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