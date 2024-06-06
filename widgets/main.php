  <?php
  $path = "./src/";
  $about_text = file($path."main-about.txt");
  $story_content = file_get_contents($path."story-content.txt");
  $blog_content = file_get_contents($path."blog-content.txt");

?>

<?php 
 $path = "./widgets/";
 $list_drinks = $path."menu_drinks.php";
 $list_foods =$path."menu_food.php";
 $customer_r =$path."customer_review.php";
 $contact_content =$path."contact.php";
 $special_weekend=$path."special_offer.php";
 $contact_form = $path."cont_form.php";
 
 
?>



<!-- Best Selling -->
<div class="w3-row-padding" style="margin:6rem 0 6rem 0; ">
  <h2 class="w3-center w3-goldenrod w3-animate-fading w3-text-theme" style="font-size: 40px">BEST SELLING</h2>
    <div class="w3-third w3-container ">
        <div class="w3-card-4 ">
            <img src="assets/images/product-1.jpg" alt="Item 1" style="width:100%">
            <div class="w3-container w3-center">
                <h3>Iced Caramel Latte </h3>
                <p class="stars" style=" color: yellow; font-size:30px">★★★★☆</p>
            </div>
        </div>
    </div>

    <div class="w3-third w3-container ">
        <div class="w3-card-4 best-selling">
            <img src="assets/images/product-3.jpg" alt="Item 2" style="width:100%">
            <div class="w3-container w3-center">
                <h3>Iced Matcha </h3>
                <p class="stars" style="color: yellow; font-size:30px">★★★★★</p>
            </div>
        </div>
    </div>

    <div class="w3-third w3-container ">
        <div class="w3-card-4">
            <img src="assets/images/product-4.jpg" alt="Item 3" style="width:100%">
            <div class="w3-container w3-center">
                <h3> Pork Sisig With Rice</h3>
                <p class="stars" style=" color: yellow; font-size:30px">★★★☆☆</p>
            </div>
        </div>
    </div>

</div>


<section class="promo w3-animate-fading w3-margin-top w3-goldenrod" style="font-family: Roboto; font-size: 3rem; ">
 <?php 
      include($special_weekend);
 ?>
</section>

   <!-- Menu Container --->

   <div class="w3-display-container reveal w3-center w3-menu-bg" id="products">
    <img src="assets/images/menu-header.jpg" class="w3-menu-image" alt="">
  </div>
  <section class="w3-container w3-padding w3-center w3-theme-d3" style="margin-bottom: 10rem;">
    <div class="w3-row-padding w3-padding-32 ">
      <div class="reveal">
     

<h2 class="w3-text-white" id="drinks" style="margin-bottom: 3rem; font-size: 3rem;font-family: Roboto;"></h2>
<?php
  

            // Establish database connection
           include "db_connect.php";

          

            include "menu_list.php";
            
            $conn->close();
            ?>
      </div>
    </div>
  </section> 

 

<!-- Cart Modal -->
<div id="cart-modal" class="modal">
    <div class="modal-content" style="background:#f3d7cb">
        <span class="close" onclick="toggleCart()">&times;</span>
        <h2 class="w3-text-theme">Shopping Cart</h2>
        <div id="cart-items" class="left-side">
        </div>
        <div id="checked-out-items" class="right-side" style="font-size:1rem; color:red;">
        </div>
        <div id="cart-total" style="margin-top: 2rem;margin-bottom: 2rem; font-size: 1.5em; font-weight: bold; color:brown;"></div>
        <button class="w3-hover-theme w3-padding" onclick="checkout()" style="background-color:#d05e31;border:none;border-radius:15px; color: #fefefe">Checkout</button>
        <button class="w3-hover-theme w3-padding" onclick="cancelOrder()" style="background-color:#d05e31;border:none; border-radius:15px; color: #fefefe">Cancel Order</button>
    </div>
