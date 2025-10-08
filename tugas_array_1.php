<?php

// 1. Membuat array 2 dimensi berisi data siswa
// Menggunakan associative array agar lebih mudah dibaca
$data_siswa = [
    ['nama' => 'Budi', 'matematika' => 85, 'bahasa' => 90],
    ['nama' => 'Siti', 'matematika' => 92, 'bahasa' => 88],
    ['nama' => 'Ahmad', 'matematika' => 78, 'bahasa' => 80]
];

// 2. Cetak nilai Bahasa dari siswa ke-2
// Ingat, array dimulai dari indeks 0, jadi siswa ke-2 ada di indeks 1.
echo "<h2>Nilai Spesifik</h2>";
echo "Nilai Bahasa siswa ke-2 (Siti) adalah: " . $data_siswa[1]['bahasa'];
echo "<hr>"; // Garis pemisah

// 3. Cetak semua data menggunakan looping
echo "<h2>Data Semua Siswa</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Nilai Matematika</th><th>Nilai Bahasa</th></tr>";

foreach ($data_siswa as $siswa) {
    echo "<tr>";
    echo "<td>" . $siswa['nama'] . "</td>";
    echo "<td>" . $siswa['matematika'] . "</td>";
    echo "<td>" . $siswa['bahasa'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>