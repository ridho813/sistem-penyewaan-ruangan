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
				
                <form action="<?= base_url('admin/gedung/tambah') ?>" method="post" enctype="multipart/form-data">
					<!-- Form Imputan -->
					<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Nama Gedung</label>
           			 <input type="text" name="namagedung" class="form-control form-control-lg" placeholder="Nama Gedung"  />
          			</div>
					<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Harga Sewa</label>
            		<input type="number" name="harga" class="form-control form-control-lg" placeholder="Harga Sewa" />
         			 </div>
                  
					
					
					</table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- table section -->
                        <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">

                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                      
									<div class="form-group">
		<b> Pilih Fasilitas</b>
		<select name="idfasilitas" class="form-control">
			<option value="">- Piih Fasilitas-</option>
			<?php foreach($fasilitas as $sk){
	//$nama     = $this->db->query("SELECT * FROM agendask ORDER BY id_agenda DESC LIMIT 1")->row_array();
									?>
												
	<option value="<?php echo $sk->idfasilitas ?>"><?php echo $sk->fasilitas?></option>
		        				<?php } ?> 
		</select>
	</div><br>

					<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23"> Foto Gedung</label>
     		       <input type="file" name="sertifikat" class="form-control form-control-lg" />
       			   </div>
              </table>
                                 </div>	<a href="<?= base_url('/')?>">    <button class="btn btn-danger"> < Kembali</button></a>
								 <button type="submit" class="btn btn-info" >Selanjutnya ></button>
								  </form>
					
					</div> 
	                    </div>				
                        </div>
					 </div>		  
               </div>
	

					<!-- table section -->
					<div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>View User Request</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>No</th>
                                             <th>Dari Tanggal - Sampai Tanggal</th>
                                             <th>Jam Mulai - Jam Selesai</th>
                                             <th>Judul Rapat</th>
                                             <th>User Request</th>
                                             <th>Penanggung Jawab</th>
															<th>Status Penyewaan</th>
															<th >Keterangan</th>
														
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>1</td>
                                             <td>10-10-2022 - 11-10-2022</td>
                                             <td>09:00 - 10:00</td>
                                             <td>Rapat 1</td>
                                             <td>Si A</td>
                                             <td>Budi</td>
                                             <td style="color:green">Diterima</td>
															<td style="color:green">Diterima</td>
                                            
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


    