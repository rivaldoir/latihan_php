<?php

// --- DATA ---
$nama_mahasiswa = "Rivaldo Ir";
$nilai = 85;
$syarat_lulus = 75;

// --- HEADER ---
echo "=================================" . PHP_EOL;
echo "     HASIL EVALUASI NILAI        " . PHP_EOL;
echo "=================================" . PHP_EOL;

// --- RINCIAN DATA MAHASISWA ---
echo "DATA MAHASISWA:" . PHP_EOL;
echo "1. Nama   : " . $nama_mahasiswa . PHP_EOL;
echo "2. Nilai  : " . $nilai . PHP_EOL;
echo "3. Syarat : Minimal " . $syarat_lulus . PHP_EOL;
echo "---------------------------------" . PHP_EOL;

// --- HASIL KEPUTUSAN ---
echo "KEPUTUSAN:" . PHP_EOL;

// Struktur Logika IF...ELSE
if ($nilai >= $syarat_lulus) {
    // Blok ini berjalan jika kondisi TRUE
    echo "1. Status : LULUS" . PHP_EOL;
    echo "2. Pesan  : Selamat, pertahankan prestasimu!" . PHP_EOL;
} else {
    // Blok ini berjalan jika kondisi FALSE
    echo "1. Status : TIDAK LULUS" . PHP_EOL;
    echo "2. Pesan  : Maaf, jangan menyerah dan coba lagi." . PHP_EOL;
}

echo "=================================" . PHP_EOL;

?>