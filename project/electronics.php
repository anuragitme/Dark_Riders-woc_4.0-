<!DOCTYPE php>
<php>
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

        <?php include'partials/_navbar2.php'; ?>

        <div class = "side_pane">
            <ul class = "nav nav-pills nav-stacked">
                <br>
                <li><span class = "nav-pills-heading">&nbsp;&nbsp;Categories</span></li>
                <li><a href = "electronics.php" class = "modal_a-grp_0">&nbsp;&nbsp;Electronics&nbsp;&nbsp;&nbsp;<span class="fa fa-microchip"></span></a></li>
                <li><a href = "computer and accessories.php" class = "modal_a-grp_0">&nbsp;&nbsp;Computers&nbsp;&nbsp;&nbsp;<span class="fa fa-desktop"></span></a></li>
                <li><a href = "clothes.php" class = "modal_a-grp_0">&nbsp;&nbsp;Clothing&nbsp;&nbsp;&nbsp;<span class="fa fa-female"></span></a></li>
                <li><a href = "toys.php" class = "modal_a-grp_0">&nbsp;&nbsp;Toys&nbsp;&nbsp;&nbsp;<span class="fa fa-superpowers"></span></a></li>
                <li><a href = "furniture.php" class = "modal_a-grp_0">&nbsp;&nbsp;Furniture&nbsp;&nbsp;&nbsp;<span class="fa fa-bed"></span></a></li>
                <li><a href = "beauty picks.php" class = "modal_a-grp_0">&nbsp;&nbsp;Beauty Picks&nbsp;&nbsp;&nbsp;<span class="fa fa-heart"></span></a></li>
                <li><span class = "nav-pills-heading">&nbsp;&nbsp;Digital Content and Devices</span></li>
                <li><a href = "#" class = "modal_a-grp_0">Ace Deals Music&nbsp;&nbsp;&nbsp;<span class="fa fa-volume-up"></span></a></li>
                <li><a href = "#" class = "modal_a-grp_0">Ace Deals Promotion Video&nbsp;&nbsp;&nbsp;<span class="fa fa-play-circle"></span></a></li>
                <li><a href = "#" class = "modal_a-grp_0">Ace Deals Servers&nbsp;&nbsp;&nbsp;<span class="fa fa-database"></span></a></li>
                <li><span class = "nav-pills-heading">&nbsp;&nbsp;Help and Settings</span></li>
                <li><a href = "#" class = "modal_a-grp_0">Login Info&nbsp;&nbsp;&nbsp;<span class="fa fa-user-o"></span></a></li>
                <li><a href = "#" class = "modal_a-grp_0">Sign Up&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in"></span></a></li>                                                          
            </ul>
        </div>
        <div class = "vl"></div>
        <div class = "main_body">
            <h1 class = "text-center main_body_heading_0" style = "font-weight: bold;">Welcome To Electronics Section</h1>
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
                            <h3 class = "text-center">Galaxy S10</h3>
                            <img src = "../Images/i10.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Sony 4K HDR</h3>
                            <img src = "../Images/i11.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Havells Stealth Air</h3>
                            <img src = "../Images/i13.png" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Lloyd's Wfi Control AC</h3>
                            <img src = "../Images/i14.PNG" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Samsung Washing Machine</h3>
                            <img src = "../Images/i15.png" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Midea's Automatic Iron</h3>
                            <img src = "../Images/i16.jpeg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Whirpool Refrigerator</h3>
                            <img src = "../Images/i18.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Prestige Induction Stove</h3>
                            <img src = "../Images/i19.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Asus Zenfone 7</h3>
                            <img src = "../Images/i20.jpg" class = "img-responsive tab_img"> 
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

        <div class = "_footer">
            <h4 class = "text-center" style = "color:white;">Copyrighted By &copy; Ace Deals</h4>
        </div>
    </body>
</php>