<?php
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

$count = array_count_values($data);

echo "Jumlah angka $cari = " . ($count[$cari] ?? 0);
?>