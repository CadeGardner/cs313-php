<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Read Yo Scriptures!!</title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <input type="text" name="book" value=""placeholder="book">
      <input type="text" name="chapter" value=""placeholder="chapter">
      <input type="text" name="verse" value=""placeholder="verse">
      <textarea name="content" rows="8" cols="80"placeholder="content"></textarea>

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

      $topic = $db->query('SELECT name FROM topic');
      while($row = $topic->fetch(PDO::FETCH_ASSOC))
      {
        echo"<input type='checkbox' name='topics[]' value='$topic'><br>";
      }
      ?>

      <button type="submit" name="button" value="Insert">INSERT</button>
    </form>
  </body>
</html>
