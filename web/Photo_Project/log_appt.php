<?php
session_start();
$username = $_SESSION['username'];

echo "Welcome: $username <br>";

$appt = $_POST['appt'];
echo "$appt<br>";
$time = $_POST['time'];
$package = $_POST['package'];
$timeframe = $_POST['timeframe'];

require("db_connect.php");
$db = get_db();

$client_query = 'SELECT id FROM client WHERE name = :client_name';
$user_statement = $db->prepare($client_query);
$user_statement->bindValue(':client_name', $username);
$user_statement->execute();

$user_row = $user_statement->fetch(PDO::FETCH_ASSOC);
$user_id = $user_row['id'];

echo "User id is: $user_id <br>";

$calendar_query = 'SELECT id FROM calendar WHERE  appt = :appt';
$date_statement = $db->prepare($calendar_query);
$date_statement->bindValue(':appt', $appt);
$date_statement->execute();
$date_row = $date_statement->fetch(PDO::FETCH_ASSOC);
$calendar_id = $date_row['id'];

echo "Date id is: $calendar_id <br>";


$package_query = 'SELECT id FROM package WHERE  package = :package';
$package_statement = $db->prepare($package_query);
$package_statement->bindValue(':package', $package);
$package_statement->execute();
$package_row = $package_statement->fetch(PDO::FETCH_ASSOC);
$package_id = $package_row['id'];

echo "Package id is: $package_id";

// $time_query = 'INSERT INTO appointment(time, user_id, calendar_id, package_id, message_id)';
//
// $query = 'INSERT INTO client(name, password) VALUES(:client_name, :password)';
// $statement = $db->prepare($query);
// $statement->bindValue(':client_name', $username);
// $statement->bindValue(':appt', $appt);
// $statement->bindValue(':time', $time);
// $statement->bindValue(':package', $package);
// $statement->execute();

 ?>
