<?php
// Database Connection file
include('config.php');

// Initialize session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Getting the post values from the user
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // User credentials
    $query = mysqli_query($con, "SELECT * FROM users WHERE Username='$username' AND Password='$password'");

    if ($query && mysqli_num_rows($query) > 0) {
        // Validate login credentials
        $_SESSION['username'] = $username;
        header("Location: menu.php");
        exit();
    } else {
        // Invalid login credentials
        $loginError = "Invalid Username or Password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Food Funday</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Menu -->
    <div class="menu">
      <nav>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <ion-icon name="grid-outline"></ion-icon>
        </label>

         <label class="logo"><img src="Images/logo.jpg" style="width:100px;height:50px;" />Food Funday</label>

        <ul>
          <li><a href="index.php">Home</a></li>
		  <li><a href="about.php">About Us</a></li>
          <li><a class="active" href="signin.php">Login</a></li>
          <li><a href="signup.php">Signup</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
    <!-- End Menu -->

    <!-- Hero Section -->
    <div class="section flex" id="hero-section">
      <div class="text">
        <h1 class="primary">
          It's Not Just Food, <br />
          It's an <span>Experience</span>
        </h1>

        <p class="tertiary">
          Food is any substance consumed by an organism for nutritional support. Food is usually of plant, animal, or fungal origin and contains essential nutrients such as carbohydrates, fats, proteins, vitamins, or minerals. 
        </p>

      </div>
      <div class="visual">
        <img src="images/home-banner.png" alt="" />
      </div>
    </div>
    <!-- End Hero Section -->

 <div class="section" id="how-it-works">
      <h2 class="secondary">Login</h2>
	</div>
	
<!-- Login Page -->
<form method="POST" action="signin.php" style="margin-top: -50px;">
        <div class="row">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <?php
        if (isset($loginError)) {
            echo '<div class="error">' . $loginError . '</div>';
        }
        ?>

        <center>
            <div class="row">
                <button type="submit" class="btn" style="width:100px">Login</button>&nbsp;&nbsp;&nbsp;
                <a href='signup.php' class="btn" style="width:100px">Signup</a>
            </div>
        </center>
    </form><br><br>


<!-- Footer -->
    <div class="footer">
      <div class="copyright">
        <p>Food Funday &copy; 2024. All Rights Reserved.</p>
      </div>
    </div>
	 <!-- End Footer -->

    <!-- Ion Icons Js -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
  
  </body>
</html>
