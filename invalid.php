
<?php

session_start();

include("connection.php");
include("function.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
  <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
.container{
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(IMAGES/shop.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;
}
.logo{
    color:white;
    font-family: sans-serif;
}
.navbar {
    display: flex;
    align-items: center;
    padding: 20px 80px;
    background-color: black;
}
h6{
    padding-bottom: 10px;
    margin-bottom: 10px;
}

nav {
    flex: 1;
    text-align: right;
    float: auto;
}

nav ul {
    display: inline-block;
    list-style-type: none;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

a {
    text-decoration: none;
    color:#999;
   
}
a:hover{
   color: white;
   
}
.form-box{
    width: 380px;
    height: 480px;
    background: rgb(227, 223, 233);
    margin: 5% auto;
    position: relative;
    padding: 5px;
    overflow: hidden;
    border-radius: 5px;
  
}
.button-box{
    width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow:  0 0 5px 3px #eb87e2;
    border-radius: 35px;
}
.toggle-btn{
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;

}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background: linear-gradient(to right, #9afbfa, #d071f9);
    border-radius: 30px;
    transition: 1s;
}
.login-form{
    border: 0px solid;
    top: 140px;
    position: absolute;
    width: 280px;
    transition: 1s;
}
.form-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-top: 0;
    border-right: 0;
    border-left: 0;
    border-bottom: 2px solid #999;
    outline: none;
    background: transparent;
}
.submit{
    width: 85%;
    padding: 10px 35px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right, #9afbfa, #d071f9);
    border: 0;
    outline: none;
    border-radius: 25px;
}
.checkbox{
    margin: 30px 5px;
}
span{
    color: rgb(58, 56, 56);
    font-size:12px ;
    bottom: 64px;
    position: absolute;

}
#login{
    left: 50px;
}
#register{
    left: 400px;
}
.log{
    color:white;
}
  </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
           
            <a href="INDEX.php" class = log><p>Pen2Paper Stationary</p></a>
        </div>
        <nav>
            <ul>
                <li><a href="INDEX.HTML">Home</a></li>
                <li><a href="product.html">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="login.php">Account</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()" >Login</button>
                <button type="button" class="toggle-btn" onclick="register()" >Register</button>
            </div>
            
            <form action="validation.php" class="login-form" id="login" method="POST">
            <h6><center>(invalid username or password)</center></h6>
               
                <input type="text" class="form-field" placeholder="Username" name="username" required>
                <input type="password" class="form-field" placeholder="Password" name="password" required>
                <input type="checkbox" class="checkbox" ><span>Remember Password</span>
                <button type="submit" class="submit">Login</button>
            </form>
            <form action="registration.php" method="POST" class="login-form" id="register">
                <input type="text" class="form-field" placeholder="Username" name="username" required>
                <input type="email" class="form-field" placeholder="Email" name="email" required>
                <input type="password" class="form-field" placeholder="Password" name="password" required>
                <input type="checkbox" class="checkbox" required ><span>Accept to the Terms & Conditions </span>
                <button type="submit" class="submit">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>