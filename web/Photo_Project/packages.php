<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1" />
    <title>Package Options</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="main.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style media="screen">
      button{
        max-width: 45%;
        margin: auto;
        background-color: #3c6e71; /*teal*/
        padding: 8px;
        margin-top: 2%;
        border-radius: 6px;
      }
      div {
        max-width: 45%;
        margin:auto;
      }

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

<button class="btn-block"data-toggle="collapse" data-target="#family">
  Family Photos</button><br>

<div id="family" class="collapse ">
  <p>Includes:</p><br>
  <ul>
    <li>Whole Family Photos</li>
    <li>Induvidual Portraits</li>
    <li>Small Group Shots</li>
    <li>Photos at two locations</li>
    <li>Large Canvas Print</li>
    <li>Digital copies stored on a DVD</li>
    <li>Copyright release</li>
    <li>Starting at $125</li>
    <li>Price increases with Large Family (5 or more children)</li>
  </ul>
</div>

<button class="btn-block" data-toggle="collapse" data-target="#dance">
  Dance Photos</button><br>

<div id="dance" class="collapse">
  <p>Includes:</p> <br>
  <ul>
    <li>Group photos</li>
    <li>Couples Photos for up to 12 couples </li>
    <li>Photos taken at one location</li>
    <li>Professional Printing</li>
    <li>Digital copies stored on a DVD</li>
    <li>Copyright release</li>
    <li>$25 per couple</li>
  </ul>

</div>

<button class="btn-block" data-toggle="collapse" data-target="#sports">
  Sports Photos</button><br>

<div id="sports" class="collapse">
<p>Includes:</p> <br>
<ul>
  <li>Team Photos</li>
  <li>Induvidual photos</li>
  <li>Professional Themed prints</li>
  <li>Starting at $15 per player</li>
</ul>
</div>

<button class="btn-block" data-toggle="collapse" data-target="#engament">
  Engagement Photos</button><br>

<div id="engagement" class="collapse">
  <p>Includes:</p> <br>
  <ul>
    <li>1.5 hours of photos</li>
    <li>Photos taken in 2 locations</li>
    <li>Professional Edits for 25 Photos</li>
    <li>Digital copies stored on a DVD</li>
    <li>Copyright release</li>
    <li>Starting at $650</li>
  </ul>
</div>

<button class="btn-block" data-toggle="collapse" data-target="#wedding">
  Wedding Photos</button><br>

<div id="wedding" class="collapse">
  <p>Includes:</p> <br>
  <ul>
    <li>Up to 2.5 hours of photos</li>
    <li>Photos taken in up to 3 locations</li>
    <li>Bridals</li>
    <li>Wedding and Reception Coverage</li>
    <li>Professional Edits of 90 Photos</li>
    <li>Digital copies stored on a DVD</li>
    <li>Copyright release</li>
    <li>Prices Range from $1000 - $2500</li>
  </ul>
</div>

    <a href="request.php"><button class="btn-block" type="button" name="request">
      Request Appointment</button>
    </a>
  </body>
</html>
