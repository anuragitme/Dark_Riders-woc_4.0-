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
            color:red;
        }

        .modal_a-grp_0:active{
            color:deeppink;
            text-decoration: none;
        }

        .contact_us{
            width:40vw;
            height:20vh;
            margin: 0 auto;
        }

        #contact_img{
            width:40vw;
            height:20vh;
        }

        .queries{
            display:flex;
            justify-content: space-evenly;
        }

        .contacts{
            width: 22vw;
            height: 22vh;
            /* background-color: thistle; */
        }

        .names li{
            list-style-type: none;
            line-height: 4vh;
            margin-left: 1.3vw;
            font-size: 1.18vw;
        }

        .more_help{
            display: flex;
            justify-content: center;
        }

        #box2{
            margin-right:12vw;
            margin-left:12vw;
        }
    </style>
</head>
<body>
     <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
        <?php include'partials/_navbar2.php'; ?>
    
    <br>
    <div class="contact_us">
        <img src = "../Images/c1.PNG" alt = "" id = "contact_img">
    </div>
    <br>
    <h1 class = "text-center" style = "font-weight: bold;">Hi!! Contact Us and Let Us Solve Your Queries??</h1>
    <br>
    <div class = "queries">
        <div class="contacts">
            <h4 class = "text-center" style = "font-weight: bold;">For Online Payment Related Queries</h4>
            <ul class = "names">
                <li>Ms. Radhika Srivastava: 9936xxxx358</li>
                <li>Mr. Anurag Sharma: 9794xxx803</li>
                <li>Mr. Aditya Singh: 9118xxx73</li>
                <li>Mr. Abhimanyu: 8684xxx721</li>
            </ul>
        </div>
        
        <div class="contacts">
            <h4 class = "text-center" style = "font-weight: bold;">Queries Related to Product Delivery</h4>
            <ul class = "names">
                <li>Mrs. Khushi Jain: 9956xxx438</li>
                <li>Ms. Tanushree Pandey: 7864xxx709</li>
                <li>Mr. Vansh Pandey: 8973xxx108</li>
            </ul>
        </div>
        <div class="contacts">
            <h4 class = "text-center" style = "font-weight: bold;">For Tracking Your Package Loaction</h4>
            <ul class = "names">
                <li>Mr. Vasav Gupta: 7871xxx132</li>
                <li>Ms. Prakrati Singh: 9873xxx648</li>
                <li>Mr. Archit Sharma: 9948xxx357</li>
            </ul>
        </div>
        <div class="contacts">
            <h4 class = "text-center" style = "font-weight: bold;">For Product Quality Related Queries</h4>
            <ul class = "names">
                <li>Ms. Arushi Gupta: 7873xxx412</li>
                <li>Ms. Ila Mishra: 8784xxx142</li>
                <li>Mr. Gaurv Singh: 9124xxxx431</li>
                <li>Mr. Akash Gupta: 9124xxxx567</li>
            </ul>
        </div>
    </div>
    
    <h2 style = "text-align: center; font-weight: bold;">Need More Help From Us?? Contact Us On Social Media</h2>
    <div class = "more_help">
        <div id  = "box1">
            <h3 class = "text-center">Our facebook id <span class = "fa fa-facebook-official"></span></h3>
            <h4 class="text-center"></h4>
        </div>

        <div id  = "box2">
            <h3 class = "text-center">Our Twitter id <span class = "fa fa-twitter-square"></span></h3>
            <h4 class="text-center"></h4>
        </div>

        <div id  = "box3">
            <h3 class = "text-center">Our Instagram id <span class = "fa fa-instagram"></span></h3>
            <h4 class="text-center"></h4>
        </div>
    </div>
    <?php include'partials/_footer.php'; ?>
</body>
</html>