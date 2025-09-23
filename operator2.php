<?php
// File: operator2.php (Nama diganti)

echo "<b>Contoh 1: Menggabungkan Nama dengan Operator '.'</b><br>";

// Mendeklarasikan dua variabel string (NAMA SUDAH DIGANTI)
$nama_depan = "Rivaldo";
$nama_belakang = "Ir";

// Menggabungkan nama depan, spasi, dan nama belakang
$nama_lengkap = $nama_depan . " " . $nama_belakang;

echo "Nama Depan: " . $nama_depan . "<br>";
echo "Nama Belakang: " . $nama_belakang . "<br>";
echo "Nama Lengkap: " . $nama_lengkap . "<br>";

echo "<hr>"; // Garis pemisah

echo "<b>Contoh 2: Menambahkan Teks dengan Operator '.='</b><br>";

$kalimat = "Saya sedang belajar";
echo "Kalimat awal: '" . $kalimat . "'<br>";

// Menambahkan teks baru ke variabel $kalimat
$kalimat .= " PHP di Politeknik Negeri Jember.";

echo "Kalimat setelah ditambah: '" . $kalimat . "'";

?>