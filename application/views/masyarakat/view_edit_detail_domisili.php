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
            <h2>Tampilan Domisili</h2>
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
          <?php foreach($tb_domisili as $l){
          ?>
            <form action="" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
              <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Lengkap <span class="required">*</span>
                    </label>
                    
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->nama?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No Ktp<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->no_ktp?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->j_kelamin?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Lahir<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->t_lahir?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Tgl Lahir<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->tgl_lahir?>
                    </div>
                  </div>
                  
                 
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kewarganegaraan<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                     <?php echo $l->kewarganegaraan?>
                    </div>
                  </div>
                  <div class="form-group">
                   
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Agama<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->agama?>
                    </div>
                  </div>
                  <div class="form-group">
                   <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat Asli<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <?php echo $l->alamat_asli?>
                    </div>
                  </div>
                            
                  <a type="button" class="btn btn-danger" href="<?php echo base_url()."admin/datadomisili/"?>" style="color: #fff">Kembali</i></a>
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
