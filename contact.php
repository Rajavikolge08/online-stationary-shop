<?php

include("heade.php");

?>

<!DOCTYPE html>
<html lang="en">

    <head>
       
        <title>Contact Us</title>
        
    </head>
    <style>
          *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif; 
      
    }
    
    #content {
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(IMAGES/contact.jpg);    
    margin-top:4%;
    margin-left:35%;
    width:30%;
    height:80%;
    align-items: center;
    text-align: center;
    
    }
    .panel{
        border-style: solid;
        border-width:2px;
        border-color:#6F9DF3;
       background:#6F9DF3;
    }
    .panel-body{
        background:#fff;
    }
    .text-warning p{
        margin-top:20px;
        padding:10px;
    }
    .form-group{
        margin:15px;
        padding: 15px;
       
    }
    .form-control{
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom: 2px solid ;
        outline:none;
        width:90%;
    }
    .btn{
        width:90%;
    }
    h3{
        margin-top:15px;
        margin-bottom:10px;
        padding: 5px;
        font-weight: 40px;
        background-color:#6F9DF3;
        color:#fff;
    }
    .btn{
        padding:10px;
        background: #2E6DE5;
        color: #fff;
        border-radius: 5px;
        border: none;
    }

    
    </style>

    <body>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Any queries or remarks? Just write us a message!</i><p>
                                <form role="form" action="" method="POST">
                                <div class="form-group">
                                        <input type="username" class="form-control"  placeholder="Username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="message" class="form-control"  placeholder="Message" name="message" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn">Send Message</button><br><br>
                                </form><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>