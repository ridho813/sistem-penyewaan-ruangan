<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                     
                     <div class="row column1">

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
                                             <th>Nama Gedung</th>
                                             <th>Harga Seawa</th>
                                             <th>Fasilitas</th>
                                             <th>Gambar</th>
                                             <th>Aksi</th>
                                          </tr>
                                       </thead>
                                       <tbody>	
										 <?php 
										 $no=1;
										 foreach($gedung as $g)	: ?>
                                          <tr>
										  <td><?php echo $no++ ?></td>
                                             <td><?php echo $g->namagedung?></td>
											 <td><?php echo $g->harga?></td>
                                             <td><?php echo $g->fasilitas?></td>
                                             <td><?php echo $g->sertifikat?></td>
                                             <td>
											 <a href="<?php echo site_url('admin/data_surat_keluar/hapus/'.$g->idgedung) ?>" onclick="return confirm('Anda Yakin Ingin Menghapus?');" class="btn btn-danger btn-sm" title="Hapus Surat"><i class="fa fa-trash"></i>
                                </a>
                                <a href="<?php echo site_url('admin/data_surat_keluar/edit/'.$g->idgedung) ?>" class="btn btn-primary btn-sm" title="Edit Surat"><i class="fa fa-edit"></i>
                                </a>
											 </td>
                                           
                                            
                                          </tr>
                                       </tbody>
									   <?php endforeach; ?>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


    