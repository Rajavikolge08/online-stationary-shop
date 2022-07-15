<?php

include("heade.php");
?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Products</title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
<style>
     body,
        html {
            width: 100%;
            height: 100%;
        }
        footer {
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
        }
        #content{
            min-height: 600px;
        }
</style>
</head>
<body>

    <div class="container" id="content">
        <div class="jumbotron" id="products-jumbotron">
          <center>  <h3><b>Welcome to our Store!</b></h3>
            <p>We have the best stationary materials. No need to hunt around, we
                have all in one place</p></center>
        </div>

        <div class="row text-center" id="cameras">
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/classmatepack.jpg">
                        <div class="caption">
                            <h5><b>Notebooks</b></h5>
                            <p>Price:RS.350.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Notebooks">
                            <input type="hidden" name="price" value="350">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/markers.jpg">
                        <div class="caption">
                            <h5><b>Markers</b></h5>
                            <p>Price:RS.1000.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Markers">
                            <input type="hidden" name="price" value="1000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/diary1.jpg">
                        <div class="caption">
                            <h5><b>Diary</b></h5>
                            <p>Price:RS.340.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Diary">
                            <input type="hidden" name="price" value="340">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/sketchpen.jpg">
                        <div class="caption">
                            <h5><b>Sketchpen</b></h5>
                            <p>Price:RS.300.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Sketchpen">
                            <input type="hidden" name="price" value="300">
                        </div>
                    </div>
                </form>
            </div>

        <div class="row text-center" id="cameras">
        <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/project papers.jpg">
                        <div class="caption">
                            <h5><b>Project Papers</b></h5>
                            <p>Price:RS.50.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Project Papers">
                            <input type="hidden" name="price" value="50">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/punching.jpg">
                        <div class="caption">
                            <h5><b>Punching Machine</b></h5>
                            <p>Price:RS.60.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Punching Machine">
                            <input type="hidden" name="price" value="60">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/drawingbook.jpg">
                        <div class="caption">
                            <h5><b>Drawing Book</b></h5>
                            <p>Price:RS.100.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Drawing Book">
                            <input type="hidden" name="price" value="100">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/campass.jpg">
                        <div class="caption">
                            <h5><b>Compass Box</b></h5>
                            <p>Price:RS.150.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Compass Box">
                            <input type="hidden" name="price" value="150">
                        </div>
                    </div>
                </form>
            </div>
 
        <div class="row text-center" id="cameras">
        <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/sharpner.jpg">
                        <div class="caption">
                            <h5><b>Sharpener</b></h5>
                            <p>Price:RS.10.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Sharpener">
                            <input type="hidden" name="price" value="10">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/grip.jpg">
                        <div class="caption">
                            <h5><b>Cello Gripper</b></h5>
                            <p>Price:RS.10.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Gripper Pen">
                            <input type="hidden" name="price" value="10">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/Notebook1.jpg">
                        <div class="caption">
                            <h5><b>Sketchpen</b></h5>
                            <p>Price:RS.60.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Classmate Notebook">
                            <input type="hidden" name="price" value="60">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/casio.jpg">
                        <div class="caption">
                            <h5><b>Scientific Calculator</b></h5>
                            <p>Price:RS.935.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Scientific Calculator">
                            <input type="hidden" name="price" value="935">
                        </div>
                    </div>
                </form>
            </div>
  
        <div class="row text-center" id="cameras">
        <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/rubber.jpg">
                        <div class="caption">
                            <h5><b>Eraser</b></h5>
                            <h4>Price: Rs.10</h4>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Eraser">
                            <input type="hidden" name="price" value="10">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/classmate.jpg">
                        <div class="caption">
                            <h5><b>Classmate Pencil</b></h5>
                            <p>Price:Rs.10.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Classmate Pencil">
                            <input type="hidden" name="price" value="10">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/campass1.jpg">
                        <div class="caption">
                            <h5><b>Compass</b></h5>
                            <p>Price:RS.100.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Compass">
                            <input type="hidden" name="price" value="100">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/highlighter.jpg">
                        <div class="caption">
                            <h5><b>Highlighter</b></h5>
                            <p>Price:RS.100.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Highlighter">
                            <input type="hidden" name="price" value="100">
                        </div>
                    </div>
                </form>
            </div>

        <div class="row text-center" id="cameras">
        <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/stapler.jpg">
                        <div class="caption">
                            <h5><b>Stapler</b></h5>
                            <p>Price:RS.50.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Stapler">
                            <input type="hidden" name="price" value="50">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/trimax.jpg">
                        <div class="caption">
                            <h5><b>Trimax Pen</b></h5>
                            <p>Price:RS.80.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Trimax Pen">
                            <input type="hidden" name="price" value="80">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/scale.jpg">
                        <div class="caption">
                            <h5><b>Scale</b></h5>
                            <p>Price:RS.80.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Scale">
                            <input type="hidden" name="price" value="80">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <form action="manage_cart.php" method="POST">
                    <div class="thumbnail">
                        <img src="img/gelpen.jpg">
                        <div class="caption">
                            <h5><b>Gelpen</b></h5>
                            <p>Price:RS.149.00</p>
                            <button type="submit" class="btn btn-primary btn-block" name="add_to_cart">Add To Cart</button>
                            <input type="hidden" name="item_name" value="Gelpen">
                            <input type="hidden" name="price" value="149">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>
</html>