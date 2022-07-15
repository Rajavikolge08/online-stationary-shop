<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="row">

<?php

$dbhost = 'localhost';
$dbuser ='root';
$dbpass = '';
$dbname ='pen2papershop';
 
$con = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

$query = "SELECT  `product_name`, `img`, `price`, `discount` FROM `cart` order by product_id ASC";

$queryfire = mysqli_query($con , $query);

$num = mysqli_num_rows($queryfire);

if($num>0){
    while($product = mysqli_fetch_array($queryfire)){

        <div class="col-lg-3">
        </div>
?>

<?php


    }
}


?>

</div>
</body>
</html>