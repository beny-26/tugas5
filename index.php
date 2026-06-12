<?php # membuka tag PHP

$nama = @$_GET['nama'];
$alamat = @$_GET['alamat'];

# di sini nanti kita akan tampilkan variabel $nama dan $alamat

if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}

if ($alamat) {
    echo "<strong>Alamat:</strong> {$alamat} <br>";
}

# jangan lupa tutup tag PHP

?>