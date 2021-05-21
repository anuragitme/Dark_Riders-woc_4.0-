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

        .footer{
            width:100vw;
            height:3vh;
            background-color:black;
            color:white;
        }
    </style>
    <?php include'partials/_style2.php'; ?>
</head>
<body>
     <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
        <?php include'partials/_navbar2.php'; ?>

    <h1 style = "text-align: center;font-family: arial;font-weight: bold;">Welcome!! Let's Show You Our Centers</h1>
    <br>
    <div class = "flex_box">
        <div class = "flex_item" id = "box1">
            <h4 style = "text-align: center;font-weight: bold;">Mumbai Covid Center</h4>
            <img src = "../Images/cc1.PNG" class = "office_img img-responsive">
            <br>
            <p class = "text text-muted">Our Covid Center located in Mumbai houses more th<wbr>an 200 beds. Our zeal and motivation to help 
                people led us to open this center. Unfortunately due to the ex<wbr>treme surge in number of cases in Mumbai this center is 
                completely full right now.
                <br>
                <span style = "font-weight: bold;font-size:1.3vw;">Contact:0123-321</span> 
            </p>
        </div>
        
        <div class = "flex_item" id = "box2">
            <h4 style = "text-align: center;font-weight: bold;">Lucknow Covid Cneter</h4>
            <img src = "../Images/cc2.PNG" class = "office_img img-responsive">
            <br>
            <p class = "text text-muted">This Covid Center was inducted by us as many our employees in Lucknow tested positive for Covid
                and were not able to get treatment thus to help our empl<wbr>oyees our company decided to open this especially f<wbr> our 
                employees.
                <br>
                <span style = "font-weight: bold;font-size:1.3vw;">Contact: 00120-8431</span>
            </p>
        </div>
        <div class = "flex_item" id = "box3">
            <h4 style = "text-align: center;font-weight: bold;">Bangalore Covid Cneter</h4>
            <img src = "../Images/cc3.jpg" class = "office_img img-responsive">
            <br>
            <p class = "text text-muted">The Bangalore Covid Center is our newly inducted center in India. It has got 210 beds with ventilators
                and is open for people to get treated free of charge.It has availability of doctors 24*7 so that anyone who has an emergency
                can get proper treatment.
                <br>
                <span style = "font-weight: bold;font-size:1.3vw;">Contact: 9003-1120</span>
            </p>
        </div>
        <div class = "flex_item" id = "box4">
            <h4 style = "text-align: center;font-weight: bold;">Chandigarh Covid Center</h4>
            <img src = "../Images/cc4.jpg" class = "office_img img-responsive">
            <br>
            <p class = "text text-muted">The Chandigarh Covid Center was inducted with help and money received from our investor who gave us a
                whopping 19 lakhs rupees to help people by opening up this center. It has 150 beds with ventilators and availability of 
                doctors to help people.
                <br>
                <span style = "font-weight: bold;font-size:1.3vw;">Contact: 0112-4321</span>
            </p>
        </div>
    </div>
    <br><br>

    <?php include'partials/_footer.php'; ?>
</body>
</html>