<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="" content="">
    <title>Elaine Lewis Photography</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="main.css" type="text/css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }

  .carousel-control-prev-icon{
    padding: 5px;
    background-color: black;
    color: black;
  }

  .carousel-control-next-icon{
    padding: 5px;
    background-color: black;

  }
  .container{
    max-width: 65%;
    max-height: 70%;
    margin-top: 3%;
    border: solid 6px;
    border-color: #3c6e71; /*teal*/
  }
  .navbar{
    background-color: #3c6e71; /*teal*/
  }
  </style>

    <script>
    $(document).ready(function(){
      // Activate Carousel
      $("#myCarousel").carousel();

      // Enable Carousel Controls
      $(".carousel-control-prev").click(function(){
        $("#myCarousel").carousel("prev");
      });
      $(".carousel-control-next").click(function(){
        $("#myCarousel").carousel("next");
      });
    });
    </script>



  </head>
  <body>
    <h1>E Lewis Photography</h1>
    <nav class="navbar navbar-expand-sm navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="packages.php">Pricing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about_me.php">About Me</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact Me</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
  </ul>
</nav>



<div class="container">
    <!-- Carousel Portfolio -->
    <div class="carousel" id="myCarousel">

      <!-- The Slide Show -->
      <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="family.jpg" alt="photo of family" />
        </div>

        <div class="carousel-item">
          <img src="bridesmaids.jpg" alt="bridesmaids jumping" />
        </div>

        <div class="carousel-item">
          <img src="child1.jpg" alt="girl posing" />
        </div>

        <div class="carousel-item">
          <img src="jumping.jpg" alt="family posing" />
        </div>

        <div class="carousel-item">
          <img src="seniorboy.jpg" alt="boy graduation" />
        </div>

        <div class="carousel-item">
          <img src="weddingdip.jpg" alt="couple kiss" />
        </div>

        <div class="carousel-item">
          <img src="tigers.jpg" alt="cross country team" />
        </div>

        <div class="carousel-item">
          <img src="seniorgirl.jpg" alt="girl graduation" />
        </div>

        <div class="carousel-item">
          <img src="girlportrait.jpg" alt="girl portrait" />
        </div>

      </div>

      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>
</div>

    <div class="jumbotron-fluid">  <!-- Maybe Modify this style some... -->
      <p>photo philosophy will go here</p>
    </div>

  </body>
</html>
