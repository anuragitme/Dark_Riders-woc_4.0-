

<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color:black; font-weight:bold; font-size:1.5em;" id="signupmodalLabel">Signup for Ace Deals account account</h5>
        
      </div>
      <form action="partials/_handle_Signup.php" method="post">
            <div class="modal-body">
                
                 <div class="mb-3">
                        <label for="username" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div><br> 
                    
                    <div class="mb-3">
                        <label for="signupEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signupEmail" name="signupEmail"aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div><br>
                    <div class="mb-3">
                        <label for="signupPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword">
                    </div><br>

                    <div class="mb-3">
                        <label for="signupcPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
                    </div><br>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </form>
      
    </div>
  </div>
</div>