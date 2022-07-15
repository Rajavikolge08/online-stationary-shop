<?php
 
session_start();

$con=mysqli_connect("localhost" , "root" , "" , "pen2papershop");
if(mysqli_connect_error())
{
    echo "<script>
    alert('cannot connect to database');
    windows.location.href='mycart.php';
    </script>";
    exit();
}
 
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     if(isset($_POST['purchase']))
     {
       $query1= INSERT INTO `order_manager`(`order_id`, `id`, `fullname`, `address`, `phone`, `payment`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')
     }

 }
 ?>