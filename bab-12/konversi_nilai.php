<!-- ============================
FILE: konversi_nilai.php
============================ -->

<?php
$grade = "";
$ket = "";
$warna = "";
if(isset($_POST['nilai'])){
    $nilai = $_POST['nilai'];
    if($nilai >= 85){
        $grade = "A";
        $ket = "Sangat Baik";
        $warna = "green";
    }
    elseif($nilai >= 75){
        $grade = "B";
        $ket = "Baik";
        $warna = "blue";
    }
    elseif($nilai >= 65){
        $grade = "C";
        $ket = "Cukup";
        $warna = "orange";
    }
    elseif($nilai >= 50){
        $grade = "D";
        $ket = "Kurang";
        $warna = "purple";
    }
    else{
        $grade = "E";
        $ket = "Gagal";
        $warna = "red";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Konversi Nilai</title>

</head>
<body>

<h2>Form Konversi Nilai</h2>

<form method="POST">

    Nilai:
    <input type="number" name="nilai">

    <button type="submit">
        Konversi
    </button>

</form>

<?php if($grade != ""){ ?>

    <h3 style="color: <?= $warna ?>">

        Grade <?= $grade ?>

        - <?= $ket ?>

    </h3>

<?php } ?>

</body>
</html>