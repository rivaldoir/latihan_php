<?php
// File: tipedata.php (Versi Benar)

echo "<b>Tipe Data Integer</b><br>";
$x = 5985;
var_dump($x); // var_dump() untuk menampilkan tipe data dan nilainya
echo "<br>";

$x = -345;
var_dump($x);
echo "<br><br>";

echo "<b>Tipe Data Float (Desimal)</b><br>";
$x = 10.365;
var_dump($x);
echo "<br><br>";

echo "<b>Tipe Data String (Teks)</b><br>";
$teks = "Selamat belajar PHP!";
var_dump($teks);
echo "<br><br>";

echo "<b>Contoh Fungsi String</b><br>";
echo "Panjang string 'Hello world!': " . strlen("Hello world!") . "<br>";
echo "Posisi kata 'world': " . strpos("Hello world!", "world");

?>