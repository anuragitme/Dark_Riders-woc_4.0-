<!DOCTYPE html>
<html lang="en">
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
                <a href = "index.html" class = "navbar-brand">Welcome To Ace Deals</a>
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
                                        <li><a href = "electronics.html" class = "modal_a-grp_0">Electronics&nbsp;&nbsp;&nbsp;<span class="fa fa-microchip"></span></a></li>
                                        <br>
                                        <li><a href = "computer and accessories.html" class = "modal_a-grp_0">Computers&nbsp;&nbsp;&nbsp;<span class="fa fa-desktop"></span></a></li>
                                        <br>
                                        <li><a href = "clothes.html" class = "modal_a-grp_0">Clothing&nbsp;&nbsp;&nbsp;<span class="fa fa-female"></span></a></li>
                                        <br>
                                        <li><a href = "toys.html" class = "modal_a-grp_0">Toys&nbsp;&nbsp;&nbsp;<span class="fa fa-superpowers"></span></a></li>
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

    <div>
        <h2 class = "heading_0">Hello. What We Can Help You With?</h2>
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