<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            margin:auto
        }
    </style>
    <title>Report_KK</title>
</head>
<body>
    <table cellspacing="0" cellpadding="5">
        <tr>
            <th colspan="3"><h1>KART KELUARGA</h1></th>
        </tr>
        <tr>
            <td>NAMA KEPALA KELUARGA</td>
            <td>: <?= $data[0]->nm_kkeluarga; ?></td>
        </tr>
        <tr>
             <td>ALAMAT</td>

             <td>: <?= $data[0]->a_keluarga; ?></td>
        </tr>
        <tr>
             <td>RT/RW</td>

             <td>: <?= $data[0]->rt_rw; ?></td>
        </tr>
        <tr>
             <td>DESA / KELURAHAN</td>

             <td>: <?= $data[0]->desa_kelurahan; ?></td>
        </tr>
        <tr>
             <td>KECAMATAN</td>

             <td>: <?= $data[0]->kecematan; ?></td>
        </tr>
        <tr>
             <td>KABUPATEN</td>

             <td>: <?= $data[0]->kabupaten; ?></td>
        </tr>
        <tr>
             <td>PROVINSI</td>

             <td>: <?= $data[0]->provinsi; ?></td>
        </tr>
        <tr>
             <td>STATUS KELUARGA</td>

             <td>: <?= $data[0]->status_keluarga; ?></td>
        </tr>
    </table>
    
</body>
</html>