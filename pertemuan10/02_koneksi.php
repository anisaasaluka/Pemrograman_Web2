
<?php
$con = new mysqli("localhost", "root", "", "lat_dbase");

if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
}

echo "OK.... koneksi berhasil";

$con->close();
?>
