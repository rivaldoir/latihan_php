<?php
echo "<h3>Contoh Operator String</h3>";

// Menggunakan operator '.' (titik) untuk menggabung
$kata1 = "Saya";
$kata2 = "belajar";
$kata3 = "PHP.";
$hasil_gabungan = $kata1 . " " . $kata2 . " " . $kata3;
echo "Hasil gabungan dengan (.): " . $hasil_gabungan . "<br>";


// Menggunakan operator '.=' untuk menambahkan teks
$kalimat = "Lokasinya di";
$kalimat .= " Politeknik Negeri Jember."; // Menambahkan teks ke variabel $kalimat
echo "Hasil tambahan dengan (.=): " . $kalimat;
?>