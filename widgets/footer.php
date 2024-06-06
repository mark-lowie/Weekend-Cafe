<?php
  $path="./src/";
  $footer_col_1= file($path."footer-col-1.txt");
  $footer_col_2= file($path."footer-col-2.txt");
  $footer_col_3= file($path."footer-col-3.txt");
?>

<footer class="w3-container w3-padding-64 w3-center w3-margin-top w3-large w3-dark-background w3-theme-d3 reveal">
    <div class="w3-row-padding">
      <!-- Column 1: Shop Matcha -->
      <div class="w3-quarter">
        <h3>Products</h3>
        <?php 
        foreach($footer_col_1 as $footer_item){
        ?>
        <p class="w3-text-hover-a"><a href="#matcha"><?=$footer_item?></a></p>
        <?php
        }
        ?>
      </div>

      <!-- Column 2: Learn -->
      <div class="w3-quarter">
        <h3>Learn</h3>
        <?php
          foreach($footer_col_2 as $footer_item){
        ?>
        <p class="w3-text-hover-a"><a href="#"><?=$footer_item?></a></p>
          <?php
          }
          ?>
      </div>

      <!-- Column 3: More from Tenzo -->
      <div class="w3-quarter">
        <h3>More from WeekendCafe</h3>
        <?php
          foreach($footer_col_3 as $footer_item){
        ?>
        <p class="w3-text-hover-a"><a href="#"><?=$footer_item?></a></p>
          <?php
          }
          ?>
      </div>

      <!-- Column 4: Let's Stay Connected -->
      <div class="w3-quarter">
        <h3>Let's Stay Connected</h3>
        <p>Enter your email to unlock 10% OFF.</p>
        <form action="/subscribe" method="post">
          <input class="w3-input w3-border" type="email" placeholder="Enter your email" required>
          <button class="w3-button w3-margin-top w3-theme-d1 w3-hover-theme">Subscribe</button>
        </form>
        <!-- Social Media Icons -->
        <div class="w3-xlarge w3-section">
          <h2>Follow Us</h2>
          <i class="fab fa-facebook w3-hover-opacity"></i>
          <i class="fab fa-instagram w3-hover-opacity"></i>
          <i class="fab fa-twitter w3-hover-opacity"></i>
          <i class="fab fa-whatsapp w3-hover-opacity"></i>
        </div>
      </div>

    </div>
    <!-- Copyright and Policies -->
    <div class="w3-row w3-margin-top">
      <p>© 2021 WeekendCafe</p>
      <p><a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a> | <a href="#">Refund Policy</a> | <a
          href="#">Accessibility Policy</a></p>
    </div>
  </footer>