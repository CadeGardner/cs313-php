<?php
session_start();



if(isset($_POST['name'])) {

  $_SESSION['src'] = $_POST['source'];
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['price'] = $_POST['price'];
  echo count($_SESSION['name']);
}

print_r($_SESSION);
?>
