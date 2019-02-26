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

</head>

<body>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>


<div class="container">
<h1>Please sign in below:</h1>	

<form id="loginForm" action="login.php" method="POST">
<div class="form-group">
	<input type="text" id="client" name="client" placeholder="Username">
	<label for="client">Username</label>
	<br/><br/>
</div>

<div class="form-group">
	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password">
	<label for="txtPassword">Password</label>
	<br/><br/>
</div>

	<input class="btn" type="submit" value="Sign In" />

</form>

<br/><br/>

Or <a href="register.php">Sign up</a> for a new account.

</div>

</body>
</html>
