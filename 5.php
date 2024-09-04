<?php
function kelompokBilangan($bill1, $bill2) {
  $kelompokPertama = array_intersect($bill1, $bill2);
  $kelompokKedua1 = array_diff($bill1, $bill2);
  $kelompokKedua2 = array_diff($bill2, $bill1);
  $kelompokKedua = array_merge($kelompokKedua1, $kelompokKedua2);

  echo "Kelompok Pertama (Bilangan Sama): " . implode(', ', $kelompokPertama) . "<br>";
  echo "Kelompok Kedua (Bilangan Tidak Sama): " . implode(', ', $kelompokKedua) . "<br>";
}

$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];
kelompokBilangan($bill1, $bill2);
?>