<?php
  require('db_connect.php');
  $db = get_db();

  $query = 'SELECT id, course_name, course_code FROM course';
  $statement = $db->prepare($query);
  $statement->execute();
  $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title></title>
  </head>
  <body>

    <h1>Welcome to your Notes</h1>
    <h2>These are your courses:</h2>
    <ul>
      <?php
        foreach($courses as $course) {
          $id = $course['id'];
          $name = $course['course_name'];
          $course_code = $course['course_code'];
          echo "<li> $name - $course_code</li>\n";
        };
       ?>
      <li></li>
      <li></li>
    </ul>
  </body>
</html>
