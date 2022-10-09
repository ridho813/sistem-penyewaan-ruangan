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
				
					 <?php foreach($sewa as $ds) {?> 
					 <form action="<?php echo base_url().'admin/gedung/updatefas/'; ?>" method="post">
					<!-- Form Imputan -->
					<input type="hidden" name="id_order" class="form-control"value="<?php echo $ds->id_order?>">
					<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Nama Order</label>
           			 <input type="text" name="" class="form-control form-control-lg" value="<?= $customer['nama']; ?> " readonly />
          			</div>
						 <div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Alasan</label>
           			 <input type="text" name="tambah" class="form-control form-control-lg" placeholder="Alasan Tidak Diterima" value="<?= $ds->tambah; ?>"  />
          			</div>
						 <button type="submit" class="btn btn-primary">Verifikasi</button>
						 <?php } ?>
						</form>
					
					
					</table>
                                 </div>
                              </div>
                           </div>
                        </div>

				