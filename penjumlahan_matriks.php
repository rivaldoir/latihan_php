<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Acara 11 - Penjumlahan Matriks</title>
    <style>
        body { 
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container { 
            display: flex; 
            align-items: center;
            gap: 20px;
        }
        table { 
            border-collapse: collapse; 
        }
        td { 
            border: 1px solid #333; 
            padding: 10px; 
            text-align: center; 
            font-size: 1.2em;
        }
        .operator {
            font-size: 2em;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Tugas Praktikum: Penjumlahan Matriks 3x3</h2>

    <?php
    // 1. Inisialisasi Matriks A dan B menggunakan array multidimensi
    $matriks_A = [
        [1, 1, 1],
        [2, 2, 2],
        [3, 3, 3]
    ];

    $matriks_B = [
        [3, 3, 3],
        [2, 2, 2],
        [1, 1, 1]
    ];

    // 2. Siapkan array kosong untuk menyimpan hasil penjumlahan
    $hasil_C = [];

    // 3. Proses penjumlahan menggunakan perulangan (looping) bersarang
    // Perulangan luar untuk baris (index $i)
    for ($i = 0; $i < 3; $i++) {
        // Perulangan dalam untuk kolom (index $j)
        for ($j = 0; $j < 3; $j++) {
            // Menjumlahkan elemen matriks A dan B pada posisi yang sama
            $hasil_C[$i][$j] = $matriks_A[$i][$j] + $matriks_B[$i][$j];
        }
    }

    // Fungsi bantuan untuk menampilkan matriks dalam format tabel HTML
    function tampilkanMatriks($matriks) {
        echo "<table>";
        // Menggunakan foreach untuk mencetak setiap baris
        foreach ($matriks as $baris) {
            echo "<tr>";
            // Menggunakan foreach untuk mencetak setiap sel (kolom) dalam baris
            foreach ($baris as $nilai) {
                echo "<td>" . $nilai . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

    <h4>Matriks A + Matriks B = Matriks C</h4>
    <div class="container">
        <div>
            <?php tampilkanMatriks($matriks_A); ?>
        </div>
        <div class="operator">+</div>
        <div>
            <?php tampilkanMatriks($matriks_B); ?>
        </div>
        <div class="operator">=</div>
        <div>
            <?php tampilkanMatriks($hasil_C); ?>
        </div>
    </div>

</body>
</html>