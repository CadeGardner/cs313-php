<?php   session_start();

$index = $_POST['index'];

// for($i = 0; $i < $index; $i++) {
//   $source[$i] = $_SESSION['src'][$i];
//   $name[$i] = $_SESSION['name'][$i];
//   $price[$i] = $_SESSION['price'][$i];
// }

if($index == 0) {
  array_shift($_SESSION['src'][]);
  array_shift($_SESSION['name'][]);
  array_shift($_SESSION['price'][]);

}

if($index != 0) {
unset($_SESSION['src'][$index]);
unset($_SESSION['name'][$index]);
unset($_SESSION['price'][$index]);
}
//
// for($i = 0; $i < count($_SESSION['src']); $i++) {
//   $source[$i] = $_SESSION['src'][$i];
//   $name[$i] = $_SESSION['name'][$i];
//   $price[$i] = $_SESSION['price'][$i];
// }

// foreach ($_SESSION['src'] as $value) {
//
// }
// print_r(array_values($source));
// print_r(array_values($name));
//echo print_r($_SESSION);

echo"<div class='cartContainer' id='cartItems'>";
for($i = 0; $i < count($_SESSION['src']); $i++){
  if(!isset($_SESSION['src'][$i])) {
    continue;
 }
 else
 {
   echo"<img src='".$_SESSION['src'][$i]."'>";
   echo "<p>".$_SESSION['name'][$i]."</p>";
   echo "<p>".$_SESSION['price'][$i]."</p>";
   echo " <button type='button' name='button' onclick='remove($i)'>
  Remove Item
</button>";
 }
}

?>
