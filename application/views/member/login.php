<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistem Peminjaman Ruangan</title>

	     <!-- site icon -->
		 <link rel="icon" href="<?= base_url()?>assets/images/Insentif-PPN-Ditanggung-Pemerintah-atas-Sewa-Ruangan-Bangunan-oleh-Pedagang-Eceran.jpg" type="image/png" />
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
   <style>
	.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;

}
.button {
    position: relative;
    background-color: #156E4A;
    border: none;
    font-size: 20px;
    color: #FFFFFF;
    padding: 10px;
    width: 450px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -10px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}

   </style>
    
</head>
<body>  

		

				  <section class="vh-100">
  <div class="container  h-100">
    <div class="row d-flex align-items-left justify-content-center h-100">
      <div class="col-md-7 col-lg-7 col-xl-6">
			<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
			<?php if($this->session->flashdata('success')){ ?>
                  <div class="alert alert-info" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p><center><?php echo $this->session->flashdata('success'); ?></center></p>
                  </div>
                <?php }elseif($this->session->flashdata('gagal')){?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p><center><?php echo $this->session->flashdata('gagal'); ?></center></p>
                  </div>
                <?php } ?>
                <form action="<?= base_url('member/login') ?>" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
			<br>
			<label class="form-label" for="form1Example13">Email</label>
            <input type="text" name="email"  class="form-control form-control-lg" placeholder="Email" />
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
		  <label class="form-label" for="form1Example23">Password</label>
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
          </div>
          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
		<p>Belum jadi member ? Klik <a href="<?= base_url('member/daftar')?>">disini</a> untuk daftar 
		Lupa Password ? Klik <a href="">disini</a> untuk reset password</p>
		  <!-- Submit button -->
          <button type="submit" class="button" >Masuk</button>

		</div>

          </div>

        
         
        </form>
      </div>
    </div>
  </div>
</section>

					
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>		 


				      

</body>
</html>
