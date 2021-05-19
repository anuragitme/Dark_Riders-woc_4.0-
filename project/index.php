<!doctype html>
<html lang="en">
<?php
session_start(); ?>
    <head>
        <title>Home Page</title>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <link rel = "stylesheet" href = "../css/bootstrap.css">
        <link rel = "stylesheet" href = "../css/font-awesome.css">
        <script src = "../js/jquery.js"></script>
        <script src = "../js/bootstrap.js"></script>
        
        
        
        <?php include'partials/_style1.php'; ?>
    </head>

    <body>
        
        <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
        <?php include'partials/_navbar2.php'; ?>

        

        
        <!-- Slider starts here -->
        <div class = "col-md-12" style = "padding:0;">
                <div class = "carousel slide" data-ride = "carousel" id = "carousel1">

                    <!--Caraousel Indicators -->
                    <ol class = "carousel-indicators">
                        <li data-slide-to = "0" data-target = "#carousel1" class = "active"></li>
                        <li data-slide-to = "1" data-target = "#carousel1"></li>
                        <li data-slide-to = "2" data-target = "#carousel1"></li>
                        <li data-slide-to = "3" data-target = "#carousel1"></li>
                    </ol>
                    
                    <!-- Carousel Inner -->
                    <div class = "carousel-inner">
                        <div class = "item active">
                            <img src = "../Carousel/c1.PNG" class = "img-responsive carousel_img_0">
                        </div>

                        <div class = "item ">
                            <img src = "../Carousel/c2.PNG" class = "img-responsive carousel_img_0">
                        </div>

                        <div class = "item ">
                            <img src = "../Carousel/c3.PNG" class = "img-responsive carousel_img_0">
                        </div>

                        <div class = "item ">
                            <img src = "../Carousel/c4.PNG" class = "img-responsive carousel_img_0">
                        </div>
                    </div>
                    

                    <!--Carousel Controls -->
                    <a href = "#carousel1" class = "left carousel-control" data-slide = "prev">
                        <span class = "glyphicon glyphicon-chevron-left"></span>
                    </a>

                    <a href = "#carousel1" class = "right carousel-control" data-slide = "next">
                        <span class = "glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
        </div>  
 
         

        <div style = "clear:both;"></div>
        <div class="container_flex_0">
            <div class="flex_item" id="item1">
                <h3 class = "text-center">Computer and Accessories</h3>
                <img src = "../Images/i1.PNG" alt = "" class = "img-responsive img_flex">
                <button class = " btn btn-info custom_btn"><a href = "computer and accessories.php" ><h5 >See More</h5></a></button>
            </div>
            <div class="flex_item" id="item2">
                <h3 class="text-center">Beauty Picks</h3>
                <img src="../Images/i2.PNG" alt = "" class = "img-responsive img_flex">
               <button class = " btn btn-info custom_btn"><a href = "beauty picks.php"><h5 >See More</h5></a></button> 
            </div>
            <div class="flex_item" id="item3">
                <h3 class="text-center">Toy and Joy</h3>
                <img src = "../Images/i3.PNG" alt = "" class = "img-responsive img_flex">
                <button class = " btn btn-info custom_btn"> <a href = "toys.php"><h5 >See More</h5></a>
            </div></button>
            <div class="flex_item" id="item4">
                <h3 class="text-center">Latest Fashion</h3>
                <img src = "../Images/i7.jpg" alt = "" class = "img-responsive img_flex">
                 <button class = " btn btn-info custom_btn"><a href = "clothes.php"><h5 >See More</h5></a></button>
            </div>
            <div class="flex_item" id="item5">
                <h3 class="text-center">Electronics</h3>
                <img src = "../Images/i4.PNG" alt = "" class = "img-responsive img_flex">
                 <button class = " btn btn-info custom_btn"><a href = "electronics.php"><h5 >See More</h5></a></button>
            </div>
            <div class="flex_item" id="item6">
                <h3 class="text-center">Home Furniture</h3>
                <img src = "../Images/i8.PNG" alt =" " class = "img-responsive img_flex">
                 <button class = " btn btn-info custom_btn"><a href = "furniture.php"><h5 >See More</h5></a></button>
            </div>   
        </div>
        <div class = "footer_header_0"><h2 class="text-center">Ace Deals</h2></div>
        <div class="footer_body">
            <div class="footer_body_flex">
                <h2 class="text-center" style = "font-weight: bold; color:white">Get To Know Us</h2>
                <ul class = "flex_list_0 flex_a">
                    <li><a href = "#">Ace Deals Music</a></li>
                    <li><a href = "promo_video.php">Ace Deals Promotion Video</a></li>
                    <li><a href = "#">Ace Deals Server</a></li>
                </ul>
            </div>
            <div class="footer_body_flex">
                <h2 class="text-center" style = "font-weight: bold; color:white">Covid Help And Care</h2>
                <ul class = "flex_list_1 flex_a">
                    <li><a href = "#">Ace Deals's Covid Center</a></li>
                    <li><a href = "#">Charity</a></li>
                </ul>
            </div>
            <div class="footer_body_flex">
                <h2 class="text-center" style = "font-weight: bold; color:white">Product Categories</h2>
                <ul class = "flex_list_2 flex_a">
                    <li><a href = "electronics.php">Electronics</a></li>
                    <li><a href = "computer and accessories.php">Computer and Accessories</a></li>
                    <li><a href = "beauty picks.php">Beauty Picks</a></li>
                    <li><a href = "clothes.php">Clothes</a></li>
                    <li><a href = "toys.php">Toys</a></li>
                    <li><a href = "furniture.php">Furniture</a></li>
                </ul>
            </div>
        </div>

        <div class="footer_footer"><h3 class="text-center">Copyrighted By &copy; Ace Deals</h3></div>
    </body>
</html>