<!--login modal-->
<div id="stlogin" class="modal fade" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" tabindex="-1" style="position:fixed;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background:rgb(37, 88, 7);">
                <h4 class="modal-title" id="exampleModalLongTitle" style=" color:white;">Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style=" color:white;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/includes/process.php">
                    <div class="form-group">
                        <label class="col-form-label">Email/Phone:</label>
                        <input type="text" id="user" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password:</label>
                        <input type="password" id="lpassword" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" value="remember" id="remember"> Keep me logged in.
                        <a href="#" style="float:right; text-decoration: underline;"  data-toggle="modal" data-target="#forgotPassword"  data-dismiss="modal">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" id="lerror" style="color:red;font-style:italic"></label>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" data-toggle="modal" data-target="#register"  data-dismiss="modal" style="float:left; margin-left:0;">Not registered? Register here.</a><button class="btn btn-secondary" id="login1"style="color: white; background: black; border:1px solid white; border-radius:0.4em; margin-left:0;padding:8px 30px; font-size:10pt;">LOGIN</button><button class="btn btn-secondary close" style="color: white; background: black; border:1px solid white; border-radius:0.4em; margin-left:0;padding:8px 30px; font-size:10pt;" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>