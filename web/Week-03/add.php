<?php
session_start();



if(isset($_POST['source'])) {

  $_SESSION['src'] = $_POST['source'];
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['price'] = $_POST['price'];
  echo count($_SESSION['name']);
}

$img = $_POST['name'];
echo $img;
echo "<h1>".count($_SESSION['name'])."<h1>";
echo "testing";
?>
