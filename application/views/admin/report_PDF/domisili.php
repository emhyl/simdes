<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report Domisili</title>
    <link href="<?php echo base_url()?>assets/build/css/report.css" rel="stylesheet">

</head>
<body>
    <div class="header">
        <div class="logo_kop">
            <img src="<?=base_url()?>assets/img/logo.jpeg">
        </div>
        <h1>
            PEMERINTAH KABUPATEN BULUKUMBA<br>
            KECAMATAN GANTARANG<br>
            DESA BUKIT TINGGI
        </h1>
        <span>Alamat :Desa Bukit Tinggi Kec. Gantarang Kab. Bulukumba</span>
        <hr>
    </div>
    <br>
    <div class="title">
        <p id="title">SURAT KETERANGAN DOMISILI</p>
        <p id="nomor_surat">Nomor  : 07/DBT/ XI /2021</p>
    </div>
    <br>
    <div id="isi">
        <p id="poin">
            Yang bertanda tangan di bawah ini, Kepala Desa Bukit Tinggi menerangkan Bahwa :
        </p>
        <br>
        <table>
            <tr>
                <td id="tbl_attr">Nama</td>
                <td>:</td>
                <td> <?=$data[0]->nama?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Jenis Kelamin</td>
                <td>:</td>
                <td> <?=$data[0]->j_kelamin?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Tempat / Tanggal lahir</td>
                <td>:</td>
                <td> <?=$data[0]->tgl_lahir?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Nik</td>
                <td>:</td>
                <td> <?=$data[0]->no_ktp?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Agama</td>
                <td>:</td>
                <td> <?=$data[0]->agama?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Alamat</td>
                <td>:</td>
                <td> <?=$data[0]->kewarganegaraan?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Keterangan</td>
                <td>:</td>
                <td> mmmmmmmmmm</td>
            </tr>
        </table>
        <br>
        <br>
        <p id="footer">
           Benar bahwa TK KHALIFAH Berdomisili di Dusun Kareppekang, Desa Bukit Tinggi, Kec. Gantarang, Kab. Bulukumba.
        </p>
        <br>
        <br>
        <div class="box_ttd">
            <div id="ttd">
                <p>Bukit Tinggi, 08  November 2021</p>
                <p>An.Kepala Desa Bukit Tinggi</p>
                <p>Sekdes</p>
                <br><br><br>
                <span id="name_ttd">SURIADI</span>
            </div>
        </div>
    </div>
</body>
</html>