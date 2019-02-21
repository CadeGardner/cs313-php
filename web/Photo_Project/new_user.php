<?php
require("db_connect.php");
echo "NEW_USER.PHP";

$client_name = $_POST['client'];
echo "$client_name";
$password = $_POST['txtPassword'];
echo "$password <br>";
if (!isset($client_name) || $client_name == ""
	|| !isset($password) || $password == "")
{
	flush();
	header("Location: register.php");
	die();
}

$client_name = htmlspecialchars($client_name);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


$db = get_db();
echo "$db";
$query = 'INSERT INTO client(name, password, user) VALUES(:client_name, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':client_name', $client_name);
$statement->bindValue(':password', $hashedPassword);
$statement->execute();

flush();
header("Location: signIn.php");
die();
?>
