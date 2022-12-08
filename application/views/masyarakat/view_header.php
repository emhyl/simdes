<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>masyarakat | Simdes</title>
    <link href="<?php echo base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"> <span>Simdes</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
               <img style="width: 70px;height: 60px" src="<?php echo base_url('upload/foto_admin/'.$this->session->userdata('adm_foto')); ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat datang,</span>
                <h2><?php echo $this->session->userdata("adm_nama"); ?></h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url()."masyarakat/Dashboard"?>"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li><a href="<?php echo base_url()."masyarakat/Datakk/tambah/"?>"><i class="fa fa-desktop"></i> Data KK</a>
                  </li>
                   <li><a href="<?php echo base_url()."masyarakat/Dataakta/tambah/"?>"><i class="fa fa-desktop"></i> Data Akta</a>
                  </li>
                   <li><a href="<?php echo base_url()."masyarakat/Datadomisili/tambah/"?>"><i class="fa fa-desktop"></i> Data Domisili</a>
                  </li>
                   <!-- <li><a href="<?php echo base_url()."masyarakat/Datasertifikat"?>"><i class="fa fa-desktop"></i> Data Sertifikat</a> -->
                  </li>
                   <li><a href="<?php echo base_url()."masyarakat/Dataskck/tambah/"?>"><i class="fa fa-desktop"></i> Data Skck</a>
                  </li>
                 
                    <!--  <li><a href="<?php echo base_url()."masyarakat/Dokter"?>"><i class="fa fa-users"></i> Dokter </a>
                  </li> -->
                    <!--  <li><a><i class="fa fa-desktop"></i> Menu Pendaftran Pasien<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."masyarakat/Menupendaftaran"?>">Data Pendaftaran</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Datamaster/obat"?>">Data Apotek</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Menupendaftaran/pasien"?>">Data Pasien</a></li>
                   
                     
                      
                    </ul> -->
                    <!--  <li><a><i class="fa fa-desktop"></i> Data Master<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> -->
                     <!--  <li><a href="<?php echo base_url()."masyarakat/Datakk"?>">Data KK</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Dataakta"?>">Data Akta</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Datadomisili"?>">Data Domisili</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Datasertifikat"?>">Data Sertifikat</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Dataskck"?>">Data Skck</a></li> -->
                     
                     
                      
                    </ul>
                    <!-- <li><a><i class="fa fa-desktop"></i> Modul Apotek<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."masyarakat/Modulapotek"?>">Data Obat</a></li>
                      <!-- <li><a href="<?php echo base_url()."masyarakat/Modulapotek/supliyer"?>">Data Supliyer</a></li> -->
                     
                      
                    </ul> 
                <!--   </li>
                    <li><a><i class="fa fa-desktop"></i>Master Ruangan<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."masyarakat/Masterruangan"?>">Kategori Ruangan</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Masterruangan/kelas"?>">Kelas Ruangan</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Masterruangan/tarif"?>">Ruangan & Tarif</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-desktop"></i> Menu Tindakan<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."masyarakat/Menutindakan"?>">Data Diangnosa Penyakit</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Menutindakan/kategoriT"?>">Data Kategori Tindakan</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Menutindakan/pemeriksaanL"?>">Data Pemeriksaan Labolatorium</a></li>
                     <li><a href="<?php echo base_url()."masyarakat/Menutindakan/tindakan"?>">Data Tindakan</a></li>  
                    </ul>
                      <li><a href="<?php echo base_url()."masyarakat/Datapenyakit"?>"><i class="fa fa-users"></i> Data Penyakit </a>
                  </li>
                   <li><a><i class="fa fa-desktop"></i>Inventori<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a><i class="fa fa-desktop"></i>Fron Office<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."masyarakat/Inventori"?>">Alat & Bahan</a></li>
                      </ul>
                       <li><a><i class="fa fa-desktop"></i>Back Office<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."masyarakat/Inventori/back"?>">Elektronik</a></li>
                    </ul>
                  </li> -->




                 <!--  <li><a href="<?php echo base_url()."fo/Pasien"?>"><i class="fa fa-users"></i> Pasien </a>
                  </li> -->
                 <!--  <li><a><i class="fa fa-desktop"></i>Master Data<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."masyarakat/Masterdata"?>">Data Jenjang</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Datamaster/jabatan"?>">Data Jabatan</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Datamaster/poli"?>">Data Poli</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Datamaster/spesialis"?>">Data Spesialis</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Datamaster/departement"?>">Data Departement</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Datamaster/gedung"?>">Data Gedung</a></li>
                      <li><a href="<?php echo base_url()."masyarakat/Datamaster/ruang_inap"?>">Ruang Rawap Inap</a></li>
                    </ul>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('upload/foto_admin/'.$this->session->userdata('adm_foto')); ?>" alt="">
                    <?php echo $this->session->userdata("adm_nama"); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                  <!--  <li> <a href="https://www.instagram.com/erwin_010" target="_blank">Profile</a></li> -->
                   
                    <li><a href="<?php echo base_url()."admin/Login/logout"?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
