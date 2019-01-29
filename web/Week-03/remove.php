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

for($i = 0; $i < count($_SESSION['src']); $i++) {
  $source[$i] = $_SESSION['src'][$i];
  $name[$i] = $_SESSION['name'][$i];
  $price[$i] = $_SESSION['price'][$i];
}
// foreach ($_SESSION['src'] as $value) {
//
// }
// print_r(array_values($source));
// print_r(array_values($name));
//echo print_r($_SESSION);

echo"<div class='cartContainer' id='cartItems'>";
for($i = 0; $i < count($_SESSION['src']); $i++){
  if(isset($_SESSION['src'][$i]) {
echo"<img src='".$_SESSION['src'][$i]."'>";
echo "<p>".$_SESSION['name'][$i]."</p>";
echo "<p>".$_SESSION['price'][$i]."</p>";
echo " <button type='button' name='button' onclick='remove($i)'>
   Remove Item
 </button>";
 }
 else
 {
   break;
 }
}

?>
