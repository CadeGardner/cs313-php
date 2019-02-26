<?php
  require "db_connect.php";
  $db = get_db();

$appointment = $db->prepare("SELECT appointment, name, appt, package
FROM appointment a
JOIN client c ON c.id = a.user_id
JOIN calendar cal ON cal.id = a.calendar_id
JOIN package p ON p.id = a.package_id");

echo"<div><p>This will eventually be displayed on a calendar to make it look<br>
     much nicer but each gropuing shows the basic info of a client's <br>
     appointments.
    ";
// SELECT appointment, user_id,
// calendar_id, package_id, message_id FROM appointment
$appointment->execute();
// Go through each result
while ($row = $appointment->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$d_username = $row['name'];
	$d_time = $row['appointment'];
	$d_date = $row['appt'];
	$d_package = $row['package'];
	echo "<div>$d_username<br> $d_time<br> $d_date<br>$d_package</div><br>";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- <script type="text/javascript">
      document.getElementById('li-2019' + $num_month)
    </script> -->
    <?php
        require 'build_calendar.php';
        $calendar = new Calendar;
        echo $calendar->show();
        echo "Pre total days being set";
        $num_days = $calendar->getTotalDays();
        $num_month = $calendar->getCurrentMonth();
        echo "<br>Total Days: $num_days <br> Current Month: $num_month";

        $month_query = 'SELECT appointment, appt FROM appointment a
        JOIN calendar cal ON cal.id = a.calendar_id WHERE EXTRACT(MONTH FROM appt) = :num_month';
        $num_month = $db->prepare($month_query);
        $num_month->bindValue(':num_month', $num_month);
        $num_month->execute();

        while ($arow = $num_month->fetch(PDO::FETCH_ASSOC))
        {
          $date_array = date_parse($arow['appt']);
          $current_appt = $date_array['day'];
          echo "$current_appt";
        }

     ?>

  </body>
</html>
