<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input</title>
</head>
<body>

<form action="" method="GET">
    <label>Nama:</label>
    <input type="text" name="nama">

    <br><br>

    <label>Alamat:</label>
    <input type="text" name="alamat">

    <br><br>

    <button type="submit">Kirim</button>
</form>

<?php

$nama = $_GET['nama'] ?? '';
$alamat = $_GET['alamat'] ?? '';

if ($nama) {
    echo "<strong>Nama:</strong> $nama <br>";
}

if ($alamat) {
    echo "<strong>Alamat:</strong> $alamat <br>";
}

?>

</body>
</html>