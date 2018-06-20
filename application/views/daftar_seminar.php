    
    <div  class="col-lg-9">
        
          <h1 class="my-4"><?php echo $title?> </h1>
          <div style="padding: 5px;margin-bottom:20px;background: #b4b4b4;"></div>


            <div class="row" id="div1"  style="padding-top: 20px">
              <?php foreach ($data as $row) { ?>
              <div  style="padding-top: 20px" class="col-md-4">
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
                    <a href="<?php echo base_url()."pesertasmnr"?>"><button class="btn btn-success">Lihat Peserta</button></a>
                    <button style="" class="btn btn-danger">Hapus</button>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>

          </div>

    </div>
  </div>
</div>


