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
<head>
	<title>Sign In</title>
</head>

<body>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>

<h1>Please sign in below:</h1>

<form id="loginForm" action="login.php" method="POST">

	<input type="text" id="client" name="client" placeholder="Username">
	<label for="client">Username</label>
	<br /><br />

	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password">
	<label for="txtPassword">Password</label>
	<br /><br />

	<input type="submit" value="Sign In" />

</form>

<br /><br />

Or <a href="register.php">Sign up</a> for a new account.

</div>

</body>
</html>
