// ============================
// FILE: simpan.php
// ============================

<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];

mysqli_query($conn,
"INSERT INTO mahasiswa VALUES(
'', 
'$nama',
'$nim',
'$prodi',
'$semester'
)");

header("location:index.php");

?>