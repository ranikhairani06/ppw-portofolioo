<?php
$bulan = date("F");
$hariSekarang = date("d");
$totalHari = date("t");

$sisaHari = $totalHari - $hariSekarang;

echo "Bulan sekarang: " . $bulan . "<br>";
echo "Sisa hari pada bulan ini: " . $sisaHari;
?>