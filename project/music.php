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
        <style>
            .music_body{
                display:flex;
                justify-content:space-evenly;
                align-items:center;
                width:100vw;
                height:82vh;
                border:1px solid black;
                background-color:#ccc;
            }

            .music_items{
                width:35vw;
                height:45vh;
                background-color:yellow;
            }

            .music_items iframe{
                width:35vw;
                height:45vh;
            }

            h4{
                margin:0;
            }
        </style>
        <?php include'partials/_style2.php'; ?>
        
    </head>

    <body>
        
        
        <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
        <?php include'partials/_navbar2.php'; ?>
 
    <!-- <div class="container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kJQP7kiw5Fk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/yLI2k4Ffc8M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div> -->
        <h2 class="text-center" >Worldwide famous songs</h2>
        <div class = "music_body">
        
            <div class = "music_items">
                <iframe src="https://www.youtube.com/embed/kJQP7kiw5Fk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class = "music_items">
                <iframe  src="https://www.youtube.com/embed/lpeuIu-ZYJY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
        </div>
        <h2 class="text-center">Famous Bollywood hits</h2>
        <div class = "music_body">
            <div class = "music_items">
                <iframe  src="https://www.youtube.com/embed/VOLKJJvfAbg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class = "music_items">
                <iframe src="https://www.youtube.com/embed/yLI2k4Ffc8M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
        </div>
        <h2 class="text-center">Top Punjabi songs</h2>
        <div class = "music_body">
            <div class = "music_items">
                <iframe  src="https://www.youtube.com/embed/klzyuLXNsGE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class = "music_items">
               <iframe  src="https://www.youtube.com/embed/G0Hx6uN2AJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
        </div>
        <h2 class="text-center">Old is Gold</h2>
        <div class = "music_body">
            <div class = "music_items">
                <iframe  src="https://www.youtube.com/embed/yIzCBU0_LyY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class = "music_items">
                <iframe  src="https://www.youtube.com/embed/vo1MykK4u8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
        </div>
<?php include'partials/_footer.php'; ?>
    </body>
</html>