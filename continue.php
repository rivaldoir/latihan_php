<?php
echo "<h3>Contoh CONTINUE</h3>";
echo "Mencetak semua angka genap dari 1 sampai 10:<br>";

for ($i = 1; $i <= 10; $i++) {
    // Jika angka ganjil, lewati iterasi ini
    if ($i % 2 != 0) {
        continue;
    }
    // Hanya angka genap yang akan dicetak
    echo $i . "<br>";
}
?>