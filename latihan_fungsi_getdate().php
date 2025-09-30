<?php
// Memanggil fungsi getdate()
$sekarang = getdate();

// Mengambil elemen tanggal, bulan, dan tahun dari array
$tanggal = $sekarang['mday'];
$bulan = $sekarang['mon'];
$tahun = $sekarang['year'];

// Menampilkan hasil sesuai format
echo "Sekarang Tanggal: $tanggal-$bulan-$tahun";
?>