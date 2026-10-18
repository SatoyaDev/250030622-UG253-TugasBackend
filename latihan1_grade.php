<?php
function konversiNilai($nilai) {
    if ($nilai >= 90) {
        return "A";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        return "B";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        return "C";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        return "D";
    } else {
        return "E";
    }
}

// Implementasi
$nilaiMahasiswa = 50;
$grade = konversiNilai($nilaiMahasiswa);
echo "Nilai Mahasiswa : " . $nilaiMahasiswa . "<br>";
echo "Grade           : " . $grade;
?>