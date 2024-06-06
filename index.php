<?php
  $path = "./widgets/";
  $nav = $path."nav.php";
  $header = $path."header.php";
  $main = $path."main.php";
  $footer = $path."footer.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="shortcut icon" href="assets/images/WEEKEND CAFE (1).png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="assets/css/w3.css">

  <title>Weekend Cafe</title>
</head>

<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">

    <div class="w3-bar w3-wide w3-card w3-theme-d1 w3-goldenrod">
      <div class="logo">
          <a href="#home" class="w3-bar-item w3-button" style="padding: 8px;">
            <img class="w3-circle w3-image" src="assets/images/WEEKEND CAFE (1).png" alt="" style="height:10vh;"> WeekendCafe
          </a>
          <div class="toogle-nav">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="toggleMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
          </div>
      </div>
     
      <div class="w3-nav w3-right w3-hide-small" style="padding-top: 25px; margin-right: 2px">
        <?php
          include($nav);
        ?>
      </div>
      
  <header>
    <?php
      include($header);
    ?>
  </header> 
  
<main>
  <?php
    include($main);
  ?>
</main>

  <footer>
    <?php
      include($footer);
    ?>
  </footer>

</body>

<script src="assets/js/main.js"></script>

</html>

