<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="main.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style media="screen">
    	button{
    		background-color: #3c6e71; /*teal*/
    	}

      .jumbotron-fluid{
        background-color: #3c6e71; /*teal*/
      }

    	.container{
    		max-width: 30%;
    	}
    </style>
  </head>
  <body>
    <div class="jumbotron-fluid">
      <h1>Sign up for new account</h1>
    </div>

    <div class="container">


  <form id="createAccountForm" action="new_user.php" method="POST">

    <div class="form-group">
      <label for="client">Username</label><br>
      <input type="text" id="client" name="client" placeholder="Username">

    	<br /><br />
    </div>


    <div class="form-group">
      <label for="txtPassword">Password</label><br>
      <input type="password" id="txtPassword" name="txtPassword" placeholder="Password"></input>

    	<br /><br />

    </div>

  	<input type="submit" class="btn button-info" value="Create Account" />

  </form>

</div>


  </body>
</html>
