<?php
  require "db_connect.php";
  $db = get_db();

$appointment = $db->prepare("SELECT appointment, user_id,
  calendar_id, package_id, message_id FROM appointment");
$appointment->execute();
// Go through each result
echo "Testing";
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo"looping";
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$d_username = $row['user_id'];
	$d_time = $row['appointment'];
	$d_date = $row['calendar_id'];
	$d_package = $row['package_id'];
	echo "<div>$d_username<br> $d_time<br> $d_date<br>$d_package</div>";
}
 ?>
