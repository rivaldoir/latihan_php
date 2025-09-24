<?php
// Mengatur zona waktu agar akurat untuk sapaan berdasarkan waktu
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Logika Percabangan PHP</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <h1>Kumpulan Contoh Logika Percabangan PHP</h1>

    <h3>Kasus 1: Validasi Login Pengguna</h3>
    <?php
    $user_terdaftar = "rivaldoir";
    $password_terdaftar = "rahasia123";
    $input_user = "rivaldoir";
    $input_password = "rahasia123";

    if ($input_user == $user_terdaftar && $input_password == $password_terdaftar) {
        echo "✅ Login berhasil! Selamat datang, $user_terdaftar.";
    } else {
        echo "❌ Login gagal! Username atau password salah.";
    }
    ?>
    <hr>

    
    
    
    
    <h3>Kasus 2: Kontrol Akses Berdasarkan Peran (User Role)</h3>
    <?php
    $peran_pengguna = "Admin";
    echo "Anda login sebagai: <b>$peran_pengguna</b><br>";

    switch ($peran_pengguna) {
        case "Admin":
            echo "Menampilkan menu: Dashboard, Manajemen Pengguna, Laporan Penjualan.";
            break;
        case "Editor":
            echo "Menampilkan menu: Dashboard, Tulis Artikel, Manajemen Artikel.";
            break;
        case "Member":
            echo "Menampilkan menu: Profil Saya, Riwayat Pembelian.";
            break;
        default:
            echo "Peran tidak dikenali. Menampilkan halaman publik.";
            break;
    }
    ?>
    <hr>

    
    
    
    
    <h3>Kasus 3: Validasi Formulir (Form Validation)</h3>
    <?php
    $nama_lengkap = "Rivaldo Ir";
    $email = "tes@contoh.com";
    $password = "123"; // Kurang dari 8 karakter
    $pesan_error = "";

    if (empty($nama_lengkap)) {
        $pesan_error .= "Nama lengkap tidak boleh kosong.<br>";
    }
    if (strlen($password) < 8) {
        $pesan_error .= "Password harus memiliki minimal 8 karakter.<br>";
    }

    if (empty($pesan_error)) {
        echo "✅ Registrasi berhasil!";
    } else {
        echo "❌ Registrasi Gagal:<br>" . $pesan_error;
    }
    ?>
    <hr>

   
   
   
   
    <h3>Kasus 4: Menampilkan Status Stok Barang</h3>
    <?php
    $stok_barang = 0;
    echo "Nama Barang: Keyboard Mekanikal<br>";
    echo "Stok: $stok_barang<br>";

    if ($stok_barang > 0) {
        echo "Status: <span style='color:green;'>Tersedia</span><br>";
        echo "<button>Beli Sekarang</button>";
    } else {
        echo "Status: <span style='color:red;'>Stok Habis</span><br>";
        echo "<button disabled>Beli Sekarang</button>";
    }
    ?>
    <hr>

    
    
    
    <h3>Kasus 5: Memberikan Sapaan Sesuai Waktu</h3>
    <?php
    $jam = date('H');

    if ($jam >= 5 && $jam < 12) {
        echo "🌞 Selamat Pagi!";
    } elseif ($jam >= 12 && $jam < 18) {
        echo "☀️ Selamat Siang!";
    } else {
        echo "🌙 Selamat Malam!";
    }
    ?>

</body>
</html>