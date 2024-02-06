<?php

// Database Connection file
include('config.php');

if (isset($_POST['submit'])) {
    // Getting the post values from the user
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $address = mysqli_real_escape_string($con, $_POST['address']);


    // Query for data insertion
    $query = mysqli_query($con, "INSERT INTO users (Username, Email, Password, Mobile, Address) VALUES ('$username', '$email', '$password', '$mobile', '$address')");
	// Validate the values
    if ($query) {
        echo "<script>alert('You have Successfully Registered');</script>";
        echo "<script type='text/javascript'> document.location ='signin.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
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
          <li><a href="signin.php">Login</a></li>
          <li><a class="active"  href="signup.php">Signup</a></li>
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
      <h2 class="secondary">Signup</h2>
	</div>


<!-- Signup Page -->
<form method="POST" onsubmit="return validateForm()" id="signupForm" style="margin-top: -50px;">
    <div class="row">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <div class="error" id="nameErr"></div>
    </div>
    <div class="row">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
        <div class="error" id="emailErr"></div>
    </div>
    <div class="row">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <div class="error" id="passwordErr"></div>
    </div>
    <div class="row">
        <label for="mobile">Mobile Number</label>
        <input type="text" id="mobile" name="mobile" maxlength="10" required>
        <div class="error" id="mobileErr"></div>
    </div>
    <div class="row">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>
        <div class="error" id="addressErr"></div>
    </div><br>

    <center>
        <div class="row">
            <button type="submit" class="btn" name="submit">Signup</button>
            <a href='' onclick="resetForm()" class="btn">Reset</a>
        </div>
    </center>
	 
</form><br><br>

<!-- Popup message -->
    <div id="popupMessage" style="display: none; background-color: #4CAF50; color: white; text-align: center; padding: 10px;">
        Registered successfully
    </div>


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
  
<!-- JavaScript for form validation -->
<script>
    document.getElementById("signupForm").addEventListener("submit", function (event) {
        let valid = true;

        // Reset error messages
        document.getElementById("nameErr").textContent = "";
        document.getElementById("emailErr").textContent = "";
        document.getElementById("passwordErr").textContent = "";
        document.getElementById("mobileErr").textContent = "";
        document.getElementById("addressErr").textContent = "";

        // Validate Username
        const username = document.getElementById("username").value;
        if (username.trim() === "") {
            valid = false;
            document.getElementById("nameErr").textContent = "Username is required";
        }

        // Validate Email Address
        const email = document.getElementById("email").value;
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(email)) {
            valid = false;
            document.getElementById("emailErr").textContent = "Invalid email address";
        }

        // Validate Password (you can add more complex validation)
        const password = document.getElementById("password").value;
        if (password.length < 8) {
            valid = false;
            document.getElementById("passwordErr").textContent = "Password must be at least 8 characters";
        }

        // Validate Mobile Number
        const mobile = document.getElementById("mobile").value;
        if (isNaN(mobile) || mobile.length !== 10) {
            valid = false;
            document.getElementById("mobileErr").textContent = "Invalid mobile number";
        }

        // Validate Address
        const address = document.getElementById("address").value;
        if (address.trim() === "") {
            valid = false;
            document.getElementById("addressErr").textContent = "Address is required";
        }

        if (!valid) {
            event.preventDefault(); // Prevent form submission if there are errors
        } else {
            // If the form is valid, show the popup message and redirect
            registerAndRedirect();
        }
    });

    // Show the popup message 
    function registerAndRedirect() {
        // Show the popup message
        var popupMessage = document.getElementById("popupMessage");
        popupMessage.style.display = "block";

        // Hide the popup message after 3 seconds 
        setTimeout(function () {
            popupMessage.style.display = "none";

            // Redirect to the corresponding page
            window.location.href = "signin.php"; 
        }, 3000);
    }

    // Reset the form fields
    function resetForm() {
        document.getElementById("signupForm").reset();
    }
</script>


</body>
</html>
