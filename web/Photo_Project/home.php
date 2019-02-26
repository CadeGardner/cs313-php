<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="" content="">
    <title>Elaine Lewis Photography</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>

    <script>
    $(document).ready(function(){
      // Activate Carousel
      $("#myCarousel").carousel();

      // // Enable Carousel Indicators
      // $(".item1").click(function(){
      //   $("#myCarousel").carousel(0);
      // });
      // $(".item2").click(function(){
      //   $("#myCarousel").carousel(1);
      // });
      // $(".item3").click(function(){
      //   $("#myCarousel").carousel(2);
      // });

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
    <ul>
      <li><a href="packages.php">Pricing</a></li>
      <li><a href="request.php">Request Appointment</a></li>
      <li><a href="about_me.php">About Me</a></li>
      <li><a href="contact.php">Contact Me</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>


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
