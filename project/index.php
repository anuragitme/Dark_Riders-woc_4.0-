<!DOCTYPE php>
<php>
    <head>
        <title>Home Page</title>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <link rel = "stylesheet" href = "../css/bootstrap.css">
        <link rel = "stylesheet" href = "../css/font-awesome.css">
        <script src = "../js/jquery.js"></script>
        <script src = "../js/bootstrap.js"></script>
        
        <style>
            *{
                margin:0;
                padding:0;
            }
  
            .custom{
                background-color: rgb(24, 22, 22);
            }
            
            #nav_header{
                transform: translate(38vw,0vw);
            }

            #modal_header_0{
                background-color: rgb(29, 27, 27);
            }

            .modal_header_1{
                font-size:30px;
            }
            
            .modal-header{
                color:whitesmoke;
            }
            
            .modal_a-grp_0:link{
                text-decoration: none;
                color:black;
            }

            .modal_a-grp_0:visited{
                text-decoration: none;
                color:black;
            }

            .modal_a-grp_0:hover{
                text-decoration: none;
                color:red;
            }

            .modal_a-grp_0:active{
                color:deeppink;
                text-decoration: none;
            }
   
            /* .col-md-12{
                padding:0px;
            }
            
            .custom_box_0{
                background-color: white;
            }

            .custom_box_1{
                background-color: rgb(252, 233, 233);
                margin:14.8px;
                width:340px;
                height:340px;
                float:left;
                border-radius:25px;
                transition: background-color 2s;
                overflow:hidden;
            }
            
            .custom_box_2{
                height:645px;
                width:360px;
                background-color: silver;
                transform: translate(0px,-325px);
            }
            
            .custom_box_1:hover{
                background-color: deeppink;
            }
            
            .custom_a:link{
                color:blue;
                text-decoration: none;
            }

            .custom_a:visited{
                color:blue;
                text-decoration: none;
            }

            .custom_a:hover{
                color:lightgreen;
                text-decoration: none;
            }

            .custom_a:active{
                color:lightskyblue;
                text-decoration: none;
            }
            
            .custom_box_2{
                background-color: rgb(252, 233, 233);
                border-radius:25px;
                transition: background-color 2s;
            }
            
            .custom_box_2:hover{
                background-color: deeppink;
            }
            
            .separator_0{
                border:3px dotted silver;
                transform: translate(0px,-295px);
            }

            .footer_header{
                width:100%;
                height:50px;
                background-color:rgb(49, 46, 46);
                background-image: url(../Background/background_0.PNG);
                transform:translate(0px,-300px);
                color:white;
                box-sizing: border-box;
            }
            
            .footer_header_heading:hover{
                color:lightgray;
            }

            .footer_body{
                width:100%;
                height:400px;
                background-color: lightgreen;
                transform:translate(0px,-300px);
                background-image: url(../Background/background_1.PNG);
            }
            
            .footer_l li span{
                color:white;
                font-size: 20px;
                
            }
            
            .footer_a:link{
                color:white;
                text-decoration: none;
            }

            .footer_a:visited{
                color:white;
                text-decoration: none;
            }

            .footer_a:hover{
                color:deeppink;
                text-decoration: none;
            }

            .footer_a:active{
                color:darkred;
                text-decoration:none;
            }
             */
            .container_flex_0{
                width:98.8vw;
                height:130vh;
               
                display: flex;
                background-color: lightgrey;
                justify-content: space-evenly;
                margin-top: 0.5vh;
                flex-wrap: wrap;
            }
            
            .carousel_img_0{
                width:100vw;
            }
            .flex_item{
                width:25vw;
                height: 50vh;
                border: 2px solid black;
                border-radius:2vw;
                transition: background-color 2s;
                background-color: rgb(252, 233, 233);
                
            }
            
            .flex_item:hover{
                background-color: deeppink;
            }
            #item1{
                margin-top: 3vh;
            }

            #item2{
                margin-top: 3vh;
            }

            #item3{
                margin-top: 3vh;
            }

            .img_flex{
                margin: 0 auto;
                height:33vh;
            }

            .flex_item a:link{
                color:navy;
                text-decoration: none;
            }

            .flex_item a:visited{
                color:navy;
                text-decoration: none;
            }

            .flex_item a:hover{
                color:red;
                text-decoration: none;
            }

            .flex_item a:active{
                color:purple;
                text-decoration: none;
            }

            .footer_header_0{
                background-image: url(../Background/background_0.PNG);
                width:98.8vw;
                height:5vh;
            }

            .footer_header_0 h2{
                color:white;
                margin:0vh;
            }

            .footer_body{
                width:98.8vw;
                height:50vh;
                background-image: url(../Background/background_1.PNG);
                display:flex;
                justify-content: space-evenly;
            }

            .footer_body_flex{
                width:25em;
                height:40vh;
                margin-top:5vh;
            }

            .flex_list_0{
                list-style-type: none;
                margin: 0 6em;
                display: inline-block;
            }

            .flex_list_1{
                list-style-type: none;
                margin: 0 6em;
                display: inline-block;
            }

            
            .flex_list_2{
                list-style-type: none;
                margin: 0 6em;
                display: inline-block;
            }

            .flex_a{
                font-size:1.2em;
            }

            .flex_a li a:link{
                color:white;
                text-decoration: none;
            }

            .flex_a li a:visited{
                color:white;
                text-decoration: none;
            }

            .flex_a li a:hover{
                color:red;
                text-decoration: none;
            }

            .flex_a li a:active{
                color:deeppink;
                text-decoration: none;
            }

            .footer_footer{
                width:98.8vw;
                height:4.2vh;
                background-color: black;
            }

            .footer_footer h3{
                margin-top: 0vh;
                color: white;
            }
        </style>
    </head>

    <body>

        <div class = "nav navbar-inverse">
            <div class = "container-fluid">
                <ul class = "nav navbar-nav navbar-right">
                    <li><a href = "#"><span class="glyphicon glyphicon-log-in"> Sign Up</span></a></li>
                    <li><a href = "#"><span class = "glyphicon glyphicon-earphone"> Contact Us</span></a></li>
                    <li class = "dropdown"><a href = "#" data-toggle = "dropdown"><span class="glyphicon glyphicon-user"> User</span> <span class = "caret"></span></a>
                        <ul class = "dropdown-menu">
                            <li><a href = "#">Profile</a></li>
                            <li><a href = "#">Logout</a></li>
                            <li><a href = "#">Delete Account</a></li>
                        </ul>
                    </li>
                </ul>
                
                <div class = "navbar-header" id = "nav_header">
                    <a href = "index.php" class = "navbar-brand">Welcome To Ace Deals</a>
                </div>
                <img src = "../Logo/logo.PNG" style = "transform: translate(-230px,0px);">    
            </div>
        </div>

        <div class = "nav navbar-inverse custom">
            <div class = "container-fluid">
                <ul class = "nav navbar-nav">
                    <li><a href = "#modal1" data-toggle = "modal"><span class = "glyphicon glyphicon-list">&nbsp;</span>All</a>
                        <div class = "modal fade" id = "modal1">
                            <div class = "modal-dialog modal-dialog-scrollable">
                                <div class = "modal-content">
                                    <div class = "modal-header" id = "modal_header_0">
                                        &nbsp;&nbsp;<span class="fa fa-user-circle-o fa-3x" class = "modal_header_1">&nbsp;&nbsp;&nbsp;&nbsp;Hello Sign Up</span>
                                    </div>
                                    <div class = "modal-body">
                                        <h3 style = "font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shop By Departments</h3>
                                        <ul style = "list-style-type: none;">
                                            <li><a href = "electronics.php" class = "modal_a-grp_0">Electronics&nbsp;&nbsp;&nbsp;<span class="fa fa-microchip"></span></a></li>
                                            <br>
                                            <li><a href = "computer and accessories.php" class = "modal_a-grp_0">Computers&nbsp;&nbsp;&nbsp;<span class="fa fa-desktop"></span></a></li>
                                            <br>
                                            <li><a href = "clothes.php" class = "modal_a-grp_0">Clothing&nbsp;&nbsp;&nbsp;<span class="fa fa-female"></span></a></li>
                                            <br>
                                            <li><a href = "toys.php" class = "modal_a-grp_0">Toys&nbsp;&nbsp;&nbsp;<span class="fa fa-superpowers"></span></a></li>
                                        </ul>

                                        <h3 style = "font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programs and Features</h3>
                                        <ul style = "list-style-type: none;">
                                            <li><a href = "#" class = "modal_a-grp_0">Gift Cards&nbsp;&nbsp; <span class = "glyphicon glyphicon-gift"></span></a></li>
                                            <br>
                                            <li><a href = "#" class = "modal_a-grp_0">Upcoming Offers&nbsp;&nbsp;<span class="fa fa-american-sign-language-interpreting"></span></a></li>
                                            <br>
                                            <li><a href = "#" class = "modal_a-grp_0">Summer Special&nbsp;&nbsp;<span class="fa fa-coffee"></span></a></li>
                                        </ul>

                                        <h3 style = "font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Digital Content and Devices</h3>
                                        <ul style = "list-style-type: none;">
                                            <li><a href = "#" class = "modal_a-grp_0">Ace Deals Music&nbsp;&nbsp;&nbsp;<span class="fa fa-volume-up"></span></a></li>
                                            <br>
                                            <li><a href = "#" class = "modal_a-grp_0">Ace Deals Promotion Video&nbsp;&nbsp;&nbsp;<span class="fa fa-play-circle"></span></a></li>
                                            <br>
                                            <li><a href = "#" class = "modal_a-grp_0">Ace Deals Servers&nbsp;&nbsp;&nbsp;<span class="fa fa-database"></span></a></li>
                                            
                                        </ul>

                                        <h3 style = "font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Help and Settings</h3>
                                        <ul style = "list-style-type: none;">
                                            <li><a href = "#" class = "modal_a-grp_0">Login Info&nbsp;&nbsp;&nbsp;<span class="fa fa-user-o"></span></a></li>
                                            <br>
                                            <li><a href = "#" class = "modal_a-grp_0">Sign Up&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in"></span></a></li>
                                            <br>
                                        </ul>

                                    </div>
                                    <div class = "modal-footer">Copyrighted by &copy; Ace Deals</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href = "#"><span class="fa fa-thumbs-o-up">&nbsp;&nbsp;&nbsp;</span>Today's Deals</a></li>
                    <li><a href = "#"><span class="fa fa-users">&nbsp;&nbsp;&nbsp;</span>Customer Service</a></li>
                    <li><a href = "#"><span class = "glyphicon glyphicon-gift">&nbsp;</span>Gift Cards</a></li>
                </ul>
            </div>
        </div>

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
                <a href = "computer and accessories.php"><h5 class = "text-center">See More</h5></a>
            </div>
            <div class="flex_item" id="item2">
                <h3 class="text-center">Beauty Picks</h3>
                <img src="../Images/i2.PNG" alt = "" class = "img-responsive img_flex">
                <a href = "beauty picks.php"><h5 class = "text-center">See More</h5></a>
            </div>
            <div class="flex_item" id="item3">
                <h3 class="text-center">Toy and Joy</h3>
                <img src = "../Images/i3.PNG" alt = "" class = "img-responsive img_flex">
                <a href = "toys.php"><h5 class = "text-center">See More</h5></a>
            </div>
            <div class="flex_item" id="item4">
                <h3 class="text-center">Latest Fashion</h3>
                <img src = "../Images/i7.jpg" alt = "" class = "img-responsive img_flex">
                <a href = "clothes.php"><h5 class = "text-center">See More</h5></a>
            </div>
            <div class="flex_item" id="item5">
                <h3 class="text-center">Electronics</h3>
                <img src = "../Images/i4.PNG" alt = "" class = "img-responsive img_flex">
                <a href = "electronics.php"><h5 class = "text-center">See More</h5></a>
            </div>
            <div class="flex_item" id="item6">
                <h3 class="text-center">Home Furniture</h3>
                <img src = "../Images/i8.PNG" alt =" " class = "img-responsive img_flex">
                <a href = "furniture.php"><h5 class = "text-center">See More</h5></a>
            </div>   
        </div>
        <div class = "footer_header_0"><h2 class="text-center">Ace Deals</h2></div>
        <div class="footer_body">
            <div class="footer_body_flex">
                <h2 class="text-center" style = "font-weight: bold; color:white">Get To Know Us</h2>
                <ul class = "flex_list_0 flex_a">
                    <li><a href = "#">Ace Deals Music</a></li>
                    <li><a href = "#">Ace Deals Promotion Video</a></li>
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
</php>