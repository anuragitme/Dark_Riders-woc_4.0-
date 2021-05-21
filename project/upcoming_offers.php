<!DOCTYPE html>
<html lang="en">
<?php
session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace Deals</title>
    <link rel = "stylesheet" href = "../css/bootstrap.css">
    <link rel = "stylesheet" href = "../css/font-awesome.css">
    <script src = "../js/jquery.js"></script>
    <script src = "../js/bootstrap.js"></script>
    <script src = "../JQuery/jquery.js"></script>
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
        
        .main_heading{
            font-size: 2.4vw;
            background-color: aqua;
            margin:0;
        }

        .color{
            color: gold;
        }

        .products{
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            width:99w;
            height:130vh;
            background-color: aqua;
            align-items: center;
        }

        .item_summer{
            width:28vw;
            height: 55vh;
            background-color: yellow;
            border-radius: 3vw;
            transition: background-color 2s;
        }

        .item_summer:hover{
            background-color: rgb(255, 50, 50);
        }
        
        .item_summer h3{
            font-size: 1.5vw;
        }

        .item_summer a:link{
            text-decoration: none;
            color:darkblue;
        }

        .item_summer a:visited{
            text-decoration: none;
            color:darkblue;
        }

        .item_summer a:hover{
            text-decoration: none;
            color:yellow;
        }

        .item_summer a:active{
            text-decoration: none;
            color:lightgrey;
        }
        .item_summer h5{
            font-size: 1vw;
        }
        .item_summer img{
            width:18vw;
            height:38vh;
            display: block;
            margin:0 auto;
        }
        .item_top{
            margin-bottom:3vh;
            margin-top: 3vh;
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

        .buy{
            border-radius: 2vw;
            outline:none;
            position:relative;
            left:10.4vw;
        }
    </style>
    <?php include'partials/_style2.php'; ?>
</head>
<body>
     <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
        <?php include'partials/_navbar2.php'; ?>

    <div class = "main_heading_div"><h1 style = "text-align: center;" class = "main_heading"><span class = "fa fa-star color"></span>Upcoming Sale Starts from 4 <sup>th</sup>July. Here are the Products<span class = "fa fa-star color"></span></h1></div>

    <div class="products ">
        <div class = "item_summer item_top"><h3 class = "text-center" style = "font-weight: bold;">Washing Machine</h3>
            <img src = "../Images/u1.jpg" alt = "">
            <br>
            <button class = "btn btn-info disabled buy">Buy Now</button>
        </div>

        <div class = "item_summer item_top"><h3 class = "text-center" style = "font-weight: bold;">Juice Maker</h3>
            <img src = "../Images/u2.jpg" alt = "">
            <br>
            <button class = "btn btn-info disabled buy">Buy Now</button>
        </div>

        <div class = "item_summer item_top"><h3 class = "text-center" style = "font-weight: bold;">Designer Tops</h3>
            <img src = "../Images/u3.jpg" alt = "">
            <br>
            <button class = "btn btn-info disabled buy">Buy Now</button>
        </div>

        <div class = "item_summer"><h3 class = "text-center" style = "font-weight: bold;">Dining Table</h3>
            <img src = "../Images/u4.jpg" alt = "">
            <br>
            <button class = "btn btn-info disabled buy">Buy Now</button>
        </div>

        <div class = "item_summer"><h3 class = "text-center" style = "font-weight: bold;">Deodrant and perfume</h3>
            <img src = "../Images/u5.jpg" alt = ""> 
            <br>
            <button class = "btn btn-info disabled buy">Buy Now</button>
        </div>

        <div class = "item_summer"><h3 class = "text-center" style = "font-weight: bold;">Remote Control Plane</h3>
            <img src = "../Images/u6.jpg" alt = "">
            <br>
            <button class = "btn btn-info disabled buy">Buy Now</button>
        </div>
    </div>

   
        

        <?php include'partials/_footer.php'; ?>
</body>
</html>