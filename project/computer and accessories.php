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
        <script src = "../JQuery/jquery.js"></script>

        
        <?php include'partials/_style2.php'; ?>
    </head>

    <body>
        
        
        <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
        <?php include'partials/_navbar2.php'; ?>

        <?php include'partials/_side_pane.php'; ?>

         

        <div class = "vl"></div>
        <div class = "main_body">
            <h1 class = "text-center main_body_heading_0" style = "font-weight: bold;">Welcome To Computer and Accessories Section</h1>
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
                            <h3 class = "text-center">Dell XP5 15 7590</h3>
                            <img src = "../Images/i21.jpg" class = "img-responsive tab_img" id = "1" onmouseover = "reply_id(this.id)">
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
                                <div class = "buy_now"><a href = "buy now.php?product_id=caa_id1" class = "custom_box0_a" id="11490" onclick="reply_price(this.id)"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>        
                            </div>
                            
                            <!-- <a href = "#" class = "custom_box0_a" id="" onclick="reply_price(this.id)"><h4 class = "text-center custom_box0_h">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Jio 4G Hotspot</h3>
                            <img src = "../Images/i22.jpg" class = "img-responsive tab_img" id = "2" onmouseover = "reply_id(this.id)">
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
                                <div class = "buy_now"><a href = "buy now.php?product_id=caa_id2" class = "custom_box0_a" id="999" onclick="reply_price(this.id)"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a" id="" onclick="reply_price(this.id)"><h4 class = "text-center custom_box0_h">Buy Now</h4></a>     -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Zebronics Speaker</h3>
                            <img src = "../Images/i23.jpg" class = "img-responsive tab_img" id = "3" onmouseover = "reply_id(this.id)">
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
                                <div class = "buy_now"><a href = "buy now.php?product_id=caa_id3" class = "custom_box0_a" id="1609" onclick="reply_price(this.id)"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a" id="" onclick="reply_price(this.id)"><h4 class = "text-center custom_box0_h">Buy Now</h4></a>     -->
                        </div>
                    </div>
                </div>

                <div class = "tab-pane fade in " id = "top_rated">
                    <div class="flex_box_0">
                        <div class = "custom_box0">
                            <h3 class = "text-center">Apple Macbook</h3>
                            <img src = "../Images/i24.jpg" class = "img-responsive tab_img" id = "4" onmouseover = "reply_id(this.id)">
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
                                <div class = "buy_now"><a href = "buy now.php?product_id=caa_id4" class = "custom_box0_a" id="12290" onclick="reply_price(this.id)"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a" id="" onclick="reply_price(this.id)"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Sandisk Pendrive</h3>
                            <img src = "../Images/i25.jpg" class = "img-responsive tab_img" id = "5" onmouseover = "reply_id(this.id)">
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
                                <div class = "buy_now"><a href = "buy now.php?product_id=caa_id5" class = "custom_box0_a" id="999" onclick="reply_price(this.id)"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a" id="" onclick="reply_price(this.id)"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Night Hawk Router</h3>
                            <img src = "../Images/i26.jpg" class = "img-responsive tab_img" id = "6" onmouseover = "reply_id(this.id)">
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
                                <div class = "buy_now"><a href = "buy now.php?product_id=caa_id6" class = "custom_box0_a" id="22515" onclick="reply_price(this.id)"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a" id="" onclick="reply_price(this.id)"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                    </div>
                </div>

                <div class = "tab-pane fade in" id = "low_cost">
                    <div class="flex_box_0">
                        <div class = "custom_box0">
                            <h3 class = "text-center">Sony PS5 Controller</h3>
                            <img src = "../Images/i27.jpg" class = "img-responsive tab_img" id = "7" onmouseover = "reply_id(this.id)">
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
                                <div class = "buy_now"><a href = "buy now.php?product_id=caa_id7" class = "custom_box0_a" id="49990" onclick="reply_price(this.id)"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a" id="" onclick="reply_price(this.id)"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Microsoft Mouse</h3>
                            <img src = "../Images/i28.jpg" class = "img-responsive tab_img" id = "8" onmouseover = "reply_id(this.id)">
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
                                <div class = "buy_now"><a href = "buy now.php?product_id=caa_id8" class = "custom_box0_a" id="1200" onclick="reply_price(this.id)"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a" id="" onclick="reply_price(this.id)"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                        <div class = "custom_box0">
                            <h3 class = "text-center">Lenovo Keyboard</h3>
                            <img src = "../Images/i29.jpg" class = "img-responsive tab_img" id = "9" onmouseover = "reply_id(this.id)"> 
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
                                <div class = "buy_now"><a href = "buy now.php?product_id=caa_id9" class = "custom_box0_a" id="2100" onclick="reply_price(this.id)"><h7 class = "text-center custom_box0_h">Buy Now</h7></a></div>
                            </div>
                            <!-- <a href = "#" class = "custom_box0_a" id="" onclick="reply_price(this.id)"><h4 class = "text-center">Buy Now</h4></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class = "clearfix"></div>
        <script>
            function reply_id(num){
                var img_id = num;
                // alert(img_id);
                var src = $('#' + num).attr('src');
                // alert(src);
                localStorage.setItem('newSource', src);
                var x = localStorage.getItem('newSource');
                // alert('Source Stored in Local Storage is ' + x);
                // alert(x + 'Happy End');
            } 
            function reply_price(price){
            var cost = price;
            localStorage.setItem('selling_price', cost);  
            var y = localStorage.getItem('selling_price');

            }

        </script>

        <?php include'partials/_footer.php'; ?>
    </body>
</html>