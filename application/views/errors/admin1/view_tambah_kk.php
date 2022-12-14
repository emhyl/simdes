<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Kartu Keluarga</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Input Data Kartu Keluarga </h2>
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
            <form action="<?php echo base_url('admin/Datamaster/aksi_tambah_paramedis') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No Kartu Kelurga <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="no_kk" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nik Kepala Keluarga <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="nik_kkeluarga" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat KK<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="alamat_kk" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Desa/Kelurahan KK<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="desa_kelurahan" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kecematan KK<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="kec_kk" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kabupaten KK <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="kab_kk" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Provinsi KK <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="provinsi_kk" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Negara KK <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="negara_kk" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">RT Kartu Keluarga <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="rt_kk" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">RW Kartu Keluarga <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="rw_kk" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Pos KK <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="kpos_kk" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   <button class="btn btn-primary" type="reset">Reset</button>
                  <a type="button" class="btn btn-danger" href="<?php echo base_url()."admin/Datamaster/"?>" style="color: #fff">Kembali</i></a>
                  <button type="submit" class="btn btn-success">Simpan</button>



                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
