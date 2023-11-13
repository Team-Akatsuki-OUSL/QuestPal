<?php

session_start();

if (isset($_SESSION['username'])) {

?>

     <!DOCTYPE html>

     <html>

     <head>

          <title>FEEDS</title>

          <link rel="stylesheet" href="../styles/bootstrap.min.css">
          <script src="../js/bootstrap.bundle.min.js"></script>
     </head>

     <body style="background-image: url('../images/12.png'); background-size:cover; min-height:100vh; overflow:hidden">
        <P> feeds will be added soon </p>

     </body>

     </html>

<?php

} else {

     header("Location: index.php");

     exit();
}

?>