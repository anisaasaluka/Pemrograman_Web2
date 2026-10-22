
<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengaktifkan database
mysqli_select_db($conn, "lat_dbase");

// Mengambil data dari tabel
$hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

// Menghitung jumlah record
$hit = mysqli_num_rows($hasil);

echo "jumlah record $hit";

mysqli_close($conn);
?>
