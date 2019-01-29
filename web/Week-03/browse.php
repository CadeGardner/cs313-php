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
          document.shopping_cart.getElementsByTagName('b').innerHTML = response;
        }

      });
      // alert('function called and returned');
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

  <div class="">
    <a href="view_cart.php">
      <button type="button" name="button">View Cart</button>
    </a>


  <div id='shopping_cart'>
    <p>Your Items:</p>
    <b>0</b>
  </div>
 </div>
    <!-- New Item -->
    <div class="items" id="item1">

      <h2>Nordic Axe</h2>
      <!-- Image -->

        <img src="nordic axe.jpg" alt="Nordic Axe">

      <!-- Description -->
      <div class="items" >
        <p>This is what you're buying </p>
      </div>
      <input type="hidden" id="item1_name" value="Nordic Axe">
      <input type="hidden" id="item1_price" value="$75.00">

      <button type="button" name="button" onclick="add_to_cart('item1')">
        Add to Cart
      </button>

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
      <input type="hidden" id="item2_name" value="Nordic Double Headed Axe">
      <input type="hidden" id="item2_price" value="$105.00">
      <button type="button" name="button" onclick="add_to_cart('item2')">
        Add to Cart
      </button>

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
        <input type="hidden" id="item3_name" value="Nordic Shield">
        <input type="hidden" id="item3_price" value="$60.00">
        <button type="button" name="button" onclick="add_to_cart('item3')">
          Add to Cart
        </button>

      </div>
        <!-- New Item -->
        <div class="items" id="item4">

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
          <button type="button" name="button" onclick="add_to_cart('item4')">
            Add to Cart
          </button>
        </div>

  </body>
</html>
