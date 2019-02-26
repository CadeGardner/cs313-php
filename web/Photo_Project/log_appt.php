<?php
session_start();
$username = $_SESSION['username'];
require_once('db_connect.php');

//echo "Welcome: $username <br>";

$appt = $_POST['appt'];
//echo "$appt<br>";
$time = $_POST['time'];
$package = $_POST['package'];
$timeframe = $_POST['timeframe'];

echo "$appt<br>$time<br>$package<br>$timeframe";


$db = get_db();

$client_query = 'SELECT id FROM client WHERE name = :client_name';
$user_statement = $db->prepare($client_query);
$user_statement->bindValue(':client_name', $username);
$user_statement->execute();

$user_row = $user_statement->fetch(PDO::FETCH_ASSOC);
$user_id = $user_row['id'];

//echo "User id is: $user_id <br>";

$calendar_query = 'SELECT id FROM calendar WHERE  appt = :appt';
$date_statement = $db->prepare($calendar_query);
$date_statement->bindValue(':appt', $appt);
$date_statement->execute();
$date_row = $date_statement->fetch(PDO::FETCH_ASSOC);
$calendar_id = $date_row['id'];

//echo "Date id is: $calendar_id <br>";

$package_query = 'SELECT id FROM package WHERE  package = :package';
$package_statement = $db->prepare($package_query);
$package_statement->bindValue(':package', $package);
$package_statement->execute();
$package_row = $package_statement->fetch(PDO::FETCH_ASSOC);
$package_id = $package_row['id'];

// echo "Package id is: $package_id";
$message_id = 1;
echo "$time";
$time_query = 'INSERT INTO appointment (appointment, user_id, calendar_id, package_id, message_id)
VALUES (:appointment, :user_id, :calendar_id, :package_id, :message_id)';

$statement = $db->prepare($time_query);
$statement->bindValue(':user_id', $user_id);
$statement->bindValue(':calendar_id', $calendar_id);
$statement->bindValue(':appointment', $time);
$statement->bindValue(':package_id', $package_id);
$statement->bindValue(':message_id', $message_id);
$statement->execute();

flush();
header("Location: appt_display.php");
die();

 ?>
