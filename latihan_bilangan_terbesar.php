<?php

/**
 * Ini adalah bagian pembuatan fungsi.
 * Nama fungsi: cariBilanganTerbesar
 * Parameter: $angka1 dan $angka2 sebagai nilai inputan.
 * Tujuan: Membandingkan dua angka dan mengembalikan angka yang lebih besar.
 */
function cariBilanganTerbesar($angka1, $angka2)
{
    // Menggunakan logika IF-ELSE untuk membandingkan kedua bilangan
    if ($angka1 > $angka2) {
        // Jika $angka1 lebih besar, kembalikan nilai $angka1
        return $angka1;
    } else {
        // Jika tidak (berarti $angka2 lebih besar atau sama dengan), kembalikan nilai $angka2
        return $angka2;
    }
}

// --- Ini adalah bagian pemanggilan fungsi ---

// Siapkan dua buah bilangan
$bil_1 = 100;
$bil_2 = 150;

// Panggil fungsi cariBilanganTerbesar dengan argumen $bil_1 dan $bil_2
// Hasil dari fungsi akan ditampung di dalam variabel $hasil
$hasil = cariBilanganTerbesar($bil_1, $bil_2);

// Tampilkan hasilnya
echo "Dua buah bilangan adalah $bil_1 dan $bil_2. <br>";
echo "Bilangan terbesarnya adalah: $hasil";

?>