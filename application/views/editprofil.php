<div class="container"   >
    
  	<hr>

	<div class="row">
      <!-- left column -->
        <div class="col-md-2">
          <div class="text-center" ><!-- 
            <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
            <h6>&nbsp</h6>
            
            <input class="form-control" type="file" style="height: 70px"> -->
          </div>
        </div>
      
      <!-- edit form column -->

      <div class="col-md-8 personal-info">
        <h1>Edit Profile</h1>
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert"></a> 
          Tulis Form Dengan <strong>Benar</strong> 
        </div>
        <h3>Personal info</h3> 
        <?php echo validation_errors(); ?>
        <form class="form-horizontal" role="form" action="<?php echo base_url()."editprofil"?>" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama:</label>
            <div class="col-lg-8">
              <input class="form-control" value="<?php echo $this->session->userdata['nama'];?>" name="nama" placeholder="Nama Anda" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" value="<?php echo $this->session->userdata['email'];?>" name="email" type="email" desable>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">No Telp:</label>
            <div class="col-lg-8">
              <input class="form-control" value="<?php echo $this->session->userdata['notelp'];?>"  name="notelp" value="" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Alamat:</label>
            <div class="col-lg-8">
              <input class="form-control"  value="<?php echo $this->session->userdata['alamat'];?>" name="alamat" value="" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Instansi:</label>
            <div class="col-lg-8">
              <input class="form-control"  value="<?php echo $this->session->userdata['instansi'];?>" name="instansi"  type="tezt">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Change Password:</label>
            <div class="col-md-8">
              <input class="form-control" name="password"  type="password">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Confirm Change password:</label>
            <div class="col-md-8">
              <input class="form-control" name="cpassword" value="" type="password">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes" type="button">
              <span></span>
              <input class="btn btn-default" value="Cancel" type="reset">
            </div>
          </div>

        </form>
      </div>
  </div>
</div>
<hr>