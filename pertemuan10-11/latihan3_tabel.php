
<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// mengaktifkan database
mysqli_select_db($conn, "lat_dbase");

// membuat tabel
$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs
(
    mhsID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel tbl_mhs berhasil dibuat.<br>";
} else {
    die("Gagal membuat tabel: " . mysqli_error($conn));
}

// input data seperti contoh PPT
$input = mysqli_query($conn, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Anjar', 'Prabowo', 25)");

if ($input) {
    echo "Data Anjar Prabowo berhasil ditambahkan.";
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
