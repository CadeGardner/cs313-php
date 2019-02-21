<?php
echo "NEW_USER.PHP";

$client_name = $_POST['client'];
echo "$client_name";
$password = $_POST['txtPassword'];
echo "$password";
if (!isset($client_name) || $client_name == ""
	|| !isset($password) || $password == "")
{
	header("Location: register.php");
	die();
}

$client_name = htmlspecialchars($client_name);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

require("db_connect.php");
$db = get_db();
$query = 'INSERT INTO client(name, password) VALUES(:client_name, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':client_name', $client_name);
$statement->bindValue(':password', $hashedPassword);
$statement->execute();

header("Location: signIn.php");
die();
?>
