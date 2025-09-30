<?php
// Membuat fungsi untuk mencari bilangan terbesar
function bilangan_terbesar($bil1, $bil2) {
  if ($bil1 > $bil2) {
    return $bil1;
  } else {
    return $bil2;
  }
}

// Memanggil fungsi
$terbesar = bilangan_terbesar(100, 150);
echo "Dua bilangan adalah 100 dan 150. Bilangan terbesarnya adalah: $terbesar";
?>