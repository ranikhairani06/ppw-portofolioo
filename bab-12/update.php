// ============================
// FILE: update.php
// ============================

<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];

mysqli_query($conn,
"UPDATE mahasiswa SET
nama='$nama',
nim='$nim',
prodi='$prodi',
semester='$semester'
WHERE id='$id'
");

header("location:index.php");

?>