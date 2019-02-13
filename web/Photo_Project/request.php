<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Request Appointment</title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <input type="text" name="username" value="" placeholder="Username">
      <input type="date" name="" value="" placeholder="mm/dd/yyyy">
      <select class="" name="time">

        <?php
        $start = "8:00";
        $end = "19:00";

        $tStart = strtotime($start);
        $tEnd = strtotime($end);
        $tNow = $tStart;

        while($tNow <= $tEnd)
        {
          echo "<option value=''>".date('h:i',$tNow)."</option>";
          $tNow = strtotime('+30 minutes',$tNow);
        }
        ?>
      </select>

      <select class="" name="timeframe">
        <option value="am">a.m.</option>
        <option value="pm">p.m.</option>
      </select>

      <select class="" name="package">
        <option value="family">Family</option>
        <option value="dance">Dance</option>
        <option value="sports">Sports</option>
        <option value="engagements">Engagements</option>
        <option value="wedding">Wedding</option>
      </select>
      <button type="submit" name="request">Request</button>
    </form>
  </body>
</html>
