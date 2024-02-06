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
          <li><a class="active" href="contact.php">Contact Us</a></li>
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
      <h2 class="secondary">Contact Us</h2>
    </div>

    <!-- Contact Pdescription -->
    <form method="POST" onsubmit="return validateForm()" id="contactForm" style="margin-top: -50px;">
      <div class="row">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
        <div class="error" id="nameErr"></div>
      </div>
      <div class="row">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <div class="error" id="emailErr"></div>
      </div>
      <div class="row">
        <label for="mobile">Mobile Number</label>
        <input type="text" id="mobile" name="mobile" required>
        <div class="error" id="mobileErr"></div>
      </div>

      <div class="row">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" required>
        <div class="error" id="descriptionErr"></div>
      </div>

      <center>
        <div class="row">
          <button type="submit" class="btn" name="submit">Send Message</button>
        </div>
      </center>
    </form>
    <br><br>

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

    <script>
      document.getElementById("contactForm").addEventListener("submit", function (event) {
          let valid = true;

          // Reset error Message
          document.getElementById("nameErr").textContent = "";
          document.getElementById("emailErr").textContent = "";
          document.getElementById("mobileErr").textContent = "";
          document.getElementById("descriptionErr").textContent = "";

          // Validate Name
          const name = document.getElementById("name").value;
          if (name.trim() === "") {
              valid = false;
              document.getElementById("nameErr").textContent = "Name is required";
          }

          // Validate Email address
          const email = document.getElementById("email").value;
          const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
          if (!emailPattern.test(email)) {
              valid = false;
              document.getElementById("emailErr").textContent = "Invalid email address";
          }

          // Validate Mobile Number
          const mobile = document.getElementById("mobile").value;
          if (isNaN(mobile) || mobile.length !== 10) {
              valid = false;
              document.getElementById("mobileErr").textContent = "Invalid mobile number";
          }

          // Validate Description
          const description = document.getElementById("description").value;
          if (description.trim() === "") {
              valid = false;
              document.getElementById("descriptionErr").textContent = "Description is required";
          }

          if (!valid) {
              event.preventDefault();
          }
      });
    </script>

  </body>
</html>
