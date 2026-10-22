
<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengaktifkan database
mysqli_select_db($conn, "lat_dbase");

// Mengambil data dari tabel
$hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

// Menampilkan data menggunakan nama field
while ($data = mysqli_fetch_array($hasil)) {
    echo "$data[FirstName] $data[LastName] $data[Age]<br>";
}

mysqli_close($conn);
?>
