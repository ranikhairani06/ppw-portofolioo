<!-- ============================
FILE: edit.php
============================ -->

<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");

$d = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Edit Data Mahasiswa</h2>

    <form method="POST" action="update.php">

        <input type="hidden" name="id" value="<?= $d['id']; ?>">

        <div class="mb-3">
            <label>Nama</label>

            <input type="text"
                   name="nama"
                   class="form-control"
                   value="<?= $d['nama']; ?>">
        </div>

        <div class="mb-3">
            <label>NIM</label>

            <input type="text"
                   name="nim"
                   class="form-control"
                   value="<?= $d['nim']; ?>">
        </div>

        <div class="mb-3">
            <label>Prodi</label>

            <select name="prodi" class="form-control">

                <option <?= ($d['prodi']=="TRPL") ? "selected" : ""; ?>>
                    TRPL
                </option>

                <option <?= ($d['prodi']=="TI") ? "selected" : ""; ?>>
                    TI
                </option>

                <option <?= ($d['prodi']=="SI") ? "selected" : ""; ?>>
                    SI
                </option>

            </select>
        </div>

        <div class="mb-3">
            <label>Semester</label>

            <input type="number"
                   name="semester"
                   class="form-control"
                   value="<?= $d['semester']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="index.php" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>