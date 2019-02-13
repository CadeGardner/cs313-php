<?php
  require "dbConnect.php";
  $db = get_db();

$appointment = $db->prepare("SELECT appointment, user_id,
  calendar_id, package_id, message_id FROM appointment");
$appointment->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$d_username = $row['user_id'];
	$d_time = $row['appointment'];
	$d_date = $row['calendar_id'];
	$d_package = $row['package_id'];
	echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
}
 ?>
