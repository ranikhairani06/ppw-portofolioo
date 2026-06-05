<?php

// ── FUNGSI VALIDASI ──────────────────────────────────────

function bersihkan($input): string {

$input = trim($input); // hapus spasi awal/akhir
$input = stripslashes($input); // hapus backslash
$input = htmlspecialchars($input); // PENTING untuk cegah XSS!

return $input;

}

$errors = [];
$sukses = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// Ambil dan bersihkan input

$nama = bersihkan($_POST['nama'] ?? '');
$email = bersihkan($_POST['email'] ?? '');
$umur = (int) ($_POST['umur'] ?? 0);

// Validasi

if (empty($nama)) {

$errors[] = "Nama tidak boleh kosong.";

}

elseif (strlen($nama) < 3) {

$errors[] = "Nama minimal 3 karakter.";

}

if (empty($email)) {

$errors[] = "Email tidak boleh kosong.";

}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

$errors[] = "Format email tidak valid.";

}

if ($umur < 17 || $umur > 100) {

$errors[] = "Umur harus antara 17 dan 100.";

}

// Jika tidak ada error

if (empty($errors)) {

$sukses = true;

// Di sini biasanya simpan ke database...

}

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Form Registrasi</title>
</head>

<body>

<h2>Form Registrasi</h2>

<?php

if (!empty($errors)) {

echo "<ul>";

foreach ($errors as $e) {

echo "<li>$e</li>";

}

echo "</ul>";

}

if ($sukses) {

echo "<p>Registrasi berhasil!</p>";

}

?>

<form method="POST">

<input type="text" name="nama" placeholder="Nama">

<br><br>

<input type="email" name="email" placeholder="Email">

<br><br>

<input type="number" name="umur" placeholder="Umur">

<br><br>

<button type="submit">Daftar</button>

</form>

</body>
</html>