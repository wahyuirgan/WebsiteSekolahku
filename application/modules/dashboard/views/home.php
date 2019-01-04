<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard Sekolahku</title>
    <!-- CSS Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Dorado  -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>
<body style="background-color: #8e44ad;">

<!--Navigasi-->

<nav class="navbar navbar-expand-lg navbar-light header" style="background-color: #3caea3;">
  <a class="sekolahku">SEKOLAHKU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link navigasi active" href="<?php echo base_url();?>">Pendaftaran</a>
      <a class="nav-item nav-link navigasi" href="<?php echo base_url();?>pendaftar">Hasil Pendaftaran</a>
    </div>
  </div>
</nav>

<!--//Navigasi-->

<!--Parallax-->

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/img/download.jpg">

<!--//Parallax-->

    </div>
        <div class="container parallax-form">
            <div class="card w-100 " >
                <div class="card-body" style="background-color: #d6d6c2;">
                    <?php echo $this->session->flashdata('report'); ?>
                    <h3 class="card-title text-center">PENDAFTARAN SEKOLAHKU</h3>
                        
                        <!--Google Map-->

                        <div id="map"></div>
                        
                        <!--//Google Map-->

                    <!--Form Pendaftaran Sekolahku-->

                    <h5>Isi data dibawah ini dengan sebenar - benarnya !</h5>

                    <?php echo form_open('dashboard/post_insert'); ?>    
                    <form action="#" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="namalngkp" placeholder="Nama Lengkap" required=""> 
                            </div>
                            <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Nomor Induk Keluarga</label>
                                <input type="number" class="form-control" name="nonik" placeholder="Nomor Induk Keluarga" required=""> 
                        </div>
                        </div>
                        <div class="form-group ">
                                <label >Nomor Pendaftaran</label>
                                    <input type="number" name="nopendf" class="form-control" placeholder="Nomor Pendaftaran" required=""> 
                        </div>
                        <div class="form-group ">
                                <label >Tempat Lahir</label>
                                    <input type="text" name="tmplhr" class="form-control" placeholder="Tempat Lahir" required=""> 
                        </div>
                        <div class="form-group ">
                                <label >Tanggal Lahir</label>
                                    <input type="date" name="tgllhr" class="form-control" required=""> 
                        </div>
                        <div class="form-group ">
                                <label >Alamat</label>
                                    <textarea rows="6" name="alamat" class="form-control" placeholder="Alamat" required=""></textarea>
                        </div>
                        <div class="form-group ">
                                <label >Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required=""> 
                        </div>
                        <div class="form-group ">
                                <label >Nomor HP</label>
                                    <input type="text" name="nohp" class="form-control" placeholder="Nomor HP" required=""> 
                        </div>
                        <button class="btn btn-primary col-md-12" type="submit">Register</button>
                    </form>
                    <?php echo form_close();?>

                    <!--//Form Pendaftaran Sekolahku-->

                </div>
            </div>
        </div>

<!--Footer-->

    <footer class="py-2" style="background-color: #3caea3;margin-top: 10px;">
            <div class="container">
                <p class="m-0 text-center text-white" style="font-size: 12px;"><b>Copyright</b> &copy; SEKOLAHKU 2019</p>
            </div>      
    </footer>

<!--//Footer-->

    <script>
      function initMap() {
        var myLatLng = {lat: 0.920662, lng: 104.514739};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Dreambox'
        });
      }
    </script>
    <!--Script GMaps-->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlXTI26UPn_mzsPbf0xs3Rli9XGNmo5M&callback=initMap">
    </script>
    <!-- Jquery -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <!-- JS Bootstrap -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- JS  Parallax -->
    <script src="<?php echo base_url();?>assets/js/parallax.js"></script>
    <script src="<?php echo base_url();?>assets/js/parallax.min.js"></script>

</body>
</html>