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
		  <li><a class="active" href="about.php">About Us</a></li>
          <li><a href="signin.php">Login</a></li>
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

	<!-- About -->
    <div class="section" id="about">
      <div class="container flex">
        <div class="visual">
          <img src="images/about.png" alt="" />
        </div>
        <div class="text">
          <div class="secondary">About Our Food Funday</div>
          <h4>Eat 150+ Customers per day </h4><br>

          <h3 class="tertiary">Our Delicious Food</h3>

          <p>
            Welcome to our restaurant’s “About Us” page! Here, we share the story of how our culinary adventure began and what makes us unique.</p>
		  <p>Meet the passionate team behind the scenes, discover our commitment to quality ingredients, and feel the warmth of our inviting ambiance. Join us on this journey as we invite you to be a part of our delicious story.
          </p>

        </div>
      </div>
    </div>
    <!-- End About -->


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