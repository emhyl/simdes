<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report Domisili</title>
    <link href="<?php echo base_url()?>assets/build/css/report.css" rel="stylesheet">
    <style>
        #footer{
            text-indent: 0in;
        }
        #poin{
            text-indent:.59in;
        }
        #isi #tbl_attr{
            width:180px;
            vertical-align: top;
        }
        #mengetahui{
            display: inline-block;
        }
        hr{
            height:0px;
        }
   
    </style>
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
        <p id="title">SURAT PENGANTAR UNTUK MENDAPATKAN SKCK DARI POLRI</p>
        <p id="nomor_surat">Nomor:  05 / DBT / VI /2021</p>
    </div>
    <br>
    <div id="isi">
        <p id="poin">
            Yang bertanda tangan di bawah ini, kepala Desa Bukit Tinggi Kec.Gantarang, Kabupaten Bulukumba, Menerangkan bahwa :
        </p>
        <br>
        <table>
            <tr>
                <td id="tbl_attr">Nama</td>
                <td>:</td>
                <td><?=$data[0]->nama?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Jenis Kelamin</td>
                <td>:</td>
                <td><?=$data[0]->j_kelamin?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Tempat / Tanggal lahir</td>
                <td>:</td>
                <td><?=$data[0]->t_lahir?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Pekerjaan</td>
                <td>:</td>
                <td><?=$data[0]->pekerjaan?></td>
            </tr>
            <tr>
                <td id="tbl_attr">No KTP</td>
                <td>:</td>
                <td><?=$data[0]->nik?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Ijazah Terakhir</td>
                <td>:</td>
                <td> m</td>
            </tr>
            <tr>
                <td id="tbl_attr">Lamanya Di Kampung ini</td>
                <td>:</td>
                <td> arganegaraa</td>
            </tr>
            <tr>
                <td id="tbl_attr">Alamat Lengkap</td>
                <td>:</td>
                <td><?=$data[0]->alamat?></td>
            </tr>
            <tr>
                <td id="tbl_attr">Maksud / Keperluan</td>
                <td>:</td>
                <td><?=$data[0]->keperluan?></td>
            </tr>
        </table>
        <br>
        <p id="footer">
            Oknum yang tersebut diatas benar-benar berkelakuan baik dan tidak pernah tersangkut / terlibat dalam soal politik/ kriminal berdasarkan data yang ada.
        </p>
        <p>Demikian surat pengantar ini di berikan untuk di gunakan seperlunya.</p>
        <br>
        <br>
        <div class="box_ttd">
            <div id="ttd">
                <p>Bukit Tinggi,28 Juni 2021</p>
                <p>Kepala Desa Bukit Tinggi</p>
                <br><br><br><br><br>
                <span id="name_ttd">SYAFRUDDIN</span>
            </div>
            <div id="mengetahui">
                <br>
                <p>NomorReg </p>
                <p>Mengetahui</p>
                <p>Kepala kepolisian sector Gantarang	</p>
                <br><br><br><br>
                <hr>
            </div>
        </div>
    </div>
</body>
</html>