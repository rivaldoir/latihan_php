<?php
echo "<h3>Contoh SWITCH</h3>";

$kode_hari = 3;
$nama_hari = "";

switch ($kode_hari) {
    case 1:
        $nama_hari = "Senin";
        break;
    case 2:
        $nama_hari = "Selasa";
        break;
    case 3:
        $nama_hari = "Rabu";
        break;
    case 4:
        $nama_hari = "Kamis";
        break;
    case 5:
        $nama_hari = "Jumat";
        break;
    case 6:
        $nama_hari = "Sabtu";
        break;
    case 7:
        $nama_hari = "Minggu";
        break;
    default:
        $nama_hari = "Kode hari tidak valid";
        break;
}

echo "Hari ke-$kode_hari adalah hari $nama_hari.";
?>
