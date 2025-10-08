<?php

// Array asosiatif multidimensi berisi 4 jenis tiket konser
$tiket_konser = [
    [
        'nama_konser'    => 'Rock Fest Indonesia 2025',
        'artis'          => 'Multi-Artis Rock',
        'kategori_tiket' => 'VIP PASS',
        'lokasi'         => 'Stadion Gelora',
        'harga'          => 2500000
    ],
    [
        'nama_konser'    => 'Rock Fest Indonesia 2025',
        'artis'          => 'Multi-Artis Rock',
        'kategori_tiket' => 'FESTIVAL (Standing)',
        'lokasi'         => 'Stadion Gelora',
        'harga'          => 950000
    ],
    [
        'nama_konser'    => 'Pop Sensation Live',
        'artis'          => 'Paramore',
        'kategori_tiket' => 'DIAMOND',
        'lokasi'         => 'Convention Hall',
        'harga'          => 3100000
    ],
    [
        'nama_konser'    => 'Pop Sensation Live',
        'artis'          => 'Paramore',
        'kategori_tiket' => 'SILVER (Tribune)',
        'lokasi'         => 'Convention Hall',
        'harga'          => 1250000
    ]
];

// Siapkan variabel untuk menyimpan tiket termahal
$tiket_termahal = null;
$harga_tertinggi = 0;

// Loop untuk mencari harga tiket tertinggi
foreach ($tiket_konser as $tiket) {
    if ($tiket['harga'] > $harga_tertinggi) {
        $harga_tertinggi = $tiket['harga'];
        $tiket_termahal = $tiket;
    }
}

// Cetak tiket dengan harga tertinggi
echo "<h2>🎫 Kategori Tiket Termahal yang Tersedia:</h2>";

if ($tiket_termahal) {
    echo "<b>Nama Konser:</b> " . $tiket_termahal['nama_konser'] . "<br>";
    echo "<b>Artis:</b> " . $tiket_termahal['artis'] . "<br>";
    echo "<b>Lokasi:</b> " . $tiket_termahal['lokasi'] . "<br>";
    echo "<b>Kategori Tiket:</b> " . $tiket_termahal['kategori_tiket'] . "<br>";
    echo "<b>Harga:</b> Rp " . number_format($tiket_termahal['harga'], 0, ',', '.') . "<br>";
} else {
    echo "Tidak ada data tiket untuk ditampilkan.";
}

?>