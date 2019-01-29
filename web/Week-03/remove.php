<?php   session_start();

$index = $_POST['index'];
$size = count($_SESSION['src']);


unset($_SESSION['src'][$index]);
unset($_SESSION['name'][$index]);
unset($_SESSION['price'][$index]);


for($i = 0; $i < $size; $i++){
  if($i == $index) {
    "<script>
    document.getElementById('button". $index."').style.display = none;
    </script>"
    continue;
 }
 else
 {
   echo"<div><img src='".$_SESSION['src'][$i]."'>";
   echo "<p>".$_SESSION['name'][$i]."</p>";
   echo "<p>".$_SESSION['price'][$i]."</p>";
   echo " <button type='button' id='button".$i."' onclick='remove($i)'>
   Remove Item
   </button></div>";
 }
}

?>
