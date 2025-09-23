<?php
echo "<h3>Contoh Operator Logika</h3>";

$umur = 25;
$sudah_lulus_s1 = true;
$memiliki_sim = false;

echo "Umur: $umur, Lulus S1: " . ($sudah_lulus_s1 ? 'Ya' : 'Tidak') . ", Punya SIM: " . ($memiliki_sim ? 'Ya' : 'Tidak') . "<br><br>";

// Contoh AND (&&): Harus memenuhi kedua syarat
if ($umur > 22 && $sudah_lulus_s1) {
    echo "Syarat 1 (Umur > 22 DAN Lulus S1): Memenuhi, boleh mendaftar.<br>";
} else {
    echo "Syarat 1 (Umur > 22 DAN Lulus S1): Tidak memenuhi.<br>";
}

// Contoh OR (||): Cukup memenuhi salah satu syarat
if ($umur > 30 || $memiliki_sim) {
    echo "Syarat 2 (Umur > 30 ATAU Punya SIM): Memenuhi, dapat bonus poin.<br>";
} else {
    echo "Syarat 2 (Umur > 30 ATAU Punya SIM): Tidak memenuhi, tidak dapat bonus poin.<br>";
}

// Contoh NOT (!): Kondisi terbalik
if (!$memiliki_sim) {
    echo "Syarat 3 (TIDAK punya SIM): Benar, pelamar ini tidak memiliki SIM.<br>";
}
?>