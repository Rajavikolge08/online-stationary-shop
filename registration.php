<?php

include("connection.php");
include("function.php");

session_start();



$con =  mysqli_connect('localhost' , 'root' ,'' ,'pen2papershop');

mysqli_select_db($con, 'pen2papershop');

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from user_registration where username = '$name' ";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"<script>
    alert('Username already taken');
    window.location.href='registration.php';
    </script>";
    
}
else{
    $reg = "insert into user_registration (username , email , password) values ('$name' , '$email' , '$pass' ) ";
    mysqli_query($con , $reg);
    echo"<script>
    alert('You have Successfully Registered Now please log in');
    window.location.href='login.php';
    </script>";
}



?>