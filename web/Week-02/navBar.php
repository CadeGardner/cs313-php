<?php
public function makeHeader($page)
{
if($page == "home")
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

  if($page == "login")
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

    if($page == "about")
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
