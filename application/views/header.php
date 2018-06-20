  <!DOCTYPE html> 
<html lang="en">

  <head>
       <style type="text/css">
    .mce-notification-warning{
      display: none!important;
    }
    .mce-branding{
      display: none!important;
    }
  </style>


    <title>ThisEVENT </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">



  <link href="<?php echo base_url()."assets/dist/css/bootstrap.css"?>" rel="stylesheet">
  <link href="<?php echo base_url()."assets/dist/css/iziToast.min.css"?>" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()."assets/dist/js/iziToast.min.js"?>" type="text/javascript"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>  

  
<script data-cfasync="false" data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>  

            <link href="<?php echo base_url()."assets/css/style.css"?>" rel="stylesheet">
            <style type="text/css">
            body{
              font-size:15px!important;
              
             

            }
            </style>
            </head>

            <body>

<!-- ikut seminar di detail -->
  <script type="text/javascript">
  $(document).ready(function() {
    var stickyNavTop = $('#menu').offset().top; 
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();  
        if (scrollTop > stickyNavTop) { 
            $('#menu').css({ 'position': 'fixed', 'top':0, 'z-index':9999 });
        } else {
            $('#menu').css({ 'position': 'relative' });
        }
    };
    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });
});
</script>

 <!-- jquery filtering -->
    <script>
  $(window).load(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 

  <script>
$(window).load(function(){
    $("button").click(function(){
        $("#div1").remove();
    });
});
</script>

          
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"  >
              <div class="container-fluid" style="color:#f3e8e833; ">
                 <a class="navbar-link" href="#"></a>
                  <ul class="nav navbar-nav">
                    <li><a style="color: white" href="<?php echo base_url() ?>">ThisEVENT</a></li>  
                    <li class="active"><a style="color: white" href="<?php echo base_url()."buatseminar"?>">Buat Event</a></li>
                    <li><a style="color: white" href="<?php echo base_url()."allseminar"?>">Cari Event</a></li>
                  </ul>

            <form class="navbar-form navbar-left" action="/action_page.php">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
              </div>
            </div>
          </form>

 


              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto navbar-right">
                  <li class="nav-item active">
                    <?php if (!isset($this->session->userdata['id'])){?>
                      <a class="nav-link" href="<?php echo base_url()."/login"?>">Login</a>
                    <?php }else{?>
                       <div class="dropdown">
                          <a href=# style="color: white" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <?php echo $this->session->userdata['nama'];?></a>
                          <ul class="dropdown-menu">
                              <li><a href="<?php echo base_url()."profil"?>">Profil</a></li>
                              <li><a href="<?php echo base_url()."editprofil"?>">Edit Profil</a></li>                          
                              <li><a href="<?php echo base_url()."daftar_ikut_seminar"?>">Ikut Seminar</a></li>
                              <li><a href="<?php echo base_url()."daftar_seminar"?>">Daftar Seminar</a></li>
                              <li><a href="<?php echo base_url()."welcome/logout"?>">Logout</a></li>
                          </ul>
                        
                    <?php } ?>

                  </li>
                  </div> 
                  <li class="nav-item">
                    <a style="color: white" class="nav-link" href="<?php echo base_url()."daftar"?>">Register</a>
                  </li>
                </ul>

              </div>
            </div>
            </nav>

            <?php
            if($this->session->flashdata('successlogin')){
            ?>
            <script>
              iziToast.success({
                  title: 'OK',
                  message: '<?php echo $this->session->flashdata('successlogin'); ?>',
                  timeout: 2000,
                  position: 'center',
              });
            </script>
            <?php } ?>

            <?php
            if($this->session->flashdata('error')){
            ?>
            <script>
              iziToast.error({
                  title: 'error',
                  message: '<?php echo $this->session->flashdata('error'); ?>',
                  timeout: 2000,
                  position: 'center',
              });
            </script>
            <?php } ?>


            <?php
            if($this->session->flashdata('successdaftar')){
            ?>
            <script>
              iziToast.success({
                  title: 'OK',
                  message: '<?php echo $this->session->flashdata('successdaftar'); ?>',
                  timeout: 2000,
                  position: 'center',
              });
            </script>
            <?php } ?>

            <?php
            if($this->session->flashdata('gagaldaftar')){
            ?>
            <script>
              iziToast.error({
                  title: 'error',
                  message: '<?php echo $this->session->flashdata('gagaldaftar'); ?>',
                  timeout: 2000,
                  position: 'center',
              });
            </script>
            <?php } ?>

          </body>