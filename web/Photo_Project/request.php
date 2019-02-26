<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1" />
    <title>Request Appointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="main.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style media="screen">
    .btn-info{
      background-color: #3c6e71; /*teal*/
    }
    .jumbotron-fluid{
      background-color: #3c6e71; /*teal*/
    }

    .container{
      max-width: 30%;
    }
    h1{
    text-align: center;
  }
    </style>

  </head>
  <body>
    <div class="jumbotron-fluid">
    <h1>Request Appointment</h1>
  </div>
  <div class="container">
    <form class="" action="log_appt.php" method="post">
      <div class="form-group">
        <label for="date">Date:</label><br>
        <input id="date" type="date" name="appt" value="" placeholder="mm/dd/yyyy"><br>
      </div>

      <select class="custom-select" name="time">

        <?php
        $start = "8:00";
        $end = "19:00";

        $tStart = strtotime($start);
        $tEnd = strtotime($end);
        $tNow = $tStart;

        while($tNow <= $tEnd)
        {
          $current_time = date('h:i',$tNow);
          echo "<option value='$current_time'>".$current_time."</option>";
          $tNow = strtotime('+30 minutes',$tNow);
        }
        ?>
      </select>

      <select class="custom-select" name="timeframe">
        <option value="am">a.m.</option>
        <option value="pm">p.m.</option>
      </select><br>

      <select class="custom-select" name="package">
        <option value="Family">Family</option>
        <option value="Dance">Dance</option>
        <option value="Sports">Sports</option>
        <option value="Engagements">Engagements</option>
        <option value="Wedding">Wedding</option>
      </select><br>
      <button class="btn btn-info" type="submit" name="request">Request</button>
      <a href="appt_display.php"><button class="btn btn-info" type="button" name="button">
      View Calendar</button></a><br>
    </form>
  </div>

  </body>
</html>
