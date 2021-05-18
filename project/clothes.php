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

        <style>
            *{
                margin:0;
                padding: 0;
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

            .side_pane{
                width:26vw;
                height:84vh;
                background-color: lightgray;
                float:left;
                margin-right: 2px;
                overflow: scroll;
            }

            .vl{
                width:0.4vw;
                height:84vh;
                background-color: #f1f1f1;
                float:left;
                margin-right: 2px;
            }

            .main_body{
                width:71vw;
                height:84vh;
                background-color: #f1f1f1;
                float:left;
                margin-left:2px;
            }        /* rgb(252, 233, 233);*/
            
            .main_body_heading_0{
                font-size: 2vw;
            }
            
            .flex_box_0{
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .checked{
                color:gold;
            }
            
            .nav-pills-heading{
                font-size: 1.5em;
                font-weight: bold;
            }
            .custom_box0{
                background-color: rgb(252, 233, 233);
                height:62vh; 
                margin:0.4vw; 
                width:22vw;
                border-radius: 30px;
                transition: background-color 2s;
                /* overflow: scroll; */
            }
            
            .custom_box0:hover{
                background-color: deeppink;
            }

            .custom_box0_a:link{
                text-decoration: none;
                
            }

            .custom_box0_a:visited{
                text-decoration: none;
               
            }

            .custom_box0_a:hover{
                text-decoration: none;
                color:lightgreen;
            }

            .custom_box0_a:active{
                color:lightsteelblue;
                text-decoration: none;
            }

            .custom_box0_h{
                font-size: 1em;
            }
            
            .tab_img{
                width:40em;
                height:42vh;
            }
            ._footer{
                width:100%;
                height:2.8vh;
                background-color: black;
            }
            .stars{
                display:inline-block;
            }

            .rating_heading_0{
                display:inline-block;
            }

            .rating_box_0{
                display: flex;
                justify-content: center;
            }

            .buy_now{
                position: relative;
                top: 2vh;
                right: 6vw;
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
            <h1 class = "text-center main_body_heading_0" style = "font-weight: bold;">Welcome To Clothes Section</h1>
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
                            <h3 class = "text-center">Denim Jeans</h3>
                            <img src = "../Images/i39.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Mesh Skirt</h3>
                            <img src = "../Images/i40.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Levis Shirt</h3>
                            <img src = "../Images/i41.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Cap Sleeves For Girls</h3>
                            <img src = "../Images/i42.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Men Suit</h3>
                            <img src = "../Images/i43.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Denim T-Shirt</h3>
                            <img src = "../Images/i44.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Lehenga</h3>
                            <img src = "../Images/i45.jpg" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Designer Top</h3>
                            <img src = "../Images/i46.PNG" class = "img-responsive tab_img">
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
                            <h3 class = "text-center">Men Shorts</h3>
                            <img src = "../Images/i47.jpg" class = "img-responsive tab_img"> 
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