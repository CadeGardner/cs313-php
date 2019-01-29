<?php   session_start();

$index = $_POST['index'];

unset($_SESSION['src'][$index]);
unset($_SESSION['name'][$index]);
unset($_SESSION['price'][$index]);

echo print_r($_SESSION); 


?>
