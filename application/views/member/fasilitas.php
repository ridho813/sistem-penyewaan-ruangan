<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                     
                     <div class="row column1">
							
					 
     <!-- table section -->
	 <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                       
											   <!-- Pesan Jika sukses -->
			<?php if($this->session->flashdata('success')){ ?>
                  <div class="alert alert-info" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p><center><?php echo $this->session->flashdata('success'); ?></center></p>
                  </div>
									 <!-- Pesan Jika gagal -->
                <?php
								 }elseif($this->session->flashdata('gagal')){?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p><center><?php echo $this->session->flashdata('gagal'); ?></center></p>
                  </div>
                <?php } ?>
				
					 <form action="" method="post">
					<!-- Form Imputan -->
					<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Nama</label>
           			 <input type="text" name="id_order" class="form-control form-control-lg" value="<?= $sewa['nama']; ?> " readonly />
          			</div>
						 <div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Tambahan</label>
           			 <input type="text" name="tambahan" class="form-control form-control-lg" placeholder="Tambahan Fasilitas Jika Ada" value="<?= $sewa['tambahan']; ?>"  />
          			</div>
						 <button type="submit" class="btn btn-primary">Verifikasi</button>
								  </form>
					
					
					</table>
                                 </div>
                              </div>
                           </div>
                        </div>

				