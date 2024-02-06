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

    <div class="section" id="how-it-works">
      <h2 class="secondary">Payment</h2>
    </div>

    <!-- Payment Page -->
    <form id="paymentForm" onsubmit="return validatePaymentForm(event)" method="POST" style="margin-top: -50px;">
      <div class="row">
        <label for="cardname">Card Holder Name</label>
        <input type="text" id="cardname" name="cardname" placeholder="Card Holder Name" required>
        <div class="error" id="cardnameErr"></div>
      </div>
      <div class="row">
        <label for="cardnum">Card Number</label>
        <input type="text" id="cardnum" name="cardnum" placeholder="Card Number" required>
        <div class="error" id="cardnumErr"></div>
      </div>
      <div class="row">
        <label for="expdate">Expiry Date</label>
        <input type="text" id="expdate" name="expdate" placeholder="MM/YY" required>
        <div class="error" id="expdateErr"></div>
      </div>
      <div class="row">
        <label for="cvvnum">CVV Number</label>
        <input type="number" id="cvvnum" name="cvvnum"  placeholder="CVV Number" required>
        <div class="error" id="cvvnumErr"></div>
      </div>
      <br>

      <center>
        <div class="row">
		  <button type="submit" class="btn" name="submit">Submit</button>
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
      function validatePaymentForm(event) {
		  event.preventDefault();
        let valid = true;

        // Reset error messages
        document.getElementById("cardnameErr").textContent = "";
        document.getElementById("cardnumErr").textContent = "";
        document.getElementById("expdateErr").textContent = "";
        document.getElementById("cvvnumErr").textContent = "";

        // Validate Card Holder Name
        const cardname = document.getElementById("cardname").value;
        if (cardname.trim() === "") {
          valid = false;
          document.getElementById("cardnameErr").textContent = "Card Holder Name is required";
        }

        // Validate Card Number
        const cardnum = document.getElementById("cardnum").value;
        if (isNaN(cardnum) || cardnum.length !== 16) {
          valid = false;
          document.getElementById("cardnumErr").textContent = "Invalid card number";
        }

        // Validate Expiry Date
        const expdate = document.getElementById("expdate").value;
        // You may need a more complex validation for the expiry date based on your requirements

        // Validate CVV Number
        const cvvnum = document.getElementById("cvvnum").value;
        if (isNaN(cvvnum) || cvvnum.length !== 3) {
          valid = false;
          document.getElementById("cvvnumErr").textContent = "Invalid CVV number";
        }

        if (valid) {
          showPaymentSuccess();
        }

        return valid;
      }

      function showPaymentSuccess() {
        alert("Payment successful! Thank you for your order.");
        // Redirect to menu.php 
        window.location.href = "menu.php";
      }
    </script>
  </body>
</html>
