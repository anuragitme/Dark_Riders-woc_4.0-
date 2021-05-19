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
     <script>
        $(document).ready(function(){
            $('#btn0').click(function(){
                var a = document.getElementById('user').value;
                alert('Hello' +' ' +  a + ' ' + 'Your' + ' ' + 'Complaint has been registered');
                $('#btn1').css('display', 'block');
            });
        });

     </script>
     <!-- <style>
        *{
            margin:0;
            padding:0;
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
   
        .heading_0{
            text-align: center;
            font-family: Arial;
            font-size: 2.1vw;
        }

        textarea{
            resize: none;
            outline:none;
            border: 1px solid #ccc;
            border-radius: 0.5vw;
            width:74vw;
            height: 20vh;
            
        }

        textarea:focus{
            box-shadow: 0 0 1px blue, 0 0 10px lightblue;
        }

        #btn0{
            transition: background-color 1s, color 0.5s;
        }
        #btn0:hover{
            background-color:yellow;
            color: blue;
        }
        
        
        #btn1 a:link{
            color:white;
            text-decoration: none;
        }

        #btn1 a:visited{
            color:white;
            text-decoration: none;
        }

        #btn a:hover{
            color:palevioletred;
            text-decoration: none;
        }

        #btn a:active{
            color: red;
            text-decoration: none;
        }
    </style> -->
    <?php include'partials/_style1.php'; ?>
    
</head>
<body>
     
     
     <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
     <?php include'partials/_navbar2.php'; ?>

      

    <div>
        <h2 class = "heading_0 text-center">Hello. What We Can Help You With?</h2>
    </div>
    <br><br><br>
    <div class = "container">
        <div class = "page-header">
            <h2>Register Your Complaint Here</h2>
        </div>

        <form class>
            <div class = "form-group">
                <label for = "user">Username</label>
                <input type = "text" name = "user" required id = "user" placeholder = "Enter Your Name" class = "form-control input">
            </div>

            <div class = "form-group">
                <label for = "pass">Password</label>
                <input type = "password" name = "pass" required id = "pass" placeholder = "Enter Your Password" class = "form-control">
            </div>
            
            <div class = "form-group">
                <label for = "email">Email</label>
                <input type = "email" name = "email" required id = "email" placeholder = "Enter Your Email" class = "form-control">
            </div>

            <div class="form-group">
                <label for = "complaint">Your Complaint</label>
                <br>
                <textarea  id = "comments" name = "comments"></textarea>
            </div>

            <button class = "btn btn-danger btn-block" id = "btn0"><span> Click To Submit <span></button>
            <br>
            <button class = "btn btn-success btn-block" id = "btn1" style = "display: none;"><a href = "index.html">Click Here To Go To Home</a></button>      
        </form>
    </div>
    <br><br><br>
</body>
</html>