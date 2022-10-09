
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Sistem Penyewaan Gedung </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?= base_url()?>assets/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?= base_url()?>assets/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?= base_url()?>assets/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-select.css" />
      <!-- scrollbar css -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
      <link rel="stylesheet" href="<?= base_url()?>assets/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?= base_url()?>assets/css/custom.css" />
   
    
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
              
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
					 <div  ><img class="img-responsive"src="<?= base_url()?>assets/images/logo/logo_icon.png" alt="#" width="50px" height="30px" /></div>
                     <div class="user_profle_side">

                        <div class="user_info">
                           <h6>SPG</h6>
						   <hr>
						   <p style="color:yellow;">Sistem Penyewaan Gedung</p>
                        
                        </div>
                     </div>
                  </div>
               </div>
					<?php if($this->session->userdata('role_id') == 1) : ?>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
				  
                  <ul class="list-unstyled components">
					 <li><a href="<?= base_url('admin/gedung')?>"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                  
                     <li>
                        <a href="<?= base_url('admin/gedung/list')?>">
                        <i class="fa fa-tasks green_color"></i> <span>List Reques</span></a>
                     </li>
							<li>
                        <a href="<?= base_url('admin/gedung/daftar')?>">
                        <i class="fa  fa-institution green_color"></i> <span>List Gedung</span></a>
                     </li>
							<?php if($this->session->userdata('role_id') == 2) : ?>
                     <li>
                        <a href="<?= base_url('admin/gedung/fasilitas')?>">
                        <i class="fa fa-tasks green_color"></i> <span>Fasilitas</span></a>
                     </li>
							<?php endif; ?>
							<li>
                        <a href="<?= base_url('order')?>">
                        <i class="fa fa-tasks green_color"></i> <span>Konfimasi Fasilitas</span></a>
                     </li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-paper-plane red_color"></i> <span>Tanya Jawab</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="email.html">> <span>Form Pertanyaan</span></a></li>
                           <li><a href="calendar.html">> <span>Riwayat Tanya Jawab</span></a></li>
                        </ul>
                     </li>
                  </ul>
               </div><?php endif; ?>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                       
                        </div>								<?php if($this->session->userdata('role_id') == 1) : ?>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"> <span class="name_user">Hi, <?= $customer['nama']; ?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
							<?php endif; ?>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
          
         