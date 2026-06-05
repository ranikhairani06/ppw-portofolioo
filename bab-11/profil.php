<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container{
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            margin: auto;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td{
            border: 1px solid #999;
        }

        th{
            background-color: #007bff;
            color: white;
        }

        th, td{
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container">

<?php
$nama = "Nikmah Putri Khairani";
$nim = "123456789";
$prodi = "Informatika";
$asal = "Yogyakarta";

echo "<h2>Profil Mahasiswa</h2>";

echo "
<table>
    <tr>
        <th>Data</th>
        <th>Keterangan</th>
    </tr>

    <tr>
        <td>Nama</td>
        <td>$nama</td>
    </tr>

    <tr>
        <td>NIM</td>
        <td>$nim</td>
    </tr>

    <tr>
        <td>Program Studi</td>
        <td>$prodi</td>
    </tr>

    <tr>
        <td>Asal Kota</td>
        <td>$asal</td>
    </tr>
</table>
";
?>

</div>

</body>
</html>