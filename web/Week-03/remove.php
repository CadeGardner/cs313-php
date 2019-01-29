<?php   session_start();

$index = $_POST['index'];
$size = count($_SESSION['src']);
// for($i = 0; $i < $index; $i++) {
//   $source[$i] = $_SESSION['src'][$i];
//   $name[$i] = $_SESSION['name'][$i];
//   $price[$i] = $_SESSION['price'][$i];
// }


// if($index == 0) {
//   //array_shift($_SESSION['src']);
//   array_shift($_SESSION['name']);
//   array_shift($_SESSION['price']);
//
// }


unset($_SESSION['src'][$index]);
unset($_SESSION['name'][$index]);
unset($_SESSION['price'][$index]);



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

for($i = 0; $i < $size; $i++){
  if($i === $index) {
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
