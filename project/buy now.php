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
         window.onload = function(){
            var src = localStorage.getItem('newSource');
            alert('Opening image in Path ' + src );
            $('#user_product').attr('src', src);
        }

        $(document).ready(function(){
            $('.btn0').click(function(){
                var x = document.getElementById('user').value;
                alert('Congratulation Mr./Mrs. ' + x + 'Your Order has been placed and will be delivered within a week');
            });
        });
    </script>

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
        
        .product{
            width:27vw;
            height:60vh;
            background-color: rgb(252, 233, 233);
            margin: 2vh auto;
            border-radius: 1vw;
            transition: background-color 2s;
            padding-top:2vh;
            box-sizing: border-box;
        }

        .product:hover{
            background-color: deeppink;
        }
        
        #user_product{
            position: relative;
            left: 3.3vw;
            top: 3vh;
            width:20vw;
            height:45vh;
        }
        .confirmation{
            width:60vw;
            height:75vh;
            margin: 3vh auto;
            border: 1px solid black;
            box-sizing: border-box;
            padding: 4vh 7vw;
        }

        .btn0:hover{
            background-color: blue;
            color:white;

        }

        .btn-outline-primary {
        color: #C0C0C0;                    
        border-color: #C0C0C0;
        background-color: #000000;
        }
 
 
 
.btn-outline-primary:hover {
 
  color: #fff;
 
  background-color: #007bff;
 
  border-color: #007bff;
 
}
 
 
 
.btn-outline-primary:focus, .btn-outline-primary.focus {
 
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
 
}
 
 
 
.btn-outline-primary.disabled, .btn-outline-primary:disabled {
 
  color: #007bff;
 
  background-color: transparent;
 
}
 
 
 
.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
 
.show > .btn-outline-primary.dropdown-toggle {
 
  color: #fff;
 
  background-color: #007bff;
 
  border-color: #007bff;
 
}
 
 
 
.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
 
.show > .btn-outline-primary.dropdown-toggle:focus {
 
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
 
}
    </style>
</head>
<body>
         <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
        <?php include'partials/_navbar2.php'; ?>
    

    <h2 style = "text-align: center; font-size:4vw">Here is Your Product <span class = "glyphicon glyphicon-gift"></span></h2>
    <div class = "product">
        <img src ="" alt = "" id = "user_product" class = "img-responsive">
        <br><br>
        <h4 style = "text-align: center;">Price -----&gt; 52,000</h4>
    </div>
    <div class = "confirmation">
        <h3 style = "text-align: center;font-weight: bold;font-size:2vw">Confirm Your Purchase</h3>
        <hr style = "border: 0.1vw dashed gray;">
        
        <form>
            <div class = "form-group">
                <label for = "user">Username</label>
                <input type = "text" class = "form-control" name = "user" id = "user" placeholder = "Enter Your Username" required>
            </div>

            <div class = "form-group">
                <label for = "pass">Password</label>
                <input type = "password" class = "form-control" name = "password" id = "pass" placeholder = "Enter your Password" required>
            </div>

            <div class = "form-group">
                <label for = "email">Email</label>
                <input type = "email" class = "form-control" name = "email" id = "email" placeholder = "Enter your Email" required>
            </div>

            <div class = "form-group">
                <label for = "number">Credit Card Details</label>
                <input type = "text" class = "form-control" name = "card_number" id = "card_number" placeholder = "Enter your Credit Card Number" required>
            </div>

            <div class = "form-group">
                <label for = "number">Product Name</label>
                <input type = "text" class = "form-control" name = "product_name" id = "card_number" placeholder = "Enter your Product Name" required>
            </div>

            <div class = "form-group">
                <input type = "submit" class = "form-control btn0">
            </div>
        </form>
    </div>
    <?php include'partials/_footer.php'; ?>
</body>
</html>