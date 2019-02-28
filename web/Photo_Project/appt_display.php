<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1" />
    <title>Calendar</title>
    <link href="calendar.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="main.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style media="screen">
    .thead-dark{
      background-color: background-color: #3c6e71; /*teal*/
    }

    .container{
      max-width: 45%;
    }
    .nav-link{color: #d9d9d9;}
    </style>

  </head>
  <body>
    <h1>E Lewis Photography</h1>
    <nav class="navbar navbar-expand-sm navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="packages.php">Pricing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about_me.php">About Me</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact Me</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="request.php">Request Appointment</a>
    </li>
  </ul>
</nav>

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
      echo "<div class='container'><table class='table'>
      <thead class='thead-dark'>
      <tr>
      <th>Name</th><th>Time</th><th>Date</th><th>Package</th></tr>
      </thead><tbody>";
      while ($row = $appointment->fetch(PDO::FETCH_ASSOC))
      {
      	// The variable "row" now holds the complete record for that
      	// row, and we can access the different values based on their
      	// name
      	$d_username = $row['name'];
      	$d_time = $row['appointment'];
      	$d_date = $row['appt'];
      	$d_package = $row['package'];
      	echo "<tr><td>$d_username</td> <td>$d_time</td> <td>$d_date</td><td>$d_package</td></tr>";
        $date_array = date_parse($row['appt']);
        $current_appt = $date_array['day'];
        $id = 'li-2019-'.$num_month.'-'.$current_appt;

        $dom = new DOMDocument();
        $dom->load("appt_display.php");
        $dom->getElementById("$id")->innerHTML = "<div>$d_username<br> $d_time<br>
                                                  $d_date<br>$d_package</div><br>";


      }
      echo "</tbody></table></div>";

      // echo "<br>Total Days: $num_days <br> Current Month: $num_month";
      //
      // $month_query = "SELECT appointment, appt FROM appointment a
      // JOIN calendar cal ON cal.id = a.calendar_id
      // WHERE EXTRACT(MONTH FROM appt) = $num_month";
      // $num_month = $db->prepare($month_query);
      // $num_month->bindValue(':num_month', $num_month);
      // $num_month->execute();
      //
      // while ($month_row = $num_month->fetch(PDO::FETCH_ASSOC))
      // {
      //   echo "loop entered";
      //
      // }

    ?>

  </body>
</html>
