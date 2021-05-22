<?php 

echo'<div class = "nav navbar-inverse custom">
            <div class = "container-fluid">
                <ul class = "nav navbar-nav">
                    <li><a href = "#modal1" data-toggle = "modal"><span class = "glyphicon glyphicon-list">&nbsp;</span>All</a>
                        <div class = "modal fade" id = "modal1">
                            <div class = "modal-dialog modal-dialog-scrollable">
                                <div class = "modal-content">
                                    <div class = "modal-header" id = "modal_header_0">
                                        &nbsp;&nbsp;<span class="fa fa-user-circle-o fa-3x" class = "modal_header_1">&nbsp;&nbsp;&nbsp;&nbsp;Hi Shopaholic !</span>
                                    </div>
                                    <div class = "modal-body">
                                        <h3 style = "font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Popular Departments</h3>
                                        <ul style = "list-style-type: none;">
                                        <br>
                                            <li><a href = "electronics.php" class = "modal_a-grp_0">Electronics&nbsp;&nbsp;&nbsp;<span class="fa fa-microchip"></span></a></li>
                                            <br>
                                            <li><a href = "computer and accessories.php" class = "modal_a-grp_0">Computers&nbsp;&nbsp;&nbsp;<span class="fa fa-desktop"></span></a></li>
                                            <br>
                                            <li><a href = "clothes.php" class = "modal_a-grp_0">Clothing&nbsp;&nbsp;&nbsp;<span class="fa fa-female"></span></a></li>
                                            <br>
                                            <li><a href = "toys.php" class = "modal_a-grp_0">Toys&nbsp;&nbsp;&nbsp;<span class="fa fa-superpowers"></span></a></li>
                                        </ul>
                                            <br>
                                        <h3 style = "font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programs and Features</h3>
                                        <ul style = "list-style-type: none;">
                                            
                                            <br>
                                            <li><a href = "upcoming_offers.php" class = "modal_a-grp_0">Upcoming Offers&nbsp;&nbsp;<span class="fa fa-american-sign-language-interpreting"></span></a></li>
                                            <br>
                                            <li><a href = "summer_special.php" class = "modal_a-grp_0">Summer Special&nbsp;&nbsp;<span class="fa fa-coffee"></span></a></li>
                                        </ul>
                                        <br>
                                        <h3 style = "font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Digital Content and Devices</h3>
                                        <br>
                                        <ul style = "list-style-type: none;">
                                            <li><a href = "music.php" class = "modal_a-grp_0">Ace Deals Music&nbsp;&nbsp;&nbsp;<span class="fa fa-volume-up"></span></a></li>
                                            <br>
                                            <li><a href = "promo_video.php" class = "modal_a-grp_0">Ace Deals Promotion Video&nbsp;&nbsp;&nbsp;<span class="fa fa-play-circle"></span></a></li>
                                            <br>
                                            <li><a href = "ace_deals_centers.php" class = "modal_a-grp_0">Ace Deals Centers&nbsp;&nbsp;&nbsp;<span class="fa fa-database"></span></a></li>
                                            
                                        </ul>

                                        

                                    </div>
                                    <div class = "modal-footer">Copyrighted by &copy; Ace Deals</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href = "music.php"><span class="fa fa-thumbs-o-up">&nbsp;&nbsp;&nbsp;</span>Listen Music</a></li>
                    <li><a href = "customer_service.php"><span class="fa fa-users">&nbsp;&nbsp;&nbsp;</span>Customer Service</a></li>
                    
                </ul>
            </div>
        </div>';

        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true" ){

        echo'<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Your account is created.</p>
  <hr>
  <p class="mb-0">Whenever you need to login you can login using your credentials.</p>
</div>';
        
}
if(isset($_GET['signupunsuccess1']) && $_GET['signupunsuccess1']=="true" ){

        echo'<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Sorry!</h4>
  <p>Your account is not created.</p>
  <hr>
  <p class="mb-0">The email you have entered already exists.Please try with another email</p>
</div>';
        
}
if(isset($_GET['signupunsuccess2']) && $_GET['signupunsuccess2']=="true" ){

        echo'<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Sorry!</h4>
  <p>Your account is not created.</p>
  <hr>
  <p class="mb-0">The passwords you have entered in both fields does not match.Please enter same passwords</p>
</div>';
        
}
if(isset($_GET['loginfailure']) && $_GET['loginfailure']=="true" ){

        echo'<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Sorry!</h4>
  <p>You are not logged in.</p>
  <hr>
  <p class="mb-0">Please enter correct password</p>
</div>';
        
}
if(isset($_GET['loginfailure2']) && $_GET['loginfailure2']=="true" ){

        echo'<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Sorry!</h4>
  <p>Please check the details you have entered.</p>
  <hr>
  <p class="mb-0">There is no account from this email id</p>
</div>';
        
}
if(isset($_GET['ordered']) && $_GET['ordered']=="true" ){

        echo'<div class="alert alert-info" role="alert">
  <h4 class="alert-heading">Congratulations!</h4>
  <p>You have ordered an item.For further details related to your order please go to profile section.</p>
  <hr>
  <p class="mb-0">Thanks for shoping from Ace Deals.</p>
</div>';
        
}
if(isset($_GET['deleted']) && $_GET['deleted']=="true" ){

        echo'<div class="alert alert-info" role="alert">
  <h4 class="alert-heading">Deletion Successful!</h4>
  <p>Your account has been deleted successfully.</p>
  <hr>
  <p class="mb-0">To take the best benefits from Ace Deals try to create another account and login through that.</p>
</div>';
        
}

?>
