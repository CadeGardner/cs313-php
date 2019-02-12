<?php

try
{
$dbUrl = getenv('DATABASE_URL');
$dbOpts = parse_url($dbUrl);
$dbHost = $dbOpts["host"];
$dbPort = $dbOpts["port"];
$dbUser = $dbOpts["user"];
$dbPassword = $dbOpts["pass"];
$dbName = ltrim($dbOpts["path"],'/');
$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
echo 'Error!: ' . $ex->getMessage();
die();
}

$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];

var_dump($content);
$query = 'INSERT INTO scriptures (book, chapter, verse, content) VALUES
(:book , :chapter, :verse, :content)';
$statement = $db->prepare($query);
$topic[] = $_POST['topics'];

$statement->bindValue(':book', $book);
$statement->bindValue(':chapter', $chapter);
$statement->bindValue(':verse', $verse);
$statement->bindValue(':content', $content);

$statement->execute();

$newScriptureId = $db->lastInsertId('scriptures_id_seq');

foreach($topic as $t){
$db->query("INSERT INTO scriptures_topic (topic_id, scriptures_id) VALUES
('$t', '$newScriptureId')
");
}
 ?>
