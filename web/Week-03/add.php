<?php
session_start();

echo count($_SESSION['name']);

if(isset($_POST['source'])) {

  $_SESSION['src'] = $_POST['source'];
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['price'] = $_POST['price'];
  echo count($_SESSION['name']);

}

?>
