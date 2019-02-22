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
$user_query = $db->prepare($client_query);
$user_query->bindValue(':client_name', $username);
$user_query->execute();

$user_row = $user_query->fetch(PDO::FETCH_ASSOC);
$user_id = $user_row['id'];

echo "User id is: $user_id <br>";

$calendar_query = 'SELECT id FROM calendar WHERE  appt = :appt';
$date_query = $db->prepare($calendar_query);
$date_query->bindValue(':appt', $appt);
$date_query->execute();
$date_row = $date_query->fetch(PDO::FETCH_ASSOC);
$calendar_id = $calendar_row['id'];

echo "Date id is: $calendar_id";


// $package_query = 'SELECT id FROM package WHERE  package = :package';
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
