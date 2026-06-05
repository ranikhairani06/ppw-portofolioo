
<?php

$hasil = "";

if(isset($_POST['submit'])){

    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $ipk = htmlspecialchars($_POST['ipk']);
    $semester = htmlspecialchars($_POST['semester']);

    if($ipk >= 3.51){
        $predikat = "Cumlaude";
    }

    elseif($ipk >= 3.01){
        $predikat = "Sangat Memuaskan";
    }

    elseif($ipk >= 2.76){
        $predikat = "Memuaskan";
    }

    else{
        $predikat = "Cukup";
    }

    $hasil = "

    <h3>Data Mahasiswa</h3>

    Nama : $nama <br><br>

    NIM : $nim <br><br>

    Prodi : $prodi <br><br>

    IPK : $ipk <br><br>

    Semester : $semester <br><br>

    Predikat : $predikat

    ";
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Pendataan Mahasiswa</title>

</head>
<body>

<h2>Form Pendataan Mahasiswa</h2>

<form method="POST">

    Nama:
    <br>
    <input type="text" name="nama" required>

    <br><br>

    NIM:
    <br>
    <input type="text" name="nim" required>

    <br><br>

    Prodi:
    <br>

    <select name="prodi">

        <option>TRPL</option>
        <option>TI</option>
        <option>SI</option>

    </select>

    <br><br>

    IPK:
    <br>
    <input type="number" step="0.01" name="ipk" required>

    <br><br>

    Semester:
    <br>
    <input type="number" name="semester" required>

    <br><br>

    <button type="submit" name="submit">

        Simpan

    </button>

</form>

<br>

<?= $hasil ?>

</body>
</html>