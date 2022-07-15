<?php
include("manage_cart.php");

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-4">
                <h1>My Cart</h1>

            </div>
            <div class="col-lg-9">
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $total=0;
    if(isset($_SESSION['cart']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
      $total=$total+$value['price'];
      echo"
      <tr>
      <td>1</td>
      <td>$value[item_name]</td>
      <td>$value[price]</td>
      <td><input class='text-center' type='number' value='$value[quantity]' min='1' max='10'></td>
      <td><button class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
      </tr>
      ";
    }
  }

    ?>
  
    
  </tbody>
</table>
</div>
            <div class="col-lg-3">
              <div class="border bg-light rounded p-4">
                <h4>Total:</h4>
                
                <h5><?php echo $total ?></h5>
                <form>
                 <button class="btn btn-primary btn-block">Make Purchase</button>
                </form>
            </div>
            </div>
            


        </div>
    </div>
    
</body>
</html>