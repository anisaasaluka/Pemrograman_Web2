
<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$per_halaman = 5;
$halaman = isset($_GET["halaman"])
    ? max(1, (int) $_GET["halaman"])
    : 1;

$mulai = ($halaman - 1) * $per_halaman;

$hitung = mysqli_query(
    $con,
    "SELECT COUNT(*) AS total FROM buku_tamu"
);

$total = mysqli_fetch_assoc($hitung)["total"];
$total_halaman = max(1, ceil($total / $per_halaman));

$hasil = mysqli_query(
    $con,
    "SELECT * FROM buku_tamu
     ORDER BY id DESC
     LIMIT $mulai, $per_halaman"
);
?>

<html>
<head>
    <title>Daftar Buku Tamu</title>
</head>
<body>

<h2>Daftar Buku Tamu</h2>

<a href="bukutamu.php">Isi Buku Tamu</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Pesan</th>
</tr>

<?php
$no = $mulai + 1;

while ($data = mysqli_fetch_assoc($hasil)) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . htmlspecialchars($data["nama"]) . "</td>";
    echo "<td>" . htmlspecialchars($data["email"]) . "</td>";
    echo "<td>" . htmlspecialchars($data["pesan"]) . "</td>";
    echo "</tr>";
}
?>

</table>
<br>

<?php
if ($halaman > 1) {
    echo "<a href='?halaman=" . ($halaman - 1) . "'>Sebelumnya</a> ";
}

echo "Halaman $halaman dari $total_halaman";

if ($halaman < $total_halaman) {
    echo " <a href='?halaman=" . ($halaman + 1) . "'>Selanjutnya</a>";
}

echo "<br><br><a href='index.php'>Kembali ke Menu Utama</a>";

mysqli_close($con);
?>

</body>
</html>
