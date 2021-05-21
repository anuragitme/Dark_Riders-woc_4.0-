<?php 

echo'<div class = "nav navbar-inverse custom">
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
                                            <li><a href = "electronics.php" class = "modal_a-grp_0">Electronics&nbsp;&nbsp;&nbsp;<span class="fa fa-microchip"></span></a></li>
                                            <br>
                                            <li><a href = "computer and accessories.php" class = "modal_a-grp_0">Computers&nbsp;&nbsp;&nbsp;<span class="fa fa-desktop"></span></a></li>
                                            <br>
                                            <li><a href = "clothes.php" class = "modal_a-grp_0">Clothing&nbsp;&nbsp;&nbsp;<span class="fa fa-female"></span></a></li>
                                            <br>
                                            <li><a href = "toys.php" class = "modal_a-grp_0">Toys&nbsp;&nbsp;&nbsp;<span class="fa fa-superpowers"></span></a></li>
                                        </ul>

                                        <h3 style = "font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programs and Features</h3>
                                        <ul style = "list-style-type: none;">
                                            <li><a href = "#" class = "modal_a-grp_0">Gift Cards&nbsp;&nbsp; <span class = "glyphicon glyphicon-gift"></span></a></li>
                                            <br>
                                            <li><a href = "upcoming_offers.php" class = "modal_a-grp_0">Upcoming Offers&nbsp;&nbsp;<span class="fa fa-american-sign-language-interpreting"></span></a></li>
                                            <br>
                                            <li><a href = "summer_special.php" class = "modal_a-grp_0">Summer Special&nbsp;&nbsp;<span class="fa fa-coffee"></span></a></li>
                                        </ul>

                                        <h3 style = "font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Digital Content and Devices</h3>
                                        <ul style = "list-style-type: none;">
                                            <li><a href = "#" class = "modal_a-grp_0">Ace Deals Music&nbsp;&nbsp;&nbsp;<span class="fa fa-volume-up"></span></a></li>
                                            <br>
                                            <li><a href = "promo_video.php" class = "modal_a-grp_0">Ace Deals Promotion Video&nbsp;&nbsp;&nbsp;<span class="fa fa-play-circle"></span></a></li>
                                            <br>
                                            <li><a href = "ace_deals_centers.php" class = "modal_a-grp_0">Ace Deals Centers&nbsp;&nbsp;&nbsp;<span class="fa fa-database"></span></a></li>
                                            
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
                    <li><a href = "#"><span class="fa fa-thumbs-o-up">&nbsp;&nbsp;&nbsp;</span>Today\'s Deals</a></li>
                    <li><a href = "customer_service.php"><span class="fa fa-users">&nbsp;&nbsp;&nbsp;</span>Customer Service</a></li>
                    <li><a href = "#"><span class = "glyphicon glyphicon-gift">&nbsp;</span>Gift Cards</a></li>
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

?>
