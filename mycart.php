<?php 
include("heade.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
  h1{
    margin-left: 30%;
    font-family :Helvetica Neue;
  }
  h5{
    font-size: 30px;
    font-family: times new roman;
  }
  a:hover{
    font-color: yellow;
  }
</style>
</head>
<body>
   <div class="container">
      <div class="row">
            <div class="col-lg-12 my-4">
                <div class="">
                  <h1>MY CART</h1>
                </div>
            </div>
            <div class="col-lg-8">
              <table class="table">
              <thead class="text-center table-primary">
              <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Item Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
              </thead>
              <tbody class="text-center">
    <?php
  
    if(isset($_SESSION['cart']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
      $sr=$key+1;
      
      echo"
      <tr>
      <td>$sr</td>
      <td>$value[item_name]</td>
      <td>$value[price] <input type='hidden' class='iprice' value='$value[price]'></td>
      <td>
      <form action='manage_cart.php' method='POST'>
      <input class='text-center iquantity' name='mod-quantity' onchange='this.form.submit()' type='number' value='$value[quantity]' min='1' max='10'>
      <input type='hidden' name='item_name' value='$value[item_name]'>
      </form>
      </td>
      <td class='itotal'></td>
      <td>
      <form action='manage_cart.php' method='POST'>
      <button name='remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
      <input type='hidden' name='item_name' value='$value[item_name]'>
      </form>
      </td>
      </tr>
      ";
    }
  }

    ?>
  
    
  </tbody>
</table>
</div>
            <div class="col-lg-4">
              <div class="container">
              <div class="border bg-light rounded p-4">
                <h4 class="text-center">TOTAL AMOUNT:</h4>
               
                <h5 class="text-center" id="gtotal">Rs</h5>
              </br>
              <?php
              if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
              {
              ?>
                <form action="make.php" method="POST">
                  <div class="form-group">
                    <label>Full Name:</label>
                    <input type="text" name="fullname" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="address" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Phone No:</label>
                    <input type="number" name="phone" class="form-control" required>
                  </div>
                  <br>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                Cash On Delivery
              </label>
               </div></br>
              
              <button class="btn btn-success btn-block" name="purchase">Make Purchase</button>
              </br>
                </form>
              <?php
              }
              ?>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
  var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
      gt=0;
      for(i=0; i<iprice.length; i++)
      {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
        gt=gt+(iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText=gt;
    }
    subTotal();
</script>
  
</body>
</html>