<?php
function hitung_luas_lingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

// Implementasi
$jari_jari = 25; 
$hasil_luas = hitung_luas_lingkaran($jari_jari);
echo "Luas lingkaran dengan jari-jari " . $jari_jari . " adalah " . $hasil_luas;
?>