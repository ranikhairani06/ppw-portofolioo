<?php

// $_GET — data dari URL query string
// URL: halaman.php?nama=Budi&kota=Jogja

echo $_GET['nama'] ?? 'Tamu'; // Budi


// $_POST — data dari form method POST

echo $_POST['email'] ?? '';


// $_SERVER — informasi server dan request

echo $_SERVER['REQUEST_METHOD']; // GET atau POST

echo $_SERVER['PHP_SELF']; // path file PHP ini sendiri

echo $_SERVER['HTTP_USER_AGENT']; // info browser pengguna

echo $_SERVER['REMOTE_ADDR']; // IP address pengguna


// $_SESSION — data sesi (persisten antar halaman)

session_start();

$_SESSION['user_id'] = 42; // simpan ke sesi

echo $_SESSION['user_id']; // baca dari sesi

session_destroy(); // hapus semua sesi (logout)


// $_COOKIE — data cookie di browser pengguna

setcookie("theme", "dark", time() + (7 * 24 * 3600)); // simpan 7 hari

echo $_COOKIE['theme'] ?? 'light'; // baca cookie


// $_FILES — file yang diupload
// (dibahas lebih detail di bab berikutnya)

?>