<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="company.css">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script type="text/javascript">

    // request = $.ajax({
    // url: "home.php",
    // type: "post",
    // data: ''
    // });

    </script>
  </head>
  <?php

      include 'navBar.php';
   ?>
  <body>
    <div class="loginContainer">
      <div>
        <h2>Login as:</h2>
        <button type="button" onclick="" name="admin">Administrator</button>
        <button type="button" name="tester">Tester</button>
      </div>
    </div>
  </body>
</html>
