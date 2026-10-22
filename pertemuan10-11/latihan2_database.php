
<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$dbname = "lat_dbase";

$cek = mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $dbname")
    or die("Couldn't Create Database: " . mysqli_error($conn));

if ($cek) {
    echo "Database $dbname berhasil dibuat atau sudah tersedia";
}

mysqli_close($conn);
?>
