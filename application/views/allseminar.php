
    <!-- Page Content -->
    <div class="container-fluid">

      <div class="row">


          <div class="col-md-12 bgimg ">
            <div class="page-heading-info">
                  <marquee ><h1 class="page-title txtbgimg" itemprop="title">MARI IKUTI SEMINARNYA</h1></marquee>
                  <marquee behavlor="alternatif" direction="right"><p class="lead txtbgimg">SILAHKAN PILIH YANG ANDA MINATI !!</p></marquee>
                  <div style="padding-left: 30px">
                  <!-- <button href="#" class="btn btn-primary btn-lg">Mari Silahkan !!</button> -->
                </div>
                </div>
          </div>

        <div class="col-md-12">

          <div class="list-group col-md-3" style="padding-top: 30px">
            
            <form action="<?php echo base_url()."action_allseminar"?>" method="post">
            
           <select style="width: 250px" class="dftr">
            <option class="list-group-item" >Kota</option>
            <option class="list-group-item" >Jakarta</option>
            <option class="list-group-item" >Bogor</option>
            <option class="list-group-item" >Depok</option>
            <option class="list-group-item" >Tangerang</option>
            <option class="list-group-item" >Bekasi</option>
          </select>

           <select style="width: 250px" class="dftr">
            <option class="list-group-item" value="volvo">Kategori</option>
            <option class="list-group-item" value="saab">Jaringan</option>
            <option class="list-group-item" value="opel">Program</option>
            <option class="list-group-item" value="audi">Design</option>
          </select>

           <select style="width: 250px" class="dftr">
            <option class="list-group-item" value="volvo">Dates</option>
            <option class="list-group-item" value="saab">7 Hari</option>
            <option class="list-group-item" value="opel">30 Hari</option>
            <option class="list-group-item" value="audi">All Dates</option>
          </select>


          <div class="checkbox " style="margin-top: 25px; ">
                  <button type="submit" class="btn btn-primary text-center" style="height: 40px; width : 200px; font-size: 20px; background-color: #59456c; ">Submit</button>
          </div>
        </div>
      </form>
        <!-- /.col-lg-3 -->

        <div class="col-md-9" style="padding-top: 20px">

            <?php foreach ($data as $row) { ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="<?php echo base_url()."detail/".$row->id?>"><img class="card-img-top" src="<?php echo base_url()."assets/uploads/".$row->gmbr; ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="<?php echo base_url()."detail/".$row->id?>"><?php echo $row->nama; ?></a>
                  </h4>
                  <h5><?php echo "Rp. ".number_format($row->harga); ?></h5>
                  <p class="card-text"><?php echo $row->lokasi; ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&nbsp</small>
                </div>
              </div>
            </div>
            <?php } ?>
            
        </div>
        </div>
      </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
</form>