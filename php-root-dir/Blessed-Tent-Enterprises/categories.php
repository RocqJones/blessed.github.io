<?php
  session_start();
  include("admin/includes/dbh.inc.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Categories</title>

  <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">

  <link rel="stylesheet" href="css/style_index.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/merlin.css">
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/categories.css">
  <link rel="stylesheet" href="css/responsiveness.css">

</head>

<body>
  <!-- navbar -->
  <nav>
    <div class="logo">
      <h3><a href="index.php" class="logo-name"><img src="img/logo.jpg" alt="logo"
            style="height: auto; width:150px;"></a></h3>
    </div>

    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="categories.php">Store Categories</a></li>
      <li><a href="contact.php">ContactUs</a></li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
  <!-- navbar -->

  <h1 class="main-head-of-color-gold">Categories In Store For You</h1>
  <center>
    <hr>
  </center>

  <br><br>
  <div class="grid-container">

      <?php 
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="product_images/'.$row['product_image'].'" alt="Card image cap" style="height:200px; width:100%"/>
                        <div class="card-body">
                          <p class="card-text" style="color: rgb(10, 12, 12)">'.$row['product_description'].'</p>
                        </div>
                        </div>';
            }
        } else {
            echo "0 results";
        }
        
        mysqli_close($conn);
        ?>
  </div>
  <!-- <br><br> -->

  <div class="footer-container">
    <div class="footer-1">
      <a href="index.php">
        <h2>BLESSED TENTS ENTERPRISES</h2>
      </a>
      <br>
      <p><b>WHAT WE OFFERS</b></p>
      <h6>
        Making tents<br><br>
        Car shades<br><br>
        Truck-Tarpaulin<br><br>
        Umbrella and events<br><br>
        Balcon covers, & privacy walls
      </h6>
    </div>

    <div class="footer-2">
      <p><b>USEFUL LINKS</b></p>
      <h6>
        <a href="categories.php"> Categories</a> <br><br>
        <a href="contact.php"> Contact Us</a> <br><br>
      </h6>
    </div>

    <div class="footer-3">
      <p><b>100% Original</b> guarantee</p>
      <h6>
        For all our products.
      </h6>
      <p><b>We're located in:</b> Nairobi</p>
      <h6>
        <strong>Kangundo Road Komorok Junction, Opp Shell Petrol station</strong>
      </h6>
      <br><br>
    </div>

  </div>
  <p class="copy-right"><a href="https://jonesmbindyo.herokuapp.com/">Created by Jones Mbindyo </a>&copy;2020</p>
  <script type="text/javascript" src="js/nav.js"></script>
</body>

</html>