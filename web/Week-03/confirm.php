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
  </head>
  <body>
    <h2>Thank You for your Purchase of </h2>

    <?php
    echo"<div class='cartContainer' id='cartItems'>";
    for($i = 0; $i < count($_SESSION['src']); $i++){
    echo"<div><img src='".$_SESSION['src'][$i]."'>";
    echo "<p>".$_SESSION['name'][$i]."</p>";
    echo "<p>".$_SESSION['price'][$i]."</p></div>";
    }

     ?>

    <h4>Your Items have been sent to:</h4>
    <?php
      echo "<div class=''> $firstName $lastName";
      echo "$street";
      echo "$city";
      echo "$state";
      echo "$zip </div>";

    ?>
  </body>
</html>
