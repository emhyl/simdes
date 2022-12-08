<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Ringkasan Rekam Medik Pasien</small></h3> -->
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <center><h2>KARTU KELUARGA</h2></center>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          <br>
          <?php foreach($tb_kk as $l){
          ?>
            <form action="" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
              <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No kk <span class="required">*</span>
                    </label>

                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->no_kk?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nik Kepala Keluarga<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->nik_kkeluarga?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->alamat_kk?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Desa/Keluarahan<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->desa_kelurahan?>
                    </div>
                  </div>
                  
                 
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kecematan<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                     <?php echo $l->kec_kk?>
                    </div>
                  </div>
                  <div class="form-group">
                   
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">kabupaten<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->kab_kk?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Provinsi<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->provinsi_kk?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Negara<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->negara_kk?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">RT<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->rt_kk?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">RW<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->rw_kk?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Pos<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->kpos_kk?>
                    </div>
                  </div>
                  
                  <button class="btn btn-primary" type="button">Kembali</button>
                </div>
              </div>
            </form>
          <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
