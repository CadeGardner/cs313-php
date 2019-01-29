<?php
session_start();

if(isset($_POST['name'])) {

  $_SESSION['src'][] = $_POST['source'];
  $_SESSION['name'][] = $_POST['name'];
  $_SESSION['price'][] = $_POST['price'];
  // print_r($_SESSION);
  exit();
}
  $numItems = count($_SESSION['name']);
  echo "<h3> Your Items: $numItems";
?>
