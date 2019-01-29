<?php session_start();

$firstName = htmlspecialchars($_POST['fname']);
$lastName = htmlspecialchars($_POST['lname']);
$street = htmlspecialchars($_POST['street']);
$city = htmlspecialchars($_POST['city']);
$state = htmlspecialchars($_POST['state']);
$zip = htmlspecialchars($_POST['zip']);

?>

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
    <style media="screen">
    body{
      background-color: #353535;
    }

    </style>
  </head>
  <body>
    <div class="jumbotron">
    <h2>Thank You for your Purchase of </h2>

    <?php

    for($i = 0; $i < count($_SESSION['src']); $i++){
    echo"<div class='container' class='cartItems'>";
    echo "<div class='row'><p>".$_SESSION['name'][$i]."</p><br>";
    echo "<p>".$_SESSION['price'][$i]."</p></div>";
    echo"<div class='row'><img src='".$_SESSION['src'][$i]."'></div></div>";
    }

     ?>

    <h4>Your Items have been sent to:</h4>
    <?php
      echo "<div class='container'> <br> $firstName $lastName <br>";
      echo "$street<br>";
      echo "$city<br>";
      echo "$state<br>";
      echo "$zip </div>";

    ?>
  </div>
  </body>
</html>
