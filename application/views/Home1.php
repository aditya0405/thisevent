    <div class="container">


          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">

              <div class="carousel-item active">
                <img class="d-block img-fluid" src="<?php echo base_url()."assets/img/mercu.jpg"?>" alt="First slide">
              </div>

              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url()."assets/img/mercu.jpg"?>" alt="Second slide">
              </div>

              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url()."assets/img/mercu.jpg"?>" alt="Third slide">
              </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>

          <div class="row" style="padding-top: 20px">
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


            <h3 class="my-4 text-center" style="padding-top: 30px ">By Category</h3>
            <div class="col-md-4">
            <img class="card-img-top" style=" height:250px " src="<?php echo base_url()."assets/img/program.jpg"?>" alt="Card image cap" href="#">

            <div class="center">wewew</div>
            <div class="card-body">
              <h2 class="card-title"></h2>
            </div>
          </div>


        <div class="col-md-8">
          <img class="card-img-top" style="height: 250px" src="<?php echo base_url()."assets/img/desain.jpg"?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"></h2>
          </div>
        </div>

          <div class="col-md-8">
            <img class="card-img-top" style="height: 250px"  src="<?php echo base_url()."assets/img/jaringan.jpg"?>" alt="Card image cap" href="#" >
            <div class="card-body">
              <h2 class="card-title"></h2>
            </div>
          </div>
          
          <div class="col-md-4">
            <img class="card-img-top" style=" height:250px" src="<?php echo base_url()."assets/img/informasi.jpg"?>" alt="Card image cap" href="#">
              <h2 class="card-title"></h2>
          </div>
        </div>

        </div>
          
<!--           <div class="category-card_wrapper">
          <div class="category-card_tint">
            <div class="category-card_tint"></div>
          </div>

          <div class="category-card_text-wrapper">
            <h4 class="category-card_label"> -->
          </div>