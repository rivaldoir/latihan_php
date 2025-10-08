<?php
$produk = [
["nama" => "Early Bird", "harga" => 7500000, "stok" => 2],
["nama" => "Presale 1", "harga" => 3000000, "stok" => 30],
["nama" => "Presale 2", "harga" => 2500000, "stok" => 50],
];
// Menampilkan semua produk
foreach ($produk as $p) {
echo "Nama: " . $p["nama"] . " | Harga: " . $p["harga"] . " | Stok: " .
$p["stok"] . "<br>";
}
?>