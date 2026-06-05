

<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Data Mahasiswa</h2>

    <a href="tambah.php" class="btn btn-primary mb-3">
        Tambah Data
    </a>

    <table class="table table-bordered table-striped">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;

        while($d = mysqli_fetch_array($data)){
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['nim']; ?></td>
            <td><?= $d['prodi']; ?></td>
            <td><?= $d['semester']; ?></td>

            <td>
                <a href="edit.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="hapus.php?id=<?= $d['id']; ?>" class="btn btn-danger btn-sm">
                    Hapus
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>