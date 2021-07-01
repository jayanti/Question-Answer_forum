<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" 
aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Signup </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="/Q&Aforum/partials/_handlesignup.php" method="post">
            <div class="modal-body">
                  <div class="form-group">
                              <label for="exampleInputusername">User Name</label>
                              <input type="text" class="form-control" id="username" name="username" 
                              placeholder="Enter your Name" aria-describedby="emailHelp" required>
                          </div>
               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="useremail" name="useremail"
                         placeholder="Enter your E-mail address" aria-describedby="emailHelp" required>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="confirm password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputdate">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required>
                    </div> 
                    
                    <button type="submit" class="btn btn-primary">Signup</button>
                
            </div>
         
            </form>
    </div>
  </div>
</div>