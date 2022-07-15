
<?php

include("connection.php");
include("function.php");

session_start();
header ('location:login.php');


$con =  mysqli_connect('localhost' , 'root' ,'' ,'pen2papershop');

mysqli_select_db($con, 'pen2papershop');

$name = $_POST ['username'];
$email = $_POST ['email'];
$pass = $_POST ['password'];

$s = " select * from user_registration where username = '$name'  && password = '$pass'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:product.php');
}
else{
    header('location:invalid.php');
}

