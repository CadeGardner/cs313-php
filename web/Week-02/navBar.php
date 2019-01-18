<?php

$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

public function makeHeader($file)
{
if($file == "home")
{
  echo"<header>
    <div>
      <h1>Planners 'R' Us</h1>
    </div>
    <div class='headerContainer'>
        <div class='linkContainer'><li><a class ='active' href='home.php'>Home</a></li></div>
        <div class='linkContainer'><li><a href='login.php'>Login</a></li></div>
        <div class='linkContainer'><li><a href='about-us.php'>About Us</a></li></div>
    </div>
  </header>";
  }

  if($file == "login")
  {
    echo"<header>
      <div>
        <h1>Planners 'R' Us</h1>
      </div>
      <div class='headerContainer'>
          <div class='linkContainer'><li><a href='home.php'>Home</a></li></div>
          <div class='linkContainer'><li><a class ='active' href='login.php'>Login</a></li></div>
          <div class='linkContainer'><li><a href='about-us.php'>About Us</a></li></div>
      </div>
    </header>";
    }

    if($file == "about-us")
    {
      echo"<header>
        <div>
          <h1>Planners 'R' Us</h1>
        </div>
        <div class='headerContainer'>
            <div class='linkContainer'><li><a href='home.php'>Home</a></li></div>
            <div class='linkContainer'><li><a href='login.php'>Login</a></li></div>
            <div class='linkContainer'><li><a class ='active' href='about-us.php'>About Us</a></li></div>
        </div>
      </header>";
      }

  }
?>
