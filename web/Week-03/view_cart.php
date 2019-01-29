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
    <script type="text/javascript">
      function remove(item) {
        var index = item;
        $.ajax({
          type:'post',
          url:'remove.php',
          data:{
            index: index
          },
          success: function(response) {
            document.getElementById('cartItems').innerHTML = response;
          }

        });

      }
    </script>
  </head>
  <body>
    <div class="container-fluid" id="header">
      <h1>This is your cart!!</h1>
    </div>

    <div class="container">


    <?php
      echo"<div class='row' class='cartItems'>";
      for($i = 0; $i < count($_SESSION['src']); $i++){
      echo"<img src='".$_SESSION['src'][$i]."'>";
      echo "<p>".$_SESSION['name'][$i]."</p>";
      echo "<p>".$_SESSION['price'][$i]."</p>";
      echo " <button type='button' class='button".$i."' onclick='remove($i)'>
      Remove Item
      </button></div>";
      }
     ?>

     <div class="row">
       <a href="browse.php">
         <button type="button" name="button">Back to Browse</button>
       </a>

       <a href="checkout.php">
         <button type="button" name="button">Proceed to checkout</button>
       </a>

     </div>
  </div>


  </body>
</html>
