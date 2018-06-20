
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4"><?php echo $data[0]->nama?>
      </h1>
      <div style="padding: 5px;margin-bottom:20px;background: #b4b4b4;"></div>


      <!-- Portfolio Item Row -->
      <div class="row" >
        
        <div class="col-md-8">
          <img class="img-fluid" src="<?php echo base_url()."assets/uploads/".$data[0]->gmbr;?>" alt="">
        </div>

        
        <div  class="col-md-4">
           <div style="padding-left: 20px" class="dtl">
          <h3 style="padding-top: 40px"><?php echo $data[0]->nama?></h3>
          <p style="padding-top: 0px; font-size: 20px;"><?php echo $data[0]->lokasi?></p>
          <label>Tanggal</label>
          <p style="padding-top: 0px; font-size: 20px;"><?php echo $data[0]->dari?></p>
          <p style="padding-top: 0px; font-size: 20px;"><?php echo $data[0]->sampai?></p>
          <label>Waktu</label>
          <p style="padding-top: 0px; font-size: 20px;"><?php echo $data[0]->mulai?></p>
          <p  style="padding-top: 0px; font-size: 20px;"><?php echo $data[0]->selesai?></p>
          <p style="padding-top: 10px; font-size: 30px;"><?php echo $kategori[0]->nama_kategori?></p>
        </div>
        <nav id="menu" style=" position: relative; top: 0px; z-index: 9999;">
          <div id="menu" class="checkbox text-center" style="margin-top: 25px;  padding-top: 50px;">
            <a href="<?php echo base_url()."ikuti_seminar/".$id?>" class="btn btn-primary btn-lg" style="height: 50px; width : 300px; font-size: 20px; ">Ikut Seminar  </a>
          </div>
        </div>
    </nav>
<!-- 
        <div class="modal fade" id="ikut" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <h1 class="text-center">Pemesanan</h1>
              </div>

                <div class="col-md-12">
                <div class="modal-body" style="padding-bottom: 30px">  
                <a><b>Seminar Nasional Interpersonal & Life Skill 2016</a></b>
                <select style="height: 35px" class="navbar-right" >
                    <option  class="list-group-item">1</option>
                    <option class="list-group-item ">2</option>
                    <option class="list-group-item ">3</option>
                    <option class="list-group-item ">4</option>
                </select>
              </div>
            </div>



              <div class="modal-footer" style="padding-top: 40px">
                <a class="navbar-left">Rp.50000</a>
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
              </div>
              
            </div>
            
          </div>
          
        </div>

      </div>
      <!-- /.row -->

<div class="alert alert-info alert-dismissable col-md-8">
          <a class="panel-close close" data-dismiss="alert"></a> 
          <strong>Perhatian !</strong> Jadwal Seminar selaku penyedia layanan situs event baris tidak bertanggung jawab terhadap isi event. Harap berhati-hati dan bijaksana dalam menanggapi event yang menyesatkan. Segala materi/content event maupun banner event sepenuhnya menjadi tanggung jawab pemasang event tersebut.  
        </div>
        

      <div class="row">
      <div class="col-md-8 ">
          <h3 class="my-3">Description</h3>
          <p>
            <?php echo $data[0]->deskripsi?>
          </p>
        </div>
      </div>  


      <!-- Related Projects Row -->
      <h3 class="my-4" style="padding-top: 30px">&nbsp</h3>

      <div class="row">

         <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&nbsp</small>
                </div>
              </div>
            </div>

         <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

             <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
      <!-- 
      </div> -->
    <!-- 
    <div class="row" style="padding-top: 30px"> -->

<!--         <div class="col-md-4 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
          <a href="#"><img class="img-fluid" src="http://placehold.it/500x300" alt=""></a>
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div> -->


      