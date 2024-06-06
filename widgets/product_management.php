
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/WEEKEND CAFE (1).png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../assets/css/p_management.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <title>Product Management</title>
</head>

<body class="w3-container w3-theme" style=" margin-left:7rem; width:100%">

<div style=" width:100%">
<?php
        include "nav_management.php";
    ?>
</div>
  

    <h1 class = "w3-center w3-padding" style="margin-top: 5rem;margin-bottom: 0; border-bottom: 10px solid; border-radius: 100px; margin: 10% 25% 2% 25%">Product Management</h1>
  
  <section class="w3-container w3-center w3-theme-d3" style="margin-bottom: 1rem;">
    <div class="w3-row-padding w3-padding-32 ">
      <div class="reveal">
     
<h2 class="w3-text-white" id="drinks" style="margin-bottom: 3rem; font-size: 3rem;font-family: Roboto; margin-top:0;"></h2>
<?php
    
            include "db_connect.php";

         
            include "p_management.php";

            $conn->close();
            ?>
      </div>
    </div>
  </section> 

    
    <h1 class="w3-center">Add New Product</h1>
    <div class="w3-container add-product-form">
        <?php
            include "add_form.php";
        ?>
    </div>

    <script src="../assets/js/main.js"></script>
    
</body>
</html>
