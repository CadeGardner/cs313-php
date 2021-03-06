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
      var source = item.getElementsByTagName("img")[0].src;
      var name = document.getElementById(id + '_name').value;
      var price = document.getElementById(id + '_price').value;

      $.ajax({
        type:'post',
        url:'add.php',
        data:{
          source: source,
          name: name,
          price: price
        },
        success: function(response) {
          document.getElementById('shopping_cart').innerHTML = response;
        }

      });
      // alert('function called and returned');
      }

    </script>

    <style media="screen">

    body{
      background-color: #A99C90;
    }

    #header {
      background-color: #353535;
      color: white;

    }

    #cartButton {
      margin-bottom: 20px;
    }

    #itemsContainer {
      margin-top: 3%;
    }

    .normalButtons {
      background-color: #353535;
      color: white;
    }

    button {
      border-radius: 6px;
    }

    </style>
  </head>
  <body>

  <div class="container-fluid">
    <div class="row" id="header">
      <div class="col">

        <div id='shopping_cart'>
          <h3>Your Items: 0 </h3>
        </div>

        <a href="view_cart.php">
        <button type="button" id ="cartButton">View Cart</button>
      </a>

    </div>

  </div>

<div class="container" id="itemsContainer">

    <div class="row">
    <!-- New Item -->
    <div class="col-sm-3" class="items" id="item1">

      <h2>Nordic Axe</h2>
      <!-- Image -->

        <img src="nordic axe.jpg" alt="Nordic Axe">

      <!-- Description -->
      <div class="items" >
        <p>This is what you're buying </p>
      </div>
      <input type="hidden" id="item1_name" value="Nordic Axe">
      <input type="hidden" id="item1_price" value="$75.00">

      <button type="button" class="normalButtons" onclick="add_to_cart('item1')">
        Add to Cart
      </button>

    </div>

    <!-- New Item -->
    <div class="col-sm-3" class="items" id="item2">

      <h2>Nordic Double Headed Axe</h2>
      <!-- Image -->
      <div class="">
        <img src="double axe.jpg" alt=" Nordic Double headed Axe">
      </div>

      <!-- Description -->
      <div class="">
        <p>This is what you're buying </p>
      </div>
      <input type="hidden" id="item2_name" value="Nordic Double Headed Axe">
      <input type="hidden" id="item2_price" value="$105.00">
      <button type="button" class="normalButtons" onclick="add_to_cart('item2')">
        Add to Cart
      </button>

    </div>

      <!-- New Item -->
      <div class="col-sm-3" class="items" id="item3">

        <h2>Nordic Shield</h2>
        <!-- Image -->
        <div class="">
          <img src="shield.jpg" alt="Nordic Shield">
        </div>


        <!-- Description -->
        <div class="">
          <p>This is what you're buying </p>
        </div>
        <input type="hidden" id="item3_name" value="Nordic Shield">
        <input type="hidden" id="item3_price" value="$60.00">
        <button type="button" class="normalButtons" onclick="add_to_cart('item3')">
          Add to Cart
        </button>

      </div>
        <!-- New Item -->
        <div class="cols-sm-3" class="items" id="item4">

          <h2 >Nordic Sword</h2>
          <!-- Image -->
          <div class="">
            <img src="sword.jpg" alt="Nordic Sword">
          </div>

          <!-- Description -->
          <div class="">
            <p>This is what you're buying </p>
          </div>
          <input type="hidden" id="item4_name" value="Nordic Sword">
          <input type="hidden" id="item4_price" value="$55.00">
          <button type="button" class="normalButtons" onclick="add_to_cart('item4')">
            Add to Cart
          </button>
        </div>
    </div>
  </div>
  </body>
</html>
