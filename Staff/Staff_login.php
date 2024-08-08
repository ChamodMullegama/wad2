<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../Images/GalleryCafe.png" type="image/x-icon">
  <title>Gallery Cafe Staff</title>
  <link rel="stylesheet" href="../Styles/adminlogin.css">
</head>
<body>
  <div class="container">
    <div class="myform">
    <div class="aleart">
    <?php          
           session_start();
            if (isset($_SESSION['error'])) {
                echo '<div class="login-status-message-error">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']); 
            }                               
    ?>
  
    </div>
      <form method="post" action="./Staff_login_inc.php">
        <h2>STAFF LOGIN</h2>
        <input type="text" placeholder="Staff user Name" name="user_name">
        <input type="password" placeholder="Password" name="user_password">
        <button type="submit" name="submit">LOGIN</button>
      </form>
    </div>
    <div class="image">
      <img src="../Images/admin.png">
    </div>
  </div>

</body>
</html>