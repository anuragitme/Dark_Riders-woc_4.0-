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
    <script src = "../js/jquery.js"></script>
    <script src = "../js/bootstrap.js"></script>
    <?php include'partials/_style2.php'; ?>
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
            color:red
        }

        .modal_a-grp_0:active{
            color:deeppink;
            text-decoration: none;
        }
            
        .flex_box{
            display: flex;
            justify-content: space-evenly;
            width:100vw;
            height:71vh;
            /* border:1px solid black */
        }

        .flex_item{
            width:22vw;
            height:70vh;
        }

        .office_img{
            width:21vw;
            height:30vh;
            position: relative;
            left:21w;
            margin:0;
            overflow:hidden;
            transition: width 1s, height 1s;
        }

        .office_img:hover{
            /* width:25vw; */
            height:35vh;
        }
        .text{
            line-height: 4vh;
        }

        .checked{
            color:gold;
        }

        .rating{
            width:50vw;
            margin:0 auto 0 auto;
        }

        .bar_container{
            width:100%;
            background-color: #f1f1f1;
            height:3.45vh;
        }

        .footer{
            width:100vw;
            height:3vh;
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
        <?php include'partials/_navbar2.php'; ?>
   

    <h1 style = "text-align: center;font-family: arial;font-weight: bold;">Welcome!! Let's Show You Our Centers</h1>
    <br>
    <div class = "flex_box">
        <div class = "flex_item" id = "box1">
            <h4 style = "text-align: center;font-weight: bold;">Bangalore Office</h4>
            <img src = "../Images/o1.jpg" class = "office_img img-responsive">
            <br>
            <p class = "text text-muted">The Bangalore Office loacted near Municipal Corpora<wbr>tion covers 30 acres of area with a 24*7 cafeteria
               and more than 500 employees.This office is mainly for Ou<wbr>tsourcing our business and for handling things related t<wbr>o IT.
               This office is also special as it is our only office to have Research and Development department.
            </p>
        </div>
        
        <div class = "flex_item" id = "box2">
            <h4 style = "text-align: center;font-weight: bold;">Mumbai Office</h4>
            <img src = "../Images/o2.jpg" class = "office_img img-responsive">
            <br>
            <p class = "text text-muted">This office mainly deals with our US based clients and handles our financial investments in online 
               shoppping. Thanks to this office ACE DEALS now has 10 regular investors and other three investors with a two year co<wbr>ntarct.
               The office has around 400 employees majorly dealing with finance.
            </p>
        </div>
        <div class = "flex_item" id = "box3">
            <h4 style = "text-align: center;font-weight: bold;">Gurgaon Office</h4>
            <img src = "../Images/o3.webp" class = "office_img img-responsive">
            <br>
            <p class = "text text-muted">Welcome To Our Lavish Office in Gurgaon. This office is our pride as it is ACE DEALS first office.
                It mainly ca<wbr>ters to domestics demands and handles d complaints and evaluates the trends in domestic market.It cover a huge
                area of 40 acres and is home to some of our trus<wbr>ted and oldest employess: D
            </p>
        </div>
        <div class = "flex_item" id = "box4">
            <h4 style = "text-align: center;font-weight: bold;">Noida Office</h4>
            <img src = "../Images/o4.jpg" class = "office_img img-responsive">
            <br>
            <p class = "text text-muted">Our Newly inducted office in Noida welcomes you. Due to our increasing profits and stocks ACE DEALS decided
                to open an office in Noida and quite surprisi<wbr>ngly within six months we have hired more than 150 employess and have received
                quite a positive respo<wbr>nse from our customers.
            </p>
        </div>
    </div>
    <br><br>
    <h2 style = "text-align: center;font-weight:bold;">What People Think About Us ??</h2>
    <hr>
    <div class = "rating">
        <span style = "font-size: 25px;">User Rating</span>
        <span class = "fa fa-star checked"></span>
        <span class = "fa fa-star checked"></span>
        <span class = "fa fa-star checked"></span>
        <span class = "fa fa-star checked"></span>
        <span class = "fa fa-star"></span>
        <br>
        <span style = "font-size: 18px;">4.1 average based on 254 reviews</span>
        <hr style = "border:2px solid #f1f1f1">
        <div class = "col-md-2">
            <div style = "font-size: 17px;">5 Star</div>
            <br>
            <div style = "font-size: 17px;">4 Star</div>
            <br>
            <div style = "font-size: 17px;">3 Star</div>
            <br>
            <div style = "font-size: 17px;">2 Star</div>
            <br>
            <div style = "font-size: 17px;">1 Star</div>
            
        </div>
        <div class = "col-md-8">
            <div class = "bar_container">
                <div style = "width:60%; height: 25px; background-color: rgb(65, 131, 65);"></div>
            </div>
            <br>
            <div class = "bar_container">
                <div style = "width:30%; height: 25px; background-color: rgb(89, 89, 216);"></div>
            </div>
            <br>
            <div class = "bar_container">
                <div style = "width:10%; height: 25px; background-color: lightsteelblue;"></div>
            </div>
            <br>
            <div class = "bar_container">
                <div style = "width:3%; height: 25px; background-color: orange;"></div>
            </div>
            <br>
            <div class = "bar_container">
                <div style = "width:15%; height: 25px; background-color: red;"></div>
            </div>
        </div>
        <div class = "col-md-2">
            <div style = "font-size: 17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;150</div>
            <br>
            <div style = "font-size: 17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;63</div>
            <br>
            <div style = "font-size: 17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15</div>
            <br>
            <div style = "font-size: 17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6</div>
            <br>
            <div style = "font-size: 17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20</div>
        </div>
        <div style = "clear: both;"></div>
    </div>
    <br>
    <?php include'partials/_footer.php'; ?>
</body>
</html>