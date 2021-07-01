<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/Q&Aforum/partials/_handlelogin.php" method="post">
            <div class="modal-body">
            <div class="form-group">
            
                        <label for="loginpass">User Name</label>
                        <input type="text" class="form-control" id="username" name="username" require>
                    </div>
               
                    <div class="form-group">
                        <label for="loginemail">Email address</label>
                        <input type="email" class="form-control" id="loginwmail" name="loginemail" 
                        aria-describedby="emailHelp" require>
                        
                    </div>
                    <div class="form-group">
                        <label for="loginpass">Password</label>
                        <input type="password" class="form-control" id="loginpass" name="loginpass" require>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                
            </div>
            
            </form>
        </div>
    </div>
</div>