<?php
  require "db_connect.php";
  $db = get_db();

$appointment = $db->prepare("SELECT appointment, name, appt, package
FROM appointment a
JOIN client c ON c.id = a.user_id
JOIN calendar cal ON cal.id = a.calendar_id
JOIN package p ON p.id = a.package_id");


// SELECT appointment, user_id,
// calendar_id, package_id, message_id FROM appointment
$appointment->execute();
// Go through each result
echo "Testing";
while ($row = $appointment->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$d_username = $row['name'];
	$d_time = $row['appointment'];
	$d_date = $row['appt'];
	$d_package = $row['package'];
	echo "<div>$d_username<br> $d_time<br> $d_date<br>$d_package</div>";
}
 ?>
