<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1" />
    <title>Send Me a Message</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="main.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style media="screen">
      button{
        background-color: #3c6e71; /*teal*/
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
  </ul>
</nav>

<div class="container">
  <form class="" action="index.html" method="post">
    <div class="form-group">
      <label for="name">Name:</label><br>
      <input id="name"type="text" name="name" value="" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label><br>
      <input id="email" type="text" name="email" value="" placeholder="Email">
    </div>

    <div class="form-group">
      <label for="message">Message:</label><br>
      <textarea id="message" name="name" rows="15" cols="100" placeholder="Message">
      </textarea>
    </div>

    <button class="btn "type="submit" name="button">Send Message</button>
  </form>
</div>

  </body>
</html>
