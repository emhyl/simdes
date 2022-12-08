<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report Domisili</title>
    <style>
        *{
    margin:0;
    padding:0;
    font-family: 'Times New Roman'
}

body{
    padding:0.59in 1in 1in 1in;
}
.header{
    /* margin-top:0.2in; */
    text-align: center;
    position: relative;
}
.header .logo_kop{
    position:absolute;
    top :5;
    left: -10;
    height:87.36px;
    width:87.36px;

}
.header .logo_kop img{
    width : 100%;
    height : 100%;
}
.header h1{
    font-size: 14pt;
    /* font-family: 'Times New Roman', Times, serif; */
    /* font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */
    line-height:25px;
    /* word-spacing:20px; */
}
.header span{
    font-style: italic;
    margin-bottom: 5px;
    display: block;
    font-size: 12pt;
}
hr{
    background-color:black;
    height:1px;
}
.title{

}
.title #title{
    text-align:center;
    font-weight:bold;
    text-decoration:underline;
    margin-bottom:1.15pt;
}
.title #nomor_surat{
    text-align:center;
}
#isi{
    box-sizing:border-box;
    padding-left:35px;
    
}
#poin{
    text-align:justify;
    font-size:12pt;
}
#isi #tbl_attr{
    width:150px;
    vertical-align: top;
}
#footer{
    text-indent: 0.39in;
}
.box_ttd{
    
}
#ttd{
    display: inline-block;
    text-align: center;
    float: right;
}
#ttd #name_ttd{
    text-decoration: underline;
    font-weight: bold;
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
        <p id="title">SURAT KETERANGAN DOMISILI SEKOLAH</p>
        <p id="nomor_surat">Nomor : /DBT/XII/2019</p>
    </div>
    <br>
    <div id="isi">
        <p id="poin">
            Yang bertanda tangan di bawah ini, Kepala Desa Bukit Tinggi,Kecamatan Gantarang, Kab. Bulukumba. Menerangkan dengan sebenar-benarnya bahwa :
        </p>
        <br>
        <table>
            <tr>
                <td id="tbl_attr">Nama</td>
                <td>:</td>
                <td>SYAFRUDDIN</td>
            </tr>
            <tr>
                <td id="tbl_attr">Jabatan</td>
                <td>:</td>
                <td>Kepala Desa Bukit Tinggi</td>
            </tr>
            <tr>
                <td id="tbl_attr">Alamat</td>
                <td>:</td>
                <td>Dusun Tanete, Desa Bukit Tinggi</td>
            </tr>
        </table>
        <br>
        <p id="poin">
             Dengan ini Menerangkan Bahwa :
        </p>
        <br>
        <table>
            <tr>
                <td id="tbl_attr">Nama Sekolah</td>
                <td>:</td>
                <td>TK KHALIFAH</td>
            </tr>
            <tr>
                <td id="tbl_attr">ALamat Sekolah</td>
                <td style="vertical-align:top">:</td>
                <td>
                    Dusun Kareppekang, Desa Bukit Tinggi,<br>
                    Kec. Gantarang, Kab. Bulukumba
                </td>
            </tr>
        </table>
        <br>
        <p id="poin">
            Penanggun Jawab Sekolah :
        </p>
        <br>
        <table>
            <tr>
                <td id="tbl_attr">Nama Lengkap</td>
                <td>:</td>
                <td>NURJANNAH. S.Pd.I</td>
            </tr>
            <tr>
                <td id="tbl_attr">NIK</td>
                <td style="vertical-align:top">:</td>
                <td>
                    7302017112730024
                </td>
            </tr>
            <tr>
                <td id="tbl_attr">Jabatan</td>
                <td>:</td>
                <td>Kepala Sekolah</td>
            </tr>
            <tr>
                <td id="tbl_attr">Tempat Tanggal Lahir</td>
                <td>:</td>
                <td>Bontosunggu Kab Jeneponto. 31-12-1971</td>
            </tr>
            <tr>
                <td id="tbl_attr">Alamat</td>
                <td>:</td>
                <td>Dusun Kareppekang, Desa Bukit Tinggi</td>
            </tr>
            <tr>
                <td id="tbl_attr">Maksud</td>
                <td>:</td>
                <td>Kelengkapan berkas</td>
            </tr>
        </table>
        <br>
        <p id="footer">
           Benar bahwa TK KHALIFAH Berdomisili di Dusun Kareppekang, Desa Bukit Tinggi, Kec. Gantarang, Kab. Bulukumba.
        </p>
        <br>
        <p id="footer">
            Demikian Surat keterangan domisili Yayasan ini kami berikan kepada yang bersangkutan untuk dipergunakan seperlunya.
        </p>
        <br><br><br>
        <div class="box_ttd">
            <div id="ttd">
                <p>Bukit Tinggi, 03-12-2019</p>
                <p>Kepala Desa Bukit Tinggi</p>
                <br><br><br><br>
                <span id="name_ttd">SYAFRUDDIN</span>
            </div>
        </div>
    </div>
</body>
</html>