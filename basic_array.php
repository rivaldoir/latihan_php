<?php
$punakawan = array("Semar","Gareng","Petruk","Bagong");

echo $punakawan[0]; // Hasilnya Semar
echo "<br>";
echo $punakawan[3]; // Hasilnya Bagong
echo "<br>"; // Ditambahkan agar rapi

// Mengubah nilai elemen yang sudah ada
$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";

// Menambahkan elemen baru dengan tanda kutip yang benar
$punakawan[4]="Bagong";

// Menampilkan nilai pada indeks 3 setelah diubah
echo $punakawan[3]; // Hasilnya Petruk
?>