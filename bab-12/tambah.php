<!-- ============================
FILE: tambah.php
============================ -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Tambah Data Mahasiswa</h2>

    <form method="POST" action="simpan.php">

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Prodi</label>

            <select name="prodi" class="form-control">

                <option>TRPL</option>
                <option>TI</option>
                <option>SI</option>

            </select>
        </div>

        <div class="mb-3">
            <label>Semester</label>
            <input type="number" name="semester" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="index.php" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>