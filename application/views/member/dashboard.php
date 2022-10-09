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
					<label class="form-label" for="form1Example23">Kode Gedung</label>
					<input type="text" class="form-control " name="idgedung" value="<?= $gedung['idgedung']; ?>"  readonly>
					</div>
	
					<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Dari Tanggal</label>
					<input type="datetime-local" class="form-control datetimepicker" name="tanggalsewa" aria-describedby="emailHelp" placeholder="(DD/MM/YY)">
					</div>
								<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Sampai Tanggal</label>
					<input type="datetime-local" class="form-control datetimepicker" name="tanggalkembali" aria-describedby="emailHelp" placeholder="(DD/MM/YY)">		
        			</div>
					
					  <div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Judul Rapat</label>
            <input type="number" name="jumlah" class="form-control form-control-lg" placeholder="Judul Rapat" />
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
                                      
									<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Judul Rapat</label>
            <input type="text" name="judul_rapat" class="form-control form-control-lg" placeholder="Judul Rapat" />
          </div>
			 <div class="form-group">
		        			<label>Pilih Fasilitas</label>
		        			<select name="id_fas" class="form-control">
		        					<option>-- Pilih Fasilitas --</option>
		        				<?php foreach($fasilitas as $us) : ?>
		        					<option value="<?php echo $us->idfasilitas ?>"><?php echo $us->fasilitas?></option>
		        				<?php endforeach; ?>
		        			</select>
		        		</div>
					<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23"> Penanggung Jawab</label>
     		       <input type="text" name="penanggung_jwb" class="form-control form-control-lg" placeholder="Penanggung Jawab" />
       			   </div>
						 <div class="form-outline mb-4">
					<label class="form-label" for="form1Example23"> Tambahan Fasilitas</label>
     		       <input type="text" name="tambahfasilitas" class="form-control form-control-lg" placeholder="Tambahan Fasilitas Jika Ada" />
       			   </div>
              </table>
                                 </div>	
											 <button type="submit" class="btn btn-primary">Pesan</button>
                              </div>  </form>
	                    </div>				
                        </div>
					 </div>		  
               </div>
								
					<!-- table section -->
					<div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Daftar User Request</h2>
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
                                             <th>Penanggung Jawab</th>
															<th>Status Boking</th>
															<th>Keterangan Boking</th>
															<th>Status Fasilitas</th>
															<th>Keterangan Fasilitas</th>
											
                                          </tr>
                                       </thead>
                                       <tbody>
							
                                          <tr>
														<?php $no = 1; foreach($status as $m) : ?>
                                             <td><?= ++$no; ?></td>
                                             <td><?= $m['tanggalsewa']; ?> </td>
                                             <td>09:00 - 10:00</td>
                                             <td><?= $m['judul_rapat']; ?></td>
															<td><?= $m['penanggung_jwb']; ?></td>
														
														<td style="color:red;"><?= $m['statusboking']; ?></td>
														<td ><?= $m['tambahan']; ?></td>
														<td style="color:red;"><?= $m['statusfas']; ?></td>
														<td><?= $m['tambah']; ?></td>
                                          </tr>   
														<?php endforeach; ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


    