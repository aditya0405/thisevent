


    <div class="container" style="padding-top: 20px "  >    
        <div id="loginbox" style="margin-top:10px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                    
                         <form action="<?php echo base_url()."action_daftar"?>" method="post">
                        
                         <label for="email">Username :</label>

                            <div style="margin-bottom: 10px "  class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-font "></i></span>
                                        <input style="height: 40px; font-size: 15px" type="text" class="form-control" name="username" value="" placeholder="" required>   
                                                                           
                                    </div>

                          <label for="email">Email :</label>

                            <div style="margin-bottom: 10px "  class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-envelope "></i></span>
                                        <input id="login-username" style="height: 40px; font-size: 15px" type="email" class="form-control" name="email" value="" placeholder="" required>
                                    </div>

                          <label for="email">Password :</label>

                                <div style="margin-bottom: 10px " class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-lock "></i></span>
                                        <input id="login-username" style="height: 40px; font-size: 15px" type="password" class="form-control" name="password" value="" placeholder="" required>
                                    </div>

                             <label for="email">No Telp :</label>

                                <div style="margin-bottom: 10px " class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-phone"></i></span>
                                        <input style="height: 40px; font-size: 15px" type="Telp" class="form-control" name="notelp" value="" placeholder="" required>
                                    </div>

                             <label for="email">Alamat :</label>

                                <div style="margin-bottom: 10px " class="input-group">
                                    <!-- <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-road "></i></span> -->
                                        <textarea type="text" id="login-username"  style=" height:80px; font-size: 15px" class="form-control" name="alamat" value="" placeholder="" required></textarea>
                                    </div>

                            <label for="email">Instansi :</label>

                                <div class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-education"  ></i></span>
                                        <input style="height: 40px; font-size: 15px" type="text" class="form-control" name="instansi" value="" placeholder="" required>
                                    </div>

                        <div class="checkbox text-center" style="margin-top: 25px ">
                                <button type="submit" name="kirim" value="kirim" class="btn btn-primary" style="height: 40px; width : 200px; font-size: 20px ">Submit</button>
                        </div>
                </form> 
             