</div>


  <!-- Our Story Content -->
  <div class="w3-container w3-center w3-padding-32 reveal" id="our-story" style="margin-bottom: 10rem;">
    <div class="w3-row">
      <div class="w3-half w3-padding-large w3-center w3-padding-top-64">
        <h2 class="w3-xxxlarge"><span class="w3-theme w3-padding" style="font-family: Poppins;">Our Story</span></h2>
            <?php
              echo $story_content;
            ?>
      </div>
      <div class="w3-half">
        <img src="assets/images/location-1.jpg" alt="Our Story Image" class="w3-image" style="height: auto;">
      </div>
    </div>
  </div>

  <section class="w3-container w3-padding-64 w3-margin-top w3-theme-d3 reveal" id="blog" style="margin-bottom: 10rem;">
    <h2 class="w3-center w3-xxlarge"><span class="w3-padding w3-wide" style="font-family: Poppins;">Latest Blog Post
    </span></h2>
    <div class="w3-row-padding w3-padding-32">
      <div class="w3-half">
        <div class="w3-card w3-margin-bottom">
          <img src="assets/images/blog-1.jpg" alt="Blog Post Image" style="width:100%">
        </div>
      </div>
      <div class="w3-half w3-text-white">
        <div class="w3-container">
          <h3 class="w3-xxlarge w3-margin-top w3-animate-fading" >Win a Free Coffee for a Month!</h3>
         <?php
            echo $blog_content;
         
         ?>
        <a href="#" class="w3-button w3-theme-d1 w3-hover-theme">Participate Now</a>
        </div>
      </div>
    </div>
  </section>

   <!-- About Container -->
<div class="w3-container w3-content w3-padding-64 reveal" id="about" style="margin-bottom: 10rem;">
    <div class="w3-content" style="max-width:900px">
      <h1 class="w3-center w3-padding-64"><span class="w3-tag w3-theme w3-padding-16 w3-wide" style="font-family: Roboto;">ABOUT US</span></h1>
          <?php 
            foreach($about_text as $item){
          ?>
          <p><?=$item?></p>
          
          <?php
            }
          ?>
      <img src="assets/images/about-coffee.jpg" class="w3-round w3-image"
        style="width:100%;max-width:1000px; height: 95vh; object-fit: cover; " class="w3-margin-top">
      <p><strong>Opening hours:</strong> Mon-Fri 9:00am to 7:00pm Sat 9:00am to 9:00pm</p>
      <p><strong>Address:</strong> Lapu2 Street, Magugpo South, Tagum City</p>
    </div>
  </div>

  <section id="reviews" class="w3-container w3-margin-top reveal" style="margin-bottom: 10rem;">
    <h2 class="w3-center w3-xxlarge">
      <span class="w3-tag w3-theme w3-padding-16 w3-wide" style="font-family: Poppins;">Customer Reviews</span>
    </h2>
  
    <div class="w3-row-padding">
        <?php 
        include($customer_r);
        
        ?>
  
    </div>
  </section>

<!-- The Contact Section -->
  <div class="w3-container w3-center">
    <div class="w3-row">
      <div class="w3-half w3-responsive-iframe w3-margin-top reveal">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.0866716591715!2d125.80418832738165!3d7.446065479686697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f9530d24a7ec59%3A0x4823da3472777085!2sLapu-Lapu%20St%2C%20Tagum%2C%20Davao%20del%20Norte!5e0!3m2!1sen!2sph!4v1712174540686!5m2!1sen!2sph"height=400; style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="w3-half">
        <div class="w3-container w3-content w3-padding-64 reveal w3-margin-top" style="max-width:800px" id="contact">
         <?php 
          include($contact_content);
         ?>
            </div>
            <div class="w3-col m6">
           <?php 
            include($contact_form);
           ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="w3-display-container w3-content section-footer w3-text-white reveal" style="font-family: Roboto;">
   <img class="w3-image" src="assets/images/thank-bg.jpg" alt="">
   <div class="w3-display-left" style="padding-left: 4rem;">
    <h1 style="font-size: 4rem;">Thank You!</h1>
    <p style="font-size: 1.5rem;">For Choice Our Shop</p>
    
   </div>
  </section>