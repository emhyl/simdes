<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding: 0;
        }
        body{
            padding: 0.31496062992126in;
        }
        #td_first{
            width: 200px;
        }

    </style>
</head>
<body>
<div id="header">
<div style="text-align:right"><p style="border:1px solid black;display:inline">Kode : F-2.01</p></div>
<table>
    <tr>
        <td style="">Pemerintah Kelurahan</td>
        <td style="width:300px">: Bukit Tinggi</td>
        <td >Lembar 1</td>
        <td>: Untuk Ybs</td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td style="width:300px">: Gantarang</td>
        <td>Lembar 2</td>
        <td>: Untuk Desa / Kelurahan</td>

    </tr>
    <tr>
        <td>Kabupaten</td>
        <td style="width:300px">: Bulukumba</td>
        <td>Lembar 3</td>
        <td>: Untuk Kecamatan</td>
    </tr>
</table>
</div>
<br>
<p> <center><b>FORMULIR SURAT KETERANGAN KELAHIRAN</b></center></p>
<br>

<table>
    <tr>
        <td id="td_first">Nama Kepala Keluarga</td>
        <td>:</td>
    </tr>
    <tr>
        <th>BAYI / ANAK</th>
    </tr>
    <tr>
        <td>1. Nama Lengkap</td>
        <td>: <?= $data[0]->nama; ?></td>       
    </tr>
    <tr>
        <td>2. Jenis Kelamin</td>
        <td>: <?= $data[0]->j_kelamin; ?></td>
    </tr>
    <tr>
         <td>3. Tempat Lahir</td>
         <td>: <?= $data[0]->t_lahir; ?></td>
    </tr>
    <tr>
         <td>4. Hari / tanggal Lahir</td>
         <td>: <?= $data[0]->hari; ?></td>
    </tr>
    <tr>
         <td>5. Waktu</td>
         <td>: <?= $data[0]->waktu; ?></td>
    </tr>
    <tr>
         <td>6. Jenis Kelahiran</td>
         <td>: <?= $data[0]->j_kelahiran; ?></td>
    </tr>
    <tr>
         <td>7. Berat Atau Panjang Badan</td>
         <td>: <?= $data[0]->berat; ?></td>
    </tr>
    <tr>
         <td>8. Anak ke</td>
         <td>: <?= $data[0]->anak_ke; ?></td>
    </tr>
    <tr>
         <td>9. NIK</td>
         <td>: <?= $data[0]->nik; ?></td>
    </tr>
    <tr>
        <th>IBU</th>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>: <?= $data[0]->nama_ibu; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>: <?= $data[0]->nik_ibu; ?></td>
    </tr>
    <tr>
        <td>Tgl Lahir / Umur</td>
        <td>: <?= $data[0]->tgl_ibu; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>: <?= $data[0]->pekerjaan_ibu; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?= $data[0]->alamat_ibu; ?></td>
    </tr>
    <tr>
        <th>AYAH</th>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>: <?= $data[0]->nama_ayah; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>: <?= $data[0]->nik_ayah; ?></td>
    </tr>
    <tr>
        <td>Tgl Lahir / Umur</td>
        <td>: <?= $data[0]->tgl_ayah; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>: <?= $data[0]->pekerjaan_ayah; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?= $data[0]->alamat_ayah; ?></td>
    </tr>
    <tr>
        <th>PELAPOR</th>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>: <?= $data[0]->pelapor; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>: <?= $data[0]->nik_pelapor; ?></td>
    </tr>
    <tr>
        <td>Tgl Lahir / Umur</td>
        <td>: <?= $data[0]->umur_pelapor; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>: <?= $data[0]->pekerjaan_pelapor; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?= $data[0]->alamat_pelapor; ?></td>
    </tr>
</table>
<table>
    <tr>
        <th style="width:350px">SAKSI 1</th>
        <th style="width:350px">SAKSI 2</th>
    </tr>
</table>
<table>
   <tr>
        <td>Nama Lengkap</td>
        <td style="width:243px">: <?= $data[0]->saksi_1; ?></td>
        <td>Nama Lengkap</td>
        <td>: <?= $data[0]->saksi_2; ?></td>
    </tr>
        <td>Nik</td>
        <td style="width:243px">: <?= $data[0]->nik_saksi1; ?></td>
        <td>Nik</td>
        <td>: <?= $data[0]->nik_saksi2; ?></td>
    <tr>
        <td>Tgl Lahir / Umur</td>
        <td style="width:243px">: <?= $data[0]->umur_saksi1; ?></td>
        <td>Tgl Lahir / Umur</td>
        <td>: <?= $data[0]->umur_saksi2; ?></td>
    </tr>
    <tr>        
        <td>Pekerjaan</td>
        <td style="width:243px">: <?= $data[0]->pekerjaan_saksi1; ?></td>
        <td>Pekerjaan</td>
        <td>: <?= $data[0]->pekerjaan_saksi2; ?></td>
    </tr>
</table>
<table>
    <tr>
        <td style="width:350px"><center>Saksi 1</center></td>
        <td style="width:350px"><center>Saksi 2</center></td>
    </tr>
    <tr>
        <td><br><br><br></td>
    </tr>
    <tr>
        <td><center>............................</center></td>
        <td><center>............................</center></td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<table>
    <tr>
        <td style="width:350px"><center>MENGETAHUI</center></td>
        <td style="width:350px"><center></center></td>
    </tr>
    <tr>
        <td><center>KEPALA DESA BUKIT TINGGI</center></td>
        <td>Bukit Tinggi............................</td>
    </tr>
    <tr>
        <td><center></center></td>
        <td style="width:350px"><center>Pelapor</center></td>
    </tr>
    <tr>
        <td><br><br><br></td>
    </tr>
    <tr>
        <td><center>NIP............................</center></td>
        <td><center>............................</center></td>
    </tr>
</table>
<br>
<p><i><b style="font-size:14px">Terlampir Persyaratan sbb</b></i></p>
<div style="font-size:13px">
    <p>1. Pelapor mengisi dan menandatangani Surat Keterangan Kelahiran yang disediakan</p>
    <p>2.Surat Kelahiran dari Dokter / Bidan / Penolong Kelahiran</p>
    <p>3. FC Kutipan Akta Nikah / Akta Perkawinan Ayah Ibu</p>
    <p>4. FC KTP Ayah dan Ibu</p>
    <p>5. FC KK Orang Tua</p>
    <p>6. 2 (Dua) Orang saksi menandatangani Registrasi Kelahiran di Dinpendukcapil</p>
</div>
</body>
</html>