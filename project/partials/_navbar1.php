
<?php
echo'<div class = "nav navbar-inverse">
            <div class = "container-fluid">
                <ul class = "nav navbar-nav navbar-right">
                    <li><div class="mx-2">';
      
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                      echo'<a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>';
                    }
                    else{
                       echo' <button class="btn btn-outline-primary navbar-btn" data-toggle="modal" data-target="#loginmodal">Login</button>';
                    }
                     echo'<button class="btn btn-outline-primary navbar-btn" data-toggle="modal" data-target="#signupmodal">Signup</button>
                        
                        </div></li>
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
        </div>';

        include'partials/_loginmodal.php';
        include'partials/_signupmodal.php';

        
        
        

?>