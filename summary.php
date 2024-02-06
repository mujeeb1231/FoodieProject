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
	
	<br><br>
	    <!-- Summary Start -->
   <div class="container py-5" style="margin-left: 500px;">
       <div class="row">
            <div class="col-12">
                 <center><h2 class="text-center mb-4" style="margin-left: -500px;">Order Summary</h2> </center>
            </div>
        </div>
        <div class="row">
            <div class="col-12" >
                <div class="card mx-auto" style="max-width: 500px;">
                    <div class="card-body" style="color:green;">
                        <h3 class="card-title" style="margin-left:80px;"><?php echo $_GET['product']; ?></h3><br>
                        <h3 class="card-subtitle mb-2 text-muted" style="margin-left:200px;">Price: $<?php echo $_GET['price']; ?></h3>
       
                        <form id="order-form" method="post" action="payment.php">
                            <div class="form-group">
                                <label for="cust">Select your Crust</label>
                                <select class="form-control" id="cust" required>
                                    <option value="5">Spicy($5)</option>
                                    <option value="10">Add Texture($10)</option>
                                    <option value="20">Steamed($20)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="size">Select your Size</label>
                                <select class="form-control" id="size" required>
                                    <option value="5">Small($5)</option>
                                    <option value="10">Medium($10)</option>
                                    <option value="20">Large($20)</option>
                                </select>
                            </div>
                            <input type="hidden" id="base-price" value="<?php echo $_GET['price']; ?>">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" placeholder="No of Quantity" id="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="total">Total Price</label>
                                <input type="text" class="form-control" id="total" readonly>
                            </div>
                            <button type="submit" class="btn"  onclick="window.location.href='payment.php';">Place Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Summary Start -->
	
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
	<script>
        $(document).ready(function () {
            // Calculate and update the total price
            function updateTotalPrice() {
                var basePrice = parseFloat($('#base-price').val());
                var crustPrice = parseInt($('#cust').val());
                var sizePrice = parseInt($('#size').val());
                var quantity = parseInt($('#quantity').val());
                var totalPrice = basePrice + crustPrice + sizePrice;
                totalPrice *= quantity;
                $('#total').val('$' + totalPrice.toFixed(2));
            }

            // Update the total price whenever there is a change in the form inputs
            $('#cust, #size, #quantity').change(updateTotalPrice);

            // Initial calculation for menu price
            updateTotalPrice();

            // Handle form submission
            $('#order-form').submit(function (event) {
                event.preventDefault();
            });
        });
    </script>
  </body>
</html>