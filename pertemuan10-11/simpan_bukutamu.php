
<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (nama, email, pesan)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($con, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $_POST["nama"],
    $_POST["email"],
    $_POST["pesan"]
);

if (mysqli_stmt_execute($stmt)) {
    echo "Data buku tamu berhasil disimpan!";
    echo "<br><a href='bukutamu.php'>Kembali ke Form</a>";
    echo "<br><a href='tampil_bukutamu.php'>Lihat Buku Tamu</a>";
} else {
    echo "Data gagal disimpan.";
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
