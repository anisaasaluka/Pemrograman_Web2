
<html>
<head>
    <title>Form Buku Tamu</title>
</head>
<body>

<h2>Form Buku Tamu</h2>

<form action="simpan_bukutamu.php" method="post">
    Nama:<br>
    <input type="text" name="nama" required>
    <br><br>

    Email:<br>
    <input type="email" name="email" required>
    <br><br>

    Pesan:<br>
    <textarea name="pesan" required></textarea>
    <br><br>

    <input type="submit" value="Kirim">
</form>

<br>
<a href="tampil_bukutamu.php">Lihat Buku Tamu</a>
<br>
<a href="index.php">Kembali ke Menu Utama</a>

</body>
</html>
