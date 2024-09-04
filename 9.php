<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitung Pecahan Uang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f4f4f4;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    input[type="number"] {
      margin-bottom: 15px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    input[type="submit"] {
      padding: 10px;
      background-color: #5cb85c;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #4cae4c;
    }
    .result {
      margin-top: 20px;
      padding: 10px;
      background-color: #e9ecef;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Hitung Pecahan Uang</h2>
  <form method="post">
    <label for="jumlahUang">Masukkan Jumlah Uang:</label>
    <input type="number" id="jumlahUang" name="jumlahUang" required>
    <input type="submit" value="Hitung Pecahan">
  </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $jumlahUang = $_POST['jumlahUang'];
  $pecahan = hitungPecahan($jumlahUang);

  echo "<div class='result'>";
  echo "Jumlah uang: $jumlahUang <br>";
  foreach ($pecahan as $pecahan => $lembar) {
    echo "Pecahan Rp$pecahan: $lembar lembar <br>";
  }
  echo "</div>";
}

function hitungPecahan($jumlahUang) {
  $pecahanUang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

  $hasil = [];

  foreach ($pecahanUang as $pecahan) {
    if ($jumlahUang >= $pecahan) {
      $lembar = intdiv($jumlahUang, $pecahan);
      $hasil[$pecahan] = $lembar;
      $jumlahUang %= $pecahan;
    }
  }
  return $hasil;
}
?>
</div>

</body>
</html>