<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace Deals</title>
    <link rel = "stylesheet" href = "../css/bootstrap.css">
    <script src = "../js/jquery.js"></script>
    <script src = "../js/bootstrap.js"></script>
    <script src = "../JQuery/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $('body').mouseenter(function(){
                $('h3').animate({fontSize: '3vw'});
            });

            $('h3').mouseenter(function(){
                $('h3').animate({fontSize: '4vw'});
            });

            $('h3').mouseout(function(){
                $('h3').animate({fontSize: '3vw'});
            });
        });
    </script>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .main_body{
            width:100vw;
            height:100vh;
            background-color: aqua;
            background-image: url(../Images/v7.jpg);
            background-size: 100vw 100vh;
            background-repeat: no-repeat;
            filter: contrast(170%);
            
        }

       

        .nav_list{
            width:43.6vw;
            margin: 0vh auto;
            box-sizing: border-box;
        }
        .nav_list li{
            list-style-type: none;
            display: inline;
            margin:0vh 2vw;
            font-size: 1.8vw;
            font-weight: bold;
        }

        .nav_list li a:link{
            text-decoration: none;
            color:#0c6b2bd1;
            font-family: arial;
        }

        .nav_list li a:visited{
            text-decoration: none;
            color: #0c6b2bd1;
        }

        .nav_list li a:hover{
            text-decoration: none;
            color:rgb(233, 83, 83)
        }

        .nav_list li a:active{
            text-decoration: none;
            color:deeppink;
        }

        .video_body{
            display:flex;
            justify-content: space-evenly;
            width: 100vw;
            height:44vh;
            margin:0;
            align-items: center;
        }

        .flex_item{
            width: 30vw;
            height: 45vh;
           
        }

        .vid{
            width: 14vw;
            height: 45vh;
            margin-left:6vw;
            border-radius: 5vw;
        }

        .footer{
            background-color: black;
            color:white;
        }
        
        h3{
            font-size: 0;
            word-spacing: 0.9vw;
        }

        h4{
            margin: 0;
        }
    </style>
</head>
<body>
         <?php include'partials/_dbconnect.php';?>
         
    <div class="main_body">
        <nav class = "nav_0">
            <ul class = "nav_list">
                <li><a href = "index.php">Home</a></li>
                <li><a href = "#">Music</a></li>
                <li><a href = "#">Conatct Us</a></li>
                <li><a href = "#">Logout</a></li>
            </ul>
        </nav>
        <br><br>
        <h3 style = "text-align: center;">OUR NEW PROMOTION VIDEO</h3>
        <br><br><br>
        <div class="video_body">
            <div class = "flex_item">
                <video  class = "vid" controls autoplay >
                    <source src = "../promo video/promo_video.mp4" type = "video/mp4">
                </video>
            </div>   
        </div>
    </div>

    <?php include'partials/_footer.php'; ?>
</body>
</html>
