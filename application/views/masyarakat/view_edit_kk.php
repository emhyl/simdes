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
            <h2>Edit Data Kartu Keluarga</h2>
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
          <?php foreach($tb_kk as $ci){
          ?>
            <form action="<?php echo base_url('masyarakat/Datakk/update') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
               <div class="form-group">
               <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Kepala Keluarga <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="hidden" value="<?php echo $ci->id_kk?>"  name="id_kk" required="required" class="form-control col-md-7 col-xs-12">
                  <input type="text" value="<?php echo $ci->nm_kkeluarga?>"  name="nm_kkeluarga" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
               <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Anggota Keluarga <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->a_keluarga?>"  name="a_keluarga" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Lahir<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->t_lahir?>" name="t_lahir" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                 <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->tgl_lahir?>" name="tgl_lahir" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Agama<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_single form-control" name="agama">
                    <option>Pilih Jenis Kelamin</option>
                    <!-- <option value="Bebas" <?php $ci->kategori_dokter == 'Bebas' ? print "selected" : "" ?>>Bebas</option> -->
                    <option value="Islam"<?php $ci->agama == 'Islam' ? print "selected" : "" ?>>Islam</option>
                    <option value="Kristen"<?php $ci->agama == 'Kristen' ? print "selected" : "" ?>> Kristen</option>
                    <option value="Khatolik"<?php $ci->agama == 'Khatolik' ? print "selected" : "" ?>> Khatolik</option>
                    <option value="Hindu"<?php $ci->agama == 'Hindu' ? print "selected" : "" ?>> Hindu</option>
                    <option value="Budha"<?php $ci->agama == 'Budha' ? print "selected" : "" ?>> Budha</option>
                    <option value="Khonghucu"<?php $ci->agama == 'Khonghucu' ? print "selected" : "" ?>> Khonghucu</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Pendidikan<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->pendidikan?>" name="pendidikan" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Pekerjaan<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->j_pekerjaan?>" name="j_pekerjaan" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->alamat?>" name="alamat" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Status Pernikahan<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->s_pernikahan?>" name="s_pernikahan" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Status hubungan<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->s_hubungan?>" name="s_hubungan" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kewarganegaraan<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->kewarganegaraan?>" name="kewarganegaraan" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Orang Tua<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" value="<?php echo $ci->nm_ortu?>" name="nm_ortu" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_single form-control" name="j_kelamin">
                    <option>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempun"> Perempun</option>
                  </select>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              
                  <a type="button" class="btn btn-danger" href="<?php echo base_url()."masyarakat/Datakk/"?>" style="color: #fff">Kembali</i></a>
                  <button type="submit" class="btn btn-success">Simpan</button>
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
