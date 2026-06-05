<?php
function hitungIMT($berat, $tinggi) {
    $imt = $berat / ($tinggi * $tinggi);

    if ($imt < 18.5) {
        return "Kurus";
    } elseif ($imt < 25) {
        return "Normal";
    } elseif ($imt < 30) {
        return "Gemuk";
    } else {
        return "Obesitas";
    }
}

echo hitungIMT(50, 1.6);
?>