<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="calendar.css" type="text/css" rel="stylesheet" />
  </head>
  <body>

    <?php
      require "db_connect.php";
      $db = get_db();
      require 'build_calendar.php';
      $calendar = new Calendar;
      echo $calendar->show();
      $num_days = $calendar->getTotalDays();
      $num_month = $calendar->getCurrentMonth();


      $appointment = $db->prepare("SELECT appointment, name, appt, package
      FROM appointment a
      JOIN client c ON c.id = a.user_id
      JOIN calendar cal ON cal.id = a.calendar_id
      JOIN package p ON p.id = a.package_id
      WHERE EXTRACT(MONTH FROM appt) = $num_month");

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
        $date_array = date_parse($row['appt']);
        $current_appt = $date_array['day'];
        $id = 'li-2019-'.$num_month.'-'.$current_appt;

        $dom = new DOMDocument();
        $dom->load("appt_display.php");
        $dom->getElementById("$id")->innerHTML = "<div>$d_username<br> $d_time<br>
                                                  $d_date<br>$d_package</div><br>";


      }


      echo "<br>Total Days: $num_days <br> Current Month: $num_month";

      $month_query = "SELECT appointment, appt FROM appointment a
      JOIN calendar cal ON cal.id = a.calendar_id
      WHERE EXTRACT(MONTH FROM appt) = $num_month";
      $num_month = $db->prepare($month_query);
      $num_month->bindValue(':num_month', $num_month);
      $num_month->execute();

      while ($month_row = $num_month->fetch(PDO::FETCH_ASSOC))
      {
        echo "loop entered";

      }

    ?>

  </body>
</html>
