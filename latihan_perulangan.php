<?php
$nilai = 90;
echo "CONTOH IF ELSE <br>";
if ($nilai >= 80 && $nilai <= 100) {
    echo "Selamat Anda mendapat grade A dengan nilai $nilai <br>";
} elseif ($nilai >= 61 && $nilai <= 79) {
    echo "Anda mendapat grade B dengan nilai $nilai <br>";
} elseif ($nilai >= 51 && $nilai <= 60) {
    echo "Anda mendapat grade C dengan nilai $nilai <br>";
} elseif ($nilai >= 41 && $nilai <= 50) {
    echo "Anda mendapat grade D dengan nilai $nilai <br>";
} elseif ($nilai >= 0 && $nilai <= 40) {
    echo "Anda mendapat grade E dengan nilai $nilai <br>";
} else {
    echo "Nilai tidak valid <br>";
}

echo "CONTOH SWITCH <br>";
switch (true) {
    case ($nilai >= 80 && $nilai <= 100):
        echo "Grade A (Nilai: $nilai) <br>";
        break;
    case ($nilai >= 61 && $nilai <= 79):
        echo "Grade B (Nilai: $nilai) <br>";
        break;
    case ($nilai >= 51 && $nilai <= 60):
        echo "Grade C (Nilai: $nilai) <br>";
        break;
    case ($nilai >= 41 && $nilai <= 50):
        echo "Grade D (Nilai: $nilai) <br>";
        break;
    case ($nilai >= 0 && $nilai <= 40):
        echo "Grade E (Nilai: $nilai) <br>";
        break;
    default:
        echo "Nilai tidak valid <br>";
}

echo "CONTOH FOR <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Looping FOR ke : " . $i . "<br>";
}

echo "CONTOH WHILE <br>";
$j = 1;
while ($j <= 5) {
    echo "Looping While ke : " . $j . "<br>";
    $j++;
}
?>