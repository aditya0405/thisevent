<div class="col-md-10 col-md-offset-1">
    <div class="container-fluid" style="padding-top: 20px "  >    
        <div id="loginbox" style="margin-top:10px;" >                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Konfirmasi Pembayaran</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body ">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                    
                         <form action="<?php echo base_url()."action_daftar"?>" method="post">
                        
                         <label for="id">ID Transaksi :</label>
                            <div style="margin-bottom: 10px "  class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon- "></i></span>
                                        <input id="login-username" style="height: 40px; font-size: 15px" type="text" class="form-control col-md-6" name="id" value="" placeholder="">                                        
                                    </div>

                          <label for="name">Nama Lengkap :</label>
                            <div style="margin-bottom: 10px"  class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-"></i></span>
                                        <input id="login-username" style="height: 40px; font-size: 15px" type="email" class="form-control col-md-6" name="name" value="" placeholder="">
                                    </div>

                          <label for="notelp">No Telp :</label>
                                <div style="margin-bottom: 10px " class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-"></i></span>
                                        <input id="login-username" style="height: 40px; font-size: 15px" type="text" class="form-control col-md-6" name="notelp" value="" placeholder="">
                                    </div>

                             <label for="email">Email :</label>
                                <div style="margin-bottom: 10px " class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-"></i></span>
                                        <input style="height: 40px; font-size: 15px" type="Telp" class="form-control col-md-6" name="email" value="" placeholder="">
                                    </div>


                            <label for="email">Nama Bank :</label>
                                <div style="margin-bottom: 10px" class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-"></i></span>
                                        <input style="height: 40px; font-size: 15px" type="text" class="form-control col-md-6" name="bank" value="" placeholder="">
                                    </div>


                            <label for="email">No Rek :</label>
                                <div style="margin-bottom: 10px" class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-"  ></i></span>
                                        <input style="height: 40px; font-size: 15px" type="text" class="form-control col-md-6" name="rek" value="" placeholder="">
                                    </div>


                            <label for="email">Jumlah Transfer :</label>
                                <div style="margin-bottom: 10px" class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-"></i></span>
                                        <input style="height: 40px; font-size: 15px" type="text" class="form-control col-md-6" name="transfer" value="" placeholder="">
                                    </div>


                            <label for="email">Tanggal Transfer :</label>
                                <div style="margin-bottom: 10px" class="input-group">
                                        <span class="input-group-addon" style="height: 40px; width: 40px"  ><i class="glyphicon glyphicon-"  ></i></span>
                                        <input style="height: 40px; font-size: 15px" type="text" class="form-control col-md-6" name="tgltf" value="" placeholder="">
                                    </div>

                        <div class="checkbox" style="margin-top: 25px ">
                                <button type="submit" class="btn btn-primary" style="height: 40px; width : 200px; font-size: 20px ">Konfirmasi</button>
                        </div>
                </form> 
             