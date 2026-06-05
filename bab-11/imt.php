<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung IMT</title>

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

function hitungIMT($berat, $tinggi){

    $imt = $berat / ($tinggi * $tinggi);

    if($imt < 18.5){
        $kategori = "Kurus";
    }
    elseif($imt < 25){
        $kategori = "Normal";
    }
    elseif($imt < 30){
        $kategori = "Gemuk";
    }
    else{
        $kategori = "Obesitas";
    }

    return [
        "imt" => round($imt, 2),
        "kategori" => $kategori
    ];
}

$berat = 50;
$tinggi = 1.60;

$hasil = hitungIMT($berat, $tinggi);

echo "<h2>Perhitungan IMT</h2>";

echo "
<div class='hasil'>
    Berat Badan : $berat kg <br><br>

    Tinggi Badan : $tinggi m <br><br>

    Nilai IMT : {$hasil['imt']} <br><br>

    Kategori : {$hasil['kategori']}
</div>
";
?>

</div>

</body>
</html>