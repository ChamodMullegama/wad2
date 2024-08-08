<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Gallery Cafe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./Images/GalleryCafe.png" type="image/x-icon">
  <link rel="stylesheet" href="./Styles/customer_header.css">
  <link rel="stylesheet" href="./Styles/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/version/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
</label>
<label class="logo">
    <img src="./Images/GalleryCafe.png" alt="Gallery Cafe Logo" style="height: 30px; vertical-align: middle; margin-bottom: 8px;">
    Gallery Cafe
</label>

    <ul>
      <?php
      if (isset($_SESSION['customer_name'])) {
      ?>
        <li><a href="./extendable_home.php">HOME</a></li>
        <li><a href="./menu_and_order.php">MENU/ONLINE ORDER</a></li>
        <li><a href="./about_us.php">services</a></li>
        <li><a href="./gallery.php">GALLERY</a></li>
        <li><a href="./cart.php">CART</a></li>
        <?php
        session_start();
        if (isset($_SESSION['customer_name']) && !empty($_SESSION['customer_name'])) {
          echo '<li><a href="../index.php"> ' . '' . htmlspecialchars($_SESSION['customer_name']), ' / LOG OUT' . '</a></li>';
        }
        ?>
      <?php
      } else {
      ?>

        <li><a href="#">HOME</a></li>
        <li><a href="#menu">MENU/ONLINE ORDER</a></li>
        <li><a href="#services">services</a></li>
        <li><a href="#offer_promoction">offer and promoction </a></li>
        <li><a href="#aboutus">about us </a></li>
        <li><a href="./Customer/customer_login.php">CART</a></li>
        <li><a href="./Customer/customer_login.php">Login</a></li>
      <?php
      } ?>
    </ul>
  </nav>

  <style>

  </style>

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
        <img src="./Images/bargers.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Burgers & Sandwiches</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="./Images/pizza1234.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Pizza</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="./Images/rice.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Rice</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="./Images/kottu.jpg" alt="Cinque Terre" alt="Cinque Terre">
      </a>
      <div class="desc">Kottu</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="./Images/Noodles.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Pasta</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="./Images/Soups_and_Salads.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Soups and Salads</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="./Images/Desserts.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Desserts</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="./menu_and_order.php">
        <img src="./Images/Beverages1.jpg" alt="Cinque Terre">
      </a>
      <div class="desc">Beverages</div>
    </div>
  </div>
  </section>

  <section id="services">
    <h1>Our services</h1>

    <?php
    require './Db/connection.php';


    $database = new connection();

    try {
      $conn = $database->getConnection();
      $fetch_sql = "SELECT * FROM services";
      $stmt = $conn->query($fetch_sql);
      $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }

    ?>

    <div class="services-container">
      <?php foreach ($services as $service) : ?>
        <div class="responsive">
          <div class="gallery">
            <div class="desc"><?php echo $service['service_name']; ?></div>
            <div class="desc"><?php echo $service['service_description']; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="offer_promoction">
    <h1>Offer And Promoction</h1>
    <?php

    $database = new connection();

    try {
      $conn = $database->getConnection();
      $fetch_sql = "SELECT * FROM offer_promoction";
      $stmt = $conn->query($fetch_sql);
      $offer_promoctions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }

    ?>

    <div class="services-container">
      <?php foreach ($offer_promoctions as $offer_promoction) : ?>
        <div class="responsive">
          <div class="gallery">
            <div class="desc"><?php echo $offer_promoction['name']; ?></div>
            <div class="desc"><?php echo $offer_promoction['description']; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </section>

  <section id="aboutus">

    <h1>About us </h1>



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
            <img src="./Images/chamod.jpg" alt="Jane" style="width:100%">
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
            <img src="./Images/front-view-young-chef-smiling-with-copy-space (1).jpg" alt="John" style="width:100%">
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
            <img src="./Images/visitha.jpg" alt="Mike" style="width:100%">
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
  </section>
  <section>

  </section>
  <section class="review">
    <h1>Customer review</h1>


    <?php
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
              <img src="./Images/single-person.png" alt="Forest" height="150px" width="150px">
            </a>
            <div class="desc"><?php echo htmlspecialchars($feedback['name']); ?></div>

            <div class="desc"><?php echo htmlspecialchars($feedback['comment']); ?></div>
          </div>
        </div>
    <?php
      }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    } finally {
      $conn = null;
    }
    ?>


  </section>

  <?php
  include './footer.php';
  ?>