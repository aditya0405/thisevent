
    <div class="container" style="padding-top: 20px "  >    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 100%; position: relative; top:-10px"><a href="#">Lupa Password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form  action="<?php echo base_url()."welcome/aksi_login"?>" class="form-horizontal" method="post">
                                    
                             <label for="email">Email :</label>
                            <div style="margin-bottom: 25px "  class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-envelope "></i></span>
                                        <input id="login-username" style="height: 40px; font-size: 15px" type="text" class="form-control" name="txtemail" placeholder="Email">                                        
                                    </div>

                            <label for="email">Password :</label>
                            <div style="margin-bottom: 25px "  class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-lock "></i></span>
                                        <input id="login-username" style="height: 40px; font-size: 15px" type="password" class="form-control" name="txtpass" placeholder="Password">                                        
                                    </div>


                                
                            <div class="input-group" >
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px " class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls text-center" >
                                      <button id="btn-login" type="submit" class="btn btn-success" style="height: 40px; font-size: 15px">Login</button>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary" style="height: 40px; font-size: 15px ">Login with Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="<?php echo base_url()."daftar"?>" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     
                
         </div> 
    </div>