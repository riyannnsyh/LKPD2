<?php
function hitungKompensasi($jamKerja, $jamKerjaNormal = 8) {
  $jamLembur = max(0, $jamKerja - $jamKerjaNormal);

  if ($jamLembur > 0) {
    $kompensasi = 50000; 
    if ($jamLembur >= 1) {
      $kompensasi += ($jamLembur - 1 ) * 25000;
  } else {
    $kompensasi = 0;
  }

  return [
    'jam_kerja' => $jamKerja,
    'jam_lembur' => $jamLembur,
    'kompensasi' => $kompensasi
  ];
  }
}

$jamKerja = 14;
$hasil = hitungKompensasi($jamKerja);

echo "Jam Kerja : " . $hasil['jam_kerja'] . " Jam <br>";
echo "Jam Lembur : " . $hasil['jam_lembur'] . " Jam <br>";
echo "Jumlah Kompensasi : Rp " . number_format($hasil['kompensasi'], 0, ',', '.') . "<br>";
?>