<?php   session_start();

$index = $_POST['index'];

for($i = 0; $i < $index; $i++) {
  $source[$i] = $_SESSION['src'][$i];
  $name[$i] = $_SESSION['name'][$i];
  $price[$i] = $_SESSION['price'][$i];
}

unset($_SESSION['src'][$index]);
unset($_SESSION['name'][$index]);
unset($_SESSION['price'][$index]);

for($i = 0; $i < count($_SESSION['src']); $i++;) {
  $source[$i] = $_SESSION['src'][$i];
  $name[$i] = $_SESSION['name'][$i];
  $price[$i] = $_SESSION['price'][$i];
}

print_r(array_values($source));
print_r(array_values($name));
echo print_r($_SESSION);


?>
