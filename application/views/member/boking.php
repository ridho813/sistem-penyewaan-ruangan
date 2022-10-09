<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Peminjaman Gedung</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/assets_shop/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/assets_shop/'); ?>css/shop-homepage.css" rel="stylesheet">
  <link href="<?= base_url('assets/assets_shop/'); ?>css/mystyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <script src="<?= base_url('assets/ckeditor/'); ?>ckeditor.js"></script>

</head>

<body>

  <!-- Navigation -->

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>">Sistem Peminjaman Ruangan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('member/boking'); ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
          </li>
          <?php if($this->session->userdata('role_id') == 3) : ?>
           
            <div class="dropdown d-inline">
              <button class="btn btn-outline-light btn-sm dropdown-toggle mt-1" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hi, <?= $customer['nama']; ?>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item has-icon" href="<?= base_url('customer/panel') ?>"><i class="fa fa-user" aria-hidden="true"></i> Akun</a>
                <a class="dropdown-item has-icon" href="auth/gantipass"><i class="fa fa-key" aria-hidden="true"></i> Ganti Password</a>
                <a class="dropdown-item has-icon" href="<?= base_url('member/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
              </div>
            </div>
            <?php else : ?>
              <?php if($this->session->userdata('role_id') == 1) : ?>
                
                <li class="nav-item d-none">
                  <a class="nav-link" href="<?= base_url('auth'); ?>">Login</a>
                </li>
              <?php else : ?>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/daftar'); ?>">Daftar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('auth'); ?>">Login</a>
                </li>
              <?php endif; ?>
              
          <?php endif; ?>
          <?php if($this->session->userdata('role_id') == 1) : ?>
            <div class="dropdown d-inline">
              <button class="btn btn-outline-light btn-sm dropdown-toggle mt-1" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hi, <?= $customer['nama']; ?>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item has-icon" href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                <a class="dropdown-item has-icon" href="admin/auth/gantipass"><i class="fa fa-key" aria-hidden="true"></i> Ganti Password</a>
                <a class="dropdown-item has-icon" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
              </div>
            </div>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <?= $this->session->flashdata('pesan'); ?> 
    </div>
  </div>

  <div class="row">
   
      <div class="list-group">

      </div>
      <!-- <div class="list-group">
        
        <a href="" class="list-group-item"></a>
        
      </div> -->


    <!-- /.col-lg-3 -->

    <div class="col-lg-9">

      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" alt="First slide">
            <div class="carousel-caption d-none d-md-block shadow p-3 mb-5 bg-warning rounded mb-5">
              <blockquote class="blockquote text-center">
                <h3 class="mb-0 text-white">Perjalanan Aman, Nyaman & Efisien</h3>
                <footer class="blockquote-footer text-light">Memberi Kenyaman Kepada Pengguna Rental Mobil, <cite title="Source Title">Hingga Perjalanan Terakhir.</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" style="height: 500px;width: 100%;" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <blockquote class="blockquote text-center shadow-lg p-3 mb-5 rounded">
                <h3 class="mb-0 text-white">Wisata</h3>
                <footer class="blockquote-footer text-light">Menerima Jasa Wisata Luar Kota, <cite title="Source Title">Rental Mobil Surya.</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="carousel-item">
					<img class="d-block img-fluid" style="height: 500px;width: 100%;"  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp "alt="Third slide">
            <div class="carousel-caption d-none d-md-block shadow p-3 mb-5 bg-warning rounded">
              <blockquote class="blockquote text-center">
                <h3 class="mb-0 text-white">Selalu Di Service</h3>
                <footer class="blockquote-footer text-light">Pelayanan Rental Mobil Kami, Selalu Mengecek Keadaan Mesin, <cite title="Source Title">Sebelum Di Rental.</cite></footer>
              </blockquote>
            </div>
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

			<div class="row">
			<?php foreach($gedung as $m) : ?>
        <div class="col-lg-4 col-md-6 mb-6">
          <div class="card h-100">
					<img class="card-img-top" src="<?= base_url('sertifikat/') . $m['sertifikat']; ?>" alt="">
            <div class="card-body">
              <h4 class="card-title mb-1">
                <h1  > <?= $m['namagedung']; ?></h1>
						
              </h4>

							<h6>Rp.<?= number_format($m['harga'], 0, ',', '.'); ?> / Hari</h6>
              <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p> -->
              <!-- AC -->
         
                <small class="badge badge-pill badge-info" data-toggle="tooltip" data-placement="top" title="Tersedia"><i class="fa fa-check-circle" aria-hidden="true"></i> <?= $m['fasilitas']; ?></small>
           
            </div>
            <div class="card-footer">
              <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
<div class="dropdown">
             <a href="<?= base_url('member/pemesan/') . $m['idgedung']; ?>">  <button class="btn btn-info" aria-hidden="true"><i class="fa fa-cart-plus" aria-hidden="true"></i>Boking</button></a>
						 
						 <div class="form-group">
		        			<select name="" readonly class="form-control">
		        					<option>--List Jadwal Sewa --</option>
		        				<?php foreach($jadwal as $sm) : ?>
		        					<option value=""><?php echo $sm['tanggalsewa']?></option>
		        				<?php endforeach; ?>
		        			</select>
		        		</div>


			</div>


            </div>
          </div>
        </div>
     
		<?php endforeach; ?>
		

      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->
	
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->



  <!-- Footer -->
  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Sistem Peminjaman Gedung <i class="fa fa-heart-o text-danger" aria-hidden="true"></i> <?= date('Y'); ?> | Repost by Ridho</a>
      </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/assets_shop/'); ?>vendor/jquery/jquery.min.js"></script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <script src="<?= base_url('assets/assets_shop/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
