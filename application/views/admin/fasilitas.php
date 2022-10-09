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
				
                <form action="<?= base_url('admin/gedung/tambahfasilitas') ?>" method="post" enctype="multipart/form-data">
					<!-- Form Imputan -->
					<div class="form-outline mb-4">
					<label class="form-label" for="form1Example23">Nama Fasilitas</label>
           			 <input type="text" name="fasilitas" class="form-control form-control-lg" placeholder="Nama Gedung"  />
          			</div>
                  
					  </div>	<a href="<?= base_url('/')?>">    <button class="btn btn-danger"> < Kembali</button></a>
								 <button type="submit" class="btn btn-info" >Selanjutnya ></button>
								  </form>
					
					
					</table>
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
                                             <td><?= $sewa['tanggalsewa']; ?> </td>
                                             <td>09:00 - 10:00</td>
                                             <td><?= $sewa['judul_rapat']; ?></td>
                                             <td><?= $sewa['iduser']; ?></td>
															<td><?= $sewa['penanggung_jwb']; ?></td>
														
															<?php //verifikasi status order
															if($sewa['statusboking'] == 'Verifikasi') : ?>
															<td style="color:green;"><?= $sewa['statusboking']; ?></td>
															<?php else : ?>
																<td style="color:red;"><?= $sewa['statusboking']; ?></td>
																<?php endif; ?>
                											<td><?= $m['tambahan']; ?></td>
																<?php  //verifikasi
																 if($m['statusfas'] == 'Verifikasi') : ?>
															<td style="color:green;"><?= $m['statusboking']; ?></td>
															<?php else : ?>
																<td style="color:red;"><?= $m['statusboking']; ?></td>
																<?php endif; ?>
																<td><?= $m['tambahan']; ?></td>
                                           
                                            
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


    