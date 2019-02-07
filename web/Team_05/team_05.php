
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Read Yo Scriptures!</title>
  </head>
  <body>
    <h1>Scriptures Resources</h1>
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

      // $scripture = $db->query('SELECT * FROM scriptures');
      // while($row = $scripture->fetch(PDO::FETCH_ASSOC))
      // {
      //   echo "<span style='font-weight: bold'>".$row['book'].' '.$row['chapter'].': '.
      //   $row['verse']."</span>".' - <br>'.$row['content'].'<br>';
      // }

      $book = $db->query('SELECT * FROM scriptures WHERE book = $POST["book"]');
      while($row = $scripture->fetch(PDO::FETCH_ASSOC))
      {
        echo "<a href='details.php?scripture=".$row['id']."'><span style='font-weight: bold'>".
        $row['book'].' '.$row['chapter'].': '.
        $row['verse']."</span>".'</a><br>';
      }

     ?>
  </body>
</html>
