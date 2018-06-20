        <div class="row">
            <div class="container-fluid" style="padding-top: 20px "  >    
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-8   col-sm-offset-2">   

                <div class="panel-info">
                        <div class="panel-title" style="font-size: 30px">Detail Acara</div>
                        <div class="btn_forgot"><a href="#"></a></div><br>
                    <div class="hline"></div>                           
                    

                        <form action="<?php echo base_url()."action_buatseminar"?>" method="post" enctype="multipart/form-data">

                        <div class="panel-body">
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                                    
                                    <label for="email" >Nama Event :</label>
                                    <div style="margin-bottom: 25px " class="input-group">
                                        <span class="input-group-addon buatseminar_email " ></span>
                                        <input id="login-username" name="nama" type="text" class="form-control inputseminar_email col-md-8 "   placeholder="Masukan Nama Yang Sesuai">
                                    </div>


                                    <label for="Lokasi">Lokasi : <strong style="color: #4b42dd ; padding-right: 40px" >Contoh : Jakarta,Indonsia</strong></label>
                                    <div style="margin-bottom: 25px"  class="input-group">
                                        <span class="input-group-addon buatseminar_email"  ></span>
                                        <input id="login-username" name="lokasi"  type="text" class="form-control inputseminar_email col-md-8" placeholder="Masukan Alamat Yang Sesuai">
                                    </div>

                                    <label for="email">Harga :</label>
                                    <div style="margin-bottom: 25px " class="input-group">
                                        <span class="input-group-addon buatseminar_email" ></span>
                                        <input id="login-username" name="harga" type="text" class="form-control inputseminar_email  col-md-8" name="username" value="" placeholder="Masukan Jumlah Yang Sesuai">
                                    </div>

                                    <label for="email">Kategori :</label>
                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon buatseminar_email" ></span>
                                        <select name="kategori" class="form-control inputseminar_email  col-md-8" style="height: 40px">
                                          <?php foreach($kategori as $row){?>
                                            <option value="<?php echo $row->id?>"><?php echo $row->nama_kategori?></option>
                                          <?php }?>
                                        </select>
                                    </div>

                                 <div class="row">
                                  <div class="col-md-4"> 
                                  <label for="tanggal">Tanggal   :</label>
                                  <div style="margin-bottom: 25px "  class="input-group">
                                     <input id="login-username" name="dari" type="date" class="form-control buatseminar_tgl " name="username" value="" >                                        
                                    </div>   
                                  </div>    

                                  <div class="col-md-4"> 
                                  <label for="tanggal">Waktu   :</label>
                                  <div style="margin-bottom: 25px "  class="input-group">
                                      <input type="time" id="login-username" name="mulai" class="form-control buatseminar_tgl " name="username" value="" >                                        
                                    </div>   
                                  </div>  
<!-- 
                                  <div class="col-md-2"> 
                                  <label for="tanggal">Sampai   :</label>
                                  <div style="margin-bottom: 25px "  class="input-group">
                                      <input type="date" id="login-username" name="sampai" class="form-control buatseminar_tgl " name="username" value="" >                                        
                                    </div>   
                                  </div>  

                                  <div class="col-md-2">
                                    <label for="mulai">Selesai   :</label>
                                     <div style="margin-bottom: 25px "  class="input-group">
                                      <input type="time" name="bday"  id="login-username" name="selesai" class="form-control buatseminar_tgl " name="username" value="" >                                        
                                    </div>  
                                 </div>
 -->
                                <div class="col-md-4">
                                    <label for="mulai">&nbsp</label>
                                </div>                 
                                
                               
                                </div>
                                 
                                 <div class="row">       
                                <div class="col-md-4" >     
                                 <label for="Gambar">Masukan Gambar :</label>
                                    <div style="margin-bottom: 25px " class="input-group">
                                        <input  type="file" style="height: 110px; font-size: 15px" name="image" type="text" class="form-control" >                                        
                                    </div>  
                                
                                     
                                 <label for="email">Deskripsi :</label>
                                    <div class="input-group">
                                            <textarea name="deskripsi" class="form-control" style="width: 250%;"></textarea>
                                        </div> 
                                    </div>   
                                </div>

                            
                            <!--<div class="input-group" > ""remember me""
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1">Remember me
                                        </label>
                                      </div>
                                    </div>-->
                                
                                
                                <div class="form-group text-center">
                                    <div class="col-sm-12 controls" style="padding-top: 30px" >
                                        <div class="hline"></div><br>
                                      <button id="btn-login" type="submit" href="#" class="btn btn-success" style="height: 40px; font-size: 15px ">Simpan</button>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary" style="height: 40px; font-size: 15px ">Kembali Ke Halaman</a><br>
</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                     </div> 
                 </div>
             </div>
         </form>