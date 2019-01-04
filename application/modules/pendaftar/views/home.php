<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Pendaftar Sekolahku</title>
    <!-- CSS Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Dorado  -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>
<body style="background-color: #8e44ad;">
	 <nav class="navbar navbar-expand-lg navbar-light header" style="background-color: #3caea3;">
  <a class="sekolahku">SEKOLAHKU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link navigasi" href="<?php echo base_url();?>">Pendaftaran</a>
      <a class="nav-item nav-link navigasi active" href="<?php echo base_url();?>pendaftar">Hasil Pendaftaran</a>
    </div>
  </div>
</nav>
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/img/download.jpg">

    </div>
        <div class="container parallax-form">
            <div class="card w-100 ">
                <div class="card-body" style="background-color: #d6d6c2;">
                    <h3 class="card-title text-center">DATA PENDAFTAR SEKOLAHKU</h3>
						 <table class="table table-sm">
						  <thead>
						    <tr>
						      <th scope="col">Nama Lengkap</th>
						      <th scope="col">Nomor Induk Keluarga</th>
						      <th scope="col">Nomor Pendaftaran</th>
						      <th scope="col">Tempat Lahir</th>
						      <th scope="col">Tanggal Lahir</th>
						      <th scope="col">Alamat</th>
                              <th scope="col">Email</th>
                              <th scope="col">Nomor HP</th>
						    </tr>
						  </thead>
						  <tbody>
						    <?php
                                foreach ($pendaftar ->result() as $row){ ?>
                                <tr> 
                                    <td><?php echo $row->nama_lengkap; ?></td>
                                    <td><?php echo $row->nik; ?></td>
                                    <td><?php echo $row->no_pendaftaran; ?></td>
                                    <td><?php echo $row->tempat_lahir; ?></td>
                                    <td><?php echo $row->tgl_lahir; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->no_hp; ?></td>
							<?php }?>
						  </tbody>
						</table>
                </div>
            </div>
        </div>

     <footer class="py-2" style="background-color: #3caea3;margin-top: 10px;">
            <div class="container">
                <p class="m-0 text-center text-white" style="font-size: 12px;"><b>Copyright</b> &copy; SEKOLAHKU 2019</p>
            </div>      
    </footer>

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