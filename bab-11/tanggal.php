<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Tanggal</title>

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

        .hasil{
            background-color: #eef6ff;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">

<?php

$bulan = date("F");
$hariIni = date("d");
$totalHari = date("t");

$sisaHari = $totalHari - $hariIni;

echo "<h2>Informasi Tanggal</h2>";

echo "
<div class='hasil'>
    Bulan Sekarang : $bulan <br><br>

    Hari Ini : $hariIni <br><br>

    Total Hari dalam Bulan Ini : $totalHari <br><br>

    Sisa Hari di Bulan Ini : $sisaHari hari
</div>
";
?>

</div>

</body>
</html>