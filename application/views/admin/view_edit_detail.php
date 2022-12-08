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
            <h2>Tampilan Kartu Keluarga</h2>
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
           <a type="button" class="btn btn-danger" href="<?php echo base_url()."admin/Datakk/"?>" style="color: #fff">Kembali</i></a>
            <form action="" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
              <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Kepala Keluarga <span class="required">*</span>
                    </label>
                    
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->nm_kkeluarga?>
                    </div>
                  </div>
                    <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->alamat?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">RT/RW <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->rt_rw?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Desa/Kelurahan<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->desa_kelurahan?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kecematan<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                     <?php echo $l->kecematan?>
                    </div>
                  </div>
                  <div class="form-group">
                   
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kabupaten<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->kabupaten?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Provinsi<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->provinsi?>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Anggota Keluarga<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->a_keluarga?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Status Keluarga<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->status_keluarga?>
                    </div>
                  </div>
                   <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Email Penerima<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->email?>
                    </div>
                  </div>
                 
                  
                 
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
