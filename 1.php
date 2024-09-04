<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemeriksaan Angka dalam Teks</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px 30px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      margin-bottom: 5px;
      font-weight: bold;
      color: #555;
    }
    input[type="text"] {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    input[type="submit"] {
      padding: 10px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #0056b3;
    }
    .result {
      margin-top: 20px;
      padding: 15px;
      background-color: #e9ecef;
      border: 1px solid #ced4da;
      border-radius: 4px;
      color: #333;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Pemeriksaan Angka dalam Teks</h2>
  <form method="post" action="">
    <label for="teks">Masukkan Teks:</label>
    <input type="text" id="teks" name="teks" required placeholder="Contoh: Selamat Ulang Tahun yang ke-17">
    <input type="submit" value="Periksa">
  </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $teks = $_POST['teks'];
  $number = preg_replace('/[^0-9]/', "", $teks);

  echo "<div class='result'>";
  if ($number) {
    echo "Teks mengandung angka: " . implode(',', str_split($number, 1));
  } else {
    echo "Teks tidak mengandung angka";
  }
  echo "</div>";
}
?>
</div>

</body>
</html>