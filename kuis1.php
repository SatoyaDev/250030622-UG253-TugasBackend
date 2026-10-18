<?php
echo "Ini program array 1 sampai 20 yang habis dibagi 3. :)<br><br>";
$arrayAngka = range(1, 20);

foreach ($arrayAngka as $angka) {
    if ($angka % 3 == 0) {
        echo $angka . "<br>";
    }
}
?>