<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perbandingan Nama</title>
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
    input[type="text"] {
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
  <h2>Perbandingan Nama</h2>
  <form method="post">
    <label for="nama1">Nama Pertama:</label>
    <input type="text" id="nama1" name="nama1" required>
    <label for="nama2">Nama Kedua:</label>
    <input type="text" id="nama2" name="nama2" required>
    <input type="submit" value="Bandingkan">
  </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama1 = $_POST["nama1"];
  $nama2 = $_POST["nama2"];
  echo "<div class='result'>";
  perbNama($nama1, $nama2);
  echo "</div>";
}
function perbNama($nama1, $nama2) {
  $length1 = strlen($nama1);
  $length2 = strlen($nama2);

  echo "Nama pertama: $nama1";
  echo "<br>";
  echo "Nama kedua: $nama2";
  echo "<br>";

  if ($length1 > $length2) {
    $beda = $length1 - $length2;
    echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2: Selisihnya $beda";
  } else if ($length2 > $length1) {
    $beda = $length2 - $length1;
    echo "$nama2 memiliki jumlah karakter lebih banyak dari $nama1: Selisihnya $beda";
  } else {
    echo "Kedua nama memiliki jumlah karakter yang sama";
  }
}
?>
</div>

</body>
</html>