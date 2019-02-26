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

    <script src="js/daypilot-all.min.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="themes/month_white.css" />

    <div id="dp"></div>

    <script type="text/javascript">
        var dp = new DayPilot.Month("dp");

        // behavior and appearance
        dp.cssClassPrefix = "month_white";

        // view
        dp.startDate = new DayPilot.Date("2013-07-01");  // or just dp.startDate = "2013-07-01";

        var e = new DayPilot.Event({
            start: "2013-03-25T00:00:00",
            end: "2013-03-25T12:00:00",
            id: DayPilot.guid(),
            text: "Event"
        });

        dp.events.add(e);

        dp.init();

    </script>
  </head>
  <body>

  </body>
</html>
