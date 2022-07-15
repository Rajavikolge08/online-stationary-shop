<?php
session_start();

?>
<!DOCTYPE html>
<head>
    <title>header</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    body{
        font-family: sans-serif;
        font-weight:20px;
    }
    .nav{
        list-style: none;
        margin:0px ;
        padding:0px 45px;
        background: #2f4f4f;
        border-radius: 1px;
        overflow: auto;
    }
    .nav li{
        float: left;
    }
    .nav li a{
        display: block;
        text-decoration: none;
        color: #fff;
        padding: 17px 20px;
    }
    .logo{
        font-size: 20px;
    }
   
    .nav li a:hover{
        background-color: #006400; 
        border-radius: 7px;
        
    }
    .left-nav{
        width:80%;
        padding-left:80px;
    }
    .right-nav{
        width: 15%;
        float:right;
        margin-top:2px;
        padding: 2px;

    }
    .right-nav button{
        background-color: #008000;
        border: none;
        display: inline-block;
        border-radius:7px;

    }.right-nav button:hover{
        background-color:#006400;
    }
    
    
    
</style>
<body>
   <ul class="nav">
       <div class="left-nav">
       <li class="logo"><a href="INDEX.php">Pen2Paper</a></li>
       <li><a href="INDEX.php">Home</a></li>
       <li><a href="product.php">Product</a></li>
       <li><a href="contact.php">Contact</a></li>
       <li><a href="login.php">Account</a></li>
       </div>
      <div class="right-nav">
      <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
        ?>
      <button class="btnn"><li><a href="mycart.php">MYCART (<?php echo $count; ?>)</a></li></button>
      </div>
   </ul>
</body>
</html>