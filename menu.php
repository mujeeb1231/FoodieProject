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
	
	<!-- Restaurant Menu -->
    <div class="section" id="menu">
      <div class="container">
	  <div class="section" id="how-it-works">
      <h2 class="secondary">Today Menu</h2>
	</div>

        <div class="container">
          <div class="restaurant-menu">
            <div class="menu-item">
              <img src="images/m1.jpg" alt="" style="height:150px;"/>

              <div class="title">Funday Restaurant | Barramundi</div>

              <div class="order flex">
                <div class="price">$20.00</div>
				<a href="summary.php?product=Funday Restaurant | Barramundi&price=20.00" class="btn btn-menu">Customize Food</a>
              </div>
            </div>

            <div class="menu-item">
              <img src="images/m2.jpg" alt="" style="height:150px;"/>

              <div class="title">Funday Restaurant | Barbecued snags</div>

              <div class="order flex">
                <div class="price">$15.00</div>
                <a href="summary.php?product=Funday Restaurant | Barbecued snags&price=15.00" class="btn btn-menu">Customize Food</a>
				
              </div>
            </div>

            <div class="menu-item">
              <img src="images/m3.jpeg" alt="" style="height:150px;"/>

              <div class="title">Funday Restaurant | Lamb Leg Roast</div>

              <div class="order flex">
                <div class="price">$32.00</div>
                <a href="summary.php?product=Funday Restaurant | Lamb Leg Roast&price=32.00" class="btn btn-menu">Customize Food</a>
              </div>
            </div>

            <div class="menu-item">
              <img src="images/m4.jpg" alt="" style="height:150px;"/>

              <div class="title">Funday Restaurant | Chicken Parmigiana</div>

              <div class="order flex">
                <div class="price">$25.00</div>
                <a href="summary.php?product=Funday Restaurant | Chicken Parmigiana&price=25.00" class="btn btn-menu">Customize Food</a>
              </div>
            </div>

            <div class="menu-item">
              <img src="images/m5.jpg" alt="" style="height:150px;"/>

              <div class="title">Funday Restaurant | Grilled Kangaroo</div>

              <div class="order flex">
                <div class="price">$30.00</div>
                <a href="summary.php?product=Funday Restaurant | Grilled Kangaroo&price=30.00" class="btn btn-menu">Customize Food</a>
              </div>
            </div>
			
            <div class="menu-item">
              <img src="images/m6.jpeg" alt="" style="height:150px;"/>

              <div class="title">Funday Restaurant | Crocodile Skewers</div>

              <div class="order flex">
                <div class="price">$22.00</div>
                <a href="summary.php?product=Funday Restaurant | Crocodile Skewers&price=22.00" class="btn btn-menu">Customize Food</a>
              </div>
            </div>
			

			
          </div>
        </div>
      </div>
    </div>
    <!-- End Restaurant Menu -->
	
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