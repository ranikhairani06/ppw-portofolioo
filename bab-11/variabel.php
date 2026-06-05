<?php
// ── TIPE DATA DASAR ──────────────────────────────────────
$nama = "Budi Santoso"; // String
$umur = 21; // Integer
$ipk = 3.75; // Float
$lulus = true; // Boolean
$kosong = null; // Null

// Array profil
$profil = [
    "nama" => $nama,
    "umur" => $umur,
    "ipk" => $ipk
];

// ── CEK TIPE DATA ────────────────────────────────────────
echo gettype($nama) . "<br>";   // string
echo gettype($umur) . "<br>";   // integer
echo gettype($ipk) . "<br><br>"; // double

// ── STRING FUNCTIONS ─────────────────────────────────────
echo strlen($nama) . "<br>"; // panjang string
echo strtoupper($nama) . "<br>"; // huruf besar
echo strtolower($nama) . "<br>"; // huruf kecil
echo str_replace("Budi", "Andi", $nama) . "<br>"; // ganti kata
echo substr($nama, 0, 4) . "<br>"; // ambil 4 karakter
echo trim(" spasi ") . "<br>"; // hapus spasi tepi
echo str_contains($nama, "Budi") . "<br><br>"; // cek isi string

// ── CONCATENATION ────────────────────────────────────────
echo "Nama: " . $nama . ", Umur: " . $umur . "<br>";
echo "Nama: $nama, Umur: $umur <br>";
echo "IPK: {$profil['ipk']} <br>";
?>