<?php
function hitungUsia($kategoriUsia) {
  $anakAnak = 0;
  $dewasa = 0;

  foreach ($kategoriUsia as $usia) {
    if ($usia < 17) {
      $anakAnak++;
    } else {
      $dewasa++;
    }
  }

  return [
    'data_usia' => $kategoriUsia,
    'anak_anak' => $anakAnak,
    'dewasa' => $dewasa
  ];
}

$dataUsia = [12, 15, 17, 20, 25, 30, 35, 40, 45,50];
$hasil = hitungUsia($dataUsia);

echo "List Usia : " . implode(', ', $hasil['data_usia']);
echo "<br>";
echo "Jumlah Kategori Dewasa : " . $hasil['dewasa'];
echo "<br>";
echo "Jumlah Kategori Anak-Anak : " . $hasil['anak_anak'];
?>