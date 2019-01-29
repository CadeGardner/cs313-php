<?php   session_start();   ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopper's Heaven</title>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  </head>
  <body>

    <div class="address">
      <form class="form-group" action="confirm.php" method="post">
        <h1>Please Enter Your Address</h1>
        <input type="text" name="fname" value="" placeholder="First Name"> <br>
        <input type="text" name="lname" value="" placeholder="Last Name"> <br>
        <input type="text" name="street" value="" placeholder="Address Line 1 "> <br>
        <input type="text" name="city" value="" placeholder="City"> <br>
        <input type="text" name="state" value="" placeholder="State"> <br>
        <input type="text" name="zip" value="" placeholder="Zip Code"> <br>

        <a href="view_cart.php">
          <button type="button" name="button"> Back to Cart </button>
        </a>

        <button type="submit" name="button"> Purchase </button>

      </form>
    </div>

  </body>
</html>
