<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Penduduk</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Detail Data Penduduk</h2>
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
          <?php foreach($tb_penduduk as $ci){
          ?>
            <a type="button" class="btn btn-danger" href="<?php echo base_url()."admin/Datamaster/"?>" style="color: #fff">Kembali</i></a>
            <form action="<?php echo base_url('admin/Datamaster/update') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nik Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="hidden" value="<?php echo $ci->id_penduduk?>"  name="id_penduduk" required="required" class="form-control col-md-7 col-xs-12">
                  <?php echo $ci->nik?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No KK <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->no_kk?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->nm_penduduk?>
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Lahir<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->t_lahir?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->j_kelamin?>
                </div>
              </div>
              <div class="form-group">
               <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->tgl_lahir?>
                </div>
              </div>
              <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->alamat?>
                </div>
              </div>
              <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat KTP<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->alamat_ktp?>
                </div>
              </div>
              <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Desa/Kelurahan Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->desa_kelurahan?>
                </div>
              </div>
               <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kecematan Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->kec?>
                </div>
              </div>
               <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kabupaten Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <?php echo $ci->kab?>
                </div>
              </div>

               <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Provinsi Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <?php echo $ci->provinsi?>
                </div>
              </div>
               <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Negara Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->negara?>
                </div>
              </div>
               <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">RT Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->rt?>
              </div>
            </div>
               <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">RW Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->rw?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Agama<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->agama?>
                </div>
              </div>
               <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Pekerjaan Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->pekerjaan?>
                </div>
              </div>
               <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Status Perkawinan Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->status_perkawinan?>
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Status Penduduk<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php echo $ci->status_penduduk?>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  
                
                  
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
