<?php
$array = [
    [ // Tabel 1
        ['elemen111', 'elemen112', 'elemen113'],
        ['elemen121', 'elemen122', 'elemen123']
    ],
    [ // Tabel 2
        ['elemen211', 'elemen212', 'elemen213'],
        ['elemen221', 'elemen222', 'elemen223']
    ]
];

echo "<h1>Data dari Array</h1>";

// Loop untuk setiap tabel
foreach ($array as $index_tabel => $tabel) {
    echo "<h2>Tabel " . ($index_tabel + 1) . "</h2>";
    echo "<table border='1'>";
    // Loop untuk setiap baris di dalam tabel
    foreach ($tabel as $baris) {
        echo "<tr>";
        // Loop untuk setiap elemen di dalam baris
        foreach ($baris as $elemen) {
            echo "<td>" . $elemen . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>