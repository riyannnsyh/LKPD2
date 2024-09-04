<?php
$students = [
  [
    'nama' => 'Andi',
    'nilai' => [80, 78, 82, 78, 88],
  ],
  [
    'nama' => 'Beni',
    'nilai' => [86, 70, 80, 85, 81],
  ],
  [
    'nama' => 'Dani',
    'nilai' => [83, 91, 70, 73, 81],
  ],
  [
    'nama' => 'Eko',
    'nilai' => [89, 85, 84, 86, 88],
  ],
];

$totalRataRata = 0;
$jumlahSiswa = count($students);

foreach ($students as $student) {
  $totalNilai = array_sum($student['nilai']);
  $rataRataSiswa = $totalNilai / count($student['nilai']);
  echo "Rata-rata nilai  " . $student['nama'] . " " . "=" . " " . $rataRataSiswa . "<br>";
}