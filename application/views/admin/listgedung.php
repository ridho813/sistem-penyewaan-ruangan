<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                     
                     <div class="row column1">
							
					 
   
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
			

					<!-- table section -->
					<div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>View Gedung</h2>
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
															<th>Aksi</th>
                                          </tr>
                                       </thead>
                                       <tbody>
							
                                          <tr>
														<?php $no = 1; foreach($status as $m) : ?>
                                             <td><?= ++$no; ?></td>
                                             <td><?= $m['tanggalsewa']; ?> </td>
                                             <td>09:00 - 10:00</td>
                                             <td><?= $m['judul_rapat']; ?></td>
                                             <td><?= $m['iduser']; ?></td>
															<td><?= $m['penanggung_jwb']; ?></td>
														
															<?php //verifikasi status order
															if($m['statusboking'] == 'Verifikasi') : ?>
															<td style="color:green;"><?= $m['statusboking']; ?></td>
															<?php else : ?>
																<td style="color:red;"><?= $m['statusboking']; ?></td>
																<?php endif; ?>
                											<td><?= $m['tambahan']; ?></td>
																<td>
																<?php 
															//validasi jika verif dan tolak
															if($m['statusfas'] == 'pending') : ?>
														<p style="color:red;">Tolak</p>
															<?php else : ?>
																<p style="color:green;">Verifikasi</p>
															<?php endif; ?>
																</td>
															<td>
															<?php 
															//validasi jika verif dan tolak
															if($m['statusboking'] == 'pending') : ?>
																<a title='Blokir Bidder' href="<?= base_url('admin/gedung/tolak/') . $m['id_order']; ?>">  <button class="btn btn-danger" aria-hidden="true"><i class="fa fa-ban" aria-hidden="true"></i>Tolak</button></a><br><br>
																<a title='Blokir Bidder' href="<?= base_url('order/verifikasi/') . $m['id_order']; ?>">  <button class="btn btn-info" aria-hidden="true"><i class="fa fa-plus" aria-hidden="true"></i>Verifiakasi</button></a>
																<?php else : ?>
																
																<p>Berhasil</p>	
																
															<?php endif; ?>
															
														</td>
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


    