<!DOCTYPE html>
<html lang="en">
<?php
session_start(); ?>
    <head>
        <title>Ace Deals</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "../css/bootstrap.css">
        <link rel = "stylesheet" href = "../css/font-awesome.css">
        <script src = "../js/jquery.js"></script>
        <script src = "../js/bootstrap.js"></script>

        <?php include'partials/_style2.php'; ?>
    </head>

    <body>
        

        <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
       <?php include'partials/_navbar2.php'; ?>

        <?php include'partials/_side_pane.php'; ?>

         

            
        </div>
        <div class = "vl"></div>
        <div class = "main_body">
            <h1 class = "text-center main_body_heading_0" style = "font-weight: bold;">Welcome To Furniture Section</h1>
            <hr>
            <ul class = "nav nav-tabs nav-justified">
                <li class = "active"><a href = "#best_seller" data-toggle = "tab">Best Seller</a></li>
                <li><a href = "#top_rated" data-toggle = "tab">Top Rated</a></li>
                <li><a href = "#low_cost" data-toggle = "tab">Low Cost</a></li>
            </ul>
            <div class = "tab-content">
                <div class = "tab-pane fade in active" id = "best_seller">
                    <div class="flex_box_0">
                        <div class = "custom_box0">
                            <h3 class = "text-center">3 Seater Sofa</h3>
                            <img src = "../Images/i48.PNG" class = "img-responsive tab_img">
                            <br>
                            <div class = "rating_box_0">
                                <div><h7 class = "text-center rating_heading_0">User Rating</h7></div>
                                <div class = "stars">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star"></span>
                                </div>
                                <div class = "buy_now"><a href = "#" class = "custom_box0_a"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>        
                            </div>
                            
                            <!-- <a href = "#" class = "custom_box0_a"><h4 class = "text-center custom_box0_h">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Motion Chair</h3>
                            <img src = "../Images/i49.png" class = "img-responsive tab_img">
                            <br>
                            <div class = "rating_box_0">
                                <div><h7 class = "text-center">User Rating</h7></div>
                                <div class="stars">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star"></span>
                                    <span class = "fa fa-star"></span>
                                </div>
                                <div class = "buy_now"><a href = "#" class = "custom_box0_a"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a"><h4 class = "text-center custom_box0_h">Buy Now</h4></a>     -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Godrej Cupboard</h3>
                            <img src = "../Images/i50.PNG" class = "img-responsive tab_img">
                            <br>
                            <div class = "rating_box_0">
                                <div><h7 class = "text-center">User Rating</h7></div>
                                <div class="stars">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star"></span>
                                </div>
                                <div class = "buy_now"><a href = "#" class = "custom_box0_a"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a"><h4 class = "text-center custom_box0_h">Buy Now</h4></a>     -->
                        </div>
                    </div>
                </div>

                <div class = "tab-pane fade in " id = "top_rated">
                    <div class="flex_box_0">
                        <div class = "custom_box0">
                            <h3 class = "text-center">Sheesham Table</h3>
                            <img src = "../Images/i51.jpg" class = "img-responsive tab_img">
                            <br>
                            <div class = "rating_box_0">
                                <div><h7 class = "text-center">User Rating</h7></div>
                                <div class="stars">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star"></span>
                                </div>
                                <div class = "buy_now"><a href = "#" class = "custom_box0_a"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Double Bed</h3>
                            <img src = "../Images/i52.jpg" class = "img-responsive tab_img">
                            <br>
                            <div class = "rating_box_0">
                                <div><h7 class = "text-center">User Rating</h7></div>
                                <div class="stars">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                </div>
                                <div class = "buy_now"><a href = "#" class = "custom_box0_a"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Bookcase</h3>
                            <img src = "../Images/i53.jpg" class = "img-responsive tab_img">
                            <br>
                            <div class = "rating_box_0">
                                <div><h7 class = "text-center">User Rating</h7></div>
                                <div class="stars">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star"></span>
                                    <span class = "fa fa-star"></span>
                                </div>
                                <div class = "buy_now"><a href = "#" class = "custom_box0_a"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                    </div>
                </div>

                <div class = "tab-pane fade in" id = "low_cost">
                    <div class="flex_box_0">
                        <div class = "custom_box0">
                            <h3 class = "text-center">Recline Chair</h3>
                            <img src = "../Images/i54.jpg" class = "img-responsive tab_img">
                            <br>
                            <div class = "rating_box_0">
                                <div><h7 class = "text-center">User Rating</h7></div>
                                <div class="stars">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star"></span>
                                    <span class = "fa fa-star"></span>
                                </div>
                                <div class = "buy_now"><a href = "#" class = "custom_box0_a"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Mattress</h3>
                            <img src = "../Images/i55.jpg" class = "img-responsive tab_img">
                            <br>
                            <div class = "rating_box_0">
                                <div><h7 class = "text-center">User Rating</h7></div>
                                <div class="stars">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                </div>
                                <div class = "buy_now"><a href = "#" class = "custom_box0_a"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Cutlery Stand</h3>
                            <img src = "../Images/i56.jpg" class = "img-responsive tab_img"> 
                            <br>
                            <div class = "rating_box_0">
                                <div><h7 class = "text-center">User Rating</h7></div>
                                <div class="stars">
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                    <span class = "fa fa-star checked"></span>
                                </div>
                                <div class = "buy_now"><a href = "#" class = "custom_box0_a"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class = "clearfix"></div>

        <?php include'partials/_footer.php'; ?>
    </body>
</html>