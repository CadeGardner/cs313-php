<?php
session_start();



if(isset($_POST['source'])) {

  $_SESSION['src'] = $_POST['source'];
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['price'] = $_POST['price'];
  echo count($_SESSION['name']);
exit();
}
echo count($_SESSION['name']);
?>
