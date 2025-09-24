<?php
echo "<h3>Contoh IF, ELSEIF, dan ELSE</h3>";

$nilai = 67;

if ($nilai >= 90) {
    echo "Predikat Anda: A (Sangat Baik)";
} elseif ($nilai >= 80) {
    echo "Predikat Anda: B (Baik)";
} elseif ($nilai >= 70) {
    echo "Predikat Anda: C (Cukup)";
} else {
    echo "Predikat Anda: D (Kurang)";
}
?>