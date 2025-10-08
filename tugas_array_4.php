<?php

// Siapkan variabel
$matriks = [];
$total_semua_elemen = 0;
$ukuran = 3; // Ukuran matriks (3x3)

// --- 1. Membuat Matriks 3x3 dengan Angka Acak ---
for ($baris = 0; $baris < $ukuran; $baris++) {
    for ($kolom = 0; $kolom < $ukuran; $kolom++) {
        // Isi setiap sel dengan angka acak dari 1 sampai 9
        $angka_acak = rand(1, 9);
        $matriks[$baris][$kolom] = $angka_acak;
    }
}


// --- 2. Cetak Array dalam Bentuk Matriks ---
echo "<h2>Matriks Acak 3x3</h2>";
// Tag <pre> digunakan agar format teks (termasuk spasi) tidak berubah
echo "<pre>";
foreach ($matriks as $baris_array) {
    foreach ($baris_array as $nilai) {
        // Cetak nilai diikuti dua spasi agar rapi
        echo $nilai . "  ";
    }
    // Pindah baris setelah satu baris matriks selesai dicetak
    echo "<br>";
}
echo "</pre>";


// --- 3. Hitung Jumlah Total Semua Elemen ---
foreach ($matriks as $baris_array) {
    // Menjumlahkan semua nilai dalam satu baris
    $total_semua_elemen += array_sum($baris_array);
}

echo "<hr>"; // Garis pemisah
echo "<strong>Jumlah total semua elemen adalah: " . $total_semua_elemen . "</strong>";

?>