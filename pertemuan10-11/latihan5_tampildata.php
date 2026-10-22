
<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengaktifkan database
mysqli_select_db($conn, "lat_dbase");

// Mengambil data dari tabel
$hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

// Menampilkan data per baris
while ($data = mysqli_fetch_row($hasil)) {
    echo "$data[0] $data[1] $data[2] $data[3]<br>";
}

mysqli_close($conn);
?>
