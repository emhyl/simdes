<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Domisili</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <a href="<?php echo base_url()."masyarakat/Datadomisili/tambah"?>" type="button" class="btn btn-round btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
            <P><center> DATA SELESAI DIINPUT</center></P>
          </div>
         <!--  <div class="x_content">
            <p class="text-muted font-13 m-b-30">
            </p>
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Ktp</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Tgl lahir</th>
                  <th>Kewarganegaraan</th>
                  <th>Agama</th>
                  <th>Alamat Asli</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $no = 1;
              foreach($tb_domisili as $ci){
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $ci->no_ktp ?></td>
                  <td><?php echo $ci->nama ?></td>
                  <td><?php echo $ci->t_lahir ?></td>
                  <td><?php echo $ci->tgl_lahir ?></td>
                  <td><?php echo $ci->kewarganegaraan ?></td>
                  <td><?php echo $ci->agama ?></td>
                  <td><?php echo $ci->alamat_asli ?></td>
                  <td>
                     <a type="button" class="btn btn-danger" href="<?php echo base_url()."masyarakat/Datadomisili/edit/".$ci->id_domisili ?>" style="color: #fff"><i class="fa fa-pencil"></i></a>

                        <!-- <a type="button" class="btn btn-success" href="<?php echo base_url()."masyarakat/Datadomisili/edit_detail_domisili/".$ci->id_domisili ?>" style="color: #fff"><i class="fa fa-eye"></i></a> -->
                    
                    <!--   <a type="button" class="btn btn-primary" href="<?php echo base_url()."masyarakat/Datadomisili/hapus/".$ci->id_domisili ?>" style="color: #fff" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><i class="fa fa-trash-o"></i></a>

                    


                  </td>
                </tr>
              <?php } ?> --> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>