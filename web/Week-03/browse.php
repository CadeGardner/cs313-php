<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopper's Heaven</title>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">

      function add_to_cart(id) {
      var item = document.getElementById(id);
      var image = item.getElementsByTagName('img')[0].src;
      var name = document.getElementById('')
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = serverResponse();
        xhttp.open("", "ajax_info.txt", true);
        xhttp.send();
      }

    </script>

    <style media="screen">
      form{
        max-width: 85%;
        margin: auto;
      }
    </style>
  </head>
  <body>
<form class="" action="add.php" method="post">


    <!-- New Item -->
    <div class="items" id="item1">

      <h2>Nordic Axe</h2>
      <!-- Image -->
      <div class="">
        <img src="nordic axe.jpg" alt="Nordic Axe">
      </div>

      <!-- Description -->
      <div class="items" >
        <p>This is what you're buying </p>
      </div>
      <input type="hidden" name="item1_name" value="Nordic Axe">
      <input type="hidden" name="item1_price" value="$75.00">

      <button type="button" name="button"> Add </button>
    </div>

    <!-- New Item -->
    <div class="items" id="item2">

      <h2>Nordic Double Headed Axe</h2>
      <!-- Image -->
      <div class="">
        <img src="double axe.jpg" alt=" Nordic Double headed Axe">
      </div>

      <!-- Description -->
      <div class="">
        <p>This is what you're buying </p>
      </div>
      <input type="hidden" name="item2_name" value="Nordic Double Headed Axe">
      <input type="hidden" name="item2_price" value="$105.00">
      <button type="button" name="button"> Add </button>

    </div>

      <!-- New Item -->
      <div class="items" id="item3">

        <h2>Nordic Shield</h2>
        <!-- Image -->
        <div class="">
          <img src="shield.jpg" alt="Nordic Shield">
        </div>


        <!-- Description -->
        <div class="">
          <p>This is what you're buying </p>
        </div>
        <input type="hidden" name="item3_name" value="Nordic Shield">
        <input type="hidden" name="item3_price" value="$60.00">
        <button type="button" name="button"> Add </button>

      </div>

        <!-- New Item -->
        <div class="items" id="item">

          <h2 >Nordic Sword</h2>
          <!-- Image -->
          <div class="">
            <img src="sword.jpg" alt="Nordic Sword">
          </div>

          <!-- Description -->
          <div class="">
            <p>This is what you're buying </p>
          </div>
          <input type="hidden" name="item4_name" value="Nordic Sword">
          <input type="hidden" name="item4_price" value="$55.00">
          <button type="button" name="button"> Add to Cart </button>
        </div>

</form>
  </body>
</html>
