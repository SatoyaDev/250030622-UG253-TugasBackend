<?php
function kalkulasi_nilai_akhir($tugas, $uts, $uas) {
    $nilai_akhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    if ($nilai_akhir >= 70) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }
    echo "Nilai Akhir : " . $nilai_akhir . "<br>";
    echo "Status Kelulusan : " . $status . "<br>";
}

// Implementasi
echo "<strong>Rekap Nilai Akhir Semester : Parama </strong><br>";
$nilai_tugas = 80;
$nilai_uts = 75;
$nilai_uas = 60;
kalkulasi_nilai_akhir($nilai_tugas, $nilai_uts, $nilai_uas);
?>