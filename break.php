<?php
echo "<h3>Contoh BREAK</h3>";

$data_angka = [10, 25, 33, 45, 50, 68, 71];
$angka_dicari = 50;

echo "Mencari angka $angka_dicari...<br>";

for ($i = 0; $i < count($data_angka); $i++) {
    echo "Memeriksa indeks ke-$i: " . $data_angka[$i] . "<br>";
    if ($data_angka[$i] == $angka_dicari) {
        echo "Angka ditemukan pada indeks ke-$i!<br>";
        break; // Hentikan perulangan karena sudah ketemu
    }
}
?>