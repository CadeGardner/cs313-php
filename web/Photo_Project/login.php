<?php

session_start();
$badLogin = false;
if (isset($_POST['client']) && isset($_POST['txtPassword']))
{

	$username = $_POST['client'];
	$password = $_POST['txtPassword'];

	require("db_connect.php");
	$db = get_db();
	$query = 'SELECT password FROM client WHERE name=:username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

		if (password_verify($password, $hashedPasswordFromDB))
		{
			$_SESSION['username'] = $username;
			flush();
			header("Location: home.php");
			die();
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}
?>

<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width = device-width, initial-scale = 1" />
<title>Sign In</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="main.css" type="text/css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style media="screen">
	button{
		background-color: #3c6e71; /*teal*/
	}

	.container{
		max-width: 30%;
	}
</style>
</head>

<body>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>
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
<h1>Please sign in below:</h1>

<form id="loginForm" action="login.php" method="POST">
<div class="form-group">
	<label for="client">Username</label><br>
	<input type="text" id="client" name="client" placeholder="Username">

	<br/><br/>
</div>

<div class="form-group">
	<label for="txtPassword">Password</label><br>
	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password">

	<br/><br/>
</div>

	<input class="btn button-info" type="submit" value="Sign In" />

</form>

<br/><br/>

Or <a href="register.php">Sign up</a> for a new account.

</div>
</div>
</body>
</html>
