<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php 

     session_start();
 
?>
<head>
    <meta charset="utf-8">
    <title>Gallery Cafe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/GalleryCafe.png" type="image/x-icon">
    <link rel="stylesheet" href="../Styles/customer_header.css">
    <link rel="stylesheet" href="../Styles/index.css">
    <link rel="stylesheet" href="../Styles/footer.css">
    <script src="./js/custamer.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="..." crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>



<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">
    <img src="../Images/GalleryCafe.png" alt="Gallery Cafe Logo" style="height: 30px; vertical-align: middle; margin-bottom: 8px;">
    Gallery Cafe
</label>
        <ul>
            <?php
            if (isset($_SESSION['customer_name'])) {
            ?>
                <li><a href="./extendable_home.php">HOME</a></li>
                <li><a href="./menu_and_order.php">MENU/ONLINE ORDER</a></li>
                <li><a href="./services.php">SERVICES</a></li>
                <li><a href="./gallery.php">GALLERY</a></li>
                <li><a href="./book.php">BOOK</a></li>
                <li><a href="./cart.php">CART</a></li>
                <li><a href="./submit_feedback.php">Review</a></li>
                <?php
          
                if (isset($_SESSION['customer_name']) && !empty($_SESSION['customer_name'])) {
                    echo '<li><a href="./customer_logout.php"> ' . '' . htmlspecialchars($_SESSION['customer_name']), ' / LOG OUT' . '</a></li>';
                }
                ?>
            <?php
            } else {
            ?>

                <li><a href="#">HOME</a></li>
                <li><a href="#">MENU/ONLINE ORDER</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">BOOK</a></li>
                <li><a href="#">CART</a></li>
                <li><a href="./customer_login.php">Login</a></li>
            <?php
            } ?>
        </ul>
    </nav>



    <div class="slider">
    <div class="slider__inner">
      <div class="slider__contents slider-1-image">
        <h2 class="slider__caption">Gallery Cafe</h2>
        <p class="slider__txt">Exploring different cuisines allows us to savor diverse flavors and culinary traditions from around the world</p>
      </div>
      <div class="slider__contents slider-2-image">
        <h2 class="slider__caption">services</h2>
        <p class="slider__txt">Exceptional services are the backbone of customer satisfaction, often exceeding expectations and leaving lasting impressions</p>
      </div>
      <div class="slider__contents slider-4-image">
        <h2 class="slider__caption">book your table </h2>
        <p class="slider__txt">Secure your delightful dining experience by reserving a table at our establishment today. Join us at [Your Restaurant Name] for an unforgettable culinary journey</p>
      </div>
      <div class="slider__contents slider-3-image">
        <h2 class="slider__caption">about us</h2>
        <p class="slider__txt">Welcome to Outer Clove Restaurant, where passion for exquisite flavors meets a commitment to unparalleled dining experiences</p>
      </div>
    </div>
  </div>


    <section id="menu">

<h1>Our category</h1>
<div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="../Images/bargers.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Burgers & Sandwiches</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="../Images/pizza1234.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Pizza</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="../Images/rice.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Rice</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="../Images/kottu.jpg" alt="Cinque Terre" alt="Cinque Terre">
      </a>
      <div class="desc">Kottu</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="../Images/Noodles.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Pasta</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="../Images/Soups_and_Salads.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Soups and Salads</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="../Images/Desserts.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Desserts</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="../Images/Beverages1.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Beverages</div>
    </div>
  </div>
</section>


<section id="aboutus">

<h1>About us </h1>
<div class="all">

  <div class="raw_2">
  <p style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
        Nestled in the heart of Kandy, Sri Lanka, Gallery Cafe is a culinary oasis blending tradition with innovation. We're passionate about showcasing the vibrant flavors of Sri Lankan cuisine, sourcing the freshest local ingredients to craft dishes that marry heritage with contemporary tastes. Our inviting ambiance and skilled team ensure each visit is a sensorial journey, where every bite tells a story of culture and dedication to culinary excellence.
      </p>
      <p style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
        At Outer Clove, we're committed to creating unforgettable dining experiences that celebrate the essence of Sri Lanka. Whether you're savoring a traditional rice and curry, indulging in a modern twist on classic dishes, or enjoying our carefully curated beverage selection, you'll find that each element is thoughtfully prepared to delight your senses. Our chefs, with their deep-rooted knowledge and love for Sri Lankan cuisine, bring a unique touch to every dish, ensuring a harmonious blend of flavors and textures.
      </p>
      <p style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
        In addition to our exquisite menu, Gallery Cafe also offers a serene and stylish setting perfect for both casual dining and special occasions. The decor, inspired by Sri Lanka's rich artistic heritage, complements the culinary experience, making it a feast for both the eyes and the palate. Join us at Gallery Cafe and embark on a gastronomic adventure that not only satiates your hunger but also nourishes your soul.
      </p>

    <h1>Our team</h1>
    <div class="row_3">
        <div class="column">
          <div class="card">
            <img src="../Images/chamod.jpg" alt="Jane" style="width:100%">
            <div class="container">
              <h2 class="team_name">Jasintha Wiranayake</h2>
              <p class="title">CEO & Founder</p>
              <p>Visionary leader guiding our journey</p>
              <p>Jasintha@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="../Images/front-view-young-chef-smiling-with-copy-space (1).jpg" alt="John" style="width:100%">
            <div class="container">
              <h2 class="team_name">Madurika Ekanayake</h2>
              <p class="title">Head Cheff</p>
              <p>Crafting culinary excellence daily</p>
              <p>Madurika@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="../Images/visitha.jpg" alt="Mike" style="width:100%">
            <div class="container">
              <h2 class="team_name">Visitha Rajapaksha</h2>
              <p class="title">HR Manager</p>
              <p>Cultivating our team's success</p>
              <p>vnr@gmail.com</p>
            </div>
          </div>
        </div>
    </div>
  </div>

</div>


<section>

</section>
  <section class="review">
  <h1>Customer riview</h1>
 



  <?php

include_once("../Db/connection.php");
try {
    $connectionObj = new connection();
    $conn = $connectionObj->getConnection();
    $sql = "SELECT name, comment FROM feedback"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $feedbackData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($feedbackData as $feedback) {
        ?>
           
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="../Images/single-person.png" alt="Forest" height="150px" width="150px">
    </a>
    <div class="desc"><?php echo htmlspecialchars($feedback['name']); ?></div> 
    <div class="desc"><?php echo htmlspecialchars($feedback['comment']);?></div>
  </div>
</div>
        <?php
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $conn = null;
}
?>


</section>


 <section>

 </section>

<footer class="footer">
    <div class="footer-left">
        <h3>Payment Method</h3>
        <div class="credit-cards">
            <img src="../Images/visa.png" alt="">
            <img src="../Images/mastercard.png" alt="">
            <img src="../Images/paypal.png" alt="">
        </div>
        <p class="footer-copyright">&copy; 2024 Gallery Cafe</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Gallery Cafe</span>94/2,Peradeniya Road,Kandy</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>+94 702-740-542</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="#">GalleryCafe@gmail.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-about">
            <span>About</span>
            Di Channel ini kita akan berbagi barbagai Tutorial design, Pemograman dan lain-lain. Silahkan subscribe untuk kemajuan channel ini, jangan lupa, like dan comments. agar channel ini semakin berkembang
        </p>
        <div class="footer-media">
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

</footer>

</body>
</html>












