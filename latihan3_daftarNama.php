<?php
$daftarNama = ["Parama", "Balmon", "Arjuna", "Candra", "Lapu-Lapu"];
echo "<strong>Daftar Nama:</strong><br>";

foreach ($daftarNama as $index => $nama) {
    $nomorUrut = $index + 1; 
    echo $nomorUrut . ". " . $nama . "<br>";
}
?>